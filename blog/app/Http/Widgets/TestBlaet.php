<?php namespace App\Http\Widgets;

use Orchid\Dashboard\Services\Widget\Widget;

class TestBlaet extends Widget {

    /**
     * Class constructor.
     */
    public function __construct(){

    }

    /**
     * @return mixed
     */
     public function run(){
         return view('',[
         ]);
     }

}