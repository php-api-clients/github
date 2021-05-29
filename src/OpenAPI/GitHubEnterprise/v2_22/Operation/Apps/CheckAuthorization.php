<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CheckAuthorization
{
    private const OPERATION_ID = 'apps/check-authorization';
    /**The client ID of your GitHub app.**/
    public string $client_id;
    public string $access_token;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($client_id, $access_token)
    {
        $this->client_id    = $client_id;
        $this->access_token = $access_token;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{client_id}', '{access_token}'], [$this->client_id, $this->access_token], '/applications/{client_id}/tokens/{access_token}?'));
    }

    function validateResponse(): void
    {
    }
}
