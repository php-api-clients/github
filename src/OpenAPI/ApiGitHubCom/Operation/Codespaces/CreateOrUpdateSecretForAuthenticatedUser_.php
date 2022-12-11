<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces;

final class CreateOrUpdateSecretForAuthenticatedUser_
{
    private const OPERATION_ID = 'codespaces/create-or-update-secret-for-authenticated-user';
    /**The name of the secret.**/
    private readonly string $secret_name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $secret_name)
    {
        $this->secret_name = $secret_name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{secret_name}'), array($this->secret_name), '/user/codespaces/secrets/{secret_name}'));
    }
    function validateResponse()
    {
    }
}
