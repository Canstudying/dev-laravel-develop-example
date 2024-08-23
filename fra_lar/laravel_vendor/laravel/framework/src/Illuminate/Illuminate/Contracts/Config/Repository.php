<?php
/**
 * 契约，配置资源库接口
 */

namespace Illuminate\Contracts\Config;

interface Repository
{
    /**
     * Determine if the given configuration value exists.
	 * 确定配置项是否存在
     *
     * @param  string  $key
     * @return bool
     */
    public function has($key);

    /**
     * Get the specified configuration value.
	 * 得到特殊配置值
     *
     * @param  array|string  $key
     * @param  mixed  $default
     * @return mixed
     */
    public function get($key, $default = null);

    /**
     * Get all of the configuration items for the application.
     *
     * @return array
     */
    public function all();

    /**
     * Set a given configuration value.
     *
     * @param  array|string  $key
     * @param  mixed  $value
     * @return void
     */
    public function set($key, $value = null);

    /**
     * Prepend a value onto an array configuration value.
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return void
     */
    public function prepend($key, $value);

    /**
     * Push a value onto an array configuration value.
	 * 写入配置值
     *
     * @param  string  $key
     * @param  mixed  $value
     * @return void
     */
    public function push($key, $value);
}
