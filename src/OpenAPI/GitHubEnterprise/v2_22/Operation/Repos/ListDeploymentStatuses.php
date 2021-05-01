<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos;

final class ListDeploymentStatuses
{
    private const OPERATION_ID = 'repos/list-deployment-statuses';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**deployment_id parameter**/
    public int $deployment_id;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $deployment_id, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->deployment_id = $deployment_id;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{deployment_id}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->deployment_id, $this->per_page, $this->page), '/repos/{owner}/{repo}/deployments/{deployment_id}/statuses?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
