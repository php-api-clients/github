<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Actions
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function getActionsCacheUsageForOrg(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsageForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsageForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function getActionsCacheUsageByRepoForOrg(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsageByRepoForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsageByRepoForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $per_page, $page);
    }
    public function getGithubActionsPermissionsOrganization(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsPermissionsOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsPermissionsOrganization($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function setGithubActionsPermissionsOrganization(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsPermissionsOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsPermissionsOrganization($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function listSelectedRepositoriesEnabledGithubActionsOrganization(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $per_page, $page);
    }
    public function setSelectedRepositoriesEnabledGithubActionsOrganization(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function enableSelectedRepositoryGithubActionsOrganization(string $org, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\EnableSelectedRepositoryGithubActionsOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\EnableSelectedRepositoryGithubActionsOrganization($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $repository_id);
    }
    public function disableSelectedRepositoryGithubActionsOrganization(string $org, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DisableSelectedRepositoryGithubActionsOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DisableSelectedRepositoryGithubActionsOrganization($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $repository_id);
    }
    public function getAllowedActionsOrganization(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetAllowedActionsOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetAllowedActionsOrganization($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function setAllowedActionsOrganization(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetAllowedActionsOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetAllowedActionsOrganization($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function getGithubActionsDefaultWorkflowPermissionsOrganization(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function setGithubActionsDefaultWorkflowPermissionsOrganization(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function listRequiredWorkflows(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRequiredWorkflows
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRequiredWorkflows($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $per_page, $page);
    }
    public function createRequiredWorkflow(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRequiredWorkflow
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRequiredWorkflow($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function getRequiredWorkflow(string $org, int $required_workflow_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRequiredWorkflow
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRequiredWorkflow($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $required_workflow_id);
    }
    public function deleteRequiredWorkflow(string $org, int $required_workflow_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteRequiredWorkflow
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteRequiredWorkflow($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $required_workflow_id);
    }
    public function updateRequiredWorkflow(string $org, int $required_workflow_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\UpdateRequiredWorkflow
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\UpdateRequiredWorkflow($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $required_workflow_id);
    }
    public function listSelectedRepositoriesRequiredWorkflow(string $org, int $required_workflow_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedRepositoriesRequiredWorkflow
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedRepositoriesRequiredWorkflow($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $required_workflow_id);
    }
    public function setSelectedReposToRequiredWorkflow(string $org, int $required_workflow_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedReposToRequiredWorkflow
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedReposToRequiredWorkflow($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $required_workflow_id);
    }
    public function addSelectedRepoToRequiredWorkflow(string $org, int $required_workflow_id, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddSelectedRepoToRequiredWorkflow
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddSelectedRepoToRequiredWorkflow($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $required_workflow_id, $repository_id);
    }
    public function removeSelectedRepoFromRequiredWorkflow(string $org, int $required_workflow_id, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveSelectedRepoFromRequiredWorkflow
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveSelectedRepoFromRequiredWorkflow($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $required_workflow_id, $repository_id);
    }
    public function listSelfHostedRunnerGroupsForOrg(string $org, int $per_page = 30, int $page = 1, string $visible_to_repository) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnerGroupsForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnerGroupsForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $per_page, $page, $visible_to_repository);
    }
    public function createSelfHostedRunnerGroupForOrg(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateSelfHostedRunnerGroupForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateSelfHostedRunnerGroupForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function getSelfHostedRunnerGroupForOrg(string $org, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetSelfHostedRunnerGroupForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetSelfHostedRunnerGroupForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_group_id);
    }
    public function deleteSelfHostedRunnerGroupFromOrg(string $org, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteSelfHostedRunnerGroupFromOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteSelfHostedRunnerGroupFromOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_group_id);
    }
    public function updateSelfHostedRunnerGroupForOrg(string $org, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\UpdateSelfHostedRunnerGroupForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\UpdateSelfHostedRunnerGroupForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_group_id);
    }
    public function listRepoAccessToSelfHostedRunnerGroupInOrg(string $org, int $runner_group_id, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_group_id, $page, $per_page);
    }
    public function setRepoAccessToSelfHostedRunnerGroupInOrg(string $org, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_group_id);
    }
    public function removeRepoAccessToSelfHostedRunnerGroupInOrg(string $org, int $runner_group_id, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveRepoAccessToSelfHostedRunnerGroupInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveRepoAccessToSelfHostedRunnerGroupInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_group_id, $repository_id);
    }
    public function listSelfHostedRunnersInGroupForOrg(string $org, int $runner_group_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnersInGroupForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnersInGroupForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_group_id, $per_page, $page);
    }
    public function setSelfHostedRunnersInGroupForOrg(string $org, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelfHostedRunnersInGroupForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelfHostedRunnersInGroupForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_group_id);
    }
    public function addSelfHostedRunnerToGroupForOrg(string $org, int $runner_group_id, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddSelfHostedRunnerToGroupForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddSelfHostedRunnerToGroupForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_group_id, $runner_id);
    }
    public function removeSelfHostedRunnerFromGroupForOrg(string $org, int $runner_group_id, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveSelfHostedRunnerFromGroupForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveSelfHostedRunnerFromGroupForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_group_id, $runner_id);
    }
    public function listSelfHostedRunnersForOrg(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnersForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnersForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $per_page, $page);
    }
    public function listRunnerApplicationsForOrg(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRunnerApplicationsForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRunnerApplicationsForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function createRegistrationTokenForOrg(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRegistrationTokenForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRegistrationTokenForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function createRemoveTokenForOrg(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRemoveTokenForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRemoveTokenForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function getSelfHostedRunnerForOrg(string $org, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetSelfHostedRunnerForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetSelfHostedRunnerForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_id);
    }
    public function deleteSelfHostedRunnerFromOrg(string $org, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteSelfHostedRunnerFromOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteSelfHostedRunnerFromOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_id);
    }
    public function listLabelsForSelfHostedRunnerForOrg(string $org, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_id);
    }
    public function setCustomLabelsForSelfHostedRunnerForOrg(string $org, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomLabelsForSelfHostedRunnerForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomLabelsForSelfHostedRunnerForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_id);
    }
    public function addCustomLabelsToSelfHostedRunnerForOrg(string $org, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddCustomLabelsToSelfHostedRunnerForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddCustomLabelsToSelfHostedRunnerForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_id);
    }
    public function removeAllCustomLabelsFromSelfHostedRunnerForOrg(string $org, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_id);
    }
    public function removeCustomLabelFromSelfHostedRunnerForOrg(string $org, int $runner_id, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_id, $name);
    }
    public function listOrgSecrets(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListOrgSecrets
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListOrgSecrets($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $per_page, $page);
    }
    public function getOrgPublicKey(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetOrgPublicKey
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetOrgPublicKey($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function getOrgSecret(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $secret_name);
    }
    public function createOrUpdateOrgSecret(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $secret_name);
    }
    public function deleteOrgSecret(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $secret_name);
    }
    public function listSelectedReposForOrgSecret(string $org, string $secret_name, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedReposForOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedReposForOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $secret_name, $page, $per_page);
    }
    public function setSelectedReposForOrgSecret(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedReposForOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedReposForOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $secret_name);
    }
    public function addSelectedRepoToOrgSecret(string $org, string $secret_name, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddSelectedRepoToOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddSelectedRepoToOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $secret_name, $repository_id);
    }
    public function removeSelectedRepoFromOrgSecret(string $org, string $secret_name, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveSelectedRepoFromOrgSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveSelectedRepoFromOrgSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $secret_name, $repository_id);
    }
    public function listOrgVariables(string $org, int $per_page = 10, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListOrgVariables
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListOrgVariables($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $per_page, $page);
    }
    public function createOrgVariable(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrgVariable
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrgVariable($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function getOrgVariable(string $org, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetOrgVariable
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetOrgVariable($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $name);
    }
    public function deleteOrgVariable(string $org, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteOrgVariable
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteOrgVariable($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $name);
    }
    public function updateOrgVariable(string $org, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\UpdateOrgVariable
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\UpdateOrgVariable($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $name);
    }
    public function listSelectedReposForOrgVariable(string $org, string $name, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedReposForOrgVariable
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedReposForOrgVariable($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $name, $page, $per_page);
    }
    public function setSelectedReposForOrgVariable(string $org, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedReposForOrgVariable
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedReposForOrgVariable($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $name);
    }
    public function addSelectedRepoToOrgVariable(string $org, string $name, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddSelectedRepoToOrgVariable
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddSelectedRepoToOrgVariable($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $name, $repository_id);
    }
    public function removeSelectedRepoFromOrgVariable(string $org, string $name, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveSelectedRepoFromOrgVariable
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveSelectedRepoFromOrgVariable($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $name, $repository_id);
    }
    public function listRepoRequiredWorkflows(string $org, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoRequiredWorkflows
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoRequiredWorkflows($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $repo, $per_page, $page);
    }
    public function getRepoRequiredWorkflow(string $org, string $repo, int $required_workflow_id_for_repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoRequiredWorkflow
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoRequiredWorkflow($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $repo, $required_workflow_id_for_repo);
    }
    public function getRepoRequiredWorkflowUsage(string $org, string $repo, int $required_workflow_id_for_repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoRequiredWorkflowUsage
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoRequiredWorkflowUsage($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $repo, $required_workflow_id_for_repo);
    }
    public function listArtifactsForRepo(string $owner, string $repo, int $per_page = 30, int $page = 1, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListArtifactsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListArtifactsForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page, $name);
    }
    public function getArtifact(string $owner, string $repo, int $artifact_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetArtifact
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetArtifact($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $artifact_id);
    }
    public function deleteArtifact(string $owner, string $repo, int $artifact_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteArtifact
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteArtifact($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $artifact_id);
    }
    public function downloadArtifact(string $owner, string $repo, int $artifact_id, string $archive_format) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadArtifact
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadArtifact($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $artifact_id, $archive_format);
    }
    public function getActionsCacheUsage(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsage
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsage($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getActionsCacheList(string $owner, string $repo, int $per_page = 30, int $page = 1, string $ref, string $key, string $sort = 'last_accessed_at', string $direction = 'desc') : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheList
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheList($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page, $ref, $key, $sort, $direction);
    }
    public function deleteActionsCacheByKey(string $owner, string $repo, string $key, string $ref) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteActionsCacheByKey
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteActionsCacheByKey($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $key, $ref);
    }
    public function deleteActionsCacheById(string $owner, string $repo, int $cache_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteActionsCacheById
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteActionsCacheById($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $cache_id);
    }
    public function getJobForWorkflowRun(string $owner, string $repo, int $job_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetJobForWorkflowRun
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetJobForWorkflowRun($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $job_id);
    }
    public function downloadJobLogsForWorkflowRun(string $owner, string $repo, int $job_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadJobLogsForWorkflowRun
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadJobLogsForWorkflowRun($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $job_id);
    }
    public function reRunJobForWorkflowRun(string $owner, string $repo, int $job_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunJobForWorkflowRun
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunJobForWorkflowRun($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $job_id);
    }
    public function getCustomOidcSubClaimForRepo(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetCustomOidcSubClaimForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetCustomOidcSubClaimForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function setCustomOidcSubClaimForRepo(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomOidcSubClaimForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomOidcSubClaimForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getGithubActionsPermissionsRepository(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsPermissionsRepository
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsPermissionsRepository($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function setGithubActionsPermissionsRepository(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsPermissionsRepository
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsPermissionsRepository($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getWorkflowAccessToRepository(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowAccessToRepository
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowAccessToRepository($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function setWorkflowAccessToRepository(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetWorkflowAccessToRepository
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetWorkflowAccessToRepository($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getAllowedActionsRepository(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetAllowedActionsRepository
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetAllowedActionsRepository($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function setAllowedActionsRepository(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetAllowedActionsRepository
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetAllowedActionsRepository($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getGithubActionsDefaultWorkflowPermissionsRepository(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function setGithubActionsDefaultWorkflowPermissionsRepository(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function listRequiredWorkflowRuns(string $owner, string $repo, int $required_workflow_id_for_repo, string $actor, string $branch, string $event, string $status, int $per_page = 30, int $page = 1, string $created, bool $exclude_pull_requests = false, int $check_suite_id, string $head_sha) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRequiredWorkflowRuns
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRequiredWorkflowRuns($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $required_workflow_id_for_repo, $actor, $branch, $event, $status, $per_page, $page, $created, $exclude_pull_requests, $check_suite_id, $head_sha);
    }
    public function listSelfHostedRunnersForRepo(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnersForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnersForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function listRunnerApplicationsForRepo(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRunnerApplicationsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRunnerApplicationsForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function createRegistrationTokenForRepo(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRegistrationTokenForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRegistrationTokenForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function createRemoveTokenForRepo(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRemoveTokenForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRemoveTokenForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getSelfHostedRunnerForRepo(string $owner, string $repo, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetSelfHostedRunnerForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetSelfHostedRunnerForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $runner_id);
    }
    public function deleteSelfHostedRunnerFromRepo(string $owner, string $repo, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteSelfHostedRunnerFromRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteSelfHostedRunnerFromRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $runner_id);
    }
    public function listLabelsForSelfHostedRunnerForRepo(string $owner, string $repo, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListLabelsForSelfHostedRunnerForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListLabelsForSelfHostedRunnerForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $runner_id);
    }
    public function setCustomLabelsForSelfHostedRunnerForRepo(string $owner, string $repo, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomLabelsForSelfHostedRunnerForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomLabelsForSelfHostedRunnerForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $runner_id);
    }
    public function addCustomLabelsToSelfHostedRunnerForRepo(string $owner, string $repo, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddCustomLabelsToSelfHostedRunnerForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddCustomLabelsToSelfHostedRunnerForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $runner_id);
    }
    public function removeAllCustomLabelsFromSelfHostedRunnerForRepo(string $owner, string $repo, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $runner_id);
    }
    public function removeCustomLabelFromSelfHostedRunnerForRepo(string $owner, string $repo, int $runner_id, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $runner_id, $name);
    }
    public function listWorkflowRunsForRepo(string $owner, string $repo, string $actor, string $branch, string $event, string $status, int $per_page = 30, int $page = 1, string $created, bool $exclude_pull_requests = false, int $check_suite_id, string $head_sha) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListWorkflowRunsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListWorkflowRunsForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $actor, $branch, $event, $status, $per_page, $page, $created, $exclude_pull_requests, $check_suite_id, $head_sha);
    }
    public function getWorkflowRun(string $owner, string $repo, int $run_id, bool $exclude_pull_requests = false) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRun
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRun($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id, $exclude_pull_requests);
    }
    public function deleteWorkflowRun(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteWorkflowRun
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteWorkflowRun($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id);
    }
    public function getReviewsForRun(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetReviewsForRun
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetReviewsForRun($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id);
    }
    public function approveWorkflowRun(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ApproveWorkflowRun
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ApproveWorkflowRun($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id);
    }
    public function listWorkflowRunArtifacts(string $owner, string $repo, int $run_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListWorkflowRunArtifacts
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListWorkflowRunArtifacts($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id, $per_page, $page);
    }
    public function getWorkflowRunAttempt(string $owner, string $repo, int $run_id, int $attempt_number, bool $exclude_pull_requests = false) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRunAttempt
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRunAttempt($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id, $attempt_number, $exclude_pull_requests);
    }
    public function listJobsForWorkflowRunAttempt(string $owner, string $repo, int $run_id, int $attempt_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListJobsForWorkflowRunAttempt
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListJobsForWorkflowRunAttempt($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id, $attempt_number, $per_page, $page);
    }
    public function downloadWorkflowRunAttemptLogs(string $owner, string $repo, int $run_id, int $attempt_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadWorkflowRunAttemptLogs
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadWorkflowRunAttemptLogs($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id, $attempt_number);
    }
    public function cancelWorkflowRun(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CancelWorkflowRun
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CancelWorkflowRun($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id);
    }
    public function listJobsForWorkflowRun(string $owner, string $repo, int $run_id, string $filter = 'latest', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListJobsForWorkflowRun
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListJobsForWorkflowRun($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id, $filter, $per_page, $page);
    }
    public function downloadWorkflowRunLogs(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadWorkflowRunLogs
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadWorkflowRunLogs($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id);
    }
    public function deleteWorkflowRunLogs(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteWorkflowRunLogs
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteWorkflowRunLogs($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id);
    }
    public function getPendingDeploymentsForRun(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetPendingDeploymentsForRun
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetPendingDeploymentsForRun($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id);
    }
    public function reviewPendingDeploymentsForRun(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReviewPendingDeploymentsForRun
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReviewPendingDeploymentsForRun($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id);
    }
    public function reRunWorkflow(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunWorkflow
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunWorkflow($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id);
    }
    public function reRunWorkflowFailedJobs(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunWorkflowFailedJobs
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunWorkflowFailedJobs($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id);
    }
    public function getWorkflowRunUsage(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRunUsage
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRunUsage($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id);
    }
    public function listRepoSecrets(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoSecrets
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoSecrets($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function getRepoPublicKey(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoPublicKey
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoPublicKey($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getRepoSecret(string $owner, string $repo, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $secret_name);
    }
    public function createOrUpdateRepoSecret(string $owner, string $repo, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateRepoSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateRepoSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $secret_name);
    }
    public function deleteRepoSecret(string $owner, string $repo, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteRepoSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteRepoSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $secret_name);
    }
    public function listRepoVariables(string $owner, string $repo, int $per_page = 10, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoVariables
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoVariables($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function createRepoVariable(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRepoVariable
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRepoVariable($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getRepoVariable(string $owner, string $repo, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoVariable
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoVariable($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $name);
    }
    public function deleteRepoVariable(string $owner, string $repo, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteRepoVariable
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteRepoVariable($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $name);
    }
    public function updateRepoVariable(string $owner, string $repo, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\UpdateRepoVariable
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\UpdateRepoVariable($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $name);
    }
    public function listRepoWorkflows(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoWorkflows
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoWorkflows($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function getWorkflow(string $owner, string $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflow
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflow($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $workflow_id);
    }
    public function disableWorkflow(string $owner, string $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DisableWorkflow
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DisableWorkflow($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $workflow_id);
    }
    public function createWorkflowDispatch(string $owner, string $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateWorkflowDispatch
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateWorkflowDispatch($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $workflow_id);
    }
    public function enableWorkflow(string $owner, string $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\EnableWorkflow
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\EnableWorkflow($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $workflow_id);
    }
    public function listWorkflowRuns(string $owner, string $repo, $workflow_id, string $actor, string $branch, string $event, string $status, int $per_page = 30, int $page = 1, string $created, bool $exclude_pull_requests = false, int $check_suite_id, string $head_sha) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListWorkflowRuns
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListWorkflowRuns($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $workflow_id, $actor, $branch, $event, $status, $per_page, $page, $created, $exclude_pull_requests, $check_suite_id, $head_sha);
    }
    public function getWorkflowUsage(string $owner, string $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowUsage
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowUsage($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $workflow_id);
    }
    public function listEnvironmentSecrets(int $repository_id, string $environment_name, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListEnvironmentSecrets
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListEnvironmentSecrets($this->requestSchemaValidator, $this->responseSchemaValidator, $repository_id, $environment_name, $per_page, $page);
    }
    public function getEnvironmentPublicKey(int $repository_id, string $environment_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentPublicKey
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentPublicKey($this->requestSchemaValidator, $this->responseSchemaValidator, $repository_id, $environment_name);
    }
    public function getEnvironmentSecret(int $repository_id, string $environment_name, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $repository_id, $environment_name, $secret_name);
    }
    public function createOrUpdateEnvironmentSecret(int $repository_id, string $environment_name, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateEnvironmentSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateEnvironmentSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $repository_id, $environment_name, $secret_name);
    }
    public function deleteEnvironmentSecret(int $repository_id, string $environment_name, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteEnvironmentSecret
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteEnvironmentSecret($this->requestSchemaValidator, $this->responseSchemaValidator, $repository_id, $environment_name, $secret_name);
    }
    public function listEnvironmentVariables(int $repository_id, string $environment_name, int $per_page = 10, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListEnvironmentVariables
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListEnvironmentVariables($this->requestSchemaValidator, $this->responseSchemaValidator, $repository_id, $environment_name, $per_page, $page);
    }
    public function createEnvironmentVariable(int $repository_id, string $environment_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateEnvironmentVariable
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateEnvironmentVariable($this->requestSchemaValidator, $this->responseSchemaValidator, $repository_id, $environment_name);
    }
    public function getEnvironmentVariable(int $repository_id, string $environment_name, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentVariable
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentVariable($this->requestSchemaValidator, $this->responseSchemaValidator, $repository_id, $environment_name, $name);
    }
    public function deleteEnvironmentVariable(int $repository_id, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteEnvironmentVariable
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteEnvironmentVariable($this->requestSchemaValidator, $this->responseSchemaValidator, $repository_id, $name);
    }
    public function updateEnvironmentVariable(int $repository_id, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\UpdateEnvironmentVariable
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\UpdateEnvironmentVariable($this->requestSchemaValidator, $this->responseSchemaValidator, $repository_id, $name);
    }
}
