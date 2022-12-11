<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions;

final class CreateForRelease_
{
    private const OPERATION_ID = 'reactions/create-for-release';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The unique identifier of the release.**/
    private readonly int $release_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, int $release_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->release_id = $release_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('post', \str_replace(array('{owner}', '{repo}', '{release_id}'), array($this->owner, $this->repo, $this->release_id), '/repos/{owner}/{repo}/releases/{release_id}/reactions'));
    }
    function validateResponse()
    {
    }
}
