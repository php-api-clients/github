<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Licenses;

final class GetForRepo
{
    private const OPERATION_ID = 'licenses/get-for-repo';
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/repos/{owner}/{repo}/license?'));
    }
    function validateResponse()
    {
    }
}