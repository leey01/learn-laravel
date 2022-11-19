<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookOldmodel
{
    private static $listBook = [
      [
          'id' => 1,
          'nama' => 'Siksa Kubur',
          'pengarang' => 'Hegel AlRafli',
          'harga' => 99999
      ],
        [
            'id' => 2,
            'nama' => '10 Cara Satir Teman',
            'pengarang' => 'Ken Mikaken',
            'harga' => 101010
        ],
        [
            'id' => 3,
            'nama' => 'Tutorial naik icikiwir',
            'pengarang' => 'Farhan Kebab',
            'harga' => 99999
        ],
        [
            'id' => 4,
            'nama' => 'Cara melawan lord Apabila',
            'pengarang' => 'Ken Mikaken',
            'harga' => 99999
        ],
        [
            'id' => 5,
            'nama' => 'Cara melawan lord Terkadang',
            'pengarang' => 'Ken Mikaken',
            'harga' => 12345
        ],
    ];

    public static function all()
    {
        return collect(self::$listBook);
    }

    public static function find($id)
    {
        $book_data = static::all();
        return $book_data->firstWhere('id', $id);
    }
}
