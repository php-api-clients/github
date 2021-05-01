<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Activity;

final class GetRepoSubscription
{
    private const OPERATION_ID = 'activity/get-repo-subscription';
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/repos/{owner}/{repo}/subscription?'));
    }
    function validateResponse()
    {
    }
}
