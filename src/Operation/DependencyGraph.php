<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\DependencyGraphSpdxSbom;
use ApiClients\Client\GitHub\Schema\Operations\DependencyGraph\CreateRepositorySnapshot\Response\ApplicationJson\Created;

final class DependencyGraph
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\DependencyGraphDiff> */
    public function diffRange(string $owner, string $repo, string $basehead, string $name): iterable
    {
        return $this->operators->dependencyGraph👷DiffRange()->call($owner, $repo, $basehead, $name);
    }

    /** @return */
    public function exportSbom(string $owner, string $repo): DependencyGraphSpdxSbom|array
    {
        return $this->operators->dependencyGraph👷ExportSbom()->call($owner, $repo);
    }

    /** @return */
    public function createRepositorySnapshot(string $owner, string $repo, array $params): Created|array
    {
        return $this->operators->dependencyGraph👷CreateRepositorySnapshot()->call($owner, $repo, $params);
    }
}
