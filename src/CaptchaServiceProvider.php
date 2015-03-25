<?php
    namespace Dearmadman\Captcha;

    use Illuminate\Support\ServiceProvider;
    class CaptchaServiceProvider extends ServiceProvider
    {

        public function register ()
        {

            $this->app->singleton('DearMadMan\Captcha',function($app){
                return Captcha::InitFromArray($app['options']);
            });
        }
    }

