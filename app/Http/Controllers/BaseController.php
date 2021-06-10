<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $output;
    protected $service;

    
    /**
     * @param mixed $page_title
     * @param mixed $sub_title
     * @param mixed $page_icon
     * 
     */
    protected function setPageData($page_title, $sub_title, $page_icon){
        view()->share(['page_title'=>$page_title, 'sub_title'=>$sub_title, 'page_icon'=>$page_icon]);
    }

    /**
     * @param mixed $error_code=404
     * @param mixed $message=null
     * 
     * @return response
     */
    protected function showErrorPage($error_code=404, $message=null){
        $data['message'] = $message;
        return response()->view('errors.'.$error_code, $data, $error_code);
    }

    /**
     * @param mixed $status='success'
     * @param mixed $message=null
     * @param mixed $data=null
     * @param mixed $response_code=200
     * 
     * @return respone
     */
    protected function response_json($status='success', $message=null, $data=null, $response_code=200){
        return response()->json([
            'status'        => $status,
            'message'       => $message,
            'data'          => $data,
            'response_code' => $response_code,
        ]);
    }

    /**
     * @return redirect 
     */
    protected function unauthorized_access_blocked(){
        return redirect('unauthorized');
    }
}
