<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Activity;

final class SetRepoSubscription_
{
    private const OPERATION_ID = 'activity/set-repo-subscription';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
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
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/repos/{owner}/{repo}/subscription?'));
    }
    function validateResponse()
    {
    }
}
