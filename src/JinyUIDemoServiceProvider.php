<?php

namespace Jiny\UIDemo;

use Illuminate\Support\ServiceProvider;

class JinyUIDemoServiceProvider extends ServiceProvider
{
    private $package = "uidemo";
    public function boot()
    {
        // 모듈: 라우트 설정
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', $this->package);
    }

    public function register()
    {

    }
}
