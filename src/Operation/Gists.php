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

final class Gists
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function list(string $since, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Gists\List_::class, $this->operator) === false) {
            $this->operator[Operator\Gists\List_::class] = new Operator\Gists\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists());
        }

        return $this->operator[Operator\Gists\List_::class]->call($since, $perPage, $page);
    }

    public function create(array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Gists\Create::class, $this->operator) === false) {
            $this->operator[Operator\Gists\Create::class] = new Operator\Gists\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists());
        }

        return $this->operator[Operator\Gists\Create::class]->call($params);
    }

    public function listPublic(string $since, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Gists\ListPublic::class, $this->operator) === false) {
            $this->operator[Operator\Gists\ListPublic::class] = new Operator\Gists\ListPublic($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀Public_());
        }

        return $this->operator[Operator\Gists\ListPublic::class]->call($since, $perPage, $page);
    }

    public function listStarred(string $since, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Gists\ListStarred::class, $this->operator) === false) {
            $this->operator[Operator\Gists\ListStarred::class] = new Operator\Gists\ListStarred($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀Starred());
        }

        return $this->operator[Operator\Gists\ListStarred::class]->call($since, $perPage, $page);
    }

    public function get(string $gistId): PromiseInterface
    {
        if (array_key_exists(Operator\Gists\Get::class, $this->operator) === false) {
            $this->operator[Operator\Gists\Get::class] = new Operator\Gists\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId());
        }

        return $this->operator[Operator\Gists\Get::class]->call($gistId);
    }

    public function delete(string $gistId): PromiseInterface
    {
        if (array_key_exists(Operator\Gists\Delete::class, $this->operator) === false) {
            $this->operator[Operator\Gists\Delete::class] = new Operator\Gists\Delete($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId());
        }

        return $this->operator[Operator\Gists\Delete::class]->call($gistId);
    }

    public function update(string $gistId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Gists\Update::class, $this->operator) === false) {
            $this->operator[Operator\Gists\Update::class] = new Operator\Gists\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId());
        }

        return $this->operator[Operator\Gists\Update::class]->call($gistId, $params);
    }

    public function listComments(string $gistId, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Gists\ListComments::class, $this->operator) === false) {
            $this->operator[Operator\Gists\ListComments::class] = new Operator\Gists\ListComments($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments());
        }

        return $this->operator[Operator\Gists\ListComments::class]->call($gistId, $perPage, $page);
    }

    public function createComment(string $gistId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Gists\CreateComment::class, $this->operator) === false) {
            $this->operator[Operator\Gists\CreateComment::class] = new Operator\Gists\CreateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments());
        }

        return $this->operator[Operator\Gists\CreateComment::class]->call($gistId, $params);
    }

    public function getComment(string $gistId, int $commentId): PromiseInterface
    {
        if (array_key_exists(Operator\Gists\GetComment::class, $this->operator) === false) {
            $this->operator[Operator\Gists\GetComment::class] = new Operator\Gists\GetComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments🌀CommentId());
        }

        return $this->operator[Operator\Gists\GetComment::class]->call($gistId, $commentId);
    }

    public function deleteComment(string $gistId, int $commentId): PromiseInterface
    {
        if (array_key_exists(Operator\Gists\DeleteComment::class, $this->operator) === false) {
            $this->operator[Operator\Gists\DeleteComment::class] = new Operator\Gists\DeleteComment($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments🌀CommentId());
        }

        return $this->operator[Operator\Gists\DeleteComment::class]->call($gistId, $commentId);
    }

    public function updateComment(string $gistId, int $commentId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Gists\UpdateComment::class, $this->operator) === false) {
            $this->operator[Operator\Gists\UpdateComment::class] = new Operator\Gists\UpdateComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Comments🌀CommentId());
        }

        return $this->operator[Operator\Gists\UpdateComment::class]->call($gistId, $commentId, $params);
    }

    public function listCommits(string $gistId, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Gists\ListCommits::class, $this->operator) === false) {
            $this->operator[Operator\Gists\ListCommits::class] = new Operator\Gists\ListCommits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Commits());
        }

        return $this->operator[Operator\Gists\ListCommits::class]->call($gistId, $perPage, $page);
    }

    public function listForks(string $gistId, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Gists\ListForks::class, $this->operator) === false) {
            $this->operator[Operator\Gists\ListForks::class] = new Operator\Gists\ListForks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Forks());
        }

        return $this->operator[Operator\Gists\ListForks::class]->call($gistId, $perPage, $page);
    }

    public function fork(string $gistId): PromiseInterface
    {
        if (array_key_exists(Operator\Gists\Fork::class, $this->operator) === false) {
            $this->operator[Operator\Gists\Fork::class] = new Operator\Gists\Fork($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Forks());
        }

        return $this->operator[Operator\Gists\Fork::class]->call($gistId);
    }

    public function checkIsStarred(string $gistId): PromiseInterface
    {
        if (array_key_exists(Operator\Gists\CheckIsStarred::class, $this->operator) === false) {
            $this->operator[Operator\Gists\CheckIsStarred::class] = new Operator\Gists\CheckIsStarred($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Star());
        }

        return $this->operator[Operator\Gists\CheckIsStarred::class]->call($gistId);
    }

    public function star(string $gistId): PromiseInterface
    {
        if (array_key_exists(Operator\Gists\Star::class, $this->operator) === false) {
            $this->operator[Operator\Gists\Star::class] = new Operator\Gists\Star($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Star());
        }

        return $this->operator[Operator\Gists\Star::class]->call($gistId);
    }

    public function unstar(string $gistId): PromiseInterface
    {
        if (array_key_exists(Operator\Gists\Unstar::class, $this->operator) === false) {
            $this->operator[Operator\Gists\Unstar::class] = new Operator\Gists\Unstar($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Star());
        }

        return $this->operator[Operator\Gists\Unstar::class]->call($gistId);
    }

    public function getRevision(string $gistId, string $sha): PromiseInterface
    {
        if (array_key_exists(Operator\Gists\GetRevision::class, $this->operator) === false) {
            $this->operator[Operator\Gists\GetRevision::class] = new Operator\Gists\GetRevision($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Gists🌀GistId🌀Sha());
        }

        return $this->operator[Operator\Gists\GetRevision::class]->call($gistId, $sha);
    }

    public function listForUser(string $username, string $since, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Gists\ListForUser::class, $this->operator) === false) {
            $this->operator[Operator\Gists\ListForUser::class] = new Operator\Gists\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Gists());
        }

        return $this->operator[Operator\Gists\ListForUser::class]->call($username, $since, $perPage, $page);
    }
}
