<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

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
        $name = !is_null($filename) ? $filename : Str::random(25);
        $filename = $name . '.' . $file->getClientOriginalExtension();

        $file->storeAs(
            $folder,
            $filename,
            $disk
        );

        return $filename;
    }

    /**
     * @param null $path
     * @param string $disk
     */
    public function deleteOne($path = null, $disk = "public")
    {
        Storage::disk($disk)->delete($path);
    }

    public function resize($path = null, $files = null, $destination, $filename, $width = 360, $height = 360)
    {
        if($path){
            $file = Storage::disk('public')->get($path);
        } else {
            $file = $files;
        }

        $destination = public_path($destination);

        if(!File::isDirectory($destination)){
            File::makeDirectory($destination, 0775, true);
        }

        $image = Image::make($file);
        $image->resize($width, $height)
              ->save($destination.'/'.$filename);
    }
}