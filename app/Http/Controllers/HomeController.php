<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    	//$message = ['a' => 1, 'b' => 2, 'c' => 3];
	    //logger($message);
	    
	    //$message = ['a' => 1, 'b' => 2, 'c' => 3];
	    //Log::debug($message);
	    //Log::info($message);

	    //$message = ['a' => 1, 'b' => 2, 'c' => 3];
	    //echo '<pre>' . var_export($message, true) . '</pre>';
    
    	$message = "(DEBUG!)" . __FILE__ . "---->" . __FUNCTION__ . ":" . __LINE__;
        logger($message);
    	
        $this->middleware('auth');
        
    	$message = "(DEBUG!)" . __FILE__ . "---->" . __FUNCTION__ . ":" . __LINE__;
        logger($message);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$message = "(DEBUG!)" . __FILE__ . "---->" . __FUNCTION__ . ":" . __LINE__;
        logger($message);
    	
        return view('tool.dashboard');
    }
}
