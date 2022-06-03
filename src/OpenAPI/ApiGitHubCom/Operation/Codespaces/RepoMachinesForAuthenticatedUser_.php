<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces;

final class RepoMachinesForAuthenticatedUser_
{
    private const OPERATION_ID = 'codespaces/repo-machines-for-authenticated-user';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The location to check for available machines. Assigned by IP if not provided.**/
    public string $location;
    /**IP for location auto-detection when proxying a request**/
    public string $client_ip;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $location, $client_ip)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->location = $location;
        $this->client_ip = $client_ip;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{location}', '{client_ip}'), array($this->owner, $this->repo, $this->location, $this->client_ip), '/repos/{owner}/{repo}/codespaces/machines?location={location}&client_ip={client_ip}'));
    }
    function validateResponse()
    {
    }
}
