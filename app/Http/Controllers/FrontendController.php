<?php

namespace App\Http\Controllers;

use App\Models\Background;

use App\Models\Contact;
use App\Models\Document;
use App\Models\File;
use App\Models\Header;
use App\Models\Manager;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $background = Background::all();
        $header = Header::first();
        $contact = Contact::all();
        return view("frontend.index",compact("background","header","contact"));
    }
    public function managers(){
        $background = Background::all();
        $header = Header::first();
        $contact = Contact::all();
        $manager = Manager::all();
        return view("frontend.manager",compact("background","header","contact","manager"));
    }
    public function document(){
        $background = Background::all();
        $header = Header::first();
        $contact = Contact::all();
        $document = File::getAllFile();
        return view("frontend.docs",compact("background","header","contact","document"));
    }
}
