<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;
use React\Promise\PromiseInterface;

use function array_key_exists;

final class Actions
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function getActionsCacheUsageForOrg(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetActionsCacheUsageForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetActionsCacheUsageForOrg::class] = new Operator\Actions\GetActionsCacheUsageForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀Usage());
        }

        return $this->operator[Operator\Actions\GetActionsCacheUsageForOrg::class]->call($org);
    }

    public function getActionsCacheUsageByRepoForOrg(string $org, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetActionsCacheUsageByRepoForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetActionsCacheUsageByRepoForOrg::class] = new Operator\Actions\GetActionsCacheUsageByRepoForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Cache🌀UsageByRepository());
        }

        return $this->operator[Operator\Actions\GetActionsCacheUsageByRepoForOrg::class]->call($org, $perPage, $page);
    }

    public function getGithubActionsPermissionsOrganization(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetGithubActionsPermissionsOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetGithubActionsPermissionsOrganization::class] = new Operator\Actions\GetGithubActionsPermissionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions());
        }

        return $this->operator[Operator\Actions\GetGithubActionsPermissionsOrganization::class]->call($org);
    }

    public function setGithubActionsPermissionsOrganization(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\SetGithubActionsPermissionsOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Actions\SetGithubActionsPermissionsOrganization::class] = new Operator\Actions\SetGithubActionsPermissionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions());
        }

        return $this->operator[Operator\Actions\SetGithubActionsPermissionsOrganization::class]->call($org, $params);
    }

    public function listSelectedRepositoriesEnabledGithubActionsOrganization(string $org, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization::class] = new Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories());
        }

        return $this->operator[Operator\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization::class]->call($org, $perPage, $page);
    }

    public function setSelectedRepositoriesEnabledGithubActionsOrganization(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization::class] = new Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories());
        }

        return $this->operator[Operator\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization::class]->call($org, $params);
    }

    public function enableSelectedRepositoryGithubActionsOrganization(string $org, int $repositoryId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization::class] = new Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Actions\EnableSelectedRepositoryGithubActionsOrganization::class]->call($org, $repositoryId);
    }

    public function disableSelectedRepositoryGithubActionsOrganization(string $org, int $repositoryId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DisableSelectedRepositoryGithubActionsOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DisableSelectedRepositoryGithubActionsOrganization::class] = new Operator\Actions\DisableSelectedRepositoryGithubActionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Actions\DisableSelectedRepositoryGithubActionsOrganization::class]->call($org, $repositoryId);
    }

    public function getAllowedActionsOrganization(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetAllowedActionsOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetAllowedActionsOrganization::class] = new Operator\Actions\GetAllowedActionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->operator[Operator\Actions\GetAllowedActionsOrganization::class]->call($org);
    }

    public function setAllowedActionsOrganization(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\SetAllowedActionsOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Actions\SetAllowedActionsOrganization::class] = new Operator\Actions\SetAllowedActionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->operator[Operator\Actions\SetAllowedActionsOrganization::class]->call($org, $params);
    }

    public function getGithubActionsDefaultWorkflowPermissionsOrganization(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization::class] = new Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Workflow());
        }

        return $this->operator[Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization::class]->call($org);
    }

    public function setGithubActionsDefaultWorkflowPermissionsOrganization(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization::class, $this->operator) === false) {
            $this->operator[Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization::class] = new Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Permissions🌀Workflow());
        }

        return $this->operator[Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization::class]->call($org, $params);
    }

    public function listSelfHostedRunnersForOrg(string $org, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListSelfHostedRunnersForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListSelfHostedRunnersForOrg::class] = new Operator\Actions\ListSelfHostedRunnersForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners());
        }

        return $this->operator[Operator\Actions\ListSelfHostedRunnersForOrg::class]->call($org, $perPage, $page);
    }

    public function listRunnerApplicationsForOrg(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListRunnerApplicationsForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListRunnerApplicationsForOrg::class] = new Operator\Actions\ListRunnerApplicationsForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀Downloads());
        }

        return $this->operator[Operator\Actions\ListRunnerApplicationsForOrg::class]->call($org);
    }

    public function generateRunnerJitconfigForOrg(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GenerateRunnerJitconfigForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GenerateRunnerJitconfigForOrg::class] = new Operator\Actions\GenerateRunnerJitconfigForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀GenerateJitconfig());
        }

        return $this->operator[Operator\Actions\GenerateRunnerJitconfigForOrg::class]->call($org, $params);
    }

    public function createRegistrationTokenForOrg(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\CreateRegistrationTokenForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\CreateRegistrationTokenForOrg::class] = new Operator\Actions\CreateRegistrationTokenForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RegistrationToken());
        }

        return $this->operator[Operator\Actions\CreateRegistrationTokenForOrg::class]->call($org);
    }

    public function createRemoveTokenForOrg(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\CreateRemoveTokenForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\CreateRemoveTokenForOrg::class] = new Operator\Actions\CreateRemoveTokenForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RemoveToken());
        }

        return $this->operator[Operator\Actions\CreateRemoveTokenForOrg::class]->call($org);
    }

    public function getSelfHostedRunnerForOrg(string $org, int $runnerId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetSelfHostedRunnerForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetSelfHostedRunnerForOrg::class] = new Operator\Actions\GetSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->operator[Operator\Actions\GetSelfHostedRunnerForOrg::class]->call($org, $runnerId);
    }

    public function deleteSelfHostedRunnerFromOrg(string $org, int $runnerId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DeleteSelfHostedRunnerFromOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DeleteSelfHostedRunnerFromOrg::class] = new Operator\Actions\DeleteSelfHostedRunnerFromOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->operator[Operator\Actions\DeleteSelfHostedRunnerFromOrg::class]->call($org, $runnerId);
    }

    public function listLabelsForSelfHostedRunnerForOrg(string $org, int $runnerId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListLabelsForSelfHostedRunnerForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListLabelsForSelfHostedRunnerForOrg::class] = new Operator\Actions\ListLabelsForSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->operator[Operator\Actions\ListLabelsForSelfHostedRunnerForOrg::class]->call($org, $runnerId);
    }

    public function setCustomLabelsForSelfHostedRunnerForOrg(string $org, int $runnerId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\SetCustomLabelsForSelfHostedRunnerForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\SetCustomLabelsForSelfHostedRunnerForOrg::class] = new Operator\Actions\SetCustomLabelsForSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->operator[Operator\Actions\SetCustomLabelsForSelfHostedRunnerForOrg::class]->call($org, $runnerId, $params);
    }

    public function addCustomLabelsToSelfHostedRunnerForOrg(string $org, int $runnerId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\AddCustomLabelsToSelfHostedRunnerForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\AddCustomLabelsToSelfHostedRunnerForOrg::class] = new Operator\Actions\AddCustomLabelsToSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->operator[Operator\Actions\AddCustomLabelsToSelfHostedRunnerForOrg::class]->call($org, $runnerId, $params);
    }

    public function removeAllCustomLabelsFromSelfHostedRunnerForOrg(string $org, int $runnerId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg::class] = new Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->operator[Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg::class]->call($org, $runnerId);
    }

    public function removeCustomLabelFromSelfHostedRunnerForOrg(string $org, int $runnerId, string $name): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg::class] = new Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name());
        }

        return $this->operator[Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg::class]->call($org, $runnerId, $name);
    }

    public function listOrgSecrets(string $org, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListOrgSecrets::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListOrgSecrets::class] = new Operator\Actions\ListOrgSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets());
        }

        return $this->operator[Operator\Actions\ListOrgSecrets::class]->call($org, $perPage, $page);
    }

    public function getOrgPublicKey(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetOrgPublicKey::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetOrgPublicKey::class] = new Operator\Actions\GetOrgPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀PublicKey());
        }

        return $this->operator[Operator\Actions\GetOrgPublicKey::class]->call($org);
    }

    public function getOrgSecret(string $org, string $secretName): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetOrgSecret::class] = new Operator\Actions\GetOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Actions\GetOrgSecret::class]->call($org, $secretName);
    }

    public function createOrUpdateOrgSecret(string $org, string $secretName, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\CreateOrUpdateOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\CreateOrUpdateOrgSecret::class] = new Operator\Actions\CreateOrUpdateOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Actions\CreateOrUpdateOrgSecret::class]->call($org, $secretName, $params);
    }

    public function deleteOrgSecret(string $org, string $secretName): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DeleteOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DeleteOrgSecret::class] = new Operator\Actions\DeleteOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Actions\DeleteOrgSecret::class]->call($org, $secretName);
    }

    public function listSelectedReposForOrgSecret(string $org, string $secretName, int $page, int $perPage): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListSelectedReposForOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListSelectedReposForOrgSecret::class] = new Operator\Actions\ListSelectedReposForOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->operator[Operator\Actions\ListSelectedReposForOrgSecret::class]->call($org, $secretName, $page, $perPage);
    }

    public function setSelectedReposForOrgSecret(string $org, string $secretName, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\SetSelectedReposForOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\SetSelectedReposForOrgSecret::class] = new Operator\Actions\SetSelectedReposForOrgSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories());
        }

        return $this->operator[Operator\Actions\SetSelectedReposForOrgSecret::class]->call($org, $secretName, $params);
    }

    public function addSelectedRepoToOrgSecret(string $org, string $secretName, int $repositoryId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\AddSelectedRepoToOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\AddSelectedRepoToOrgSecret::class] = new Operator\Actions\AddSelectedRepoToOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Actions\AddSelectedRepoToOrgSecret::class]->call($org, $secretName, $repositoryId);
    }

    public function removeSelectedRepoFromOrgSecret(string $org, string $secretName, int $repositoryId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\RemoveSelectedRepoFromOrgSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\RemoveSelectedRepoFromOrgSecret::class] = new Operator\Actions\RemoveSelectedRepoFromOrgSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Secrets🌀SecretName🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Actions\RemoveSelectedRepoFromOrgSecret::class]->call($org, $secretName, $repositoryId);
    }

    public function listOrgVariables(string $org, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListOrgVariables::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListOrgVariables::class] = new Operator\Actions\ListOrgVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables());
        }

        return $this->operator[Operator\Actions\ListOrgVariables::class]->call($org, $perPage, $page);
    }

    public function createOrgVariable(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\CreateOrgVariable::class, $this->operator) === false) {
            $this->operator[Operator\Actions\CreateOrgVariable::class] = new Operator\Actions\CreateOrgVariable($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables());
        }

        return $this->operator[Operator\Actions\CreateOrgVariable::class]->call($org, $params);
    }

    public function getOrgVariable(string $org, string $name): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetOrgVariable::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetOrgVariable::class] = new Operator\Actions\GetOrgVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name());
        }

        return $this->operator[Operator\Actions\GetOrgVariable::class]->call($org, $name);
    }

    public function deleteOrgVariable(string $org, string $name): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DeleteOrgVariable::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DeleteOrgVariable::class] = new Operator\Actions\DeleteOrgVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name());
        }

        return $this->operator[Operator\Actions\DeleteOrgVariable::class]->call($org, $name);
    }

    public function updateOrgVariable(string $org, string $name, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\UpdateOrgVariable::class, $this->operator) === false) {
            $this->operator[Operator\Actions\UpdateOrgVariable::class] = new Operator\Actions\UpdateOrgVariable($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name());
        }

        return $this->operator[Operator\Actions\UpdateOrgVariable::class]->call($org, $name, $params);
    }

    public function listSelectedReposForOrgVariable(string $org, string $name, int $page, int $perPage): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListSelectedReposForOrgVariable::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListSelectedReposForOrgVariable::class] = new Operator\Actions\ListSelectedReposForOrgVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories());
        }

        return $this->operator[Operator\Actions\ListSelectedReposForOrgVariable::class]->call($org, $name, $page, $perPage);
    }

    public function setSelectedReposForOrgVariable(string $org, string $name, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\SetSelectedReposForOrgVariable::class, $this->operator) === false) {
            $this->operator[Operator\Actions\SetSelectedReposForOrgVariable::class] = new Operator\Actions\SetSelectedReposForOrgVariable($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories());
        }

        return $this->operator[Operator\Actions\SetSelectedReposForOrgVariable::class]->call($org, $name, $params);
    }

    public function addSelectedRepoToOrgVariable(string $org, string $name, int $repositoryId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\AddSelectedRepoToOrgVariable::class, $this->operator) === false) {
            $this->operator[Operator\Actions\AddSelectedRepoToOrgVariable::class] = new Operator\Actions\AddSelectedRepoToOrgVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Actions\AddSelectedRepoToOrgVariable::class]->call($org, $name, $repositoryId);
    }

    public function removeSelectedRepoFromOrgVariable(string $org, string $name, int $repositoryId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\RemoveSelectedRepoFromOrgVariable::class, $this->operator) === false) {
            $this->operator[Operator\Actions\RemoveSelectedRepoFromOrgVariable::class] = new Operator\Actions\RemoveSelectedRepoFromOrgVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Actions🌀Variables🌀Name🌀Repositories🌀RepositoryId());
        }

        return $this->operator[Operator\Actions\RemoveSelectedRepoFromOrgVariable::class]->call($org, $name, $repositoryId);
    }

    public function listArtifactsForRepo(string $owner, string $repo, string $name, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListArtifactsForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListArtifactsForRepo::class] = new Operator\Actions\ListArtifactsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts());
        }

        return $this->operator[Operator\Actions\ListArtifactsForRepo::class]->call($owner, $repo, $name, $perPage, $page);
    }

    public function getArtifact(string $owner, string $repo, int $artifactId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetArtifact::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetArtifact::class] = new Operator\Actions\GetArtifact($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId());
        }

        return $this->operator[Operator\Actions\GetArtifact::class]->call($owner, $repo, $artifactId);
    }

    public function deleteArtifact(string $owner, string $repo, int $artifactId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DeleteArtifact::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DeleteArtifact::class] = new Operator\Actions\DeleteArtifact($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId());
        }

        return $this->operator[Operator\Actions\DeleteArtifact::class]->call($owner, $repo, $artifactId);
    }

    public function downloadArtifact(string $owner, string $repo, int $artifactId, string $archiveFormat): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DownloadArtifact::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DownloadArtifact::class] = new Operator\Actions\DownloadArtifact($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat());
        }

        return $this->operator[Operator\Actions\DownloadArtifact::class]->call($owner, $repo, $artifactId, $archiveFormat);
    }

    public function downloadArtifactStreaming(string $owner, string $repo, int $artifactId, string $archiveFormat): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DownloadArtifactStreaming::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DownloadArtifactStreaming::class] = new Operator\Actions\DownloadArtifactStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Artifacts🌀ArtifactId🌀ArchiveFormat());
        }

        return $this->operator[Operator\Actions\DownloadArtifactStreaming::class]->call($owner, $repo, $artifactId, $archiveFormat);
    }

    public function getActionsCacheUsage(string $owner, string $repo): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetActionsCacheUsage::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetActionsCacheUsage::class] = new Operator\Actions\GetActionsCacheUsage($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Cache🌀Usage());
        }

        return $this->operator[Operator\Actions\GetActionsCacheUsage::class]->call($owner, $repo);
    }

    public function getActionsCacheList(string $owner, string $repo, string $ref, string $key, int $perPage, int $page, string $sort, string $direction): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetActionsCacheList::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetActionsCacheList::class] = new Operator\Actions\GetActionsCacheList($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches());
        }

        return $this->operator[Operator\Actions\GetActionsCacheList::class]->call($owner, $repo, $ref, $key, $perPage, $page, $sort, $direction);
    }

    public function deleteActionsCacheByKey(string $owner, string $repo, string $key, string $ref): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DeleteActionsCacheByKey::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DeleteActionsCacheByKey::class] = new Operator\Actions\DeleteActionsCacheByKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches());
        }

        return $this->operator[Operator\Actions\DeleteActionsCacheByKey::class]->call($owner, $repo, $key, $ref);
    }

    public function deleteActionsCacheById(string $owner, string $repo, int $cacheId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DeleteActionsCacheById::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DeleteActionsCacheById::class] = new Operator\Actions\DeleteActionsCacheById($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Caches🌀CacheId());
        }

        return $this->operator[Operator\Actions\DeleteActionsCacheById::class]->call($owner, $repo, $cacheId);
    }

    public function getJobForWorkflowRun(string $owner, string $repo, int $jobId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetJobForWorkflowRun::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetJobForWorkflowRun::class] = new Operator\Actions\GetJobForWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId());
        }

        return $this->operator[Operator\Actions\GetJobForWorkflowRun::class]->call($owner, $repo, $jobId);
    }

    public function downloadJobLogsForWorkflowRun(string $owner, string $repo, int $jobId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DownloadJobLogsForWorkflowRun::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DownloadJobLogsForWorkflowRun::class] = new Operator\Actions\DownloadJobLogsForWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Logs());
        }

        return $this->operator[Operator\Actions\DownloadJobLogsForWorkflowRun::class]->call($owner, $repo, $jobId);
    }

    public function downloadJobLogsForWorkflowRunStreaming(string $owner, string $repo, int $jobId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DownloadJobLogsForWorkflowRunStreaming::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DownloadJobLogsForWorkflowRunStreaming::class] = new Operator\Actions\DownloadJobLogsForWorkflowRunStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Logs());
        }

        return $this->operator[Operator\Actions\DownloadJobLogsForWorkflowRunStreaming::class]->call($owner, $repo, $jobId);
    }

    public function reRunJobForWorkflowRun(string $owner, string $repo, int $jobId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ReRunJobForWorkflowRun::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ReRunJobForWorkflowRun::class] = new Operator\Actions\ReRunJobForWorkflowRun($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Jobs🌀JobId🌀Rerun());
        }

        return $this->operator[Operator\Actions\ReRunJobForWorkflowRun::class]->call($owner, $repo, $jobId, $params);
    }

    public function getCustomOidcSubClaimForRepo(string $owner, string $repo): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetCustomOidcSubClaimForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetCustomOidcSubClaimForRepo::class] = new Operator\Actions\GetCustomOidcSubClaimForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub());
        }

        return $this->operator[Operator\Actions\GetCustomOidcSubClaimForRepo::class]->call($owner, $repo);
    }

    public function setCustomOidcSubClaimForRepo(string $owner, string $repo, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\SetCustomOidcSubClaimForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\SetCustomOidcSubClaimForRepo::class] = new Operator\Actions\SetCustomOidcSubClaimForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Oidc🌀Customization🌀Sub());
        }

        return $this->operator[Operator\Actions\SetCustomOidcSubClaimForRepo::class]->call($owner, $repo, $params);
    }

    public function listRepoOrganizationSecrets(string $owner, string $repo, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListRepoOrganizationSecrets::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListRepoOrganizationSecrets::class] = new Operator\Actions\ListRepoOrganizationSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationSecrets());
        }

        return $this->operator[Operator\Actions\ListRepoOrganizationSecrets::class]->call($owner, $repo, $perPage, $page);
    }

    public function listRepoOrganizationVariables(string $owner, string $repo, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListRepoOrganizationVariables::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListRepoOrganizationVariables::class] = new Operator\Actions\ListRepoOrganizationVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀OrganizationVariables());
        }

        return $this->operator[Operator\Actions\ListRepoOrganizationVariables::class]->call($owner, $repo, $perPage, $page);
    }

    public function getGithubActionsPermissionsRepository(string $owner, string $repo): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetGithubActionsPermissionsRepository::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetGithubActionsPermissionsRepository::class] = new Operator\Actions\GetGithubActionsPermissionsRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions());
        }

        return $this->operator[Operator\Actions\GetGithubActionsPermissionsRepository::class]->call($owner, $repo);
    }

    public function setGithubActionsPermissionsRepository(string $owner, string $repo, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\SetGithubActionsPermissionsRepository::class, $this->operator) === false) {
            $this->operator[Operator\Actions\SetGithubActionsPermissionsRepository::class] = new Operator\Actions\SetGithubActionsPermissionsRepository($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions());
        }

        return $this->operator[Operator\Actions\SetGithubActionsPermissionsRepository::class]->call($owner, $repo, $params);
    }

    public function getWorkflowAccessToRepository(string $owner, string $repo): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetWorkflowAccessToRepository::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetWorkflowAccessToRepository::class] = new Operator\Actions\GetWorkflowAccessToRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Access());
        }

        return $this->operator[Operator\Actions\GetWorkflowAccessToRepository::class]->call($owner, $repo);
    }

    public function setWorkflowAccessToRepository(string $owner, string $repo, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\SetWorkflowAccessToRepository::class, $this->operator) === false) {
            $this->operator[Operator\Actions\SetWorkflowAccessToRepository::class] = new Operator\Actions\SetWorkflowAccessToRepository($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Access());
        }

        return $this->operator[Operator\Actions\SetWorkflowAccessToRepository::class]->call($owner, $repo, $params);
    }

    public function getAllowedActionsRepository(string $owner, string $repo): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetAllowedActionsRepository::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetAllowedActionsRepository::class] = new Operator\Actions\GetAllowedActionsRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->operator[Operator\Actions\GetAllowedActionsRepository::class]->call($owner, $repo);
    }

    public function setAllowedActionsRepository(string $owner, string $repo, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\SetAllowedActionsRepository::class, $this->operator) === false) {
            $this->operator[Operator\Actions\SetAllowedActionsRepository::class] = new Operator\Actions\SetAllowedActionsRepository($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀SelectedActions());
        }

        return $this->operator[Operator\Actions\SetAllowedActionsRepository::class]->call($owner, $repo, $params);
    }

    public function getGithubActionsDefaultWorkflowPermissionsRepository(string $owner, string $repo): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository::class] = new Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Workflow());
        }

        return $this->operator[Operator\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository::class]->call($owner, $repo);
    }

    public function setGithubActionsDefaultWorkflowPermissionsRepository(string $owner, string $repo, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository::class, $this->operator) === false) {
            $this->operator[Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository::class] = new Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Permissions🌀Workflow());
        }

        return $this->operator[Operator\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository::class]->call($owner, $repo, $params);
    }

    public function listSelfHostedRunnersForRepo(string $owner, string $repo, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListSelfHostedRunnersForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListSelfHostedRunnersForRepo::class] = new Operator\Actions\ListSelfHostedRunnersForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners());
        }

        return $this->operator[Operator\Actions\ListSelfHostedRunnersForRepo::class]->call($owner, $repo, $perPage, $page);
    }

    public function listRunnerApplicationsForRepo(string $owner, string $repo): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListRunnerApplicationsForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListRunnerApplicationsForRepo::class] = new Operator\Actions\ListRunnerApplicationsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀Downloads());
        }

        return $this->operator[Operator\Actions\ListRunnerApplicationsForRepo::class]->call($owner, $repo);
    }

    public function generateRunnerJitconfigForRepo(string $owner, string $repo, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GenerateRunnerJitconfigForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GenerateRunnerJitconfigForRepo::class] = new Operator\Actions\GenerateRunnerJitconfigForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀GenerateJitconfig());
        }

        return $this->operator[Operator\Actions\GenerateRunnerJitconfigForRepo::class]->call($owner, $repo, $params);
    }

    public function createRegistrationTokenForRepo(string $owner, string $repo): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\CreateRegistrationTokenForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\CreateRegistrationTokenForRepo::class] = new Operator\Actions\CreateRegistrationTokenForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RegistrationToken());
        }

        return $this->operator[Operator\Actions\CreateRegistrationTokenForRepo::class]->call($owner, $repo);
    }

    public function createRemoveTokenForRepo(string $owner, string $repo): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\CreateRemoveTokenForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\CreateRemoveTokenForRepo::class] = new Operator\Actions\CreateRemoveTokenForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RemoveToken());
        }

        return $this->operator[Operator\Actions\CreateRemoveTokenForRepo::class]->call($owner, $repo);
    }

    public function getSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetSelfHostedRunnerForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetSelfHostedRunnerForRepo::class] = new Operator\Actions\GetSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->operator[Operator\Actions\GetSelfHostedRunnerForRepo::class]->call($owner, $repo, $runnerId);
    }

    public function deleteSelfHostedRunnerFromRepo(string $owner, string $repo, int $runnerId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DeleteSelfHostedRunnerFromRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DeleteSelfHostedRunnerFromRepo::class] = new Operator\Actions\DeleteSelfHostedRunnerFromRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId());
        }

        return $this->operator[Operator\Actions\DeleteSelfHostedRunnerFromRepo::class]->call($owner, $repo, $runnerId);
    }

    public function listLabelsForSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListLabelsForSelfHostedRunnerForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListLabelsForSelfHostedRunnerForRepo::class] = new Operator\Actions\ListLabelsForSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->operator[Operator\Actions\ListLabelsForSelfHostedRunnerForRepo::class]->call($owner, $repo, $runnerId);
    }

    public function setCustomLabelsForSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\SetCustomLabelsForSelfHostedRunnerForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\SetCustomLabelsForSelfHostedRunnerForRepo::class] = new Operator\Actions\SetCustomLabelsForSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->operator[Operator\Actions\SetCustomLabelsForSelfHostedRunnerForRepo::class]->call($owner, $repo, $runnerId, $params);
    }

    public function addCustomLabelsToSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\AddCustomLabelsToSelfHostedRunnerForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\AddCustomLabelsToSelfHostedRunnerForRepo::class] = new Operator\Actions\AddCustomLabelsToSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->operator[Operator\Actions\AddCustomLabelsToSelfHostedRunnerForRepo::class]->call($owner, $repo, $runnerId, $params);
    }

    public function removeAllCustomLabelsFromSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo::class] = new Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels());
        }

        return $this->operator[Operator\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo::class]->call($owner, $repo, $runnerId);
    }

    public function removeCustomLabelFromSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId, string $name): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo::class] = new Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runners🌀RunnerId🌀Labels🌀Name());
        }

        return $this->operator[Operator\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo::class]->call($owner, $repo, $runnerId, $name);
    }

    public function listWorkflowRunsForRepo(string $owner, string $repo, string $actor, string $branch, string $event, string $status, string $created, int $checkSuiteId, string $headSha, int $perPage, int $page, bool $excludePullRequests): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListWorkflowRunsForRepo::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListWorkflowRunsForRepo::class] = new Operator\Actions\ListWorkflowRunsForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs());
        }

        return $this->operator[Operator\Actions\ListWorkflowRunsForRepo::class]->call($owner, $repo, $actor, $branch, $event, $status, $created, $checkSuiteId, $headSha, $perPage, $page, $excludePullRequests);
    }

    public function getWorkflowRun(string $owner, string $repo, int $runId, bool $excludePullRequests): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetWorkflowRun::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetWorkflowRun::class] = new Operator\Actions\GetWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId());
        }

        return $this->operator[Operator\Actions\GetWorkflowRun::class]->call($owner, $repo, $runId, $excludePullRequests);
    }

    public function deleteWorkflowRun(string $owner, string $repo, int $runId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DeleteWorkflowRun::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DeleteWorkflowRun::class] = new Operator\Actions\DeleteWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId());
        }

        return $this->operator[Operator\Actions\DeleteWorkflowRun::class]->call($owner, $repo, $runId);
    }

    public function getReviewsForRun(string $owner, string $repo, int $runId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetReviewsForRun::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetReviewsForRun::class] = new Operator\Actions\GetReviewsForRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approvals());
        }

        return $this->operator[Operator\Actions\GetReviewsForRun::class]->call($owner, $repo, $runId);
    }

    public function approveWorkflowRun(string $owner, string $repo, int $runId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ApproveWorkflowRun::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ApproveWorkflowRun::class] = new Operator\Actions\ApproveWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Approve());
        }

        return $this->operator[Operator\Actions\ApproveWorkflowRun::class]->call($owner, $repo, $runId);
    }

    public function listWorkflowRunArtifacts(string $owner, string $repo, int $runId, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListWorkflowRunArtifacts::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListWorkflowRunArtifacts::class] = new Operator\Actions\ListWorkflowRunArtifacts($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Artifacts());
        }

        return $this->operator[Operator\Actions\ListWorkflowRunArtifacts::class]->call($owner, $repo, $runId, $perPage, $page);
    }

    public function getWorkflowRunAttempt(string $owner, string $repo, int $runId, int $attemptNumber, bool $excludePullRequests): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetWorkflowRunAttempt::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetWorkflowRunAttempt::class] = new Operator\Actions\GetWorkflowRunAttempt($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber());
        }

        return $this->operator[Operator\Actions\GetWorkflowRunAttempt::class]->call($owner, $repo, $runId, $attemptNumber, $excludePullRequests);
    }

    public function listJobsForWorkflowRunAttempt(string $owner, string $repo, int $runId, int $attemptNumber, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListJobsForWorkflowRunAttempt::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListJobsForWorkflowRunAttempt::class] = new Operator\Actions\ListJobsForWorkflowRunAttempt($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Jobs());
        }

        return $this->operator[Operator\Actions\ListJobsForWorkflowRunAttempt::class]->call($owner, $repo, $runId, $attemptNumber, $perPage, $page);
    }

    public function downloadWorkflowRunAttemptLogs(string $owner, string $repo, int $runId, int $attemptNumber): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DownloadWorkflowRunAttemptLogs::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DownloadWorkflowRunAttemptLogs::class] = new Operator\Actions\DownloadWorkflowRunAttemptLogs($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Logs());
        }

        return $this->operator[Operator\Actions\DownloadWorkflowRunAttemptLogs::class]->call($owner, $repo, $runId, $attemptNumber);
    }

    public function downloadWorkflowRunAttemptLogsStreaming(string $owner, string $repo, int $runId, int $attemptNumber): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DownloadWorkflowRunAttemptLogsStreaming::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DownloadWorkflowRunAttemptLogsStreaming::class] = new Operator\Actions\DownloadWorkflowRunAttemptLogsStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Attempts🌀AttemptNumber🌀Logs());
        }

        return $this->operator[Operator\Actions\DownloadWorkflowRunAttemptLogsStreaming::class]->call($owner, $repo, $runId, $attemptNumber);
    }

    public function cancelWorkflowRun(string $owner, string $repo, int $runId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\CancelWorkflowRun::class, $this->operator) === false) {
            $this->operator[Operator\Actions\CancelWorkflowRun::class] = new Operator\Actions\CancelWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Cancel());
        }

        return $this->operator[Operator\Actions\CancelWorkflowRun::class]->call($owner, $repo, $runId);
    }

    public function reviewCustomGatesForRun(string $owner, string $repo, int $runId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ReviewCustomGatesForRun::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ReviewCustomGatesForRun::class] = new Operator\Actions\ReviewCustomGatesForRun($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀DeploymentProtectionRule());
        }

        return $this->operator[Operator\Actions\ReviewCustomGatesForRun::class]->call($owner, $repo, $runId, $params);
    }

    public function listJobsForWorkflowRun(string $owner, string $repo, int $runId, string $filter, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListJobsForWorkflowRun::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListJobsForWorkflowRun::class] = new Operator\Actions\ListJobsForWorkflowRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Jobs());
        }

        return $this->operator[Operator\Actions\ListJobsForWorkflowRun::class]->call($owner, $repo, $runId, $filter, $perPage, $page);
    }

    public function downloadWorkflowRunLogs(string $owner, string $repo, int $runId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DownloadWorkflowRunLogs::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DownloadWorkflowRunLogs::class] = new Operator\Actions\DownloadWorkflowRunLogs($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs());
        }

        return $this->operator[Operator\Actions\DownloadWorkflowRunLogs::class]->call($owner, $repo, $runId);
    }

    public function downloadWorkflowRunLogsStreaming(string $owner, string $repo, int $runId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DownloadWorkflowRunLogsStreaming::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DownloadWorkflowRunLogsStreaming::class] = new Operator\Actions\DownloadWorkflowRunLogsStreaming($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs());
        }

        return $this->operator[Operator\Actions\DownloadWorkflowRunLogsStreaming::class]->call($owner, $repo, $runId);
    }

    public function deleteWorkflowRunLogs(string $owner, string $repo, int $runId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DeleteWorkflowRunLogs::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DeleteWorkflowRunLogs::class] = new Operator\Actions\DeleteWorkflowRunLogs($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Logs());
        }

        return $this->operator[Operator\Actions\DeleteWorkflowRunLogs::class]->call($owner, $repo, $runId);
    }

    public function getPendingDeploymentsForRun(string $owner, string $repo, int $runId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetPendingDeploymentsForRun::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetPendingDeploymentsForRun::class] = new Operator\Actions\GetPendingDeploymentsForRun($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀PendingDeployments());
        }

        return $this->operator[Operator\Actions\GetPendingDeploymentsForRun::class]->call($owner, $repo, $runId);
    }

    public function reviewPendingDeploymentsForRun(string $owner, string $repo, int $runId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ReviewPendingDeploymentsForRun::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ReviewPendingDeploymentsForRun::class] = new Operator\Actions\ReviewPendingDeploymentsForRun($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀PendingDeployments());
        }

        return $this->operator[Operator\Actions\ReviewPendingDeploymentsForRun::class]->call($owner, $repo, $runId, $params);
    }

    public function reRunWorkflow(string $owner, string $repo, int $runId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ReRunWorkflow::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ReRunWorkflow::class] = new Operator\Actions\ReRunWorkflow($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Rerun());
        }

        return $this->operator[Operator\Actions\ReRunWorkflow::class]->call($owner, $repo, $runId, $params);
    }

    public function reRunWorkflowFailedJobs(string $owner, string $repo, int $runId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ReRunWorkflowFailedJobs::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ReRunWorkflowFailedJobs::class] = new Operator\Actions\ReRunWorkflowFailedJobs($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀RerunFailedJobs());
        }

        return $this->operator[Operator\Actions\ReRunWorkflowFailedJobs::class]->call($owner, $repo, $runId, $params);
    }

    public function getWorkflowRunUsage(string $owner, string $repo, int $runId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetWorkflowRunUsage::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetWorkflowRunUsage::class] = new Operator\Actions\GetWorkflowRunUsage($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Runs🌀RunId🌀Timing());
        }

        return $this->operator[Operator\Actions\GetWorkflowRunUsage::class]->call($owner, $repo, $runId);
    }

    public function listRepoSecrets(string $owner, string $repo, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListRepoSecrets::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListRepoSecrets::class] = new Operator\Actions\ListRepoSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets());
        }

        return $this->operator[Operator\Actions\ListRepoSecrets::class]->call($owner, $repo, $perPage, $page);
    }

    public function getRepoPublicKey(string $owner, string $repo): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetRepoPublicKey::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetRepoPublicKey::class] = new Operator\Actions\GetRepoPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀PublicKey());
        }

        return $this->operator[Operator\Actions\GetRepoPublicKey::class]->call($owner, $repo);
    }

    public function getRepoSecret(string $owner, string $repo, string $secretName): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetRepoSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetRepoSecret::class] = new Operator\Actions\GetRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Actions\GetRepoSecret::class]->call($owner, $repo, $secretName);
    }

    public function createOrUpdateRepoSecret(string $owner, string $repo, string $secretName, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\CreateOrUpdateRepoSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\CreateOrUpdateRepoSecret::class] = new Operator\Actions\CreateOrUpdateRepoSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Actions\CreateOrUpdateRepoSecret::class]->call($owner, $repo, $secretName, $params);
    }

    public function deleteRepoSecret(string $owner, string $repo, string $secretName): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DeleteRepoSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DeleteRepoSecret::class] = new Operator\Actions\DeleteRepoSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Actions\DeleteRepoSecret::class]->call($owner, $repo, $secretName);
    }

    public function listRepoVariables(string $owner, string $repo, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListRepoVariables::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListRepoVariables::class] = new Operator\Actions\ListRepoVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables());
        }

        return $this->operator[Operator\Actions\ListRepoVariables::class]->call($owner, $repo, $perPage, $page);
    }

    public function createRepoVariable(string $owner, string $repo, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\CreateRepoVariable::class, $this->operator) === false) {
            $this->operator[Operator\Actions\CreateRepoVariable::class] = new Operator\Actions\CreateRepoVariable($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables());
        }

        return $this->operator[Operator\Actions\CreateRepoVariable::class]->call($owner, $repo, $params);
    }

    public function getRepoVariable(string $owner, string $repo, string $name): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetRepoVariable::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetRepoVariable::class] = new Operator\Actions\GetRepoVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables🌀Name());
        }

        return $this->operator[Operator\Actions\GetRepoVariable::class]->call($owner, $repo, $name);
    }

    public function deleteRepoVariable(string $owner, string $repo, string $name): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DeleteRepoVariable::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DeleteRepoVariable::class] = new Operator\Actions\DeleteRepoVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables🌀Name());
        }

        return $this->operator[Operator\Actions\DeleteRepoVariable::class]->call($owner, $repo, $name);
    }

    public function updateRepoVariable(string $owner, string $repo, string $name, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\UpdateRepoVariable::class, $this->operator) === false) {
            $this->operator[Operator\Actions\UpdateRepoVariable::class] = new Operator\Actions\UpdateRepoVariable($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Variables🌀Name());
        }

        return $this->operator[Operator\Actions\UpdateRepoVariable::class]->call($owner, $repo, $name, $params);
    }

    public function listRepoWorkflows(string $owner, string $repo, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListRepoWorkflows::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListRepoWorkflows::class] = new Operator\Actions\ListRepoWorkflows($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows());
        }

        return $this->operator[Operator\Actions\ListRepoWorkflows::class]->call($owner, $repo, $perPage, $page);
    }

    public function getWorkflow(string $owner, string $repo, mixed $workflowId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetWorkflow::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetWorkflow::class] = new Operator\Actions\GetWorkflow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId());
        }

        return $this->operator[Operator\Actions\GetWorkflow::class]->call($owner, $repo, $workflowId);
    }

    public function disableWorkflow(string $owner, string $repo, mixed $workflowId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DisableWorkflow::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DisableWorkflow::class] = new Operator\Actions\DisableWorkflow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Disable());
        }

        return $this->operator[Operator\Actions\DisableWorkflow::class]->call($owner, $repo, $workflowId);
    }

    public function createWorkflowDispatch(string $owner, string $repo, mixed $workflowId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\CreateWorkflowDispatch::class, $this->operator) === false) {
            $this->operator[Operator\Actions\CreateWorkflowDispatch::class] = new Operator\Actions\CreateWorkflowDispatch($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Dispatches());
        }

        return $this->operator[Operator\Actions\CreateWorkflowDispatch::class]->call($owner, $repo, $workflowId, $params);
    }

    public function enableWorkflow(string $owner, string $repo, mixed $workflowId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\EnableWorkflow::class, $this->operator) === false) {
            $this->operator[Operator\Actions\EnableWorkflow::class] = new Operator\Actions\EnableWorkflow($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Enable());
        }

        return $this->operator[Operator\Actions\EnableWorkflow::class]->call($owner, $repo, $workflowId);
    }

    public function listWorkflowRuns(string $owner, string $repo, mixed $workflowId, string $actor, string $branch, string $event, string $status, string $created, int $checkSuiteId, string $headSha, int $perPage, int $page, bool $excludePullRequests): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListWorkflowRuns::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListWorkflowRuns::class] = new Operator\Actions\ListWorkflowRuns($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Runs());
        }

        return $this->operator[Operator\Actions\ListWorkflowRuns::class]->call($owner, $repo, $workflowId, $actor, $branch, $event, $status, $created, $checkSuiteId, $headSha, $perPage, $page, $excludePullRequests);
    }

    public function getWorkflowUsage(string $owner, string $repo, mixed $workflowId): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetWorkflowUsage::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetWorkflowUsage::class] = new Operator\Actions\GetWorkflowUsage($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Actions🌀Workflows🌀WorkflowId🌀Timing());
        }

        return $this->operator[Operator\Actions\GetWorkflowUsage::class]->call($owner, $repo, $workflowId);
    }

    public function listEnvironmentSecrets(int $repositoryId, string $environmentName, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListEnvironmentSecrets::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListEnvironmentSecrets::class] = new Operator\Actions\ListEnvironmentSecrets($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repositories🌀RepositoryId🌀Environments🌀EnvironmentName🌀Secrets());
        }

        return $this->operator[Operator\Actions\ListEnvironmentSecrets::class]->call($repositoryId, $environmentName, $perPage, $page);
    }

    public function getEnvironmentPublicKey(int $repositoryId, string $environmentName): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetEnvironmentPublicKey::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetEnvironmentPublicKey::class] = new Operator\Actions\GetEnvironmentPublicKey($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repositories🌀RepositoryId🌀Environments🌀EnvironmentName🌀Secrets🌀PublicKey());
        }

        return $this->operator[Operator\Actions\GetEnvironmentPublicKey::class]->call($repositoryId, $environmentName);
    }

    public function getEnvironmentSecret(int $repositoryId, string $environmentName, string $secretName): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetEnvironmentSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetEnvironmentSecret::class] = new Operator\Actions\GetEnvironmentSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repositories🌀RepositoryId🌀Environments🌀EnvironmentName🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Actions\GetEnvironmentSecret::class]->call($repositoryId, $environmentName, $secretName);
    }

    public function createOrUpdateEnvironmentSecret(int $repositoryId, string $environmentName, string $secretName, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\CreateOrUpdateEnvironmentSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\CreateOrUpdateEnvironmentSecret::class] = new Operator\Actions\CreateOrUpdateEnvironmentSecret($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repositories🌀RepositoryId🌀Environments🌀EnvironmentName🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Actions\CreateOrUpdateEnvironmentSecret::class]->call($repositoryId, $environmentName, $secretName, $params);
    }

    public function deleteEnvironmentSecret(int $repositoryId, string $environmentName, string $secretName): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DeleteEnvironmentSecret::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DeleteEnvironmentSecret::class] = new Operator\Actions\DeleteEnvironmentSecret($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repositories🌀RepositoryId🌀Environments🌀EnvironmentName🌀Secrets🌀SecretName());
        }

        return $this->operator[Operator\Actions\DeleteEnvironmentSecret::class]->call($repositoryId, $environmentName, $secretName);
    }

    public function listEnvironmentVariables(int $repositoryId, string $environmentName, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\ListEnvironmentVariables::class, $this->operator) === false) {
            $this->operator[Operator\Actions\ListEnvironmentVariables::class] = new Operator\Actions\ListEnvironmentVariables($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repositories🌀RepositoryId🌀Environments🌀EnvironmentName🌀Variables());
        }

        return $this->operator[Operator\Actions\ListEnvironmentVariables::class]->call($repositoryId, $environmentName, $perPage, $page);
    }

    public function createEnvironmentVariable(int $repositoryId, string $environmentName, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\CreateEnvironmentVariable::class, $this->operator) === false) {
            $this->operator[Operator\Actions\CreateEnvironmentVariable::class] = new Operator\Actions\CreateEnvironmentVariable($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repositories🌀RepositoryId🌀Environments🌀EnvironmentName🌀Variables());
        }

        return $this->operator[Operator\Actions\CreateEnvironmentVariable::class]->call($repositoryId, $environmentName, $params);
    }

    public function getEnvironmentVariable(int $repositoryId, string $environmentName, string $name): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\GetEnvironmentVariable::class, $this->operator) === false) {
            $this->operator[Operator\Actions\GetEnvironmentVariable::class] = new Operator\Actions\GetEnvironmentVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repositories🌀RepositoryId🌀Environments🌀EnvironmentName🌀Variables🌀Name());
        }

        return $this->operator[Operator\Actions\GetEnvironmentVariable::class]->call($repositoryId, $environmentName, $name);
    }

    public function deleteEnvironmentVariable(int $repositoryId, string $name, string $environmentName): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\DeleteEnvironmentVariable::class, $this->operator) === false) {
            $this->operator[Operator\Actions\DeleteEnvironmentVariable::class] = new Operator\Actions\DeleteEnvironmentVariable($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repositories🌀RepositoryId🌀Environments🌀EnvironmentName🌀Variables🌀Name());
        }

        return $this->operator[Operator\Actions\DeleteEnvironmentVariable::class]->call($repositoryId, $name, $environmentName);
    }

    public function updateEnvironmentVariable(int $repositoryId, string $name, string $environmentName, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Actions\UpdateEnvironmentVariable::class, $this->operator) === false) {
            $this->operator[Operator\Actions\UpdateEnvironmentVariable::class] = new Operator\Actions\UpdateEnvironmentVariable($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repositories🌀RepositoryId🌀Environments🌀EnvironmentName🌀Variables🌀Name());
        }

        return $this->operator[Operator\Actions\UpdateEnvironmentVariable::class]->call($repositoryId, $name, $environmentName, $params);
    }
}
