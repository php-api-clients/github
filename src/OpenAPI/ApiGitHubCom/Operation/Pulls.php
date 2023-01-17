<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Pulls
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function list_(string $owner, string $repo, string $state = 'open', string $head, string $base, string $sort = 'created', string $direction, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\List_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\List_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $state, $head, $base, $sort, $direction, $per_page, $page);
    }
    public function create(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Create
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Create($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function listReviewCommentsForRepo(string $owner, string $repo, string $sort, string $direction, string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListReviewCommentsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListReviewCommentsForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $sort, $direction, $since, $per_page, $page);
    }
    public function getReviewComment(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\GetReviewComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\GetReviewComment($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id);
    }
    public function deleteReviewComment(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DeleteReviewComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DeleteReviewComment($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id);
    }
    public function updateReviewComment(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateReviewComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateReviewComment($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id);
    }
    public function get(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Get($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number);
    }
    public function update(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Update
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Update($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number);
    }
    public function listReviewComments(string $owner, string $repo, int $pull_number, string $sort = 'created', string $direction, string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListReviewComments
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListReviewComments($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $sort, $direction, $since, $per_page, $page);
    }
    public function createReviewComment(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CreateReviewComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CreateReviewComment($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number);
    }
    public function createReplyForReviewComment(string $owner, string $repo, int $pull_number, int $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CreateReplyForReviewComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CreateReplyForReviewComment($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $comment_id);
    }
    public function listCommits(string $owner, string $repo, int $pull_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListCommits
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListCommits($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $per_page, $page);
    }
    public function listFiles(string $owner, string $repo, int $pull_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListFiles
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListFiles($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $per_page, $page);
    }
    public function checkIfMerged(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CheckIfMerged
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CheckIfMerged($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number);
    }
    public function merge(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Merge
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Merge($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number);
    }
    public function listRequestedReviewers(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListRequestedReviewers
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListRequestedReviewers($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number);
    }
    public function requestReviewers(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\RequestReviewers
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\RequestReviewers($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number);
    }
    public function removeRequestedReviewers(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\RemoveRequestedReviewers
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\RemoveRequestedReviewers($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number);
    }
    public function listReviews(string $owner, string $repo, int $pull_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListReviews
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListReviews($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $per_page, $page);
    }
    public function createReview(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CreateReview
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CreateReview($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number);
    }
    public function getReview(string $owner, string $repo, int $pull_number, int $review_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\GetReview
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\GetReview($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $review_id);
    }
    public function updateReview(string $owner, string $repo, int $pull_number, int $review_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateReview
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateReview($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $review_id);
    }
    public function deletePendingReview(string $owner, string $repo, int $pull_number, int $review_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DeletePendingReview
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DeletePendingReview($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $review_id);
    }
    public function listCommentsForReview(string $owner, string $repo, int $pull_number, int $review_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListCommentsForReview
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListCommentsForReview($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $review_id, $per_page, $page);
    }
    public function dismissReview(string $owner, string $repo, int $pull_number, int $review_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DismissReview
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DismissReview($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $review_id);
    }
    public function submitReview(string $owner, string $repo, int $pull_number, int $review_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\SubmitReview
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\SubmitReview($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $review_id);
    }
    public function updateBranch(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateBranch
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateBranch($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number);
    }
}
