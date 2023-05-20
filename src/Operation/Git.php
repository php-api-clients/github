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

final class Git
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function createBlob(string $owner, string $repo, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Git\CreateBlob::class, $this->operator) === false) {
            $this->operator[Operator\Git\CreateBlob::class] = new Operator\Git\CreateBlob($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs());
        }

        return $this->operator[Operator\Git\CreateBlob::class]->call($owner, $repo, $params);
    }

    public function getBlob(string $owner, string $repo, string $fileSha): PromiseInterface
    {
        if (array_key_exists(Operator\Git\GetBlob::class, $this->operator) === false) {
            $this->operator[Operator\Git\GetBlob::class] = new Operator\Git\GetBlob($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Blobs🌀FileSha());
        }

        return $this->operator[Operator\Git\GetBlob::class]->call($owner, $repo, $fileSha);
    }

    public function createCommit(string $owner, string $repo, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Git\CreateCommit::class, $this->operator) === false) {
            $this->operator[Operator\Git\CreateCommit::class] = new Operator\Git\CreateCommit($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits());
        }

        return $this->operator[Operator\Git\CreateCommit::class]->call($owner, $repo, $params);
    }

    public function getCommit(string $owner, string $repo, string $commitSha): PromiseInterface
    {
        if (array_key_exists(Operator\Git\GetCommit::class, $this->operator) === false) {
            $this->operator[Operator\Git\GetCommit::class] = new Operator\Git\GetCommit($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Commits🌀CommitSha());
        }

        return $this->operator[Operator\Git\GetCommit::class]->call($owner, $repo, $commitSha);
    }

    public function listMatchingRefs(string $owner, string $repo, string $ref): PromiseInterface
    {
        if (array_key_exists(Operator\Git\ListMatchingRefs::class, $this->operator) === false) {
            $this->operator[Operator\Git\ListMatchingRefs::class] = new Operator\Git\ListMatchingRefs($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀MatchingRefs🌀Ref());
        }

        return $this->operator[Operator\Git\ListMatchingRefs::class]->call($owner, $repo, $ref);
    }

    public function getRef(string $owner, string $repo, string $ref): PromiseInterface
    {
        if (array_key_exists(Operator\Git\GetRef::class, $this->operator) === false) {
            $this->operator[Operator\Git\GetRef::class] = new Operator\Git\GetRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Ref🌀Ref());
        }

        return $this->operator[Operator\Git\GetRef::class]->call($owner, $repo, $ref);
    }

    public function createRef(string $owner, string $repo, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Git\CreateRef::class, $this->operator) === false) {
            $this->operator[Operator\Git\CreateRef::class] = new Operator\Git\CreateRef($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs());
        }

        return $this->operator[Operator\Git\CreateRef::class]->call($owner, $repo, $params);
    }

    public function deleteRef(string $owner, string $repo, string $ref): PromiseInterface
    {
        if (array_key_exists(Operator\Git\DeleteRef::class, $this->operator) === false) {
            $this->operator[Operator\Git\DeleteRef::class] = new Operator\Git\DeleteRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref());
        }

        return $this->operator[Operator\Git\DeleteRef::class]->call($owner, $repo, $ref);
    }

    public function updateRef(string $owner, string $repo, string $ref, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Git\UpdateRef::class, $this->operator) === false) {
            $this->operator[Operator\Git\UpdateRef::class] = new Operator\Git\UpdateRef($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Refs🌀Ref());
        }

        return $this->operator[Operator\Git\UpdateRef::class]->call($owner, $repo, $ref, $params);
    }

    public function createTag(string $owner, string $repo, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Git\CreateTag::class, $this->operator) === false) {
            $this->operator[Operator\Git\CreateTag::class] = new Operator\Git\CreateTag($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags());
        }

        return $this->operator[Operator\Git\CreateTag::class]->call($owner, $repo, $params);
    }

    public function getTag(string $owner, string $repo, string $tagSha): PromiseInterface
    {
        if (array_key_exists(Operator\Git\GetTag::class, $this->operator) === false) {
            $this->operator[Operator\Git\GetTag::class] = new Operator\Git\GetTag($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Tags🌀TagSha());
        }

        return $this->operator[Operator\Git\GetTag::class]->call($owner, $repo, $tagSha);
    }

    public function createTree(string $owner, string $repo, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Git\CreateTree::class, $this->operator) === false) {
            $this->operator[Operator\Git\CreateTree::class] = new Operator\Git\CreateTree($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees());
        }

        return $this->operator[Operator\Git\CreateTree::class]->call($owner, $repo, $params);
    }

    public function getTree(string $owner, string $repo, string $treeSha, string $recursive): PromiseInterface
    {
        if (array_key_exists(Operator\Git\GetTree::class, $this->operator) === false) {
            $this->operator[Operator\Git\GetTree::class] = new Operator\Git\GetTree($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Git🌀Trees🌀TreeSha());
        }

        return $this->operator[Operator\Git\GetTree::class]->call($owner, $repo, $treeSha, $recursive);
    }
}
