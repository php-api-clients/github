<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class GetViews
{
    private const OPERATION_ID = 'repos/get-views';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**Must be one of: `day`, `week`.**/
    public string $per;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, string $per = 'day')
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->per = $per;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{per}'), array($this->owner, $this->repo, $this->per), '/repos/{owner}/{repo}/traffic/views?per={per}'));
    }
    function validateResponse()
    {
    }
}
