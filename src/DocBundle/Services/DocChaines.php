<?php
/**
 * Created by PhpStorm.
 * User: formation
 * Date: 19/10/18
 * Time: 10:00
 */

namespace DocBundle\Services;


class DocChaines
{


    /**
     * @param String $string
     * @return  string
     *
     */
    public function Upper(String $string){
        return strtoupper($string);

}


    /**
     * @param String $string
     * @return string
     *
     *
     */

    public function lower(String $string){
        return strtolower($string);
    }


}