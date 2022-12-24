<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class EnterpriseAdmin
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function listGlobalWebhooks_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListGlobalWebhooks_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListGlobalWebhooks_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
    public function createGlobalWebhook_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateGlobalWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateGlobalWebhook_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getGlobalWebhook_(int $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetGlobalWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetGlobalWebhook_($this->requestSchemaValidator, $this->responseSchemaValidator, $hook_id);
    }
    public function deleteGlobalWebhook_(int $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteGlobalWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteGlobalWebhook_($this->requestSchemaValidator, $this->responseSchemaValidator, $hook_id);
    }
    public function updateGlobalWebhook_(int $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateGlobalWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateGlobalWebhook_($this->requestSchemaValidator, $this->responseSchemaValidator, $hook_id);
    }
    public function pingGlobalWebhook_(int $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\PingGlobalWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\PingGlobalWebhook_($this->requestSchemaValidator, $this->responseSchemaValidator, $hook_id);
    }
    public function listPublicKeys_(int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created', string $since) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListPublicKeys_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListPublicKeys_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page, $direction, $sort, $since);
    }
    public function deletePublicKey_(string $key_ids) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeletePublicKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeletePublicKey_($this->requestSchemaValidator, $this->responseSchemaValidator, $key_ids);
    }
    public function createOrg_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateOrg_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function updateOrgName_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateOrgName_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateOrgName_($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function listPreReceiveEnvironments_(int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created') : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListPreReceiveEnvironments_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListPreReceiveEnvironments_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page, $direction, $sort);
    }
    public function createPreReceiveEnvironment_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreatePreReceiveEnvironment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreatePreReceiveEnvironment_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getPreReceiveEnvironment_(int $pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetPreReceiveEnvironment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetPreReceiveEnvironment_($this->requestSchemaValidator, $this->responseSchemaValidator, $pre_receive_environment_id);
    }
    public function deletePreReceiveEnvironment_(int $pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment_($this->requestSchemaValidator, $this->responseSchemaValidator, $pre_receive_environment_id);
    }
    public function updatePreReceiveEnvironment_(int $pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdatePreReceiveEnvironment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdatePreReceiveEnvironment_($this->requestSchemaValidator, $this->responseSchemaValidator, $pre_receive_environment_id);
    }
    public function startPreReceiveEnvironmentDownload_(int $pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload_($this->requestSchemaValidator, $this->responseSchemaValidator, $pre_receive_environment_id);
    }
    public function getDownloadStatusForPreReceiveEnvironment_(int $pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment_($this->requestSchemaValidator, $this->responseSchemaValidator, $pre_receive_environment_id);
    }
    public function listPersonalAccessTokens_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListPersonalAccessTokens_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListPersonalAccessTokens_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
    public function deletePersonalAccessToken_(int $token_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeletePersonalAccessToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeletePersonalAccessToken_($this->requestSchemaValidator, $this->responseSchemaValidator, $token_id);
    }
    public function deleteUser_(string $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function createImpersonationOAuthToken_(string $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateImpersonationOAuthToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateImpersonationOAuthToken_($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function deleteImpersonationOAuthToken_(string $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteImpersonationOAuthToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteImpersonationOAuthToken_($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function getAnnouncement_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetAnnouncement_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetAnnouncement_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function removeAnnouncement_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\RemoveAnnouncement_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\RemoveAnnouncement_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function setAnnouncement_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetAnnouncement_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetAnnouncement_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getLicenseInformation_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetLicenseInformation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetLicenseInformation_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getAllStats_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetAllStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetAllStats_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getCommentStats_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetCommentStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetCommentStats_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getGistStats_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetGistStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetGistStats_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getHooksStats_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetHooksStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetHooksStats_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getIssueStats_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetIssueStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetIssueStats_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getMilestoneStats_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetMilestoneStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetMilestoneStats_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getOrgStats_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetOrgStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetOrgStats_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getPagesStats_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetPagesStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetPagesStats_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getPullRequestStats_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetPullRequestStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetPullRequestStats_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getRepoStats_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetRepoStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetRepoStats_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getUserStats_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetUserStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetUserStats_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getGithubActionsPermissionsEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function setGithubActionsPermissionsEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function listSelectedOrganizationsEnabledGithubActionsEnterprise_(string $enterprise, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $per_page, $page);
    }
    public function setSelectedOrganizationsEnabledGithubActionsEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function enableSelectedOrganizationGithubActionsEnterprise_(string $enterprise, int $org_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $org_id);
    }
    public function disableSelectedOrganizationGithubActionsEnterprise_(string $enterprise, int $org_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $org_id);
    }
    public function getAllowedActionsEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetAllowedActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetAllowedActionsEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function setAllowedActionsEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetAllowedActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetAllowedActionsEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function listSelfHostedRunnerGroupsForEnterprise_(string $enterprise, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $per_page, $page);
    }
    public function createSelfHostedRunnerGroupForEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function getSelfHostedRunnerGroupForEnterprise_(string $enterprise, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id);
    }
    public function deleteSelfHostedRunnerGroupFromEnterprise_(string $enterprise, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id);
    }
    public function updateSelfHostedRunnerGroupForEnterprise_(string $enterprise, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id);
    }
    public function listSelfHostedRunnersInGroupForEnterprise_(string $enterprise, int $runner_group_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id, $per_page, $page);
    }
    public function setSelfHostedRunnersInGroupForEnterprise_(string $enterprise, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id);
    }
    public function addSelfHostedRunnerToGroupForEnterprise_(string $enterprise, int $runner_group_id, int $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id, $runner_id);
    }
    public function removeSelfHostedRunnerFromGroupForEnterprise_(string $enterprise, int $runner_group_id, int $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id, $runner_id);
    }
    public function listSelfHostedRunnersForEnterprise_(string $enterprise, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $per_page, $page);
    }
    public function listRunnerApplicationsForEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListRunnerApplicationsForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\ListRunnerApplicationsForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function createRegistrationTokenForEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateRegistrationTokenForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateRegistrationTokenForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function createRemoveTokenForEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function getSelfHostedRunnerForEnterprise_(string $enterprise, int $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_id);
    }
    public function deleteSelfHostedRunnerFromEnterprise_(string $enterprise, int $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_id);
    }
    public function getAuditLog_(string $enterprise, string $phrase, string $after, string $before, string $order, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetAuditLog_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetAuditLog_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $phrase, $after, $before, $order, $page, $per_page);
    }
    public function suspendUser_(string $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SuspendUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\SuspendUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function unsuspendUser_(string $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UnsuspendUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UnsuspendUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
}
