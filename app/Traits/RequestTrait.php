<?php

namespace Plugins\LaravelDoc\Traits;

/**
 * Trait RequestTrait
 */
trait RequestTrait
{
    /**
     * @param $uri
     * @param array $query
     * @param array $headers
     * @return \Illuminate\Testing\TestResponse
     */
    public function get($uri, array $query = [], array $headers = [])
    {
        $server = $this->transformHeadersToServerVars($headers);
        $cookies = $this->prepareCookiesForRequest();

        return $this->call('GET', $uri, $query, $cookies, [], $server);
    }

    /**
     * Visit the given URI with a GET request, expecting a JSON response.
     *
     * @param string $uri
     * @param array $query
     * @param array $headers
     * @return \Illuminate\Testing\TestResponse
     */
    public function getJsonWithQuery($uri, array $query = [], array $headers = [], $options = 0)
    {
        return $this->json('GET', $uri, $query, $headers, $options);
    }
}
