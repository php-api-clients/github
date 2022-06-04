<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos;

final class GetDeploymentStatus_
{
    private const OPERATION_ID = 'repos/get-deployment-status';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**deployment_id parameter**/
    public int $deployment_id;
    /****/
    public int $status_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $deployment_id, $status_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->deployment_id = $deployment_id;
        $this->status_id = $status_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{deployment_id}', '{status_id}'), array($this->owner, $this->repo, $this->deployment_id, $this->status_id), '/repos/{owner}/{repo}/deployments/{deployment_id}/statuses/{status_id}'));
    }
    function validateResponse()
    {
    }
}
