<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\Operations\PrivateRegistries\ListOrgPrivateRegistries\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\OrgPrivateRegistryConfiguration;
use ApiClients\Client\GitHub\Schema\OrgPrivateRegistryConfigurationWithSelectedRepositories;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class PrivateRegistries
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    public function listOrgPrivateRegistries(string $org, int $perPage, int $page): Ok
    {
        return $this->operators->privateRegistries👷ListOrgPrivateRegistries()->call($org, $perPage, $page);
    }

    public function createOrgPrivateRegistry(string $org, array $params): OrgPrivateRegistryConfigurationWithSelectedRepositories
    {
        return $this->operators->privateRegistries👷CreateOrgPrivateRegistry()->call($org, $params);
    }

    public function getOrgPublicKey(string $org): \ApiClients\Client\GitHub\Schema\Operations\PrivateRegistries\GetOrgPublicKey\Response\ApplicationJson\Ok
    {
        return $this->operators->privateRegistries👷GetOrgPublicKey()->call($org);
    }

    public function getOrgPrivateRegistry(string $org, string $secretName): OrgPrivateRegistryConfiguration
    {
        return $this->operators->privateRegistries👷GetOrgPrivateRegistry()->call($org, $secretName);
    }

    public function deleteOrgPrivateRegistry(string $org, string $secretName): WithoutBody
    {
        return $this->operators->privateRegistries👷DeleteOrgPrivateRegistry()->call($org, $secretName);
    }

    public function updateOrgPrivateRegistry(string $org, string $secretName, array $params): WithoutBody
    {
        return $this->operators->privateRegistries👷UpdateOrgPrivateRegistry()->call($org, $secretName, $params);
    }
}
