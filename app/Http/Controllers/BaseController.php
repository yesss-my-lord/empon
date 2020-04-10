<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    protected $locale; 
    protected $main_data;
     
    public function __construct()
    {
        $this->middleware(function ($request, $next) {

            $this->locale = session('language') ?? $request->cookie('language') ?? 'id';
            app()->setLocale( $this->locale );

            $this->main_data = [
                'locale' =>  $this->locale,
            ];
            
            return $next($request);
        });

        
    }
    
}
