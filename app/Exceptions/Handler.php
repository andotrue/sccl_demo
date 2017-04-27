<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that should not be reported.
     *
     * @var array
     */
    protected $dontReport = [
        \Illuminate\Auth\AuthenticationException::class,
        \Illuminate\Auth\Access\AuthorizationException::class,
        \Symfony\Component\HttpKernel\Exception\HttpException::class,
        \Illuminate\Database\Eloquent\ModelNotFoundException::class,
        \Illuminate\Session\TokenMismatchException::class,
        \Illuminate\Validation\ValidationException::class,
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
    	$message = "(DEBUG!)" . __CLASS__ . "---->" . __FUNCTION__ . ":" . __LINE__;
    	logger($message);
    	if ($exception instanceof \Illuminate\Session\TokenMismatchException){
    		echo "TokenMismatchException";
    		return redirect('/tool/');
    		exit;
    	}
    	if ($exception instanceof \InvalidArgumentException){
    		echo "InvalidArgumentException";
    		return response(view('errors.404'), 404);
    		exit;
    	}
    	 

        return parent::render($request, $exception);
    	////return response()->view("errors.token", ['exception' => $e], 400);
        //return redirect('/');
    }

    /**
     * Convert an authentication exception into an unauthenticated response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Illuminate\Auth\AuthenticationException  $exception
     * @return \Illuminate\Http\Response
     */
    protected function unauthenticated($request, AuthenticationException $exception)
    {
    	$message = "(DEBUG!)" . __CLASS__ . "---->" . __FUNCTION__ . ":" . __LINE__;
    	$message .= '\r\n'.config('const.siteType');
    	logger($message);

        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }
        
        if( config('const.siteType') == 'tool' ){
        	return redirect()->guest('tool/login');
        }
        elseif( config('const.siteType') == 'front' ){
        	return redirect()->guest('front/login');
        }
        return redirect()->guest('login');
    }
}
