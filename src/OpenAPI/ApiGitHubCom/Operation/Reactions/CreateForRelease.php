<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions;

final class CreateForRelease
{
    private const OPERATION_ID = 'reactions/create-for-release';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**release_id parameter**/
    public int $release_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $release_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->release_id = $release_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{owner}', '{repo}', '{release_id}'), array($this->owner, $this->repo, $this->release_id), '/repos/{owner}/{repo}/releases/{release_id}/reactions?'));
    }
    function validateResponse()
    {
    }
}
