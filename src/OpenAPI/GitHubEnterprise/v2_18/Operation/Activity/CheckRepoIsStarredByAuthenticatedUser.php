<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Activity;

final class CheckRepoIsStarredByAuthenticatedUser
{
    private const OPERATION_ID = 'activity/check-repo-is-starred-by-authenticated-user';
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/user/starred/{owner}/{repo}?'));
    }
    function validateResponse()
    {
    }
}
