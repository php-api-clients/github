<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos;

final class ListLanguages_
{
    private const OPERATION_ID = 'repos/list-languages';
    /****/
    public string $owner;
    /****/
    public string $repo;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo)
    {
        $this->owner = $owner;
        $this->repo = $repo;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/repos/{owner}/{repo}/languages?'));
    }
    function validateResponse()
    {
    }
}
