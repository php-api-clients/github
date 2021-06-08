<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ScopeToken
{
    private const OPERATION_ID = 'apps/scope-token';
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
        return new Request('post', str_replace(['{client_id}'], [$this->client_id], '/applications/{client_id}/token/scoped?'));
    }

    function validateResponse(): void
    {
    }
}
