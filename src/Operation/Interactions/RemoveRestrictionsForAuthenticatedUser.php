<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Interactions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveRestrictionsForAuthenticatedUser
{
    public const OPERATION_ID    = 'interactions/remove-restrictions-for-authenticated-user';
    public const OPERATION_MATCH = 'DELETE /user/interaction-limits';
    private const METHOD         = 'DELETE';
    private const PATH           = '/user/interaction-limits';

    public function __construct()
    {
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace([], [], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
