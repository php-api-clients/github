<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Users;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetGpgKeyForAuthenticated
{
    private const OPERATION_ID = 'users/get-gpg-key-for-authenticated';
    /**gpg_key_id parameter**/
    public int $gpg_key_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($gpg_key_id)
    {
        $this->gpg_key_id = $gpg_key_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{gpg_key_id}'], [$this->gpg_key_id], '/user/gpg_keys/{gpg_key_id}?'));
    }

    function validateResponse(): void
    {
    }
}
