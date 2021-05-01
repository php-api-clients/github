<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos;

final class DeleteDeployment
{
    private const OPERATION_ID = 'repos/delete-deployment';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**deployment_id parameter**/
    public int $deployment_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $deployment_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->deployment_id = $deployment_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{deployment_id}'), array($this->owner, $this->repo, $this->deployment_id), '/repos/{owner}/{repo}/deployments/{deployment_id}?'));
    }
    function validateResponse()
    {
    }
}