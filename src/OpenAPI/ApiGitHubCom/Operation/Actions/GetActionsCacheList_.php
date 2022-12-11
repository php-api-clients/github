<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class GetActionsCacheList_
{
    private const OPERATION_ID = 'actions/get-actions-cache-list';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**The Git reference for the results you want to list. The `ref` for a branch can be formatted either as `refs/heads/<branch name>` or simply `<branch name>`. To reference a pull request use `refs/pull/<number>/merge`.**/
    private readonly string $ref;
    /**An explicit key or prefix for identifying the cache**/
    private readonly string $key;
    /**The property to sort the results by. `created_at` means when the cache was created. `last_accessed_at` means when the cache was last accessed. `size_in_bytes` is the size of the cache in bytes.**/
    private readonly string $sort;
    /**The direction to sort the results by.**/
    private readonly string $direction;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $per_page = 30, int $page = 1, string $ref, string $key, string $sort = 'last_accessed_at', string $direction = 'desc')
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->per_page = $per_page;
        $this->page = $page;
        $this->ref = $ref;
        $this->key = $key;
        $this->sort = $sort;
        $this->direction = $direction;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{per_page}', '{page}', '{ref}', '{key}', '{sort}', '{direction}'), array($this->owner, $this->repo, $this->per_page, $this->page, $this->ref, $this->key, $this->sort, $this->direction), '/repos/{owner}/{repo}/actions/caches?per_page={per_page}&page={page}&ref={ref}&key={key}&sort={sort}&direction={direction}'));
    }
    function validateResponse()
    {
    }
}
