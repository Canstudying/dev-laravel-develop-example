<?php
/**
 * 基础引导，启动提供者类
 */

namespace Illuminate\Foundation\Bootstrap;

use Illuminate\Contracts\Foundation\Application;

class BootProviders
{
    /**
     * Bootstrap the given application.
	 * 引导给定的应用
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @return void
     */
    public function bootstrap(Application $app)
    {
        $app->boot();
    }
}
