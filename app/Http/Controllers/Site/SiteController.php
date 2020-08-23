<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Repositories\SiteMenuRepository;
use App\SiteMenu;
use Illuminate\Support\Arr;

class SiteController extends Controller {

    protected $vars;
    protected $template;


    public function renderOutput(){

        $menu = $this->getMenu();
        $navigation = view('layouts.'.config('setting.theme').'.menu')->with('menu',$menu)->render();
        $this->vars = Arr::add($this->vars,'menu',$navigation);
        return view(config('setting.theme').'.'.$this->template)->with($this->vars);

    }


    public function getMenu(){

       $menu = new SiteMenuRepository(new SiteMenu());

       $allItem = $menu->getReadyMenuArray();

       return $allItem;

    }
}
