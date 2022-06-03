<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Reactions;

final class DeleteForRelease_
{
    private const OPERATION_ID = 'reactions/delete-for-release';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The unique identifier of the release.**/
    public int $release_id;
    /**The unique identifier of the reaction.**/
    public int $reaction_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $release_id, $reaction_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->release_id = $release_id;
        $this->reaction_id = $reaction_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{release_id}', '{reaction_id}'), array($this->owner, $this->repo, $this->release_id, $this->reaction_id), '/repos/{owner}/{repo}/releases/{release_id}/reactions/{reaction_id}?'));
    }
    function validateResponse()
    {
    }
}
