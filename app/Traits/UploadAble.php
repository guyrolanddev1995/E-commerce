<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

/**
 * Trait UploadAble
 * @package App\Traits
 */
trait UploadAble 
{
    /**
     * upload one file
     * @param UploadedFile $file
     * @param null $folder
     * @param string $disk
     * @param null $filename
     * @return false|string
     */
    public function uploadOne(UploadedFile $file, $folder = null, $disk = 'public', $filename = null)
    {
        $file = $this->save($file, $folder, $disk, $filename);
    }

    /**
     * @param null $path
     * @param string $disk
     */
    public function deleteOne($path = null, $disk = "public")
    {
        Storage::disk($disk)->delete($path);
    }

    public function resize($width = 300, $height = 300)
    {
       
    }

    public function save($file, $folder = null, $disk = 'public', $filename = null)
    {
        $name = !is_null($filename) ? $filename : Str::random(25);

        return $file->storeAs(
            $folder,
            $name . '.' . $file->getClientOriginalExtension(),
            $disk
        );
    }
}