<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function aboutMe() {
        return 'Nama : Kharisma Etana F. <br>
        NIM : 2241760009';
    }
}
