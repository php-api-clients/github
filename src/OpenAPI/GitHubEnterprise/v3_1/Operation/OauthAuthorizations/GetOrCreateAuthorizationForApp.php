<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetOrCreateAuthorizationForApp
{
    private const OPERATION_ID = 'oauth-authorizations/get-or-create-authorization-for-app';
    /**The client ID of your GitHub app.**/
    public string $client_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($client_id)
    {
        $this->client_id = $client_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('put', str_replace(['{client_id}'], [$this->client_id], '/authorizations/clients/{client_id}?'));
    }

    function validateResponse(): void
    {
    }
}
