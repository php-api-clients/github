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

final class DependencyGraph
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function diffRange(string $owner, string $repo, string $basehead, string $name): Schema\DependencyGraphDiff
    {
        if (array_key_exists(Operator\DependencyGraph\DiffRange::class, $this->operator) === false) {
            $this->operator[Operator\DependencyGraph\DiffRange::class] = new Operator\DependencyGraph\DiffRange($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Compare🌀Basehead());
        }

        return $this->operator[Operator\DependencyGraph\DiffRange::class]->call($owner, $repo, $basehead, $name);
    }

    public function exportSbom(string $owner, string $repo): Schema\DependencyGraphSpdxSbom
    {
        if (array_key_exists(Operator\DependencyGraph\ExportSbom::class, $this->operator) === false) {
            $this->operator[Operator\DependencyGraph\ExportSbom::class] = new Operator\DependencyGraph\ExportSbom($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Sbom());
        }

        return $this->operator[Operator\DependencyGraph\ExportSbom::class]->call($owner, $repo);
    }

    public function createRepositorySnapshot(string $owner, string $repo, array $params): Schema\Operations\DependencyGraph\CreateRepositorySnapshot\Response\ApplicationJson\Created
    {
        if (array_key_exists(Operator\DependencyGraph\CreateRepositorySnapshot::class, $this->operator) === false) {
            $this->operator[Operator\DependencyGraph\CreateRepositorySnapshot::class] = new Operator\DependencyGraph\CreateRepositorySnapshot($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀DependencyGraph🌀Snapshots());
        }

        return $this->operator[Operator\DependencyGraph\CreateRepositorySnapshot::class]->call($owner, $repo, $params);
    }
}
