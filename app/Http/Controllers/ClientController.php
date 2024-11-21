<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    
    public function index(){

        $clients = [
            ['image' => 'clients-1.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-2.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-3.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-4.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-5.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-6.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-7.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-8.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-9.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-10.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-11.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-12.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-13.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-14.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-15.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-16.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-17.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-18.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-19.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-20.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-21.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-22.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-23.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-24.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-25.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-26.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-27.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-8.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-28.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-29.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-30.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-31.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-32.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-33.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-34.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-35.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-36.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-37.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-38.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-39.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-40.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-41.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-42.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-43.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-44.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-45.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-46.png', 'alt' => 'Company-logo'],
            ['image' => 'clients-47.png', 'alt' => 'Company-logo'],
        ];


        return view('pages.clients',compact('clients'));
    }
}
