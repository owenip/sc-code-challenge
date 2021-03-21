<?php
namespace Giphy;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Utils;

class GiphyApi
{
    /**
     * @param string $apiKey
     * @param string $queryTerm
     * @param int|null $limit
     * @param int|null $offset
     * @param string|null $rating
     * @param string|null $lang
     * @param string|null $random
     * @return array|bool|float|int|object|string|null
     */
    public static function searchGifs(string $apiKey, string $queryTerm, int $limit = null, int $offset = null, string $rating = null, string $lang = null, string $random = null)
    {
        try {
            $response = GifService::search($apiKey, $queryTerm, $limit, $offset, $rating, $lang, $random);
        } catch (GuzzleException $e) {
            return $e->getMessage();
        }

        return Utils::jsonDecode((string) $response->getBody());
    }

    /**
     * @param string $apiKey
     * @param string $queryTerm
     * @param int|null $limit
     * @param int|null $offset
     * @param string|null $rating
     * @param string|null $lang
     * @param string|null $random
     * @return array|bool|float|int|object|string|null
     */
    public static function searchStickers(string $apiKey, string $queryTerm, int $limit = null, int $offset = null, string $rating = null, string $lang = null, string $random = null)
    {
        try {
            $response = StickerService::search($apiKey, $queryTerm, $limit, $offset, $rating, $lang, $random);
        } catch (GuzzleException $e) {
            return $e->getMessage();
        }

        return Utils::jsonDecode((string) $response->getBody());
    }
}