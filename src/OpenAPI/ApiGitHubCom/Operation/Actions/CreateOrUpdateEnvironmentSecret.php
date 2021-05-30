<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class CreateOrUpdateEnvironmentSecret
{
    private const OPERATION_ID = 'actions/create-or-update-environment-secret';
    /****/
    public int $repository_id;
    /**The name of the environment**/
    public string $environment_name;
    /**secret_name parameter**/
    public string $secret_name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($repository_id, $environment_name, $secret_name)
    {
        $this->repository_id = $repository_id;
        $this->environment_name = $environment_name;
        $this->secret_name = $secret_name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{repository_id}', '{environment_name}', '{secret_name}'), array($this->repository_id, $this->environment_name, $this->secret_name), '/repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}?'));
    }
    function validateResponse()
    {
    }
}
