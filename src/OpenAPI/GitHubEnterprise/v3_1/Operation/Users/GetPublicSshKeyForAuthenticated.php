<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetPublicSshKeyForAuthenticated
{
    private const OPERATION_ID = 'users/get-public-ssh-key-for-authenticated';
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
        return new Request('get', str_replace(['{key_id}'], [$this->key_id], '/user/keys/{key_id}?'));
    }

    function validateResponse(): void
    {
    }
}