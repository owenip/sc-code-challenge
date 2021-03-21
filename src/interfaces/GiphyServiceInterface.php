<?php
namespace Giphy\interfaces;

interface GiphyServiceInterface
{
    /**
     * Giphy Search Endpoint
     * @param string $apiKey GIPHY API Key
     * @param string $queryTerm Search query term or phrase.
     * @param int|null $limit The maximum number of objects to return. (Default: “25”).
     * @param int|null $offset Specifies the starting position of the results. Default: 0; MAX: 4999
     * @param string|null $rating Content Rating that used for filtering result. Acceptable values include g, pg, pg-13, r
     * @param string|null $lang Specify default language for regional content; Use a 2-letter ISO 639-1 language code.
     * @param string|null $random An ID/proxy for a specific user.
     * @return mixed
     *
     * @link https://developers.giphy.com/docs/api/endpoint#search
     */
    public static function search(string $apiKey, string $queryTerm, int $limit = null, int $offset = null, string $rating = null, string $lang = null, string $random = null);
}
