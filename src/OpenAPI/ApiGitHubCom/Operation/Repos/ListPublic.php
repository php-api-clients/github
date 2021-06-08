<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListPublic
{
    private const OPERATION_ID = 'repos/list-public';
    /**A repository ID. Only return repositories with an ID greater than this ID.**/
    public int $since;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($since)
    {
        $this->since = $since;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{since}'], [$this->since], '/repositories?since={since}'));
    }

    function validateResponse(): void
    {
    }
}
