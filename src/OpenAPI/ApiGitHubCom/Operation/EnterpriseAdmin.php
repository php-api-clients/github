<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class EnterpriseAdmin
{
    public function getServerStatistics_($enterprise_or_org, $date_start, $date_end) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetServerStatistics_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetServerStatistics_($enterprise_or_org, $date_start, $date_end);
    }
    public function getGithubActionsPermissionsEnterprise_($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise_($enterprise);
    }
    public function setGithubActionsPermissionsEnterprise_($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise_($enterprise);
    }
    public function listSelectedOrganizationsEnabledGithubActionsEnterprise_($enterprise, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise_($enterprise, $per_page, $page);
    }
    public function setSelectedOrganizationsEnabledGithubActionsEnterprise_($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise_($enterprise);
    }
    public function enableSelectedOrganizationGithubActionsEnterprise_($enterprise, $org_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise_($enterprise, $org_id);
    }
    public function disableSelectedOrganizationGithubActionsEnterprise_($enterprise, $org_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise_($enterprise, $org_id);
    }
    public function getAllowedActionsEnterprise_($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetAllowedActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetAllowedActionsEnterprise_($enterprise);
    }
    public function setAllowedActionsEnterprise_($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetAllowedActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetAllowedActionsEnterprise_($enterprise);
    }
    public function listSelfHostedRunnerGroupsForEnterprise_($enterprise, int $per_page = 30, int $page = 1, $visible_to_organization) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise_($enterprise, $per_page, $page, $visible_to_organization);
    }
    public function createSelfHostedRunnerGroupForEnterprise_($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise_($enterprise);
    }
    public function getSelfHostedRunnerGroupForEnterprise_($enterprise, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise_($enterprise, $runner_group_id);
    }
    public function deleteSelfHostedRunnerGroupFromEnterprise_($enterprise, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise_($enterprise, $runner_group_id);
    }
    public function updateSelfHostedRunnerGroupForEnterprise_($enterprise, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise_($enterprise, $runner_group_id);
    }
    public function listOrgAccessToSelfHostedRunnerGroupInEnterprise_($enterprise, $runner_group_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise_($enterprise, $runner_group_id, $per_page, $page);
    }
    public function setOrgAccessToSelfHostedRunnerGroupInEnterprise_($enterprise, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise_($enterprise, $runner_group_id);
    }
    public function addOrgAccessToSelfHostedRunnerGroupInEnterprise_($enterprise, $runner_group_id, $org_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise_($enterprise, $runner_group_id, $org_id);
    }
    public function removeOrgAccessToSelfHostedRunnerGroupInEnterprise_($enterprise, $runner_group_id, $org_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise_($enterprise, $runner_group_id, $org_id);
    }
    public function listSelfHostedRunnersInGroupForEnterprise_($enterprise, $runner_group_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise_($enterprise, $runner_group_id, $per_page, $page);
    }
    public function setSelfHostedRunnersInGroupForEnterprise_($enterprise, $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise_($enterprise, $runner_group_id);
    }
    public function addSelfHostedRunnerToGroupForEnterprise_($enterprise, $runner_group_id, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise_($enterprise, $runner_group_id, $runner_id);
    }
    public function removeSelfHostedRunnerFromGroupForEnterprise_($enterprise, $runner_group_id, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise_($enterprise, $runner_group_id, $runner_id);
    }
    public function listSelfHostedRunnersForEnterprise_($enterprise, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise_($enterprise, $per_page, $page);
    }
    public function listRunnerApplicationsForEnterprise_($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListRunnerApplicationsForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListRunnerApplicationsForEnterprise_($enterprise);
    }
    public function createRegistrationTokenForEnterprise_($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateRegistrationTokenForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateRegistrationTokenForEnterprise_($enterprise);
    }
    public function createRemoveTokenForEnterprise_($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise_($enterprise);
    }
    public function getSelfHostedRunnerForEnterprise_($enterprise, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise_($enterprise, $runner_id);
    }
    public function deleteSelfHostedRunnerFromEnterprise_($enterprise, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise_($enterprise, $runner_id);
    }
    public function listLabelsForSelfHostedRunnerForEnterprise_($enterprise, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListLabelsForSelfHostedRunnerForEnterprise_($enterprise, $runner_id);
    }
    public function setCustomLabelsForSelfHostedRunnerForEnterprise_($enterprise, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetCustomLabelsForSelfHostedRunnerForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetCustomLabelsForSelfHostedRunnerForEnterprise_($enterprise, $runner_id);
    }
    public function addCustomLabelsToSelfHostedRunnerForEnterprise_($enterprise, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddCustomLabelsToSelfHostedRunnerForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\AddCustomLabelsToSelfHostedRunnerForEnterprise_($enterprise, $runner_id);
    }
    public function removeAllCustomLabelsFromSelfHostedRunnerForEnterprise_($enterprise, $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveAllCustomLabelsFromSelfHostedRunnerForEnterprise_($enterprise, $runner_id);
    }
    public function removeCustomLabelFromSelfHostedRunnerForEnterprise_($enterprise, $runner_id, $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveCustomLabelFromSelfHostedRunnerForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\RemoveCustomLabelFromSelfHostedRunnerForEnterprise_($enterprise, $runner_id, $name);
    }
    public function getAuditLog_($enterprise, $phrase, $include, $after, $before, $order, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetAuditLog_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetAuditLog_($enterprise, $phrase, $include, $after, $before, $order, $page, $per_page);
    }
    public function listProvisionedGroupsEnterprise_($enterprise, $startIndex, $count, $filter, $excludedAttributes) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListProvisionedGroupsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListProvisionedGroupsEnterprise_($enterprise, $startIndex, $count, $filter, $excludedAttributes);
    }
    public function provisionAndInviteEnterpriseGroup_($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ProvisionAndInviteEnterpriseGroup_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ProvisionAndInviteEnterpriseGroup_($enterprise);
    }
    public function getProvisioningInformationForEnterpriseGroup_($enterprise, $scim_group_id, $excludedAttributes) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetProvisioningInformationForEnterpriseGroup_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetProvisioningInformationForEnterpriseGroup_($enterprise, $scim_group_id, $excludedAttributes);
    }
    public function setInformationForProvisionedEnterpriseGroup_($enterprise, $scim_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseGroup_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseGroup_($enterprise, $scim_group_id);
    }
    public function deleteScimGroupFromEnterprise_($enterprise, $scim_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteScimGroupFromEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteScimGroupFromEnterprise_($enterprise, $scim_group_id);
    }
    public function updateAttributeForEnterpriseGroup_($enterprise, $scim_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\UpdateAttributeForEnterpriseGroup_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\UpdateAttributeForEnterpriseGroup_($enterprise, $scim_group_id);
    }
    public function listProvisionedIdentitiesEnterprise_($enterprise, $startIndex, $count, $filter) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListProvisionedIdentitiesEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ListProvisionedIdentitiesEnterprise_($enterprise, $startIndex, $count, $filter);
    }
    public function provisionAndInviteEnterpriseUser_($enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ProvisionAndInviteEnterpriseUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\ProvisionAndInviteEnterpriseUser_($enterprise);
    }
    public function getProvisioningInformationForEnterpriseUser_($enterprise, $scim_user_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetProvisioningInformationForEnterpriseUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\GetProvisioningInformationForEnterpriseUser_($enterprise, $scim_user_id);
    }
    public function setInformationForProvisionedEnterpriseUser_($enterprise, $scim_user_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\SetInformationForProvisionedEnterpriseUser_($enterprise, $scim_user_id);
    }
    public function deleteUserFromEnterprise_($enterprise, $scim_user_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteUserFromEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\DeleteUserFromEnterprise_($enterprise, $scim_user_id);
    }
    public function updateAttributeForEnterpriseUser_($enterprise, $scim_user_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\UpdateAttributeForEnterpriseUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\EnterpriseAdmin\UpdateAttributeForEnterpriseUser_($enterprise, $scim_user_id);
    }
}
