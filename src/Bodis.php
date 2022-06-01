<?php

namespace JeffreyHosler\BodisApiWrapper;

use Illuminate\Support\Facades\Http;
use JeffreyHosler\BodisApiWrapper\Endpoints\Domains;
use JeffreyHosler\BodisApiWrapper\Endpoints\Folders;

class Bodis
{
    use Domains;
    use Folders;

    /**
     * The api key
     *
     * @var string
     */
    protected $token;

    /**
     * The HTTP Client instance.
     *
     * @var Illuminate\Support\Facades\Http
     */
    public $http;

    /**
     * Create a new Bodis instance.
     *
     * @param  string|null  $apiKey
     * @param  Illuminate\Support\Facades\Http|null  $http
     * @return void
     */
    public function __construct($token = null)
    {
        $this->setClient($token);
    }

    /**
     * Transform the items of the collection to the given class.
     *
     * @param  array  $collection
     * @param  string  $class
     * @param  array  $extraData
     * @return array
     */
    protected function transformCollection($collection, $class, $extraData = [])
    {
        return ['data' => array_map(fn ($data) => new $class($data + $extraData, $this), $collection)];
    }

    /**
     * Set the api key and setup the guzzle request object.
     *
     * @param  string|null  $apiKey
     * @return $this
     */
    public function setClient($token = null)
    {
        $this->http = Http::baseUrl(config('bodis.url'))
            ->withToken($token ?? config('bodis.token'))
            ->withHeaders([
                'Content-Type' => 'application/json',
            ])
            ->timeout(30)
            ->retry(3, 100, throw: false);

        return $this;
    }

    /**
     * Set a new timeout.
     *
     * @param  int  $timeout
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->http->timeout($timeout);

        return $this;
    }

    /**
     * Get the timeout.
     *
     * @return int
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * Set a new retry.
     *
     * @param  int  $timeout
     * @return $this
     */
    public function setRetries($retries, $milliseconds)
    {
        $this->http->retry($retries, $milliseconds);

        return $this;
    }

    /**
     * Make a GET request
     *
     * @param  string  $uri
     * @param  array  $payload
     * @return mixed
     */
    public function get($uri, array $payload = [])
    {
        return $this->response('GET', $uri, $payload);
    }

    /**
     * Make a POST request
     *
     * @param  string  $uri
     * @param  array  $payload
     * @return mixed
     */
    public function post($uri, array $payload = [])
    {
        return $this->response('POST', $uri, $payload);
    }

    /**
     * Make a PUT request
     *
     * @param  string  $uri
     * @param  array  $payload
     * @return mixed
     */
    public function put($uri, array $payload = [])
    {
        return $this->response('PUT', $uri, $payload);
    }

    /**
     * Make a DELETE request
     *
     * @param  string  $uri
     * @param  array  $payload
     * @return mixed
     */
    public function delete($uri, array $payload = [])
    {
        return $this->response('DELETE', $uri, $payload);
    }

    /**
     * Handle the response
     *
     * @param  Illuminate\Support\Facades\Http  $response
     * @param  string  $uri
     * @param  array  $payload
     * @return mixed
     */
    protected function response($method, $uri, $payload)
    {
        $response = $this->http->$method($uri, $payload);

        /* failed response */
        if ($response->failed()) {
            throw new \Exception($response->json()['message']);
        }

        return $response->json();
    }
}
