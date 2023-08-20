<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Post;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\PullRequest;
use ApiClients\Client\GitHub\Schema\PullRequestReview;
use ApiClients\Client\GitHub\Schema\PullRequestReviewComment;
use ApiClients\Client\GitHub\Schema\PullRequestSimple;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Pulls
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function create(array $params): PullRequest|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Pulls::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls();
        }

        $operator = new Operator\Pulls\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return */
    public function createReviewComment(array $params): PullRequestReviewComment|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('pull_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pull_number');
        }

        $arguments['pull_number'] = $params['pull_number'];
        unset($params['pull_number']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments();
        }

        $operator = new Operator\Pulls\CreateReviewComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['pull_number'], $params);
    }

    /** @return (Schema\PullRequestSimple | array{code: int}) */
    public function requestReviewers(array $params): PullRequestSimple|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('pull_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pull_number');
        }

        $arguments['pull_number'] = $params['pull_number'];
        unset($params['pull_number']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\RequestedReviewers::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\RequestedReviewers::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀RequestedReviewers();
        }

        $operator = new Operator\Pulls\RequestReviewers($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\RequestedReviewers::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['pull_number'], $params);
    }

    /** @return */
    public function createReview(array $params): PullRequestReview|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('pull_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pull_number');
        }

        $arguments['pull_number'] = $params['pull_number'];
        unset($params['pull_number']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews();
        }

        $operator = new Operator\Pulls\CreateReview($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['pull_number'], $params);
    }

    /** @return */
    public function createReplyForReviewComment(array $params): PullRequestReviewComment|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('pull_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pull_number');
        }

        $arguments['pull_number'] = $params['pull_number'];
        unset($params['pull_number']);
        if (array_key_exists('comment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: comment_id');
        }

        $arguments['comment_id'] = $params['comment_id'];
        unset($params['comment_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments\CommentId\Replies::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments\CommentId\Replies::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments🌀CommentId🌀Replies();
        }

        $operator = new Operator\Pulls\CreateReplyForReviewComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments\CommentId\Replies::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['pull_number'], $arguments['comment_id'], $params);
    }

    /** @return */
    public function submitReview(array $params): PullRequestReview|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('pull_number', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: pull_number');
        }

        $arguments['pull_number'] = $params['pull_number'];
        unset($params['pull_number']);
        if (array_key_exists('review_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: review_id');
        }

        $arguments['review_id'] = $params['review_id'];
        unset($params['review_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Events::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Events::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Events();
        }

        $operator = new Operator\Pulls\SubmitReview($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Events::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['pull_number'], $arguments['review_id'], $params);
    }
}
