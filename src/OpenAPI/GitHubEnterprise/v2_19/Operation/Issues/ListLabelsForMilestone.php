<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Issues;

final class ListLabelsForMilestone
{
    private const OPERATION_ID = 'issues/list-labels-for-milestone';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /**milestone_number parameter**/
    public int $milestone_number;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $milestone_number, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->milestone_number = $milestone_number;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{milestone_number}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->milestone_number, $this->per_page, $this->page), '/repos/{owner}/{repo}/milestones/{milestone_number}/labels?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
