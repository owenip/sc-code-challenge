<?php declare(strict_types=1);

namespace Giphy\tests;

use GuzzleHttp\Exception\ClientException;
use PHPUnit\Framework\TestCase;
use Giphy\ApiService;

final class ApiServiceTest extends TestCase
{
    public function testRequestWithInvalidAPIKeyExpect403(): void
    {
        $this->expectException(ClientException::class);
        $this->expectExceptionCode(403);
        $result = ApiService::request('123', 'v1/gifs/search', []);
    }
}