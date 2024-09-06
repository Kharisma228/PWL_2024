<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosController extends Controller
{
    public function food() { 
        return 'Food : <br> - Pancake <br><br>
        Beverage : <br> - Matcha Latte'; 
    }

    public function beauty() { 
        return 'Beauty : <br> - Facial wash <br><br>
        Health : <br> - Vitamin C'; 
    }

    public function home() { 
        return 'Home & Care : <br> - Pembersih Kamar Mandi <br>
        - Kain Pel'; 
    }

    public function baby() { 
        return 'Baby & Kid : <br> - Baju Bayi <br> - Popok'; 
    }
}
