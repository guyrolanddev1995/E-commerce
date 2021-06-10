<?php

namespace App\Http\Controllers\Admin;

use App\Carousel;
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
        $images = Carousel::orderBy('created_at', 'desc')->get();


        return view('admin.slides.create', compact('images'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'mimes:png,jpg,jpeg,gif'
        ]);

        if($request->has('image') && $request->image instanceof UploadedFile){
            $file = $request->image;

            $filename = \Str::random(25). '.' . $file->getClientOriginalExtension();

            $destination = 'storage/carousels';

            $this->resize(null, $file->getRealPath(), $destination, $filename, 765, 455);

            Carousel::create([
                'url' => $filename
            ]); 

            return redirect()->back()->with('success', 'Carousel ajouté avec succès');
        } 

        return $this->responseRedirectBack('Impossbile de télécharger l\'image.', 'error', true, true);
    }

    public function delete($slide)
    {
        $slide = Carousel::findOrFail($slide);
       
        $this->deleteOne('carousels/'.$slide->url);

        $slide->delete();

        return redirect()->back()->with('error', 'Image supprimé avec success.');
    }
}
