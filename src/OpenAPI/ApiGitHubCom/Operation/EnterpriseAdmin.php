<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class EnterpriseAdmin
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function getServerStatistics(string $enterprise_or_org, string $date_start, string $date_end) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetServerStatistics
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetServerStatistics($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise_or_org, $date_start, $date_end);
    }
    public function getGithubActionsPermissionsEnterprise(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function setGithubActionsPermissionsEnterprise(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function listSelectedOrganizationsEnabledGithubActionsEnterprise(string $enterprise, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $per_page, $page);
    }
    public function setSelectedOrganizationsEnabledGithubActionsEnterprise(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function enableSelectedOrganizationGithubActionsEnterprise(string $enterprise, int $org_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $org_id);
    }
    public function disableSelectedOrganizationGithubActionsEnterprise(string $enterprise, int $org_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $org_id);
    }
    public function getAllowedActionsEnterprise(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetAllowedActionsEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetAllowedActionsEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function setAllowedActionsEnterprise(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetAllowedActionsEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetAllowedActionsEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function listSelfHostedRunnerGroupsForEnterprise(string $enterprise, int $per_page = 30, int $page = 1, string $visible_to_organization) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $per_page, $page, $visible_to_organization);
    }
    public function createSelfHostedRunnerGroupForEnterprise(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function getSelfHostedRunnerGroupForEnterprise(string $enterprise, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id);
    }
    public function deleteSelfHostedRunnerGroupFromEnterprise(string $enterprise, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id);
    }
    public function updateSelfHostedRunnerGroupForEnterprise(string $enterprise, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id);
    }
    public function listOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runner_group_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id, $per_page, $page);
    }
    public function setOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id);
    }
    public function addOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runner_group_id, int $org_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id, $org_id);
    }
    public function removeOrgAccessToSelfHostedRunnerGroupInEnterprise(string $enterprise, int $runner_group_id, int $org_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id, $org_id);
    }
    public function listSelfHostedRunnersInGroupForEnterprise(string $enterprise, int $runner_group_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id, $per_page, $page);
    }
    public function setSelfHostedRunnersInGroupForEnterprise(string $enterprise, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id);
    }
    public function addSelfHostedRunnerToGroupForEnterprise(string $enterprise, int $runner_group_id, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id, $runner_id);
    }
    public function removeSelfHostedRunnerFromGroupForEnterprise(string $enterprise, int $runner_group_id, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id, $runner_id);
    }
    public function listSelfHostedRunnersForEnterprise(string $enterprise, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $per_page, $page);
    }
    public function listRunnerApplicationsForEnterprise(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListRunnerApplicationsForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListRunnerApplicationsForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function createRegistrationTokenForEnterprise(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateRegistrationTokenForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateRegistrationTokenForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function createRemoveTokenForEnterprise(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function getSelfHostedRunnerForEnterprise(string $enterprise, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_id);
    }
    public function deleteSelfHostedRunnerFromEnterprise(string $enterprise, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_id);
    }
    public function listLabelsForSelfHostedRunnerForEnterprise(string $enterprise, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_id);
    }
    public function setCustomLabelsForSelfHostedRunnerForEnterprise(string $enterprise, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetCustomLabelsForSelfHostedRunnerForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetCustomLabelsForSelfHostedRunnerForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_id);
    }
    public function addCustomLabelsToSelfHostedRunnerForEnterprise(string $enterprise, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddCustomLabelsToSelfHostedRunnerForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddCustomLabelsToSelfHostedRunnerForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_id);
    }
    public function removeAllCustomLabelsFromSelfHostedRunnerForEnterprise(string $enterprise, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_id);
    }
    public function removeCustomLabelFromSelfHostedRunnerForEnterprise(string $enterprise, int $runner_id, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveCustomLabelFromSelfHostedRunnerForEnterprise
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveCustomLabelFromSelfHostedRunnerForEnterprise($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_id, $name);
    }
}
