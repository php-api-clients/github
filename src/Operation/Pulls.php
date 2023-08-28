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

final class Pulls
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return iterable<Schema\PullRequestSimple>|array{code:int} */
    public function list(string $owner, string $repo, string $head, string $base, string $direction, string $state, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷List_()->call($owner, $repo, $head, $base, $direction, $state, $sort, $perPage, $page);
    }

    /** @return iterable<Schema\PullRequestSimple>|array{code:int} */
    public function listListing(string $owner, string $repo, string $head, string $base, string $direction, string $state, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListListing()->call($owner, $repo, $head, $base, $direction, $state, $sort, $perPage, $page);
    }

    /** @return Schema\PullRequest */
    public function create(string $owner, string $repo, array $params): PullRequest|array
    {
        return $this->operators->pulls👷Create()->call($owner, $repo, $params);
    }

    /** @return iterable<Schema\PullRequestReviewComment> */
    public function listReviewCommentsForRepo(string $owner, string $repo, string $sort, string $direction, string $since, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListReviewCommentsForRepo()->call($owner, $repo, $sort, $direction, $since, $perPage, $page);
    }

    /** @return iterable<Schema\PullRequestReviewComment> */
    public function listReviewCommentsForRepoListing(string $owner, string $repo, string $sort, string $direction, string $since, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListReviewCommentsForRepoListing()->call($owner, $repo, $sort, $direction, $since, $perPage, $page);
    }

    /** @return Schema\PullRequestReviewComment */
    public function getReviewComment(string $owner, string $repo, int $commentId): PullRequestReviewComment|array
    {
        return $this->operators->pulls👷GetReviewComment()->call($owner, $repo, $commentId);
    }

    /** @return array{code:int} */
    public function deleteReviewComment(string $owner, string $repo, int $commentId): array
    {
        return $this->operators->pulls👷DeleteReviewComment()->call($owner, $repo, $commentId);
    }

    /** @return Schema\PullRequestReviewComment */
    public function updateReviewComment(string $owner, string $repo, int $commentId, array $params): PullRequestReviewComment|array
    {
        return $this->operators->pulls👷UpdateReviewComment()->call($owner, $repo, $commentId, $params);
    }

    /** @return Schema\PullRequest|array{code:int} */
    public function get(string $owner, string $repo, int $pullNumber): PullRequest|array
    {
        return $this->operators->pulls👷Get()->call($owner, $repo, $pullNumber);
    }

    /** @return Schema\PullRequest */
    public function update(string $owner, string $repo, int $pullNumber, array $params): PullRequest|array
    {
        return $this->operators->pulls👷Update()->call($owner, $repo, $pullNumber, $params);
    }

    /** @return iterable<Schema\PullRequestReviewComment> */
    public function listReviewComments(string $owner, string $repo, int $pullNumber, string $direction, string $since, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListReviewComments()->call($owner, $repo, $pullNumber, $direction, $since, $sort, $perPage, $page);
    }

    /** @return iterable<Schema\PullRequestReviewComment> */
    public function listReviewCommentsListing(string $owner, string $repo, int $pullNumber, string $direction, string $since, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListReviewCommentsListing()->call($owner, $repo, $pullNumber, $direction, $since, $sort, $perPage, $page);
    }

    /** @return Schema\PullRequestReviewComment */
    public function createReviewComment(string $owner, string $repo, int $pullNumber, array $params): PullRequestReviewComment|array
    {
        return $this->operators->pulls👷CreateReviewComment()->call($owner, $repo, $pullNumber, $params);
    }

    /** @return Schema\PullRequestReviewComment */
    public function createReplyForReviewComment(string $owner, string $repo, int $pullNumber, int $commentId, array $params): PullRequestReviewComment|array
    {
        return $this->operators->pulls👷CreateReplyForReviewComment()->call($owner, $repo, $pullNumber, $commentId, $params);
    }

    /** @return iterable<Schema\Commit> */
    public function listCommits(string $owner, string $repo, int $pullNumber, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListCommits()->call($owner, $repo, $pullNumber, $perPage, $page);
    }

    /** @return iterable<Schema\Commit> */
    public function listCommitsListing(string $owner, string $repo, int $pullNumber, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListCommitsListing()->call($owner, $repo, $pullNumber, $perPage, $page);
    }

    /** @return iterable<Schema\DiffEntry> */
    public function listFiles(string $owner, string $repo, int $pullNumber, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListFiles()->call($owner, $repo, $pullNumber, $perPage, $page);
    }

    /** @return iterable<Schema\DiffEntry> */
    public function listFilesListing(string $owner, string $repo, int $pullNumber, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListFilesListing()->call($owner, $repo, $pullNumber, $perPage, $page);
    }

    /** @return array{code:int} */
    public function checkIfMerged(string $owner, string $repo, int $pullNumber): array
    {
        return $this->operators->pulls👷CheckIfMerged()->call($owner, $repo, $pullNumber);
    }

    /** @return Schema\PullRequestMergeResult */
    public function merge(string $owner, string $repo, int $pullNumber, array $params): PullRequestMergeResult|array
    {
        return $this->operators->pulls👷Merge()->call($owner, $repo, $pullNumber, $params);
    }

    /** @return Schema\PullRequestReviewRequest */
    public function listRequestedReviewers(string $owner, string $repo, int $pullNumber): PullRequestReviewRequest|array
    {
        return $this->operators->pulls👷ListRequestedReviewers()->call($owner, $repo, $pullNumber);
    }

    /** @return Schema\PullRequestSimple|array{code:int} */
    public function requestReviewers(string $owner, string $repo, int $pullNumber, array $params): PullRequestSimple|array
    {
        return $this->operators->pulls👷RequestReviewers()->call($owner, $repo, $pullNumber, $params);
    }

    /** @return Schema\PullRequestSimple */
    public function removeRequestedReviewers(string $owner, string $repo, int $pullNumber, array $params): PullRequestSimple|array
    {
        return $this->operators->pulls👷RemoveRequestedReviewers()->call($owner, $repo, $pullNumber, $params);
    }

    /** @return iterable<Schema\PullRequestReview> */
    public function listReviews(string $owner, string $repo, int $pullNumber, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListReviews()->call($owner, $repo, $pullNumber, $perPage, $page);
    }

    /** @return iterable<Schema\PullRequestReview> */
    public function listReviewsListing(string $owner, string $repo, int $pullNumber, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListReviewsListing()->call($owner, $repo, $pullNumber, $perPage, $page);
    }

    /** @return Schema\PullRequestReview */
    public function createReview(string $owner, string $repo, int $pullNumber, array $params): PullRequestReview|array
    {
        return $this->operators->pulls👷CreateReview()->call($owner, $repo, $pullNumber, $params);
    }

    /** @return Schema\PullRequestReview */
    public function getReview(string $owner, string $repo, int $pullNumber, int $reviewId): PullRequestReview|array
    {
        return $this->operators->pulls👷GetReview()->call($owner, $repo, $pullNumber, $reviewId);
    }

    /** @return Schema\PullRequestReview */
    public function updateReview(string $owner, string $repo, int $pullNumber, int $reviewId, array $params): PullRequestReview|array
    {
        return $this->operators->pulls👷UpdateReview()->call($owner, $repo, $pullNumber, $reviewId, $params);
    }

    /** @return Schema\PullRequestReview */
    public function deletePendingReview(string $owner, string $repo, int $pullNumber, int $reviewId): PullRequestReview|array
    {
        return $this->operators->pulls👷DeletePendingReview()->call($owner, $repo, $pullNumber, $reviewId);
    }

    /** @return iterable<Schema\ReviewComment> */
    public function listCommentsForReview(string $owner, string $repo, int $pullNumber, int $reviewId, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListCommentsForReview()->call($owner, $repo, $pullNumber, $reviewId, $perPage, $page);
    }

    /** @return iterable<Schema\ReviewComment> */
    public function listCommentsForReviewListing(string $owner, string $repo, int $pullNumber, int $reviewId, int $perPage, int $page): iterable
    {
        return $this->operators->pulls👷ListCommentsForReviewListing()->call($owner, $repo, $pullNumber, $reviewId, $perPage, $page);
    }

    /** @return Schema\PullRequestReview */
    public function dismissReview(string $owner, string $repo, int $pullNumber, int $reviewId, array $params): PullRequestReview|array
    {
        return $this->operators->pulls👷DismissReview()->call($owner, $repo, $pullNumber, $reviewId, $params);
    }

    /** @return Schema\PullRequestReview */
    public function submitReview(string $owner, string $repo, int $pullNumber, int $reviewId, array $params): PullRequestReview|array
    {
        return $this->operators->pulls👷SubmitReview()->call($owner, $repo, $pullNumber, $reviewId, $params);
    }

    /** @return Schema\Operations\Pulls\UpdateBranch\Response\ApplicationJson\Accepted\Application\Json */
    public function updateBranch(string $owner, string $repo, int $pullNumber, array $params): Json|array
    {
        return $this->operators->pulls👷UpdateBranch()->call($owner, $repo, $pullNumber, $params);
    }
}
