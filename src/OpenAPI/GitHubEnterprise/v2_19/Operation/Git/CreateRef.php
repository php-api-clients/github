<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Git;

final class CreateRef
{
    private const OPERATION_ID = 'git/create-ref';
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
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/repos/{owner}/{repo}/git/refs?'));
    }
    function validateResponse()
    {
    }
}
