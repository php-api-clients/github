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

final class SecurityAdvisories
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function listGlobalAdvisories(string $ghsaId, string $cveId, string $ecosystem, string $severity, mixed $cwes, bool $isWithdrawn, mixed $affects, string $published, string $updated, string $modified, string $before, string $after, string $type, string $direction, int $perPage, string $sort): PromiseInterface
    {
        if (array_key_exists(Operator\SecurityAdvisories\ListGlobalAdvisories::class, $this->operator) === false) {
            $this->operator[Operator\SecurityAdvisories\ListGlobalAdvisories::class] = new Operator\SecurityAdvisories\ListGlobalAdvisories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Advisories());
        }

        return $this->operator[Operator\SecurityAdvisories\ListGlobalAdvisories::class]->call($ghsaId, $cveId, $ecosystem, $severity, $cwes, $isWithdrawn, $affects, $published, $updated, $modified, $before, $after, $type, $direction, $perPage, $sort);
    }

    public function getGlobalAdvisory(string $ghsaId): PromiseInterface
    {
        if (array_key_exists(Operator\SecurityAdvisories\GetGlobalAdvisory::class, $this->operator) === false) {
            $this->operator[Operator\SecurityAdvisories\GetGlobalAdvisory::class] = new Operator\SecurityAdvisories\GetGlobalAdvisory($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Advisories🌀GhsaId());
        }

        return $this->operator[Operator\SecurityAdvisories\GetGlobalAdvisory::class]->call($ghsaId);
    }

    public function listRepositoryAdvisories(string $owner, string $repo, string $before, string $after, string $state, string $direction, string $sort, int $perPage): PromiseInterface
    {
        if (array_key_exists(Operator\SecurityAdvisories\ListRepositoryAdvisories::class, $this->operator) === false) {
            $this->operator[Operator\SecurityAdvisories\ListRepositoryAdvisories::class] = new Operator\SecurityAdvisories\ListRepositoryAdvisories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories());
        }

        return $this->operator[Operator\SecurityAdvisories\ListRepositoryAdvisories::class]->call($owner, $repo, $before, $after, $state, $direction, $sort, $perPage);
    }

    public function createRepositoryAdvisory(string $owner, string $repo, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\SecurityAdvisories\CreateRepositoryAdvisory::class, $this->operator) === false) {
            $this->operator[Operator\SecurityAdvisories\CreateRepositoryAdvisory::class] = new Operator\SecurityAdvisories\CreateRepositoryAdvisory($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories());
        }

        return $this->operator[Operator\SecurityAdvisories\CreateRepositoryAdvisory::class]->call($owner, $repo, $params);
    }

    public function createPrivateVulnerabilityReport(string $owner, string $repo, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\SecurityAdvisories\CreatePrivateVulnerabilityReport::class, $this->operator) === false) {
            $this->operator[Operator\SecurityAdvisories\CreatePrivateVulnerabilityReport::class] = new Operator\SecurityAdvisories\CreatePrivateVulnerabilityReport($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀Reports());
        }

        return $this->operator[Operator\SecurityAdvisories\CreatePrivateVulnerabilityReport::class]->call($owner, $repo, $params);
    }

    public function getRepositoryAdvisory(string $owner, string $repo, string $ghsaId): PromiseInterface
    {
        if (array_key_exists(Operator\SecurityAdvisories\GetRepositoryAdvisory::class, $this->operator) === false) {
            $this->operator[Operator\SecurityAdvisories\GetRepositoryAdvisory::class] = new Operator\SecurityAdvisories\GetRepositoryAdvisory($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId());
        }

        return $this->operator[Operator\SecurityAdvisories\GetRepositoryAdvisory::class]->call($owner, $repo, $ghsaId);
    }

    public function updateRepositoryAdvisory(string $owner, string $repo, string $ghsaId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\SecurityAdvisories\UpdateRepositoryAdvisory::class, $this->operator) === false) {
            $this->operator[Operator\SecurityAdvisories\UpdateRepositoryAdvisory::class] = new Operator\SecurityAdvisories\UpdateRepositoryAdvisory($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId());
        }

        return $this->operator[Operator\SecurityAdvisories\UpdateRepositoryAdvisory::class]->call($owner, $repo, $ghsaId, $params);
    }

    public function createRepositoryAdvisoryCveRequest(string $owner, string $repo, string $ghsaId): PromiseInterface
    {
        if (array_key_exists(Operator\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest::class, $this->operator) === false) {
            $this->operator[Operator\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest::class] = new Operator\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀SecurityAdvisories🌀GhsaId🌀Cve());
        }

        return $this->operator[Operator\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest::class]->call($owner, $repo, $ghsaId);
    }
}
