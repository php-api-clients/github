<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\PullRequest;
use ApiClients\Client\GitHub\Schema\PullRequestReview;
use ApiClients\Client\GitHub\Schema\PullRequestReviewComment;
use ApiClients\Client\GitHub\Schema\PullRequestReviewRequest;
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

    /** @return (iterable<Schema\PullRequestSimple> | array{code: int}) */
    public function list_(array $params): iterable
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
        if (array_key_exists('head', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: head');
        }

        $arguments['head'] = $params['head'];
        unset($params['head']);
        if (array_key_exists('base', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: base');
        }

        $arguments['base'] = $params['base'];
        unset($params['base']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('state', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: state');
        }

        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Pulls::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls();
        }

        $operator = new Operator\Pulls\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['head'], $arguments['base'], $arguments['direction'], $arguments['state'], $arguments['sort'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\PullRequestReviewComment> */
    public function listReviewCommentsForRepo(array $params): iterable
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
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('since', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: since');
        }

        $arguments['since'] = $params['since'];
        unset($params['since']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments();
        }

        $operator = new Operator\Pulls\ListReviewCommentsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['sort'], $arguments['direction'], $arguments['since'], $arguments['per_page'], $arguments['page']);
    }

    /** @return (Schema\PullRequest | array{code: int}) */
    public function get(array $params): PullRequest|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber();
        }

        $operator = new Operator\Pulls\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['pull_number']);
    }

    /** @return */
    public function getReviewComment(array $params): PullRequestReviewComment|array
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
        if (array_key_exists('comment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: comment_id');
        }

        $arguments['comment_id'] = $params['comment_id'];
        unset($params['comment_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀Comments🌀CommentId();
        }

        $operator = new Operator\Pulls\GetReviewComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\Comments\CommentId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['comment_id']);
    }

    /** @return iterable<Schema\PullRequestReviewComment> */
    public function listReviewComments(array $params): iterable
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
        if (array_key_exists('direction', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: direction');
        }

        $arguments['direction'] = $params['direction'];
        unset($params['direction']);
        if (array_key_exists('since', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: since');
        }

        $arguments['since'] = $params['since'];
        unset($params['since']);
        if (array_key_exists('sort', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sort');
        }

        $arguments['sort'] = $params['sort'];
        unset($params['sort']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Comments();
        }

        $operator = new Operator\Pulls\ListReviewComments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Comments::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['pull_number'], $arguments['direction'], $arguments['since'], $arguments['sort'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\Commit> */
    public function listCommits(array $params): iterable
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
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Commits::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Commits::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Commits();
        }

        $operator = new Operator\Pulls\ListCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Commits::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['pull_number'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<Schema\DiffEntry> */
    public function listFiles(array $params): iterable
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
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Files::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Files::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Files();
        }

        $operator = new Operator\Pulls\ListFiles($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Files::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['pull_number'], $arguments['per_page'], $arguments['page']);
    }

    /** @return array{code: int} */
    public function checkIfMerged(array $params): array
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
        $operator = new Operator\Pulls\CheckIfMerged($this->browser, $this->authentication);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['pull_number']);
    }

    /** @return */
    public function listRequestedReviewers(array $params): PullRequestReviewRequest|array
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

        $operator = new Operator\Pulls\ListRequestedReviewers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\RequestedReviewers::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['pull_number']);
    }

    /** @return iterable<Schema\PullRequestReview> */
    public function listReviews(array $params): iterable
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
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews();
        }

        $operator = new Operator\Pulls\ListReviews($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['pull_number'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getReview(array $params): PullRequestReview|array
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId();
        }

        $operator = new Operator\Pulls\GetReview($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['pull_number'], $arguments['review_id']);
    }

    /** @return iterable<Schema\ReviewComment> */
    public function listCommentsForReview(array $params): iterable
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
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Comments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Comments::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Pulls🌀PullNumber🌀Reviews🌀ReviewId🌀Comments();
        }

        $operator = new Operator\Pulls\ListCommentsForReview($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Pulls\PullNumber\Reviews\ReviewId\Comments::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['pull_number'], $arguments['review_id'], $arguments['per_page'], $arguments['page']);
    }
}
