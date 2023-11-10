<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\GlobalAdvisory;
use ApiClients\Client\GitHub\Schema\Operations\SecurityAdvisories\CreateRepositoryAdvisoryCveRequest\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHub\Schema\RepositoryAdvisory;

final class SecurityAdvisories
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\GlobalAdvisory> */
    public function listGlobalAdvisories(string $ghsaId, string $cveId, string $ecosystem, string $severity, mixed $cwes, bool $isWithdrawn, mixed $affects, string $published, string $updated, string $modified, string $before, string $after, string $type, string $direction, int $perPage, string $sort): iterable
    {
        return $this->operators->securityAdvisories👷ListGlobalAdvisories()->call($ghsaId, $cveId, $ecosystem, $severity, $cwes, $isWithdrawn, $affects, $published, $updated, $modified, $before, $after, $type, $direction, $perPage, $sort);
    }

    /** @return */
    public function getGlobalAdvisory(string $ghsaId): GlobalAdvisory
    {
        return $this->operators->securityAdvisories👷GetGlobalAdvisory()->call($ghsaId);
    }

    /** @return Observable<Schema\RepositoryAdvisory> */
    public function listOrgRepositoryAdvisories(string $org, string $before, string $after, string $state, string $direction, string $sort, int $perPage): iterable
    {
        return $this->operators->securityAdvisories👷ListOrgRepositoryAdvisories()->call($org, $before, $after, $state, $direction, $sort, $perPage);
    }

    /** @return Observable<Schema\RepositoryAdvisory> */
    public function listRepositoryAdvisories(string $owner, string $repo, string $before, string $after, string $state, string $direction, string $sort, int $perPage): iterable
    {
        return $this->operators->securityAdvisories👷ListRepositoryAdvisories()->call($owner, $repo, $before, $after, $state, $direction, $sort, $perPage);
    }

    /** @return */
    public function createRepositoryAdvisory(string $owner, string $repo, array $params): RepositoryAdvisory
    {
        return $this->operators->securityAdvisories👷CreateRepositoryAdvisory()->call($owner, $repo, $params);
    }

    /** @return */
    public function createPrivateVulnerabilityReport(string $owner, string $repo, array $params): RepositoryAdvisory
    {
        return $this->operators->securityAdvisories👷CreatePrivateVulnerabilityReport()->call($owner, $repo, $params);
    }

    /** @return */
    public function getRepositoryAdvisory(string $owner, string $repo, string $ghsaId): RepositoryAdvisory
    {
        return $this->operators->securityAdvisories👷GetRepositoryAdvisory()->call($owner, $repo, $ghsaId);
    }

    /** @return */
    public function updateRepositoryAdvisory(string $owner, string $repo, string $ghsaId, array $params): RepositoryAdvisory
    {
        return $this->operators->securityAdvisories👷UpdateRepositoryAdvisory()->call($owner, $repo, $ghsaId, $params);
    }

    /** @return */
    public function createRepositoryAdvisoryCveRequest(string $owner, string $repo, string $ghsaId): Json
    {
        return $this->operators->securityAdvisories👷CreateRepositoryAdvisoryCveRequest()->call($owner, $repo, $ghsaId);
    }
}
