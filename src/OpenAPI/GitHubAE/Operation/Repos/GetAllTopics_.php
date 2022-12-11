<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos;

final class GetAllTopics_
{
    private const OPERATION_ID = 'repos/get-all-topics';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $page = 1, int $per_page = 30)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->page = $page;
        $this->per_page = $per_page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{page}', '{per_page}'), array($this->owner, $this->repo, $this->page, $this->per_page), '/repos/{owner}/{repo}/topics?page={page}&per_page={per_page}'));
    }
    function validateResponse()
    {
    }
}
