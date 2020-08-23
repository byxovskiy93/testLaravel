<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteMenu extends Model
{
    protected $table = 'site_menu';

    public $timestamps = false;

    protected $fillable = [
        'name','class','url','order','parent_id'
    ];

}
