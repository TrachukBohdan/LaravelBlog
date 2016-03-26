<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Таблиця
    protected $table = 'categories';

    // Первинний ключ
    protected $primaryKey = 'id';

    // Виключаємо часові мітки
    public $timestamps = false;
}
