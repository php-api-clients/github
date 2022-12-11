<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class DeleteActionsCacheById_
{
    private const OPERATION_ID = 'actions/delete-actions-cache-by-id';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The unique identifier of the GitHub Actions cache.**/
    private readonly int $cache_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $cache_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->cache_id = $cache_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{cache_id}'), array($this->owner, $this->repo, $this->cache_id), '/repos/{owner}/{repo}/actions/caches/{cache_id}'));
    }
    function validateResponse()
    {
    }
}
