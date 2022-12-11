<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class DeleteEnvironmentSecret_
{
    private const OPERATION_ID = 'actions/delete-environment-secret';
    /**The unique identifier of the repository.**/
    private readonly int $repository_id;
    /**The name of the environment.**/
    private readonly string $environment_name;
    /**The name of the secret.**/
    private readonly string $secret_name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $repository_id, string $environment_name, string $secret_name)
    {
        $this->repository_id = $repository_id;
        $this->environment_name = $environment_name;
        $this->secret_name = $secret_name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{repository_id}', '{environment_name}', '{secret_name}'), array($this->repository_id, $this->environment_name, $this->secret_name), '/repositories/{repository_id}/environments/{environment_name}/secrets/{secret_name}'));
    }
    function validateResponse()
    {
    }
}
