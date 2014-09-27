<?php namespace Aska\Media\Models;

use Lifeentity\Images\ImageDB;

class Image extends ImageDB {

    /**
     * @var array
     */
    protected $appends = array('url');

    /**
     * @return string
     */
    public function getUrlAttribute()
    {
        return $this->getOriginalUrlAttribute();
    }

    /**
     * @return string
     */
    public static function getClass()
    {
        return get_called_class();
    }
}