<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\DependabotAlert;
use ApiClients\Client\GitHub\Schema\DependabotPublicKey;
use ApiClients\Client\GitHub\Schema\DependabotSecret;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\Operations\Dependabot\ListOrgSecrets\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\Operations\Dependabot\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHub\Schema\OrganizationDependabotSecret;

final class Dependabot
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\DependabotAlertWithRepository>|array{code:int} */
    public function listAlertsForEnterprise(string $enterprise, string $state, string $severity, string $ecosystem, string $package, string $scope, string $before, string $after, int $last, string $sort, string $direction, int $first, int $perPage): iterable
    {
        return $this->operators->dependabot👷ListAlertsForEnterprise()->call($enterprise, $state, $severity, $ecosystem, $package, $scope, $before, $after, $last, $sort, $direction, $first, $perPage);
    }

    /** @return Observable<Schema\DependabotAlertWithRepository>|array{code:int} */
    public function listAlertsForOrg(string $org, string $state, string $severity, string $ecosystem, string $package, string $scope, string $before, string $after, int $last, string $sort, string $direction, int $first, int $perPage): iterable
    {
        return $this->operators->dependabot👷ListAlertsForOrg()->call($org, $state, $severity, $ecosystem, $package, $scope, $before, $after, $last, $sort, $direction, $first, $perPage);
    }

    /** @return */
    public function listOrgSecrets(string $org, int $perPage, int $page): Ok|array
    {
        return $this->operators->dependabot👷ListOrgSecrets()->call($org, $perPage, $page);
    }

    /** @return */
    public function getOrgPublicKey(string $org): DependabotPublicKey|array
    {
        return $this->operators->dependabot👷GetOrgPublicKey()->call($org);
    }

    /** @return */
    public function getOrgSecret(string $org, string $secretName): OrganizationDependabotSecret|array
    {
        return $this->operators->dependabot👷GetOrgSecret()->call($org, $secretName);
    }

    /** @return Schema\EmptyObject|array{code:int} */
    public function createOrUpdateOrgSecret(string $org, string $secretName, array $params): EmptyObject|array
    {
        return $this->operators->dependabot👷CreateOrUpdateOrgSecret()->call($org, $secretName, $params);
    }

    /** @return array{code:int} */
    public function deleteOrgSecret(string $org, string $secretName): array
    {
        return $this->operators->dependabot👷DeleteOrgSecret()->call($org, $secretName);
    }

    /** @return */
    public function listSelectedReposForOrgSecret(string $org, string $secretName, int $page, int $perPage): Json|array
    {
        return $this->operators->dependabot👷ListSelectedReposForOrgSecret()->call($org, $secretName, $page, $perPage);
    }

    /** @return array{code:int} */
    public function setSelectedReposForOrgSecret(string $org, string $secretName, array $params): array
    {
        return $this->operators->dependabot👷SetSelectedReposForOrgSecret()->call($org, $secretName, $params);
    }

    /** @return array{code:int} */
    public function addSelectedRepoToOrgSecret(string $org, string $secretName, int $repositoryId): array
    {
        return $this->operators->dependabot👷AddSelectedRepoToOrgSecret()->call($org, $secretName, $repositoryId);
    }

    /** @return array{code:int} */
    public function removeSelectedRepoFromOrgSecret(string $org, string $secretName, int $repositoryId): array
    {
        return $this->operators->dependabot👷RemoveSelectedRepoFromOrgSecret()->call($org, $secretName, $repositoryId);
    }

    /** @return Observable<Schema\DependabotAlert>|array{code:int} */
    public function listAlertsForRepo(string $owner, string $repo, string $state, string $severity, string $ecosystem, string $package, string $manifest, string $scope, string $before, string $after, int $last, string $sort, string $direction, int $page, int $perPage, int $first): iterable
    {
        return $this->operators->dependabot👷ListAlertsForRepo()->call($owner, $repo, $state, $severity, $ecosystem, $package, $manifest, $scope, $before, $after, $last, $sort, $direction, $page, $perPage, $first);
    }

    /** @return Observable<Schema\DependabotAlert>|array{code:int} */
    public function listAlertsForRepoListing(string $owner, string $repo, string $state, string $severity, string $ecosystem, string $package, string $manifest, string $scope, string $before, string $after, int $last, string $sort, string $direction, int $page, int $perPage, int $first): iterable
    {
        return $this->operators->dependabot👷ListAlertsForRepoListing()->call($owner, $repo, $state, $severity, $ecosystem, $package, $manifest, $scope, $before, $after, $last, $sort, $direction, $page, $perPage, $first);
    }

    /** @return Schema\DependabotAlert|array{code:int} */
    public function getAlert(string $owner, string $repo, int $alertNumber): DependabotAlert|array
    {
        return $this->operators->dependabot👷GetAlert()->call($owner, $repo, $alertNumber);
    }

    /** @return */
    public function updateAlert(string $owner, string $repo, int $alertNumber, array $params): DependabotAlert|array
    {
        return $this->operators->dependabot👷UpdateAlert()->call($owner, $repo, $alertNumber, $params);
    }

    /** @return */
    public function listRepoSecrets(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Dependabot\ListRepoSecrets\Response\ApplicationJson\Ok|array
    {
        return $this->operators->dependabot👷ListRepoSecrets()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function getRepoPublicKey(string $owner, string $repo): DependabotPublicKey|array
    {
        return $this->operators->dependabot👷GetRepoPublicKey()->call($owner, $repo);
    }

    /** @return */
    public function getRepoSecret(string $owner, string $repo, string $secretName): DependabotSecret|array
    {
        return $this->operators->dependabot👷GetRepoSecret()->call($owner, $repo, $secretName);
    }

    /** @return Schema\EmptyObject|array{code:int} */
    public function createOrUpdateRepoSecret(string $owner, string $repo, string $secretName, array $params): EmptyObject|array
    {
        return $this->operators->dependabot👷CreateOrUpdateRepoSecret()->call($owner, $repo, $secretName, $params);
    }

    /** @return array{code:int} */
    public function deleteRepoSecret(string $owner, string $repo, string $secretName): array
    {
        return $this->operators->dependabot👷DeleteRepoSecret()->call($owner, $repo, $secretName);
    }
}
