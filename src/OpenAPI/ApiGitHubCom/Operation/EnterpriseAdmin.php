<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class EnterpriseAdmin
{
    public function getServerStatistics_(string $enterprise_or_org, string $date_start, string $date_end) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetServerStatistics_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetServerStatistics_($enterprise_or_org, $date_start, $date_end);
    }
    public function getGithubActionsPermissionsEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise_($enterprise);
    }
    public function setGithubActionsPermissionsEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise_($enterprise);
    }
    public function listSelectedOrganizationsEnabledGithubActionsEnterprise_(string $enterprise, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise_($enterprise, $per_page, $page);
    }
    public function setSelectedOrganizationsEnabledGithubActionsEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise_($enterprise);
    }
    public function enableSelectedOrganizationGithubActionsEnterprise_(string $enterprise, int $org_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise_($enterprise, $org_id);
    }
    public function disableSelectedOrganizationGithubActionsEnterprise_(string $enterprise, int $org_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise_($enterprise, $org_id);
    }
    public function getAllowedActionsEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetAllowedActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetAllowedActionsEnterprise_($enterprise);
    }
    public function setAllowedActionsEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetAllowedActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetAllowedActionsEnterprise_($enterprise);
    }
    public function listSelfHostedRunnerGroupsForEnterprise_(string $enterprise, int $per_page = 30, int $page = 1, string $visible_to_organization) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise_($enterprise, $per_page, $page, $visible_to_organization);
    }
    public function createSelfHostedRunnerGroupForEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise_($enterprise);
    }
    public function getSelfHostedRunnerGroupForEnterprise_(string $enterprise, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise_($enterprise, $runner_group_id);
    }
    public function deleteSelfHostedRunnerGroupFromEnterprise_(string $enterprise, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise_($enterprise, $runner_group_id);
    }
    public function updateSelfHostedRunnerGroupForEnterprise_(string $enterprise, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise_($enterprise, $runner_group_id);
    }
    public function listOrgAccessToSelfHostedRunnerGroupInEnterprise_(string $enterprise, int $runner_group_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise_($enterprise, $runner_group_id, $per_page, $page);
    }
    public function setOrgAccessToSelfHostedRunnerGroupInEnterprise_(string $enterprise, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise_($enterprise, $runner_group_id);
    }
    public function addOrgAccessToSelfHostedRunnerGroupInEnterprise_(string $enterprise, int $runner_group_id, int $org_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise_($enterprise, $runner_group_id, $org_id);
    }
    public function removeOrgAccessToSelfHostedRunnerGroupInEnterprise_(string $enterprise, int $runner_group_id, int $org_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise_($enterprise, $runner_group_id, $org_id);
    }
    public function listSelfHostedRunnersInGroupForEnterprise_(string $enterprise, int $runner_group_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise_($enterprise, $runner_group_id, $per_page, $page);
    }
    public function setSelfHostedRunnersInGroupForEnterprise_(string $enterprise, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise_($enterprise, $runner_group_id);
    }
    public function addSelfHostedRunnerToGroupForEnterprise_(string $enterprise, int $runner_group_id, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise_($enterprise, $runner_group_id, $runner_id);
    }
    public function removeSelfHostedRunnerFromGroupForEnterprise_(string $enterprise, int $runner_group_id, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise_($enterprise, $runner_group_id, $runner_id);
    }
    public function listSelfHostedRunnersForEnterprise_(string $enterprise, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise_($enterprise, $per_page, $page);
    }
    public function listRunnerApplicationsForEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListRunnerApplicationsForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListRunnerApplicationsForEnterprise_($enterprise);
    }
    public function createRegistrationTokenForEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateRegistrationTokenForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateRegistrationTokenForEnterprise_($enterprise);
    }
    public function createRemoveTokenForEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise_($enterprise);
    }
    public function getSelfHostedRunnerForEnterprise_(string $enterprise, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise_($enterprise, $runner_id);
    }
    public function deleteSelfHostedRunnerFromEnterprise_(string $enterprise, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise_($enterprise, $runner_id);
    }
    public function listLabelsForSelfHostedRunnerForEnterprise_(string $enterprise, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise_($enterprise, $runner_id);
    }
    public function setCustomLabelsForSelfHostedRunnerForEnterprise_(string $enterprise, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetCustomLabelsForSelfHostedRunnerForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetCustomLabelsForSelfHostedRunnerForEnterprise_($enterprise, $runner_id);
    }
    public function addCustomLabelsToSelfHostedRunnerForEnterprise_(string $enterprise, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddCustomLabelsToSelfHostedRunnerForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddCustomLabelsToSelfHostedRunnerForEnterprise_($enterprise, $runner_id);
    }
    public function removeAllCustomLabelsFromSelfHostedRunnerForEnterprise_(string $enterprise, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise_($enterprise, $runner_id);
    }
    public function removeCustomLabelFromSelfHostedRunnerForEnterprise_(string $enterprise, int $runner_id, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveCustomLabelFromSelfHostedRunnerForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveCustomLabelFromSelfHostedRunnerForEnterprise_($enterprise, $runner_id, $name);
    }
}
