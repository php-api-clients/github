<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetOrCreateAuthorizationForAppAndFingerprint
{
    private const OPERATION_ID = 'oauth-authorizations/get-or-create-authorization-for-app-and-fingerprint';
    /**The client ID of your GitHub app.**/
    public string $client_id;
    public string $fingerprint;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($client_id, $fingerprint)
    {
        $this->client_id   = $client_id;
        $this->fingerprint = $fingerprint;
    }

    function createRequest(): RequestInterface
    {
        return new Request('put', str_replace(['{client_id}', '{fingerprint}'], [$this->client_id, $this->fingerprint], '/authorizations/clients/{client_id}/{fingerprint}?'));
    }

    function validateResponse(): void
    {
    }
}
