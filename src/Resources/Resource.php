<?php

namespace JeffreyHosler\BodisApiWrapper\Resources;

class Resource
{
    /**
     * The resource attributes.
     *
     * @var array
     */
    public $attributes;

    /**
     * The HTTP Client instance.
     *
     * @var Illuminate\Support\Facades\Http
     */
    protected $http;

    /**
     * Create a new resource instance.
     *
     * @param  array  $attributes
     * @return void
     */
    public function __construct(array $attributes, $http)
    {
        $this->attributes = $attributes;
        $this->http = $http;

        $this->set();
    }

    /**
     * set the attributes.
     *
     * @return void
     */
    protected function set()
    {
        foreach ($this->attributes as $key => $value) {
            $key = $this->camelCase($key);
            $this->{$key} = $value;
        }
    }

    /**
     * Convert the key name to camel case.
     *
     * @param  string  $key
     * @return string
     */
    protected function camelCase($key)
    {
        $parts = explode('_', $key);

        foreach ($parts as $i => $part) {
            if ($i !== 0) {
                $parts[$i] = ucfirst($part);
            }
        }

        return str_replace(' ', '', implode(' ', $parts));
    }
}
