<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getIndex()
    {
            return view('pages.welcome');
    }
    public function getAbout()
    {
        $first = 'Amartya'; 
        $last = 'rana';
        $fullname = $first . " " . $last;
        $data['fullname'] = $fullname;
        $data['college'] = 'NSIT';
        $data['RollNo'] = '2016UIT2586';
       return view('pages.about')->with("Data",$data);
    }
    public function getContact()
    {
      return view('pages.contact');
    }


}
