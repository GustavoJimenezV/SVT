<?php

namespace SVT;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['Name','Type_event','Artist','Date','State','Municipality','Address','Descripcion','Image'];
    /**
    *Get the route key for the model.
    *
    *@return string
    */
    public function getRouteKeyName()
    {
        return'slug';
    }
}
