<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class DeleteActionsCacheByKey_
{
    private const OPERATION_ID = 'actions/delete-actions-cache-by-key';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**A key for identifying the cache.**/
    private readonly string $key;
    /**The Git reference for the results you want to list. The `ref` for a branch can be formatted either as `refs/heads/<branch name>` or simply `<branch name>`. To reference a pull request use `refs/pull/<number>/merge`.**/
    private readonly string $ref;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $key, string $ref)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->key = $key;
        $this->ref = $ref;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{key}', '{ref}'), array($this->owner, $this->repo, $this->key, $this->ref), '/repos/{owner}/{repo}/actions/caches?key={key}&ref={ref}'));
    }
    function validateResponse()
    {
    }
}
