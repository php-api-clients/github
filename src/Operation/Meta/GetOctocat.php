<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Meta;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetOctocat
{
    public const OPERATION_ID    = 'meta/get-octocat';
    public const OPERATION_MATCH = 'GET /octocat';
    private const METHOD         = 'GET';
    private const PATH           = '/octocat';
    /**The words to show in Octocat's speech bubble **/
    private string $s;

    public function __construct(string $s)
    {
        $this->s = $s;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{s}'], [$this->s], self::PATH . '?s={s}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
