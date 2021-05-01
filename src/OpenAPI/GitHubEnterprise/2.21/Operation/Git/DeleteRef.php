<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Git;

final class DeleteRef
{
    private const OPERATION_ID = 'git/delete-ref';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**ref parameter**/
    public string $ref;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $ref)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->ref = $ref;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{ref}'), array($this->owner, $this->repo, $this->ref), '/repos/{owner}/{repo}/git/refs/{ref}?'));
    }
    function validateResponse()
    {
    }
}
