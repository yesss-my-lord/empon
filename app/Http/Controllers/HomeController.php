<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class HomeController extends BaseController
{
    public function __construct(Request $request)
    {
        parent::__construct();

    }
    public function index(Request $request){
        
        $data = [
            'title' => __('common.title'),
            'meta' => [
                'title' =>  __('meta.title'),
                'description' =>  __('meta.description'),
                'keywords' =>  __('meta.keywords'),
                'image' =>  __('meta.image'),
            ],
            'menu' => [
                'wellcome' => [
                    'title' => __('link.wellcome') ,
                    'href' => '#',
                ],
                'ingredients' => [
                    'title' => __('link.ingredients') ,
                    'href' => '#',
                ],
                'marketplace' => [
                    'title' => __('link.marketplace') ,
                    'href' => '#',
                ],
                'contact' => [
                    'title' => __('link.contact') ,
                    'href' => '#',
                ],
            ],
            'slides' => collect( json_decode( file_get_contents( storage_path('app/public/data/slides.json', true) ) ) )->get($this->locale),
            'description' => collect( json_decode( file_get_contents( storage_path('app/public/data/description.json', true) ) ) )->get($this->locale),
            'ingredients' => collect( json_decode( file_get_contents( storage_path('app/public/data/ingredients.json', true) ) ) )->get($this->locale),
            'marketplace' => collect( json_decode( file_get_contents( storage_path('app/public/data/marketplace.json', true) ) ) )->get($this->locale),
            'contact' => collect( json_decode( file_get_contents( storage_path('app/public/data/contact.json', true) ) ) )->get($this->locale)
        ];
        
        // dd($data);

        return view('index', $data, $this->main_data );
    }
}
