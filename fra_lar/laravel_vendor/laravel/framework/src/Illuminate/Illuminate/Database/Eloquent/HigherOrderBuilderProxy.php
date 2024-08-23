<?php
/**
 * 数据库Eloquent，高阶生成器代理类
 */

namespace Illuminate\Database\Eloquent;

/**
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class HigherOrderBuilderProxy
{
    /**
     * The collection being operated on.
	 * 正在操作集合
     *
     * @var \Illuminate\Database\Eloquent\Builder
     */
    protected $builder;

    /**
     * The method being proxied.
	 * 被代理方法
     *
     * @var string
     */
    protected $method;

    /**
     * Create a new proxy instance.
	 * 创建新的代理实例
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $builder
     * @param  string  $method
     */
    public function __construct(Builder $builder, $method)
    {
        $this->method = $method;
        $this->builder = $builder;
    }

    /**
     * Proxy a scope call onto the query builder.
     *
     * @param  string  $method
     * @param  array  $parameters
     * @return mixed
     */
    public function __call($method, $parameters)
    {
        return $this->builder->{$this->method}(function ($value) use ($method, $parameters) {
            return $value->{$method}(...$parameters);
        });
    }
}
