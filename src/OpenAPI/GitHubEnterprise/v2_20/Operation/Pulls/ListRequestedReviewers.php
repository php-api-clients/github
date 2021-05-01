<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Pulls;

final class ListRequestedReviewers
{
    private const OPERATION_ID = 'pulls/list-requested-reviewers';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /****/
    public int $pull_number;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $pull_number, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->pull_number = $pull_number;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{pull_number}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->pull_number, $this->per_page, $this->page), '/repos/{owner}/{repo}/pulls/{pull_number}/requested_reviewers?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
