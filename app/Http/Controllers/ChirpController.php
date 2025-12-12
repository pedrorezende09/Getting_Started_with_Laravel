<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChirpController extends Controller
{
    public function index()
        {
            $chirps = [
                    [
                        'author' => 'Jane Doe',
                        'message' => 'Just deployed my first Laravel app 🚀',
                        'time' => '5 minutes ago'
            ],

                    [
                        'author' => 'John Smith',
                        'message' => 'Laravel makes development fun again',
                        'time' => '1 hour ago'       
                    
            ],

                    [
                        'author' => 'Alice Johnson',
                        'message' => 'Working on something cool with Chirper',
                        'time' => '3 hours ago'          

            
                    ]
                ];

                return view('home', ['chirps' => $chirps]);

        }

        


        
}


        


