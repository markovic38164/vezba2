<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    
    public function index(){
        $phones = ["iPhone 15 Pro Max", "iPhone 15", "iPhone 14 Pro Max", "iPhone 13 Pro", "Samsung Galaxy S23 Ultra", "Samsung Galaxy S23", "Samsung Galaxy Z Fold 5", "Google Pixel 8 Pro", "Google Pixel 7", "OnePlus 11", "Xiaomi 13 Pro", "Sony Xperia 1 V", "Huawei P60 Pro", "Motorola Edge 40 Pro", "Oppo Find X6 Pro", "Asus ROG Phone 7 Ultimate", "Nokia G42", "Realme GT 3", "Vivo X90 Pro+", "Samsung Galaxy A54", "iPhone 12", "Samsung Galaxy S22 Ultra", "Google Pixel 6", "OnePlus 10 Pro", "Xiaomi 12 Pro", "Sony Xperia 5 IV", "Huawei Mate 50 Pro", "Motorola Razr 40 Ultra", "Oppo Reno 10 Pro", "Asus Zenfone 10", "Nokia X30", "Realme 11 Pro+", "Vivo V29 Pro", "Samsung Galaxy Z Flip 5", "iPhone SE (2022)", "Samsung Galaxy A34", "Google Pixel 6a", "OnePlus Nord 2T", "Xiaomi Redmi Note 12 Pro", "Sony Xperia 10 IV", "Huawei Nova 11", "Motorola Moto G Stylus 5G", "Oppo A98", "Asus ROG Phone 6", "Nokia C32", "Realme Narzo 60 Pro", "Vivo Y78", "Samsung Galaxy A14", "iPhone 11", "Samsung Galaxy M54", "Google Pixel Fold"];
        return view('shop', compact("phones"));
    }
}

