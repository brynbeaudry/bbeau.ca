<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Clients;
use App\ProjectImage;
use App\ProjectTechnology;
use App\ProjectVideo;

class Project extends Model
{
    //


    public $timestamps = false;


    /*get the images related to the project*/
    public function images()
    {
        return $this->hasMany('App\ProjectImage');
    }

    /*get the videos related to the project*/
    public function videos()
    {
        return $this->hasMany('App\Video');
    }

    /*get the cline trelated to the project*/
    public function client()
    {
        return $this->hasOne('App\Client');
    }

}
