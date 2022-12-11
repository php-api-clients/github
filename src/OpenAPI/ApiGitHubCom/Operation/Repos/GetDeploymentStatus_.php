<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class GetDeploymentStatus_
{
    private const OPERATION_ID = 'repos/get-deployment-status';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**deployment_id parameter**/
    private readonly int $deployment_id;
    private readonly int $status_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $deployment_id, int $status_id)
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
