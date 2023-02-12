<?php


namespace App\Services;


use App\Interfaces\LoadSource;

class JsonUserService implements LoadSource
{

    /**
     * @param string $fileName
     * @return array
     */
    public function getData(string $fileName): array
    {
        $path = storage_path('app/testtakers.json');
        $content = file_get_contents($path);

        return json_decode($content);
    }
}
