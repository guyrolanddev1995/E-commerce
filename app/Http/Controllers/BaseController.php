<?php

namespace App\Http\Controllers;

use App\Traits\FlashMessages;
use App\Traits\UploadAble;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    use FlashMessages;
    use UploadAble;


    protected $data = null;

    protected function setPageTitle($title, $subTitle)
    {
        view()->share([
            'pageTitle' => $title,
            'subTitle' => $subTitle
        ]);
    }

    /**
     * Affiche la page d'erreur avec le code et le message d'erreur
     * 
     * @param int $errorCode
     * @param null $message
     * @return \Illuminate\Http\Response
     */
    protected function showErrorPage($errorCode = 404, $message = null)
    {
        $data['message'] = $message;
        return response()->view('errors.'.$errorCode, $data, $errorCode);
    }

    /**
     * Envoie une reponse JSON s'il s'agit d'une requete ajax
     * 
     * @param bool $error
     * @param int $responseCode
     * @param array $message
     * @param null $data
     * @return \Illuminate\Http\JsonResponse
     */
    protected function responseJson($error = true, $responseCode= 200, $message = [], $data = null)
    {
        return response()->json([
            'error' => $error,
            'response_code' => $responseCode,
            'message' => $message,
            'data' => $data
        ]);
    }

    /**
     * Redirige vers la page ou la route s'il s'agit d'une requete HTTP
     * 
     * @param $route
     * @param $message
     * @param string $type
     * @param bool $error
     * @param bool $withOldInputWhenError
     */
    protected function responseRedirect($route, $message, $type='info', $error = false, $withOldInputWhenError = false )
    {
        $this->setFlashMessage($message, $type);
        $this->showFlashMessages();

        if($error && $withOldInputWhenError){
            return redirect()->back()->withInput();
        }

        return redirect()->route($route);
    }

    /**
     * Redirige l'utilisateur vers la page précedente
     * 
     * @param $message
     * @param string $type
     * @param bool $error
     * @param bool $withOldInputWhenError
     * 
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function responseRedirectBack($message, $type = 'info', $error= false, $withOldInputWhenError = false)
    {
        $this->setFlashMessage($message, $type);
        $this->showFlashMessages();

        return redirect()->back();
    }

    public function uploadFile(Request $request)
    {
        $file = $request->file('image');
        $name = basename($file->storePublicly('/editor', ['disk' => 'public']));
 
        return response()->json([
            'success' => true,
            'url' => \Storage::url('storage/editor/'.$name),
            'name' => $name
        ]);
    }
}
