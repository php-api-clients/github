<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Issues;

final class GetLabel_
{
    private const OPERATION_ID = 'issues/get-label';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /****/
    public string $name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $name)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->name = $name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{name}'), array($this->owner, $this->repo, $this->name), '/repos/{owner}/{repo}/labels/{name}?'));
    }
    function validateResponse()
    {
    }
}
