<?php 


namespace App\Http\Controllers;

class FormController extends Controller
{
    public function showWelcome()
    {
        return view('welcome');
    }

    public function showForm()
    {
    	return view('form');
    }

}