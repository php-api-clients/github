<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Pulls;

final class ListCommentsForReview_
{
    private const OPERATION_ID = 'pulls/list-comments-for-review';
    /****/
    public string $owner;
    /****/
    public string $repo;
    /****/
    public int $pull_number;
    /**review_id parameter**/
    public int $review_id;
    /**Results per page (max 100)**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $pull_number, $review_id, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->pull_number = $pull_number;
        $this->review_id = $review_id;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{pull_number}', '{review_id}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->pull_number, $this->review_id, $this->per_page, $this->page), '/repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}/comments?per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
