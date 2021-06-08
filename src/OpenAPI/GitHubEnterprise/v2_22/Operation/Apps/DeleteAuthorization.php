<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteAuthorization
{
    private const OPERATION_ID = 'apps/delete-authorization';
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
        return new Request('delete', str_replace(['{client_id}'], [$this->client_id], '/applications/{client_id}/grant?'));
    }

    function validateResponse(): void
    {
    }
}
