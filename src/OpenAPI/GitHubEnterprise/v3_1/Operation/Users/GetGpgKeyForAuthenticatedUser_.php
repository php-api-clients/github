<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users;

final class GetGpgKeyForAuthenticatedUser_
{
    private const OPERATION_ID = 'users/get-gpg-key-for-authenticated-user';
    /**The unique identifier of the GPG key.**/
    private readonly int $gpg_key_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $gpg_key_id)
    {
        $this->gpg_key_id = $gpg_key_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{gpg_key_id}'), array($this->gpg_key_id), '/user/gpg_keys/{gpg_key_id}'));
    }
    function validateResponse()
    {
    }
}
