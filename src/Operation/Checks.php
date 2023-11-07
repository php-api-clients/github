<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\CheckRun;
use ApiClients\Client\GitHub\Schema\CheckSuite;
use ApiClients\Client\GitHub\Schema\CheckSuitePreference;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\Operations\Checks\ListForRef\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHub\Schema\Operations\Checks\ListForSuite\Response\ApplicationJson\Ok;

final class Checks
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    public function create(string $owner, string $repo, array $params): CheckRun
    {
        return $this->operators->checks👷Create()->call($owner, $repo, $params);
    }

    public function get(string $owner, string $repo, int $checkRunId): CheckRun
    {
        return $this->operators->checks👷Get()->call($owner, $repo, $checkRunId);
    }

    public function update(string $owner, string $repo, int $checkRunId, array $params): CheckRun
    {
        return $this->operators->checks👷Update()->call($owner, $repo, $checkRunId, $params);
    }

    /** @return iterable<int,Schema\CheckAnnotation> */
    public function listAnnotations(string $owner, string $repo, int $checkRunId, int $perPage, int $page): iterable
    {
        return $this->operators->checks👷ListAnnotations()->call($owner, $repo, $checkRunId, $perPage, $page);
    }

    /** @return iterable<int,Schema\CheckAnnotation> */
    public function listAnnotationsListing(string $owner, string $repo, int $checkRunId, int $perPage, int $page): iterable
    {
        return $this->operators->checks👷ListAnnotationsListing()->call($owner, $repo, $checkRunId, $perPage, $page);
    }

    public function rerequestRun(string $owner, string $repo, int $checkRunId): EmptyObject
    {
        return $this->operators->checks👷RerequestRun()->call($owner, $repo, $checkRunId);
    }

    public function createSuite(string $owner, string $repo, array $params): CheckSuite
    {
        return $this->operators->checks👷CreateSuite()->call($owner, $repo, $params);
    }

    public function setSuitesPreferences(string $owner, string $repo, array $params): CheckSuitePreference
    {
        return $this->operators->checks👷SetSuitesPreferences()->call($owner, $repo, $params);
    }

    public function getSuite(string $owner, string $repo, int $checkSuiteId): CheckSuite
    {
        return $this->operators->checks👷GetSuite()->call($owner, $repo, $checkSuiteId);
    }

    public function listForSuite(string $owner, string $repo, int $checkSuiteId, string $checkName, string $status, string $filter, int $perPage, int $page): Ok
    {
        return $this->operators->checks👷ListForSuite()->call($owner, $repo, $checkSuiteId, $checkName, $status, $filter, $perPage, $page);
    }

    public function rerequestSuite(string $owner, string $repo, int $checkSuiteId): EmptyObject
    {
        return $this->operators->checks👷RerequestSuite()->call($owner, $repo, $checkSuiteId);
    }

    public function listForRef(string $owner, string $repo, string $ref, string $checkName, string $status, int $appId, string $filter, int $perPage, int $page): Json
    {
        return $this->operators->checks👷ListForRef()->call($owner, $repo, $ref, $checkName, $status, $appId, $filter, $perPage, $page);
    }

    public function listSuitesForRef(string $owner, string $repo, string $ref, int $appId, string $checkName, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Checks\ListSuitesForRef\Response\ApplicationJson\Ok
    {
        return $this->operators->checks👷ListSuitesForRef()->call($owner, $repo, $ref, $appId, $checkName, $perPage, $page);
    }
}
