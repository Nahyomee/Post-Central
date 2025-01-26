<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class SMPlatform extends Model
{
    use Sushi;

    protected $rows = [
        ['id' => 1, 'name' => 'Facebook', 'icon' => 'facebook'],
        ['id' => 2, 'name' => 'Instagram', 'icon' => 'instagram'],
        ['id' => 3, 'name' => 'LinkedIn', 'icon' => 'linkedin'],
        ['id' => 4, 'name' => 'X', 'icon' => 'x'],
    ];
}
