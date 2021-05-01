<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\Issues;

final class GetMilestone
{
    private const OPERATION_ID = 'issues/get-milestone';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**milestone_number parameter**/
    public int $milestone_number;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $milestone_number)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->milestone_number = $milestone_number;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{milestone_number}'), array($this->owner, $this->repo, $this->milestone_number), '/repos/{owner}/{repo}/milestones/{milestone_number}?'));
    }
    function validateResponse()
    {
    }
}
