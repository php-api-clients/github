<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ResetToken
{
    private const OPERATION_ID = 'apps/reset-token';
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
        return new Request('patch', str_replace(['{client_id}'], [$this->client_id], '/applications/{client_id}/token?'));
    }

    function validateResponse(): void
    {
    }
}
