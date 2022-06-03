<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Activity;

final class StarRepoForAuthenticatedUser_
{
    private const OPERATION_ID = 'activity/star-repo-for-authenticated-user';
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
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/user/starred/{owner}/{repo}?'));
    }
    function validateResponse()
    {
    }
}
