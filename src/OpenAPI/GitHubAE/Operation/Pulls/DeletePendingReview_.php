<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Pulls;

final class DeletePendingReview_
{
    private const OPERATION_ID = 'pulls/delete-pending-review';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The number that identifies the pull request.**/
    public int $pull_number;
    /**The unique identifier of the review.**/
    public int $review_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $pull_number, $review_id)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->pull_number = $pull_number;
        $this->review_id = $review_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{owner}', '{repo}', '{pull_number}', '{review_id}'), array($this->owner, $this->repo, $this->pull_number, $this->review_id), '/repos/{owner}/{repo}/pulls/{pull_number}/reviews/{review_id}?'));
    }
    function validateResponse()
    {
    }
}
