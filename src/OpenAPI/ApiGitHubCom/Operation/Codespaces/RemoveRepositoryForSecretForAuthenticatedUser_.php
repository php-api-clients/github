<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces;

final class RemoveRepositoryForSecretForAuthenticatedUser_
{
    private const OPERATION_ID = 'codespaces/remove-repository-for-secret-for-authenticated-user';
    /**The name of the secret.**/
    public string $secret_name;
    /****/
    public int $repository_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($secret_name, $repository_id)
    {
        $this->secret_name = $secret_name;
        $this->repository_id = $repository_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{secret_name}', '{repository_id}'), array($this->secret_name, $this->repository_id), '/user/codespaces/secrets/{secret_name}/repositories/{repository_id}'));
    }
    function validateResponse()
    {
    }
}
