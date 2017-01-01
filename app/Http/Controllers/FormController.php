<?php 


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\quote;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

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

    public function store(Request $request)
    {
    	$quote = new Quote;
    	$quote->author_first_name = $request->author_first_name;
    	$quote->author_last_name = $request->author_last_name;
    	$quote->content = $request->content;

    	$quote->save();
    	return view('welcome');
    }
}