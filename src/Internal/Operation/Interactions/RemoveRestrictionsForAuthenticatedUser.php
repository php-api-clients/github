<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Interactions;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

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

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace([], [], self::PATH));
    }

    /** @return array{code: int} */
    public function createResponse(ResponseInterface $response): array
    {
        $code = $response->getStatusCode();
        switch ($code) {
            /**
             * Response
             **/
            case 204:
                return ['code' => 204];
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
