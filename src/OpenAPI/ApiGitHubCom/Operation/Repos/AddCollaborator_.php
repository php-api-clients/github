<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class AddCollaborator_
{
    private const OPERATION_ID = 'repos/add-collaborator';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The handle for the GitHub user account.**/
    private readonly string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $username)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->username = $username;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{owner}', '{repo}', '{username}'), array($this->owner, $this->repo, $this->username), '/repos/{owner}/{repo}/collaborators/{username}'));
    }
    function validateResponse()
    {
    }
}
