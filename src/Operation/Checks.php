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

    /** @return Schema\CheckRun */
    public function create(string $owner, string $repo, array $params): CheckRun|array
    {
        return $this->operators->checks👷Create()->call($owner, $repo, $params);
    }

    /** @return Schema\CheckRun */
    public function get(string $owner, string $repo, int $checkRunId): CheckRun|array
    {
        return $this->operators->checks👷Get()->call($owner, $repo, $checkRunId);
    }

    /** @return Schema\CheckRun */
    public function update(string $owner, string $repo, int $checkRunId, array $params): CheckRun|array
    {
        return $this->operators->checks👷Update()->call($owner, $repo, $checkRunId, $params);
    }

    /** @return iterable<Schema\CheckAnnotation> */
    public function listAnnotations(string $owner, string $repo, int $checkRunId, int $perPage, int $page): iterable
    {
        return $this->operators->checks👷ListAnnotations()->call($owner, $repo, $checkRunId, $perPage, $page);
    }

    /** @return iterable<Schema\CheckAnnotation> */
    public function listAnnotationsListing(string $owner, string $repo, int $checkRunId, int $perPage, int $page): iterable
    {
        return $this->operators->checks👷ListAnnotationsListing()->call($owner, $repo, $checkRunId, $perPage, $page);
    }

    /** @return Schema\EmptyObject */
    public function rerequestRun(string $owner, string $repo, int $checkRunId): EmptyObject|array
    {
        return $this->operators->checks👷RerequestRun()->call($owner, $repo, $checkRunId);
    }

    /** @return Schema\CheckSuite */
    public function createSuite(string $owner, string $repo, array $params): CheckSuite|array
    {
        return $this->operators->checks👷CreateSuite()->call($owner, $repo, $params);
    }

    /** @return Schema\CheckSuitePreference */
    public function setSuitesPreferences(string $owner, string $repo, array $params): CheckSuitePreference|array
    {
        return $this->operators->checks👷SetSuitesPreferences()->call($owner, $repo, $params);
    }

    /** @return Schema\CheckSuite */
    public function getSuite(string $owner, string $repo, int $checkSuiteId): CheckSuite|array
    {
        return $this->operators->checks👷GetSuite()->call($owner, $repo, $checkSuiteId);
    }

    /** @return Schema\Operations\Checks\ListForSuite\Response\ApplicationJson\Ok */
    public function listForSuite(string $owner, string $repo, int $checkSuiteId, string $checkName, string $status, string $filter, int $perPage, int $page): Ok|array
    {
        return $this->operators->checks👷ListForSuite()->call($owner, $repo, $checkSuiteId, $checkName, $status, $filter, $perPage, $page);
    }

    /** @return Schema\EmptyObject */
    public function rerequestSuite(string $owner, string $repo, int $checkSuiteId): EmptyObject|array
    {
        return $this->operators->checks👷RerequestSuite()->call($owner, $repo, $checkSuiteId);
    }

    /** @return Schema\Operations\Checks\ListForRef\Response\ApplicationJson\Ok\Application\Json */
    public function listForRef(string $owner, string $repo, string $ref, string $checkName, string $status, int $appId, string $filter, int $perPage, int $page): Json|array
    {
        return $this->operators->checks👷ListForRef()->call($owner, $repo, $ref, $checkName, $status, $appId, $filter, $perPage, $page);
    }

    /** @return Schema\Operations\Checks\ListSuitesForRef\Response\ApplicationJson\Ok */
    public function listSuitesForRef(string $owner, string $repo, string $ref, int $appId, string $checkName, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Checks\ListSuitesForRef\Response\ApplicationJson\Ok|array
    {
        return $this->operators->checks👷ListSuitesForRef()->call($owner, $repo, $ref, $appId, $checkName, $perPage, $page);
    }
}
