<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Issues;

final class DeleteLabel_
{
    private const OPERATION_ID = 'issues/delete-label';
    /****/
    public string $owner;
    /****/
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
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{name}'), array($this->owner, $this->repo, $this->name), '/repos/{owner}/{repo}/labels/{name}?'));
    }
    function validateResponse()
    {
    }
}
