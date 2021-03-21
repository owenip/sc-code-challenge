<?php
namespace Giphy;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

class ApiService
{
    private static $baseUrl = 'api.giphy.com/';

    /**
     * @param string $apiKey
     * @param $endpoint
     * @param array $params
     * @param string $method
     * @return ResponseInterface
     * @throws GuzzleException
     */
    public static function request(string $apiKey, $endpoint, $params = [], $method = 'GET'): ResponseInterface
    {
        $client = new Client(['base_uri' => self::$baseUrl]);
        $params['api_key'] = $apiKey;
        return $client->request($method, $endpoint, [
            'query' => $params
        ]);
    }

}