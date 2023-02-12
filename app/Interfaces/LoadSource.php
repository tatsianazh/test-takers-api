<?php


namespace App\Interfaces;


/**
 * Interface LoadSource
 * @package App\Interfaces
 */
interface LoadSource
{

    /**
     * @param string $fileName
     * @return mixed
     */
    public function getData(string $fileName);
}
