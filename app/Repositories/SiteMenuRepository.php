<?php
namespace App\Repositories;

use App\SiteMenu;

class SiteMenuRepository extends Repository
{
    function __construct(SiteMenu $menu)
    {
        $this->model = $menu;
    }


    function getReadyMenuArray(){

        $allItem = $this->all()->toArray();

        $menuItem = [];

        foreach ($allItem as $v){
            $menuItem[$v['id']] = $v;
        }

        return $menuItem;

    }
}
