<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Search
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function code(string $q, string $sort, string $order, int $perPage, int $page): Schema\Operations\Search\Code\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Search\Code::class, $this->operator) === false) {
            $this->operator[Operator\Search\Code::class] = new Operator\Search\Code($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Code());
        }

        return $this->operator[Operator\Search\Code::class]->call($q, $sort, $order, $perPage, $page);
    }

    public function commits(string $q, string $sort, string $order, int $perPage, int $page): Schema\Operations\Search\Commits\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Search\Commits::class, $this->operator) === false) {
            $this->operator[Operator\Search\Commits::class] = new Operator\Search\Commits($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Commits());
        }

        return $this->operator[Operator\Search\Commits::class]->call($q, $sort, $order, $perPage, $page);
    }

    public function issuesAndPullRequests(string $q, string $sort, string $order, int $perPage, int $page): Schema\Operations\Search\IssuesAndPullRequests\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Search\IssuesAndPullRequests::class, $this->operator) === false) {
            $this->operator[Operator\Search\IssuesAndPullRequests::class] = new Operator\Search\IssuesAndPullRequests($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Issues());
        }

        return $this->operator[Operator\Search\IssuesAndPullRequests::class]->call($q, $sort, $order, $perPage, $page);
    }

    public function labels(int $repositoryId, string $q, string $sort, string $order, int $perPage, int $page): Schema\Operations\Search\Labels\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Search\Labels::class, $this->operator) === false) {
            $this->operator[Operator\Search\Labels::class] = new Operator\Search\Labels($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Labels());
        }

        return $this->operator[Operator\Search\Labels::class]->call($repositoryId, $q, $sort, $order, $perPage, $page);
    }

    public function repos(string $q, string $sort, string $order, int $perPage, int $page): Schema\Operations\Search\Repos\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Search\Repos::class, $this->operator) === false) {
            $this->operator[Operator\Search\Repos::class] = new Operator\Search\Repos($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Repositories());
        }

        return $this->operator[Operator\Search\Repos::class]->call($q, $sort, $order, $perPage, $page);
    }

    public function topics(string $q, int $perPage, int $page): Schema\Operations\Search\Topics\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Search\Topics::class, $this->operator) === false) {
            $this->operator[Operator\Search\Topics::class] = new Operator\Search\Topics($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Topics());
        }

        return $this->operator[Operator\Search\Topics::class]->call($q, $perPage, $page);
    }

    public function users(string $q, string $sort, string $order, int $perPage, int $page): Schema\Operations\Search\Users\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Search\Users::class, $this->operator) === false) {
            $this->operator[Operator\Search\Users::class] = new Operator\Search\Users($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Search🌀Users());
        }

        return $this->operator[Operator\Search\Users::class]->call($q, $sort, $order, $perPage, $page);
    }
}
