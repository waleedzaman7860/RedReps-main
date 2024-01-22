<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public $pricing = [
        'task-genie' => ['12.50', '11.50', '10.50', '9.50'],
        'tech-whiz' => ['22.50', '21.50', '20.50', '19.50'],
        'marketing-maverick' => ['10.50', '9.50', '10.50', '8.50'],
        'money-master' => ['12.50', '11.50', '10.50', '9.50'],
        'data-jedi' => ['10.50', '9.50', '8.50', '7.50'],
        'word-ninja' => ['14.50', '13.50', '12.50', '11.50'],
        'linguister' => ['10.50', '9.50', '8.50', '7.50'],
    ];
}
