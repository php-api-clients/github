<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces;

final class RepoMachinesForAuthenticatedUser
{
    private const OPERATION_ID = 'codespaces/repo-machines-for-authenticated-user';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**Required. The location to check for available machines.**/
    public string $location;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $location)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->location = $location;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{location}'), array($this->owner, $this->repo, $this->location), '/repos/{owner}/{repo}/codespaces/machines?location={location}'));
    }
    function validateResponse()
    {
    }
}
