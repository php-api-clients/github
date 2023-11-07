<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\ActionsBillingUsage;
use ApiClients\Client\GitHub\Schema\CombinedBillingUsage;
use ApiClients\Client\GitHub\Schema\PackagesBillingUsage;

final class Billing
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    public function getGithubActionsBillingOrg(string $org): ActionsBillingUsage
    {
        return $this->operators->billing👷GetGithubActionsBillingOrg()->call($org);
    }

    public function getGithubPackagesBillingOrg(string $org): PackagesBillingUsage
    {
        return $this->operators->billing👷GetGithubPackagesBillingOrg()->call($org);
    }

    public function getSharedStorageBillingOrg(string $org): CombinedBillingUsage
    {
        return $this->operators->billing👷GetSharedStorageBillingOrg()->call($org);
    }

    public function getGithubActionsBillingUser(string $username): ActionsBillingUsage
    {
        return $this->operators->billing👷GetGithubActionsBillingUser()->call($username);
    }

    public function getGithubPackagesBillingUser(string $username): PackagesBillingUsage
    {
        return $this->operators->billing👷GetGithubPackagesBillingUser()->call($username);
    }

    public function getSharedStorageBillingUser(string $username): CombinedBillingUsage
    {
        return $this->operators->billing👷GetSharedStorageBillingUser()->call($username);
    }
}
