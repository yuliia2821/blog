<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller
    {
        public function getIndex(){
            $posts = Post::orderBy('created_at','desc')->get();
            return view('pages/welcome')->withPosts($posts);

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

