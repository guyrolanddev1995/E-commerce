<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Slide;
use App\Traits\UploadAble;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

class SlideController extends BaseController
{
    use UploadAble;

    public function create()
    {
        $slides = Slide::orderBy('created_at', 'desc')->get();

        $this->setPageTitle('Slides', '');

        return view('admin.slides.create', compact('slides'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:png,jpg,jpeg,gif'
        ]);

        if($request->has('image') && $request->image instanceof UploadedFile){
            $slide = $this->uploadOne($request->file('image'), 'slides');
            Slide::create([
                'type' => $request->page,
                'images' => $slide
            ]); 

            return $this->responseRedirectBack('Image téléchargée avec success.', 'success', false, false);
        } 

        return $this->responseRedirectBack('Impossbile de télécharger l\'image.', 'error', true, true);
    }

    public function delete($slide)
    {
        $slide = Slide::findOrFail($slide);
        $this->deleteOne($slide->images);

        $slide->delete();

        return $this->responseRedirectBack('Image supprimé avec success.', 'success', false, false);
    }
}
