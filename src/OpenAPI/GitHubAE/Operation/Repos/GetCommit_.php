<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos;

final class GetCommit_
{
    private const OPERATION_ID = 'repos/get-commit';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**ref parameter**/
    private readonly string $ref;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $page = 1, int $per_page = 30, string $ref)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->page = $page;
        $this->per_page = $per_page;
        $this->ref = $ref;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{page}', '{per_page}', '{ref}'), array($this->owner, $this->repo, $this->page, $this->per_page, $this->ref), '/repos/{owner}/{repo}/commits/{ref}?page={page}&per_page={per_page}'));
    }
    function validateResponse()
    {
    }
}
