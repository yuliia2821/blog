<?php

namespace App\Http\Controllers;

class PagesController extends Controller
    {
        public function getIndex(){
            return view('pages/welcome');
        }
        public function getAbout() {
           $first = 'Yuliia';
           $lastName = 'Yakubyshyn';
           $mail = 'yulia@ukr.net';
           $full = $first ." ".$lastName;
           return view('pages/about')-> withFullname($full) -> withMail($mail);
        }
        public function getContact(){
            return view('pages/contact');
        }
    }

