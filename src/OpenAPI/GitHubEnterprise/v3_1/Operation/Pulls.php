<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation;

final class Pulls
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function list_(string $owner, string $repo, string $state = 'open', string $head, string $base, string $sort = 'created', string $direction, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\List_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\List_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $state, $head, $base, $sort, $direction, $per_page, $page);
    }
    public function create_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\Create_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\Create_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function listReviewCommentsForRepo_(string $owner, string $repo, string $sort, string $direction, string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListReviewCommentsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListReviewCommentsForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $sort, $direction, $since, $per_page, $page);
    }
    public function getReviewComment_(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\GetReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\GetReviewComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id);
    }
    public function deleteReviewComment_(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\DeleteReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\DeleteReviewComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id);
    }
    public function updateReviewComment_(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\UpdateReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\UpdateReviewComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id);
    }
    public function get_(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\Get_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number);
    }
    public function update_(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\Update_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\Update_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number);
    }
    public function listReviewComments_(string $owner, string $repo, int $pull_number, string $sort = 'created', string $direction, string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListReviewComments_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListReviewComments_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $sort, $direction, $since, $per_page, $page);
    }
    public function createReviewComment_(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\CreateReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\CreateReviewComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number);
    }
    public function createReplyForReviewComment_(string $owner, string $repo, int $pull_number, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\CreateReplyForReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\CreateReplyForReviewComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $comment_id);
    }
    public function listCommits_(string $owner, string $repo, int $pull_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListCommits_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListCommits_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $per_page, $page);
    }
    public function listFiles_(string $owner, string $repo, int $pull_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListFiles_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListFiles_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $per_page, $page);
    }
    public function checkIfMerged_(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\CheckIfMerged_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\CheckIfMerged_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number);
    }
    public function merge_(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\Merge_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\Merge_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number);
    }
    public function listRequestedReviewers_(string $owner, string $repo, int $pull_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListRequestedReviewers_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListRequestedReviewers_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $per_page, $page);
    }
    public function requestReviewers_(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\RequestReviewers_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\RequestReviewers_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number);
    }
    public function removeRequestedReviewers_(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\RemoveRequestedReviewers_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\RemoveRequestedReviewers_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number);
    }
    public function listReviews_(string $owner, string $repo, int $pull_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListReviews_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListReviews_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $per_page, $page);
    }
    public function createReview_(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\CreateReview_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\CreateReview_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number);
    }
    public function getReview_(string $owner, string $repo, int $pull_number, int $review_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\GetReview_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\GetReview_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $review_id);
    }
    public function updateReview_(string $owner, string $repo, int $pull_number, int $review_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\UpdateReview_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\UpdateReview_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $review_id);
    }
    public function deletePendingReview_(string $owner, string $repo, int $pull_number, int $review_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\DeletePendingReview_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\DeletePendingReview_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $review_id);
    }
    public function listCommentsForReview_(string $owner, string $repo, int $pull_number, int $review_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListCommentsForReview_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListCommentsForReview_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $review_id, $per_page, $page);
    }
    public function dismissReview_(string $owner, string $repo, int $pull_number, int $review_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\DismissReview_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\DismissReview_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $review_id);
    }
    public function submitReview_(string $owner, string $repo, int $pull_number, int $review_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\SubmitReview_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\SubmitReview_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number, $review_id);
    }
    public function updateBranch_(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\UpdateBranch_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\UpdateBranch_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pull_number);
    }
}
