<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation;

final class Pulls
{
    public function list_(string $owner, string $repo, string $state = 'open', string $head, string $base, string $sort = 'created', string $direction, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\List_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\List_($owner, $repo, $state, $head, $base, $sort, $direction, $per_page, $page);
    }
    public function create_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\Create_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\Create_($owner, $repo);
    }
    public function listReviewCommentsForRepo_(string $owner, string $repo, string $sort, string $direction, string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListReviewCommentsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListReviewCommentsForRepo_($owner, $repo, $sort, $direction, $since, $per_page, $page);
    }
    public function getReviewComment_(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\GetReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\GetReviewComment_($owner, $repo, $comment_id);
    }
    public function deleteReviewComment_(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\DeleteReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\DeleteReviewComment_($owner, $repo, $comment_id);
    }
    public function updateReviewComment_(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\UpdateReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\UpdateReviewComment_($owner, $repo, $comment_id);
    }
    public function get_(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\Get_($owner, $repo, $pull_number);
    }
    public function update_(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\Update_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\Update_($owner, $repo, $pull_number);
    }
    public function listReviewComments_(string $owner, string $repo, int $pull_number, string $sort = 'created', string $direction, string $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListReviewComments_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListReviewComments_($owner, $repo, $pull_number, $sort, $direction, $since, $per_page, $page);
    }
    public function createReviewComment_(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\CreateReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\CreateReviewComment_($owner, $repo, $pull_number);
    }
    public function createReplyForReviewComment_(string $owner, string $repo, int $pull_number, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\CreateReplyForReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\CreateReplyForReviewComment_($owner, $repo, $pull_number, $comment_id);
    }
    public function listCommits_(string $owner, string $repo, int $pull_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListCommits_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListCommits_($owner, $repo, $pull_number, $per_page, $page);
    }
    public function listFiles_(string $owner, string $repo, int $pull_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListFiles_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListFiles_($owner, $repo, $pull_number, $per_page, $page);
    }
    public function checkIfMerged_(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\CheckIfMerged_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\CheckIfMerged_($owner, $repo, $pull_number);
    }
    public function merge_(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\Merge_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\Merge_($owner, $repo, $pull_number);
    }
    public function listRequestedReviewers_(string $owner, string $repo, int $pull_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListRequestedReviewers_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListRequestedReviewers_($owner, $repo, $pull_number, $per_page, $page);
    }
    public function requestReviewers_(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\RequestReviewers_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\RequestReviewers_($owner, $repo, $pull_number);
    }
    public function removeRequestedReviewers_(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\RemoveRequestedReviewers_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\RemoveRequestedReviewers_($owner, $repo, $pull_number);
    }
    public function listReviews_(string $owner, string $repo, int $pull_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListReviews_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListReviews_($owner, $repo, $pull_number, $per_page, $page);
    }
    public function createReview_(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\CreateReview_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\CreateReview_($owner, $repo, $pull_number);
    }
    public function getReview_(string $owner, string $repo, int $pull_number, int $review_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\GetReview_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\GetReview_($owner, $repo, $pull_number, $review_id);
    }
    public function updateReview_(string $owner, string $repo, int $pull_number, int $review_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\UpdateReview_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\UpdateReview_($owner, $repo, $pull_number, $review_id);
    }
    public function deletePendingReview_(string $owner, string $repo, int $pull_number, int $review_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\DeletePendingReview_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\DeletePendingReview_($owner, $repo, $pull_number, $review_id);
    }
    public function listCommentsForReview_(string $owner, string $repo, int $pull_number, int $review_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListCommentsForReview_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\ListCommentsForReview_($owner, $repo, $pull_number, $review_id, $per_page, $page);
    }
    public function dismissReview_(string $owner, string $repo, int $pull_number, int $review_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\DismissReview_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\DismissReview_($owner, $repo, $pull_number, $review_id);
    }
    public function submitReview_(string $owner, string $repo, int $pull_number, int $review_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\SubmitReview_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\SubmitReview_($owner, $repo, $pull_number, $review_id);
    }
    public function updateBranch_(string $owner, string $repo, int $pull_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\UpdateBranch_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls\UpdateBranch_($owner, $repo, $pull_number);
    }
}
