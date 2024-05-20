<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Operations\Pulls\UpdateBranch\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHub\Schema\PullRequest;
use ApiClients\Client\GitHub\Schema\PullRequestMergeResult;
use ApiClients\Client\GitHub\Schema\PullRequestReview;
use ApiClients\Client\GitHub\Schema\PullRequestReviewComment;
use ApiClients\Client\GitHub\Schema\PullRequestReviewRequest;
use ApiClients\Client\GitHub\Schema\PullRequestSimple;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Pulls
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\PullRequestSimple>|WithoutBody */
    public function list(string $owner, string $repo, string $head, string $base, string $direction, string $state, string $sort, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->pulls👷List_()->call($owner, $repo, $head, $base, $direction, $state, $sort, $perPage, $page);
    }

    /** @return Observable<Schema\PullRequestSimple>|WithoutBody */
    public function listListing(string $owner, string $repo, string $head, string $base, string $direction, string $state, string $sort, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->pulls👷ListListing()->call($owner, $repo, $head, $base, $direction, $state, $sort, $perPage, $page);
    }

    /** @return */
    public function create(string $owner, string $repo, array $params): PullRequest
    {
        return $this->operators->pulls👷Create()->call($owner, $repo, $params);
    }

    /** @return Observable<Schema\PullRequestReviewComment> */
    public function listReviewCommentsForRepo(string $owner, string $repo, string $sort, string $direction, string $since, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListReviewCommentsForRepo()->call($owner, $repo, $sort, $direction, $since, $perPage, $page);
    }

    /** @return Observable<Schema\PullRequestReviewComment> */
    public function listReviewCommentsForRepoListing(string $owner, string $repo, string $sort, string $direction, string $since, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListReviewCommentsForRepoListing()->call($owner, $repo, $sort, $direction, $since, $perPage, $page);
    }

    /** @return */
    public function getReviewComment(string $owner, string $repo, int $commentId): PullRequestReviewComment
    {
        return $this->operators->pulls👷GetReviewComment()->call($owner, $repo, $commentId);
    }

    /** @return */
    public function deleteReviewComment(string $owner, string $repo, int $commentId): WithoutBody
    {
        return $this->operators->pulls👷DeleteReviewComment()->call($owner, $repo, $commentId);
    }

    /** @return */
    public function updateReviewComment(string $owner, string $repo, int $commentId, array $params): PullRequestReviewComment
    {
        return $this->operators->pulls👷UpdateReviewComment()->call($owner, $repo, $commentId, $params);
    }

    public function get(string $owner, string $repo, int $pullNumber): PullRequest|WithoutBody
    {
        return $this->operators->pulls👷Get()->call($owner, $repo, $pullNumber);
    }

    /** @return */
    public function update(string $owner, string $repo, int $pullNumber, array $params): PullRequest
    {
        return $this->operators->pulls👷Update()->call($owner, $repo, $pullNumber, $params);
    }

    /** @return Observable<Schema\PullRequestReviewComment> */
    public function listReviewComments(string $owner, string $repo, int $pullNumber, string $direction, string $since, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListReviewComments()->call($owner, $repo, $pullNumber, $direction, $since, $sort, $perPage, $page);
    }

    /** @return Observable<Schema\PullRequestReviewComment> */
    public function listReviewCommentsListing(string $owner, string $repo, int $pullNumber, string $direction, string $since, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListReviewCommentsListing()->call($owner, $repo, $pullNumber, $direction, $since, $sort, $perPage, $page);
    }

    /** @return */
    public function createReviewComment(string $owner, string $repo, int $pullNumber, array $params): PullRequestReviewComment
    {
        return $this->operators->pulls👷CreateReviewComment()->call($owner, $repo, $pullNumber, $params);
    }

    /** @return */
    public function createReplyForReviewComment(string $owner, string $repo, int $pullNumber, int $commentId, array $params): PullRequestReviewComment
    {
        return $this->operators->pulls👷CreateReplyForReviewComment()->call($owner, $repo, $pullNumber, $commentId, $params);
    }

    /** @return Observable<Schema\Commit> */
    public function listCommits(string $owner, string $repo, int $pullNumber, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListCommits()->call($owner, $repo, $pullNumber, $perPage, $page);
    }

    /** @return Observable<Schema\Commit> */
    public function listCommitsListing(string $owner, string $repo, int $pullNumber, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListCommitsListing()->call($owner, $repo, $pullNumber, $perPage, $page);
    }

    /** @return Observable<Schema\DiffEntry> */
    public function listFiles(string $owner, string $repo, int $pullNumber, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListFiles()->call($owner, $repo, $pullNumber, $perPage, $page);
    }

    /** @return Observable<Schema\DiffEntry> */
    public function listFilesListing(string $owner, string $repo, int $pullNumber, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListFilesListing()->call($owner, $repo, $pullNumber, $perPage, $page);
    }

    /** @return */
    public function checkIfMerged(string $owner, string $repo, int $pullNumber): WithoutBody
    {
        return $this->operators->pulls👷CheckIfMerged()->call($owner, $repo, $pullNumber);
    }

    /** @return */
    public function merge(string $owner, string $repo, int $pullNumber, array $params): PullRequestMergeResult
    {
        return $this->operators->pulls👷Merge()->call($owner, $repo, $pullNumber, $params);
    }

    /** @return */
    public function listRequestedReviewers(string $owner, string $repo, int $pullNumber): PullRequestReviewRequest
    {
        return $this->operators->pulls👷ListRequestedReviewers()->call($owner, $repo, $pullNumber);
    }

    /** @return */
    public function requestReviewers(string $owner, string $repo, int $pullNumber, array $params): PullRequestSimple|WithoutBody
    {
        return $this->operators->pulls👷RequestReviewers()->call($owner, $repo, $pullNumber, $params);
    }

    /** @return */
    public function removeRequestedReviewers(string $owner, string $repo, int $pullNumber, array $params): PullRequestSimple
    {
        return $this->operators->pulls👷RemoveRequestedReviewers()->call($owner, $repo, $pullNumber, $params);
    }

    /** @return Observable<Schema\PullRequestReview> */
    public function listReviews(string $owner, string $repo, int $pullNumber, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListReviews()->call($owner, $repo, $pullNumber, $perPage, $page);
    }

    /** @return Observable<Schema\PullRequestReview> */
    public function listReviewsListing(string $owner, string $repo, int $pullNumber, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListReviewsListing()->call($owner, $repo, $pullNumber, $perPage, $page);
    }

    /** @return */
    public function createReview(string $owner, string $repo, int $pullNumber, array $params): PullRequestReview
    {
        return $this->operators->pulls👷CreateReview()->call($owner, $repo, $pullNumber, $params);
    }

    /** @return */
    public function getReview(string $owner, string $repo, int $pullNumber, int $reviewId): PullRequestReview
    {
        return $this->operators->pulls👷GetReview()->call($owner, $repo, $pullNumber, $reviewId);
    }

    /** @return */
    public function updateReview(string $owner, string $repo, int $pullNumber, int $reviewId, array $params): PullRequestReview
    {
        return $this->operators->pulls👷UpdateReview()->call($owner, $repo, $pullNumber, $reviewId, $params);
    }

    /** @return */
    public function deletePendingReview(string $owner, string $repo, int $pullNumber, int $reviewId): PullRequestReview
    {
        return $this->operators->pulls👷DeletePendingReview()->call($owner, $repo, $pullNumber, $reviewId);
    }

    /** @return Observable<Schema\ReviewComment> */
    public function listCommentsForReview(string $owner, string $repo, int $pullNumber, int $reviewId, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListCommentsForReview()->call($owner, $repo, $pullNumber, $reviewId, $perPage, $page);
    }

    /** @return Observable<Schema\ReviewComment> */
    public function listCommentsForReviewListing(string $owner, string $repo, int $pullNumber, int $reviewId, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListCommentsForReviewListing()->call($owner, $repo, $pullNumber, $reviewId, $perPage, $page);
    }

    /** @return */
    public function dismissReview(string $owner, string $repo, int $pullNumber, int $reviewId, array $params): PullRequestReview
    {
        return $this->operators->pulls👷DismissReview()->call($owner, $repo, $pullNumber, $reviewId, $params);
    }

    /** @return */
    public function submitReview(string $owner, string $repo, int $pullNumber, int $reviewId, array $params): PullRequestReview
    {
        return $this->operators->pulls👷SubmitReview()->call($owner, $repo, $pullNumber, $reviewId, $params);
    }

    /** @return */
    public function updateBranch(string $owner, string $repo, int $pullNumber, array $params): Json
    {
        return $this->operators->pulls👷UpdateBranch()->call($owner, $repo, $pullNumber, $params);
    }
}
