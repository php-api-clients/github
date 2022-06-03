<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Activity;

final class UnstarRepoForAuthenticatedUser_
{
    private const OPERATION_ID = 'activity/unstar-repo-for-authenticated-user';
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
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/user/starred/{owner}/{repo}?'));
    }
    function validateResponse()
    {
    }
}
