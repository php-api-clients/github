<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Pulls
{
    public function list_($owner, $repo, string $state = 'open', $head, $base, string $sort = 'created', $direction, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\List_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\List_($owner, $repo, $state, $head, $base, $sort, $direction, $per_page, $page);
    }
    public function create_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Create_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Create_($owner, $repo);
    }
    public function listReviewCommentsForRepo_($owner, $repo, $sort, $direction, $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListReviewCommentsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListReviewCommentsForRepo_($owner, $repo, $sort, $direction, $since, $per_page, $page);
    }
    public function getReviewComment_($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\GetReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\GetReviewComment_($owner, $repo, $comment_id);
    }
    public function deleteReviewComment_($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DeleteReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DeleteReviewComment_($owner, $repo, $comment_id);
    }
    public function updateReviewComment_($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateReviewComment_($owner, $repo, $comment_id);
    }
    public function get_($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Get_($owner, $repo, $pull_number);
    }
    public function update_($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Update_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Update_($owner, $repo, $pull_number);
    }
    public function listReviewComments_($owner, $repo, $pull_number, string $sort = 'created', $direction, $since, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListReviewComments_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListReviewComments_($owner, $repo, $pull_number, $sort, $direction, $since, $per_page, $page);
    }
    public function createReviewComment_($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CreateReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CreateReviewComment_($owner, $repo, $pull_number);
    }
    public function createReplyForReviewComment_($owner, $repo, $pull_number, $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CreateReplyForReviewComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CreateReplyForReviewComment_($owner, $repo, $pull_number, $comment_id);
    }
    public function listCommits_($owner, $repo, $pull_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListCommits_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListCommits_($owner, $repo, $pull_number, $per_page, $page);
    }
    public function listFiles_($owner, $repo, $pull_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListFiles_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListFiles_($owner, $repo, $pull_number, $per_page, $page);
    }
    public function checkIfMerged_($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CheckIfMerged_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CheckIfMerged_($owner, $repo, $pull_number);
    }
    public function merge_($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Merge_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\Merge_($owner, $repo, $pull_number);
    }
    public function listRequestedReviewers_($owner, $repo, $pull_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListRequestedReviewers_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListRequestedReviewers_($owner, $repo, $pull_number, $per_page, $page);
    }
    public function requestReviewers_($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\RequestReviewers_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\RequestReviewers_($owner, $repo, $pull_number);
    }
    public function removeRequestedReviewers_($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\RemoveRequestedReviewers_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\RemoveRequestedReviewers_($owner, $repo, $pull_number);
    }
    public function listReviews_($owner, $repo, $pull_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListReviews_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListReviews_($owner, $repo, $pull_number, $per_page, $page);
    }
    public function createReview_($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CreateReview_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\CreateReview_($owner, $repo, $pull_number);
    }
    public function getReview_($owner, $repo, $pull_number, $review_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\GetReview_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\GetReview_($owner, $repo, $pull_number, $review_id);
    }
    public function updateReview_($owner, $repo, $pull_number, $review_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateReview_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateReview_($owner, $repo, $pull_number, $review_id);
    }
    public function deletePendingReview_($owner, $repo, $pull_number, $review_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DeletePendingReview_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DeletePendingReview_($owner, $repo, $pull_number, $review_id);
    }
    public function listCommentsForReview_($owner, $repo, $pull_number, $review_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListCommentsForReview_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\ListCommentsForReview_($owner, $repo, $pull_number, $review_id, $per_page, $page);
    }
    public function dismissReview_($owner, $repo, $pull_number, $review_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DismissReview_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\DismissReview_($owner, $repo, $pull_number, $review_id);
    }
    public function submitReview_($owner, $repo, $pull_number, $review_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\SubmitReview_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\SubmitReview_($owner, $repo, $pull_number, $review_id);
    }
    public function updateBranch_($owner, $repo, $pull_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateBranch_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls\UpdateBranch_($owner, $repo, $pull_number);
    }
}
