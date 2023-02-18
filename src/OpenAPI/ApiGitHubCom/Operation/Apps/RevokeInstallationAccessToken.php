<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RevokeInstallationAccessToken
{
    public const OPERATION_ID    = 'apps/revoke-installation-access-token';
    public const OPERATION_MATCH = 'DELETE /installation/token';
    private const METHOD         = 'DELETE';
    private const PATH           = '/installation/token';

    public function __construct()
    {
    }

    function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace([], [], self::PATH));
    }

    function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
