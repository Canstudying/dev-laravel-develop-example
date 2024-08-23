<?php
/**
 * 契约，Cookie排队工厂接口
 */

namespace Illuminate\Contracts\Cookie;

interface QueueingFactory extends Factory
{
    /**
     * Queue a cookie to send with the next response.
	 * 排队cookie同下个响应一起发送
     *
     * @param  array  $parameters
     * @return void
     */
    public function queue(...$parameters);

    /**
     * Remove a cookie from the queue.
	 * 从队列中移除一个cookie
     *
     * @param  string  $name
     * @param  string|null  $path
     * @return void
     */
    public function unqueue($name, $path = null);

    /**
     * Get the cookies which have been queued for the next request.
	 * 得到队列cookie
     *
     * @return array
     */
    public function getQueuedCookies();
}
