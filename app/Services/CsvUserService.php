<?php


namespace App\Services;


use App\Interfaces\LoadSource;

class CsvUserService implements LoadSource
{

    /**
     * @param string $fileName
     * @return array
     */
    public function getData(string $fileName): array
    {
        $csv = [];
        $path = storage_path('app/testtakers.csv');

        $content = fopen($path, 'r');

        $key = fgetcsv($content, "1024", ",");

        while (($result = fgetcsv($content)) !== false) {
            $csv[] = array_combine($key, $result);
        }

        fclose($content);

        return $csv;
    }
}
