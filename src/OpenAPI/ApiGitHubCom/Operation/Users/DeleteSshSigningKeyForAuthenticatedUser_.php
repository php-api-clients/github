<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users;

final class DeleteSshSigningKeyForAuthenticatedUser_
{
    private const OPERATION_ID = 'users/delete-ssh-signing-key-for-authenticated-user';
    /**The unique identifier of the SSH signing key.**/
    private readonly int $ssh_signing_key_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $ssh_signing_key_id)
    {
        $this->ssh_signing_key_id = $ssh_signing_key_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{ssh_signing_key_id}'), array($this->ssh_signing_key_id), '/user/ssh_signing_keys/{ssh_signing_key_id}'));
    }
    function validateResponse()
    {
    }
}
