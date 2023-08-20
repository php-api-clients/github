<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\GistComment;
use ApiClients\Client\GitHub\Schema\GistSimple;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Gists
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return (iterable<Schema\BaseGist> | array{code: int}) */
    public function list_(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
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
        if (array_key_exists(Hydrator\Operation\Gists::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Gists::class] = $this->hydrators->getObjectMapperOperation🌀Gists();
        }

        $operator = new Operator\Gists\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists::class]);

        return $operator->call($arguments['since'], $arguments['per_page'], $arguments['page']);
    }

    /** @return (iterable<Schema\BaseGist> | array{code: int}) */
    public function listPublic(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
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
        if (array_key_exists(Hydrator\Operation\Gists\Public_::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Gists\Public_::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀Public_();
        }

        $operator = new Operator\Gists\ListPublic($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\Public_::class]);

        return $operator->call($arguments['since'], $arguments['per_page'], $arguments['page']);
    }

    /** @return (iterable<Schema\BaseGist> | array{code: int}) */
    public function listStarred(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
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
        if (array_key_exists(Hydrator\Operation\Gists\Starred::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Gists\Starred::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀Starred();
        }

        $operator = new Operator\Gists\ListStarred($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\Starred::class]);

        return $operator->call($arguments['since'], $arguments['per_page'], $arguments['page']);
    }

    /** @return (Schema\GistSimple | array{code: int}) */
    public function get(array $params): GistSimple|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('gist_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: gist_id');
        }

        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
        if (array_key_exists(Hydrator\Operation\Gists\GistId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Gists\GistId::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId();
        }

        $operator = new Operator\Gists\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\GistId::class]);

        return $operator->call($arguments['gist_id']);
    }

    /** @return (iterable<Schema\GistComment> | array{code: int}) */
    public function listComments(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('gist_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: gist_id');
        }

        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
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
        if (array_key_exists(Hydrator\Operation\Gists\GistId\Comments::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Gists\GistId\Comments::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments();
        }

        $operator = new Operator\Gists\ListComments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\GistId\Comments::class]);

        return $operator->call($arguments['gist_id'], $arguments['per_page'], $arguments['page']);
    }

    /** @return (iterable<Schema\GistCommit> | array{code: int}) */
    public function listCommits(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('gist_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: gist_id');
        }

        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
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
        if (array_key_exists(Hydrator\Operation\Gists\GistId\Commits::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Gists\GistId\Commits::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Commits();
        }

        $operator = new Operator\Gists\ListCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\GistId\Commits::class]);

        return $operator->call($arguments['gist_id'], $arguments['per_page'], $arguments['page']);
    }

    /** @return (iterable<Schema\GistSimple> | array{code: int}) */
    public function listForks(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('gist_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: gist_id');
        }

        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
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
        if (array_key_exists(Hydrator\Operation\Gists\GistId\Forks::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Gists\GistId\Forks::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Forks();
        }

        $operator = new Operator\Gists\ListForks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\GistId\Forks::class]);

        return $operator->call($arguments['gist_id'], $arguments['per_page'], $arguments['page']);
    }

    /** @return array{code: int} */
    public function checkIsStarred(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('gist_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: gist_id');
        }

        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
        if (array_key_exists(Hydrator\Operation\Gists\GistId\Star::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Gists\GistId\Star::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Star();
        }

        $operator = new Operator\Gists\CheckIsStarred($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\GistId\Star::class]);

        return $operator->call($arguments['gist_id']);
    }

    /** @return */
    public function getRevision(array $params): GistSimple|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('gist_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: gist_id');
        }

        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
        if (array_key_exists('sha', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: sha');
        }

        $arguments['sha'] = $params['sha'];
        unset($params['sha']);
        if (array_key_exists(Hydrator\Operation\Gists\GistId\Sha::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Gists\GistId\Sha::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Sha();
        }

        $operator = new Operator\Gists\GetRevision($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\GistId\Sha::class]);

        return $operator->call($arguments['gist_id'], $arguments['sha']);
    }

    /** @return iterable<Schema\BaseGist> */
    public function listForUser(array $params): iterable
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
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
        if (array_key_exists(Hydrator\Operation\Users\Username\Gists::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Users\Username\Gists::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Gists();
        }

        $operator = new Operator\Gists\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\Username\Gists::class]);

        return $operator->call($arguments['username'], $arguments['since'], $arguments['per_page'], $arguments['page']);
    }

    /** @return (Schema\GistComment | array{code: int}) */
    public function getComment(array $params): GistComment|array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('gist_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: gist_id');
        }

        $arguments['gist_id'] = $params['gist_id'];
        unset($params['gist_id']);
        if (array_key_exists('comment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: comment_id');
        }

        $arguments['comment_id'] = $params['comment_id'];
        unset($params['comment_id']);
        if (array_key_exists(Hydrator\Operation\Gists\GistId\Comments\CommentId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Gists\GistId\Comments\CommentId::class] = $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments🌀CommentId();
        }

        $operator = new Operator\Gists\GetComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Gists\GistId\Comments\CommentId::class]);

        return $operator->call($arguments['gist_id'], $arguments['comment_id']);
    }
}
