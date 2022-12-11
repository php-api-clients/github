<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions;

final class ListArtifactsForRepo_
{
    private const OPERATION_ID = 'actions/list-artifacts-for-repo';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**Filters artifacts by exact match on their name field.**/
    private readonly string $name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $per_page = 30, int $page = 1, string $name)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->name = $name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{per_page}', '{page}', '{name}'), array($this->owner, $this->repo, $this->per_page, $this->page, $this->name), '/repos/{owner}/{repo}/actions/artifacts?per_page={per_page}&page={page}&name={name}'));
    }
    function validateResponse()
    {
    }
}
