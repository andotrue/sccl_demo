<?php

namespace App\Providers;

use Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
		Validator::extend('kana', function($attribute, $value, $parameters, $validator) {
			// 半角空白、全角空白、全角記号、全角かなを許可
			return preg_match("/^[ぁ-んー 　！-＠［-｀｛-～]+$/u", $value);
		});
		Validator::extend('alpha_custom', function($attribute, $value, $parameters, $validator) {
			return preg_match('/^\pL+$/', $value);
			//return preg_match('/^[\pL\pM]+$/', $value);
		});
		Validator::extend('alpha_num_custom', function($attribute, $value, $parameters, $validator) {
			//return preg_match('/^\pL+$/', $value);
			return preg_match('/^[\pL\pN]+$/', $value);
		});
	}

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
