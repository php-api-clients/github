<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos;

final class GetCollaboratorPermissionLevel_
{
    private const OPERATION_ID = 'repos/get-collaborator-permission-level';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The handle for the GitHub user account.**/
    public string $username;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $username)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->username = $username;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{username}'), array($this->owner, $this->repo, $this->username), '/repos/{owner}/{repo}/collaborators/{username}/permission?'));
    }
    function validateResponse()
    {
    }
}
