<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema\NetworkConfiguration;
use ApiClients\Client\GitHub\Schema\NetworkSettings;
use ApiClients\Client\GitHub\Schema\Operations\HostedCompute\ListNetworkConfigurationsForOrg\Response\ApplicationJson\Ok;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class HostedCompute
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return */
    public function listNetworkConfigurationsForOrg(string $org, int $perPage, int $page): Ok
    {
        return $this->operators->hostedCompute👷ListNetworkConfigurationsForOrg()->call($org, $perPage, $page);
    }

    /** @return */
    public function createNetworkConfigurationForOrg(string $org, array $params): NetworkConfiguration
    {
        return $this->operators->hostedCompute👷CreateNetworkConfigurationForOrg()->call($org, $params);
    }

    /** @return */
    public function getNetworkConfigurationForOrg(string $org, string $networkConfigurationId): NetworkConfiguration
    {
        return $this->operators->hostedCompute👷GetNetworkConfigurationForOrg()->call($org, $networkConfigurationId);
    }

    /** @return */
    public function deleteNetworkConfigurationFromOrg(string $org, string $networkConfigurationId): WithoutBody
    {
        return $this->operators->hostedCompute👷DeleteNetworkConfigurationFromOrg()->call($org, $networkConfigurationId);
    }

    /** @return */
    public function updateNetworkConfigurationForOrg(string $org, string $networkConfigurationId, array $params): NetworkConfiguration
    {
        return $this->operators->hostedCompute👷UpdateNetworkConfigurationForOrg()->call($org, $networkConfigurationId, $params);
    }

    /** @return */
    public function getNetworkSettingsForOrg(string $org, string $networkSettingsId): NetworkSettings
    {
        return $this->operators->hostedCompute👷GetNetworkSettingsForOrg()->call($org, $networkSettingsId);
    }
}
