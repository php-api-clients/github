<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeletePublicKey
{
    private const OPERATION_ID = 'enterprise-admin/delete-public-key';
    public string $key_ids;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($key_ids)
    {
        $this->key_ids = $key_ids;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{key_ids}'], [$this->key_ids], '/admin/keys/{key_ids}?'));
    }

    function validateResponse(): void
    {
    }
}
