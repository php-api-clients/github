<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Checks;

final class SetSuitesPreferences
{
    private const OPERATION_ID = 'checks/set-suites-preferences';
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
        return new \RingCentral\Psr7\Request('patch', \str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/repos/{owner}/{repo}/check-suites/preferences?'));
    }
    function validateResponse()
    {
    }
}
