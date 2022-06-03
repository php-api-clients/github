<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Issues;

final class ListEventsForTimeline_
{
    private const OPERATION_ID = 'issues/list-events-for-timeline';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The number that identifies the issue.**/
    public int $issue_number;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $issue_number, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->issue_number = $issue_number;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{issue_number}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->issue_number, $this->per_page, $this->page), '/repos/{owner}/{repo}/issues/{issue_number}/timeline?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
