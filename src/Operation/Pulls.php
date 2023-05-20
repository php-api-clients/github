<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;
use React\Promise\PromiseInterface;

use function array_key_exists;

final class Pulls
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function list(string $owner, string $repo, string $head, string $base, string $direction, string $state, string $sort, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\List_::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\List_::class] = new Operator\Pulls\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls());
        }

        return $this->operator[Operator\Pulls\List_::class]->call($owner, $repo, $head, $base, $direction, $state, $sort, $perPage, $page);
    }

    public function create(string $owner, string $repo, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\Create::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\Create::class] = new Operator\Pulls\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls());
        }

        return $this->operator[Operator\Pulls\Create::class]->call($owner, $repo, $params);
    }

    public function listReviewCommentsForRepo(string $owner, string $repo, string $sort, string $direction, string $since, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\ListReviewCommentsForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\ListReviewCommentsForRepo::class] = new Operator\Pulls\ListReviewCommentsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments());
        }

        return $this->operator[Operator\Pulls\ListReviewCommentsForRepo::class]->call($owner, $repo, $sort, $direction, $since, $perPage, $page);
    }

    public function getReviewComment(string $owner, string $repo, int $commentId): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\GetReviewComment::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\GetReviewComment::class] = new Operator\Pulls\GetReviewComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId());
        }

        return $this->operator[Operator\Pulls\GetReviewComment::class]->call($owner, $repo, $commentId);
    }

    public function deleteReviewComment(string $owner, string $repo, int $commentId): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\DeleteReviewComment::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\DeleteReviewComment::class] = new Operator\Pulls\DeleteReviewComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId());
        }

        return $this->operator[Operator\Pulls\DeleteReviewComment::class]->call($owner, $repo, $commentId);
    }

    public function updateReviewComment(string $owner, string $repo, int $commentId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\UpdateReviewComment::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\UpdateReviewComment::class] = new Operator\Pulls\UpdateReviewComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId());
        }

        return $this->operator[Operator\Pulls\UpdateReviewComment::class]->call($owner, $repo, $commentId, $params);
    }

    public function get(string $owner, string $repo, int $pullNumber): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\Get::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\Get::class] = new Operator\Pulls\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber());
        }

        return $this->operator[Operator\Pulls\Get::class]->call($owner, $repo, $pullNumber);
    }

    public function update(string $owner, string $repo, int $pullNumber, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\Update::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\Update::class] = new Operator\Pulls\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber());
        }

        return $this->operator[Operator\Pulls\Update::class]->call($owner, $repo, $pullNumber, $params);
    }

    public function listReviewComments(string $owner, string $repo, int $pullNumber, string $direction, string $since, string $sort, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\ListReviewComments::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\ListReviewComments::class] = new Operator\Pulls\ListReviewComments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments());
        }

        return $this->operator[Operator\Pulls\ListReviewComments::class]->call($owner, $repo, $pullNumber, $direction, $since, $sort, $perPage, $page);
    }

    public function createReviewComment(string $owner, string $repo, int $pullNumber, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\CreateReviewComment::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\CreateReviewComment::class] = new Operator\Pulls\CreateReviewComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments());
        }

        return $this->operator[Operator\Pulls\CreateReviewComment::class]->call($owner, $repo, $pullNumber, $params);
    }

    public function createReplyForReviewComment(string $owner, string $repo, int $pullNumber, int $commentId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\CreateReplyForReviewComment::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\CreateReplyForReviewComment::class] = new Operator\Pulls\CreateReplyForReviewComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments🌀CommentId🌀Replies());
        }

        return $this->operator[Operator\Pulls\CreateReplyForReviewComment::class]->call($owner, $repo, $pullNumber, $commentId, $params);
    }

    public function listCommits(string $owner, string $repo, int $pullNumber, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\ListCommits::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\ListCommits::class] = new Operator\Pulls\ListCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits());
        }

        return $this->operator[Operator\Pulls\ListCommits::class]->call($owner, $repo, $pullNumber, $perPage, $page);
    }

    public function listFiles(string $owner, string $repo, int $pullNumber, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\ListFiles::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\ListFiles::class] = new Operator\Pulls\ListFiles($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files());
        }

        return $this->operator[Operator\Pulls\ListFiles::class]->call($owner, $repo, $pullNumber, $perPage, $page);
    }

    public function checkIfMerged(string $owner, string $repo, int $pullNumber): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\CheckIfMerged::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\CheckIfMerged::class] = new Operator\Pulls\CheckIfMerged($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge());
        }

        return $this->operator[Operator\Pulls\CheckIfMerged::class]->call($owner, $repo, $pullNumber);
    }

    public function merge(string $owner, string $repo, int $pullNumber, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\Merge::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\Merge::class] = new Operator\Pulls\Merge($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Merge());
        }

        return $this->operator[Operator\Pulls\Merge::class]->call($owner, $repo, $pullNumber, $params);
    }

    public function listRequestedReviewers(string $owner, string $repo, int $pullNumber): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\ListRequestedReviewers::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\ListRequestedReviewers::class] = new Operator\Pulls\ListRequestedReviewers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers());
        }

        return $this->operator[Operator\Pulls\ListRequestedReviewers::class]->call($owner, $repo, $pullNumber);
    }

    public function requestReviewers(string $owner, string $repo, int $pullNumber, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\RequestReviewers::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\RequestReviewers::class] = new Operator\Pulls\RequestReviewers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers());
        }

        return $this->operator[Operator\Pulls\RequestReviewers::class]->call($owner, $repo, $pullNumber, $params);
    }

    public function removeRequestedReviewers(string $owner, string $repo, int $pullNumber, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\RemoveRequestedReviewers::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\RemoveRequestedReviewers::class] = new Operator\Pulls\RemoveRequestedReviewers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers());
        }

        return $this->operator[Operator\Pulls\RemoveRequestedReviewers::class]->call($owner, $repo, $pullNumber, $params);
    }

    public function listReviews(string $owner, string $repo, int $pullNumber, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\ListReviews::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\ListReviews::class] = new Operator\Pulls\ListReviews($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews());
        }

        return $this->operator[Operator\Pulls\ListReviews::class]->call($owner, $repo, $pullNumber, $perPage, $page);
    }

    public function createReview(string $owner, string $repo, int $pullNumber, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\CreateReview::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\CreateReview::class] = new Operator\Pulls\CreateReview($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews());
        }

        return $this->operator[Operator\Pulls\CreateReview::class]->call($owner, $repo, $pullNumber, $params);
    }

    public function getReview(string $owner, string $repo, int $pullNumber, int $reviewId): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\GetReview::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\GetReview::class] = new Operator\Pulls\GetReview($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId());
        }

        return $this->operator[Operator\Pulls\GetReview::class]->call($owner, $repo, $pullNumber, $reviewId);
    }

    public function updateReview(string $owner, string $repo, int $pullNumber, int $reviewId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\UpdateReview::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\UpdateReview::class] = new Operator\Pulls\UpdateReview($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId());
        }

        return $this->operator[Operator\Pulls\UpdateReview::class]->call($owner, $repo, $pullNumber, $reviewId, $params);
    }

    public function deletePendingReview(string $owner, string $repo, int $pullNumber, int $reviewId): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\DeletePendingReview::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\DeletePendingReview::class] = new Operator\Pulls\DeletePendingReview($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId());
        }

        return $this->operator[Operator\Pulls\DeletePendingReview::class]->call($owner, $repo, $pullNumber, $reviewId);
    }

    public function listCommentsForReview(string $owner, string $repo, int $pullNumber, int $reviewId, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\ListCommentsForReview::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\ListCommentsForReview::class] = new Operator\Pulls\ListCommentsForReview($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments());
        }

        return $this->operator[Operator\Pulls\ListCommentsForReview::class]->call($owner, $repo, $pullNumber, $reviewId, $perPage, $page);
    }

    public function dismissReview(string $owner, string $repo, int $pullNumber, int $reviewId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\DismissReview::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\DismissReview::class] = new Operator\Pulls\DismissReview($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Dismissals());
        }

        return $this->operator[Operator\Pulls\DismissReview::class]->call($owner, $repo, $pullNumber, $reviewId, $params);
    }

    public function submitReview(string $owner, string $repo, int $pullNumber, int $reviewId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\SubmitReview::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\SubmitReview::class] = new Operator\Pulls\SubmitReview($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Events());
        }

        return $this->operator[Operator\Pulls\SubmitReview::class]->call($owner, $repo, $pullNumber, $reviewId, $params);
    }

    public function updateBranch(string $owner, string $repo, int $pullNumber, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Pulls\UpdateBranch::class, $this->operator) === false) {
            $this->operator[Operator\Pulls\UpdateBranch::class] = new Operator\Pulls\UpdateBranch($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀UpdateBranch());
        }

        return $this->operator[Operator\Pulls\UpdateBranch::class]->call($owner, $repo, $pullNumber, $params);
    }
}
