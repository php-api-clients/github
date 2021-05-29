<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeletePersonalAccessToken
{
    private const OPERATION_ID = 'enterprise-admin/delete-personal-access-token';
    public int $token_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($token_id)
    {
        $this->token_id = $token_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{token_id}'], [$this->token_id], '/admin/tokens/{token_id}?'));
    }

    function validateResponse(): void
    {
    }
}
