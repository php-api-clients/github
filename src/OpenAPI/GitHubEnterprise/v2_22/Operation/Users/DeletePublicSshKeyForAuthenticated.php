<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Users;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeletePublicSshKeyForAuthenticated
{
    private const OPERATION_ID = 'users/delete-public-ssh-key-for-authenticated';
    /**key_id parameter**/
    public int $key_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($key_id)
    {
        $this->key_id = $key_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{key_id}'], [$this->key_id], '/user/keys/{key_id}?'));
    }

    function validateResponse(): void
    {
    }
}
