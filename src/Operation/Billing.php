<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\ActionsBillingUsage;
use ApiClients\Client\GitHub\Schema\CombinedBillingUsage;
use ApiClients\Client\GitHub\Schema\PackagesBillingUsage;

final class Billing
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Schema\ActionsBillingUsage */
    public function getGithubActionsBillingOrg(string $org): ActionsBillingUsage|array
    {
        return $this->operators->billing👷GetGithubActionsBillingOrg()->call($org);
    }

    /** @return Schema\PackagesBillingUsage */
    public function getGithubPackagesBillingOrg(string $org): PackagesBillingUsage|array
    {
        return $this->operators->billing👷GetGithubPackagesBillingOrg()->call($org);
    }

    /** @return Schema\CombinedBillingUsage */
    public function getSharedStorageBillingOrg(string $org): CombinedBillingUsage|array
    {
        return $this->operators->billing👷GetSharedStorageBillingOrg()->call($org);
    }

    /** @return Schema\ActionsBillingUsage */
    public function getGithubActionsBillingUser(string $username): ActionsBillingUsage|array
    {
        return $this->operators->billing👷GetGithubActionsBillingUser()->call($username);
    }

    /** @return Schema\PackagesBillingUsage */
    public function getGithubPackagesBillingUser(string $username): PackagesBillingUsage|array
    {
        return $this->operators->billing👷GetGithubPackagesBillingUser()->call($username);
    }

    /** @return Schema\CombinedBillingUsage */
    public function getSharedStorageBillingUser(string $username): CombinedBillingUsage|array
    {
        return $this->operators->billing👷GetSharedStorageBillingUser()->call($username);
    }
}
