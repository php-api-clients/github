<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class GetClones_
{
    private const OPERATION_ID = 'repos/get-clones';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**The time frame to display results for.**/
    private readonly string $per;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $per = 'day')
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->per = $per;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{per}'), array($this->owner, $this->repo, $this->per), '/repos/{owner}/{repo}/traffic/clones?per={per}'));
    }
    function validateResponse()
    {
    }
}
