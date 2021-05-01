<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos;

final class ListDeployments
{
    private const OPERATION_ID = 'repos/list-deployments';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**The SHA recorded at creation time.**/
    public string $sha;
    /**The name of the ref. This can be a branch, tag, or SHA.**/
    public string $ref;
    /**The name of the task for the deployment (e.g., `deploy` or `deploy:migrations`).**/
    public string $task;
    /**The name of the environment that was deployed to (e.g., `staging` or `production`).**/
    public string $environment;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, string $sha = 'none', string $ref = 'none', string $task = 'none', string $environment = 'none', int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->sha = $sha;
        $this->ref = $ref;
        $this->task = $task;
        $this->environment = $environment;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{sha}', '{ref}', '{task}', '{environment}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->sha, $this->ref, $this->task, $this->environment, $this->per_page, $this->page), '/repos/{owner}/{repo}/deployments?sha={sha}&ref={ref}&task={task}&environment={environment}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
