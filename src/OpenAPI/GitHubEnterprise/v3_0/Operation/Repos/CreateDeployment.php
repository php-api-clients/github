<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos;

final class CreateDeployment
{
    private const OPERATION_ID = 'repos/create-deployment';
    /****/
    public string $owner;
    /****/
    public string $repo;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo)
    {
        $this->owner = $owner;
        $this->repo = $repo;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/repos/{owner}/{repo}/deployments?'));
    }
    function validateResponse()
    {
    }
}