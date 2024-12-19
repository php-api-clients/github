<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\CodeSecurityConfiguration;
use ApiClients\Client\GitHub\Schema\CodeSecurityConfigurationForRepository;
use ApiClients\Client\GitHub\Schema\Operations\CodeSecurity\AttachEnterpriseConfiguration\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHub\Schema\Operations\CodeSecurity\SetConfigurationAsDefaultForEnterprise\Response\ApplicationJson\Ok;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class CodeSecurity
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\CodeSecurityConfiguration> */
    public function getConfigurationsForEnterprise(string $enterprise, string $before, string $after, int $perPage): iterable
    {
        return $this->operators->codeSecurity👷GetConfigurationsForEnterprise()->call($enterprise, $before, $after, $perPage);
    }

    /** @return */
    public function createConfigurationForEnterprise(string $enterprise, array $params): CodeSecurityConfiguration
    {
        return $this->operators->codeSecurity👷CreateConfigurationForEnterprise()->call($enterprise, $params);
    }

    /** @return Observable<Schema\CodeSecurityDefaultConfigurations> */
    public function getDefaultConfigurationsForEnterprise(string $enterprise): iterable
    {
        return $this->operators->codeSecurity👷GetDefaultConfigurationsForEnterprise()->call($enterprise);
    }

    /** @return */
    public function getSingleConfigurationForEnterprise(string $enterprise, int $configurationId): CodeSecurityConfiguration|WithoutBody
    {
        return $this->operators->codeSecurity👷GetSingleConfigurationForEnterprise()->call($enterprise, $configurationId);
    }

    /** @return */
    public function deleteConfigurationForEnterprise(string $enterprise, int $configurationId): WithoutBody
    {
        return $this->operators->codeSecurity👷DeleteConfigurationForEnterprise()->call($enterprise, $configurationId);
    }

    /** @return */
    public function updateEnterpriseConfiguration(string $enterprise, int $configurationId, array $params): CodeSecurityConfiguration|WithoutBody
    {
        return $this->operators->codeSecurity👷UpdateEnterpriseConfiguration()->call($enterprise, $configurationId, $params);
    }

    /** @return */
    public function attachEnterpriseConfiguration(string $enterprise, int $configurationId, array $params): Json
    {
        return $this->operators->codeSecurity👷AttachEnterpriseConfiguration()->call($enterprise, $configurationId, $params);
    }

    /** @return */
    public function setConfigurationAsDefaultForEnterprise(string $enterprise, int $configurationId, array $params): Ok
    {
        return $this->operators->codeSecurity👷SetConfigurationAsDefaultForEnterprise()->call($enterprise, $configurationId, $params);
    }

    /** @return Observable<Schema\CodeSecurityConfigurationRepositories> */
    public function getRepositoriesForEnterpriseConfiguration(string $enterprise, int $configurationId, string $before, string $after, int $perPage, string $status): iterable
    {
        return $this->operators->codeSecurity👷GetRepositoriesForEnterpriseConfiguration()->call($enterprise, $configurationId, $before, $after, $perPage, $status);
    }

    /** @return Observable<Schema\CodeSecurityConfiguration> */
    public function getConfigurationsForOrg(string $org, string $before, string $after, string $targetType, int $perPage): iterable
    {
        return $this->operators->codeSecurity👷GetConfigurationsForOrg()->call($org, $before, $after, $targetType, $perPage);
    }

    /** @return */
    public function createConfiguration(string $org, array $params): CodeSecurityConfiguration
    {
        return $this->operators->codeSecurity👷CreateConfiguration()->call($org, $params);
    }

    /** @return Observable<Schema\CodeSecurityDefaultConfigurations>|WithoutBody */
    public function getDefaultConfigurations(string $org): iterable|WithoutBody
    {
        return $this->operators->codeSecurity👷GetDefaultConfigurations()->call($org);
    }

    /** @return */
    public function detachConfiguration(string $org, array $params): WithoutBody
    {
        return $this->operators->codeSecurity👷DetachConfiguration()->call($org, $params);
    }

    /** @return */
    public function getConfiguration(string $org, int $configurationId): CodeSecurityConfiguration|WithoutBody
    {
        return $this->operators->codeSecurity👷GetConfiguration()->call($org, $configurationId);
    }

    /** @return */
    public function deleteConfiguration(string $org, int $configurationId): WithoutBody
    {
        return $this->operators->codeSecurity👷DeleteConfiguration()->call($org, $configurationId);
    }

    /** @return */
    public function updateConfiguration(string $org, int $configurationId, array $params): CodeSecurityConfiguration|WithoutBody
    {
        return $this->operators->codeSecurity👷UpdateConfiguration()->call($org, $configurationId, $params);
    }

    /** @return */
    public function attachConfiguration(string $org, int $configurationId, array $params): \ApiClients\Client\GitHub\Schema\Operations\CodeSecurity\AttachConfiguration\Response\ApplicationJson\Accepted\Application\Json
    {
        return $this->operators->codeSecurity👷AttachConfiguration()->call($org, $configurationId, $params);
    }

    /** @return */
    public function setConfigurationAsDefault(string $org, int $configurationId, array $params): \ApiClients\Client\GitHub\Schema\Operations\CodeSecurity\SetConfigurationAsDefault\Response\ApplicationJson\Ok\Application\Json
    {
        return $this->operators->codeSecurity👷SetConfigurationAsDefault()->call($org, $configurationId, $params);
    }

    /** @return Observable<Schema\CodeSecurityConfigurationRepositories> */
    public function getRepositoriesForConfiguration(string $org, int $configurationId, string $before, string $after, int $perPage, string $status): iterable
    {
        return $this->operators->codeSecurity👷GetRepositoriesForConfiguration()->call($org, $configurationId, $before, $after, $perPage, $status);
    }

    /** @return */
    public function getConfigurationForRepository(string $owner, string $repo): CodeSecurityConfigurationForRepository|WithoutBody
    {
        return $this->operators->codeSecurity👷GetConfigurationForRepository()->call($owner, $repo);
    }
}
