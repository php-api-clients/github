<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class ListEnvironmentSecrets_
{
    private const OPERATION_ID = 'actions/list-environment-secrets';
    /**The unique identifier of the repository.**/
    private readonly int $repository_id;
    /**The name of the environment.**/
    private readonly string $environment_name;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $repository_id, string $environment_name, int $per_page = 30, int $page = 1)
    {
        $this->repository_id = $repository_id;
        $this->environment_name = $environment_name;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{repository_id}', '{environment_name}', '{per_page}', '{page}'), array($this->repository_id, $this->environment_name, $this->per_page, $this->page), '/repositories/{repository_id}/environments/{environment_name}/secrets?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
