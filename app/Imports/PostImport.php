<?php

namespace App\Imports;

use App\Models\Post;
use Maatwebsite\Excel\Concerns\ToArray;


class PostImport implements ToArray
{

    public function array(array $array):void
    {
    }
}
