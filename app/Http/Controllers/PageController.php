<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() { 
        return 'Selamat Datang'; 
    }

    public function about() { 
        return 'NIM : 2241760009 <br> Nama : Kharisma Etana Febrianto'; 
    }

    public function articles($Id) { 
        return 'Halaman Artikel dengan ID '.$Id; 
    }
}
