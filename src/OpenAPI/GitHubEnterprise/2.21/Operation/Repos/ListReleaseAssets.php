<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.21\Operation\Repos;

final class ListReleaseAssets
{
    private const OPERATION_ID = 'repos/list-release-assets';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**release_id parameter**/
    public int $release_id;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $release_id, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->release_id = $release_id;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{release_id}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->release_id, $this->per_page, $this->page), '/repos/{owner}/{repo}/releases/{release_id}/assets?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
