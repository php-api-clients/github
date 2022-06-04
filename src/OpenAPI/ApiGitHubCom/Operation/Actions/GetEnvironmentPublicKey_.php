<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class GetEnvironmentPublicKey_
{
    private const OPERATION_ID = 'actions/get-environment-public-key';
    /**The unique identifier of the repository.**/
    public int $repository_id;
    /**The name of the environment**/
    public string $environment_name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($repository_id, $environment_name)
    {
        $this->repository_id = $repository_id;
        $this->environment_name = $environment_name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{repository_id}', '{environment_name}'), array($this->repository_id, $this->environment_name), '/repositories/{repository_id}/environments/{environment_name}/secrets/public-key'));
    }
    function validateResponse()
    {
    }
}
