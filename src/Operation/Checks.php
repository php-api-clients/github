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

final class Checks
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function create(string $owner, string $repo, array $params): Schema\CheckRun
    {
        if (array_key_exists(Operator\Checks\Create::class, $this->operator) === false) {
            $this->operator[Operator\Checks\Create::class] = new Operator\Checks\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns());
        }

        return $this->operator[Operator\Checks\Create::class]->call($owner, $repo, $params);
    }

    public function get(string $owner, string $repo, int $checkRunId): Schema\CheckRun
    {
        if (array_key_exists(Operator\Checks\Get::class, $this->operator) === false) {
            $this->operator[Operator\Checks\Get::class] = new Operator\Checks\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId());
        }

        return $this->operator[Operator\Checks\Get::class]->call($owner, $repo, $checkRunId);
    }

    public function update(string $owner, string $repo, int $checkRunId, array $params): Schema\CheckRun
    {
        if (array_key_exists(Operator\Checks\Update::class, $this->operator) === false) {
            $this->operator[Operator\Checks\Update::class] = new Operator\Checks\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId());
        }

        return $this->operator[Operator\Checks\Update::class]->call($owner, $repo, $checkRunId, $params);
    }

    public function listAnnotations(string $owner, string $repo, int $checkRunId, int $perPage, int $page): Schema\CheckAnnotation
    {
        if (array_key_exists(Operator\Checks\ListAnnotations::class, $this->operator) === false) {
            $this->operator[Operator\Checks\ListAnnotations::class] = new Operator\Checks\ListAnnotations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations());
        }

        return $this->operator[Operator\Checks\ListAnnotations::class]->call($owner, $repo, $checkRunId, $perPage, $page);
    }

    public function listAnnotationsListing(string $owner, string $repo, int $checkRunId, int $perPage, int $page): Schema\CheckAnnotation
    {
        if (array_key_exists(Operator\Checks\ListAnnotationsListing::class, $this->operator) === false) {
            $this->operator[Operator\Checks\ListAnnotationsListing::class] = new Operator\Checks\ListAnnotationsListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Annotations());
        }

        return $this->operator[Operator\Checks\ListAnnotationsListing::class]->call($owner, $repo, $checkRunId, $perPage, $page);
    }

    public function rerequestRun(string $owner, string $repo, int $checkRunId): Schema\EmptyObject
    {
        if (array_key_exists(Operator\Checks\RerequestRun::class, $this->operator) === false) {
            $this->operator[Operator\Checks\RerequestRun::class] = new Operator\Checks\RerequestRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckRuns🌀CheckRunId🌀Rerequest());
        }

        return $this->operator[Operator\Checks\RerequestRun::class]->call($owner, $repo, $checkRunId);
    }

    public function createSuite(string $owner, string $repo, array $params): Schema\CheckSuite
    {
        if (array_key_exists(Operator\Checks\CreateSuite::class, $this->operator) === false) {
            $this->operator[Operator\Checks\CreateSuite::class] = new Operator\Checks\CreateSuite($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites());
        }

        return $this->operator[Operator\Checks\CreateSuite::class]->call($owner, $repo, $params);
    }

    public function setSuitesPreferences(string $owner, string $repo, array $params): Schema\CheckSuitePreference
    {
        if (array_key_exists(Operator\Checks\SetSuitesPreferences::class, $this->operator) === false) {
            $this->operator[Operator\Checks\SetSuitesPreferences::class] = new Operator\Checks\SetSuitesPreferences($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀Preferences());
        }

        return $this->operator[Operator\Checks\SetSuitesPreferences::class]->call($owner, $repo, $params);
    }

    public function getSuite(string $owner, string $repo, int $checkSuiteId): Schema\CheckSuite
    {
        if (array_key_exists(Operator\Checks\GetSuite::class, $this->operator) === false) {
            $this->operator[Operator\Checks\GetSuite::class] = new Operator\Checks\GetSuite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId());
        }

        return $this->operator[Operator\Checks\GetSuite::class]->call($owner, $repo, $checkSuiteId);
    }

    public function listForSuite(string $owner, string $repo, int $checkSuiteId, string $checkName, string $status, string $filter, int $perPage, int $page): Schema\Operations\Checks\ListForSuite\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Checks\ListForSuite::class, $this->operator) === false) {
            $this->operator[Operator\Checks\ListForSuite::class] = new Operator\Checks\ListForSuite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀CheckRuns());
        }

        return $this->operator[Operator\Checks\ListForSuite::class]->call($owner, $repo, $checkSuiteId, $checkName, $status, $filter, $perPage, $page);
    }

    public function rerequestSuite(string $owner, string $repo, int $checkSuiteId): Schema\EmptyObject
    {
        if (array_key_exists(Operator\Checks\RerequestSuite::class, $this->operator) === false) {
            $this->operator[Operator\Checks\RerequestSuite::class] = new Operator\Checks\RerequestSuite($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀CheckSuites🌀CheckSuiteId🌀Rerequest());
        }

        return $this->operator[Operator\Checks\RerequestSuite::class]->call($owner, $repo, $checkSuiteId);
    }

    public function listForRef(string $owner, string $repo, string $ref, string $checkName, string $status, int $appId, string $filter, int $perPage, int $page): Schema\Operations\Checks\ListForRef\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Checks\ListForRef::class, $this->operator) === false) {
            $this->operator[Operator\Checks\ListForRef::class] = new Operator\Checks\ListForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckRuns());
        }

        return $this->operator[Operator\Checks\ListForRef::class]->call($owner, $repo, $ref, $checkName, $status, $appId, $filter, $perPage, $page);
    }

    public function listSuitesForRef(string $owner, string $repo, string $ref, int $appId, string $checkName, int $perPage, int $page): Schema\Operations\Checks\ListSuitesForRef\Response\ApplicationJson\Ok
    {
        if (array_key_exists(Operator\Checks\ListSuitesForRef::class, $this->operator) === false) {
            $this->operator[Operator\Checks\ListSuitesForRef::class] = new Operator\Checks\ListSuitesForRef($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Commits🌀Ref🌀CheckSuites());
        }

        return $this->operator[Operator\Checks\ListSuitesForRef::class]->call($owner, $repo, $ref, $appId, $checkName, $perPage, $page);
    }
}
