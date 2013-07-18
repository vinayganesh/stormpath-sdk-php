<?php

namespace Stormpath\lang;

abstract class Collections
{
    public static function isEmpty($collection = array())
    {
        return ($collection == null || empty($collection)) ;
    }

    public static function arrayToList($source)
    {
        return (array) $source;
        //can be done using json_encode and json_decode
    }

    public static function mergeArrayIntoCollection($array = array(), $collection)
    {
        if ($collection == null) {
            throw InvalidArgumentException("collection cannot be null");
        }

        $arr = (object)$array;
        foreach($elem as $arr) {
            collection.add($elem);
        }
    }

    public static function mergePropertiesIntoMap($properties = array(), $map = array())
    {
        if ($map == null) {
            throw InvalidArgumentException("Map must not be null");
        }
        if ($properties != null) {
            foreach($en = $)
        }
    }

}

}