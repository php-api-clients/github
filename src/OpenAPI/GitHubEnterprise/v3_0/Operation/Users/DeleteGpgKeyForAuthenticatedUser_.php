<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Users;

final class DeleteGpgKeyForAuthenticatedUser_
{
    private const OPERATION_ID = 'users/delete-gpg-key-for-authenticated-user';
    /**gpg_key_id parameter**/
    public int $gpg_key_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($gpg_key_id)
    {
        $this->gpg_key_id = $gpg_key_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{gpg_key_id}'), array($this->gpg_key_id), '/user/gpg_keys/{gpg_key_id}'));
    }
    function validateResponse()
    {
    }
}
