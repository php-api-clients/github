<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation;

final class EnterpriseAdmin
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function listGlobalWebhooks_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListGlobalWebhooks_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListGlobalWebhooks_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
    public function createGlobalWebhook_(string $accept = 'application/vnd.github.superpro-preview+json') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateGlobalWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateGlobalWebhook_($this->requestSchemaValidator, $this->responseSchemaValidator, $accept);
    }
    public function getGlobalWebhook_(string $accept = 'application/vnd.github.superpro-preview+json', int $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetGlobalWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetGlobalWebhook_($this->requestSchemaValidator, $this->responseSchemaValidator, $accept, $hook_id);
    }
    public function deleteGlobalWebhook_(int $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeleteGlobalWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeleteGlobalWebhook_($this->requestSchemaValidator, $this->responseSchemaValidator, $hook_id);
    }
    public function updateGlobalWebhook_(string $accept = 'application/vnd.github.superpro-preview+json', int $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateGlobalWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateGlobalWebhook_($this->requestSchemaValidator, $this->responseSchemaValidator, $accept, $hook_id);
    }
    public function pingGlobalWebhook_(int $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\PingGlobalWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\PingGlobalWebhook_($this->requestSchemaValidator, $this->responseSchemaValidator, $hook_id);
    }
    public function listPublicKeys_(int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created', string $since) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListPublicKeys_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListPublicKeys_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page, $direction, $sort, $since);
    }
    public function deletePublicKey_(string $key_ids) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeletePublicKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeletePublicKey_($this->requestSchemaValidator, $this->responseSchemaValidator, $key_ids);
    }
    public function updateLdapMappingForTeam_(int $team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateLdapMappingForTeam_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateLdapMappingForTeam_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id);
    }
    public function syncLdapMappingForTeam_(int $team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SyncLdapMappingForTeam_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SyncLdapMappingForTeam_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id);
    }
    public function updateLdapMappingForUser_(string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateLdapMappingForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateLdapMappingForUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function syncLdapMappingForUser_(string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SyncLdapMappingForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SyncLdapMappingForUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function createOrg_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateOrg_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function updateOrgName_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateOrgName_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateOrgName_($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function listPreReceiveEnvironments_(int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListPreReceiveEnvironments_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListPreReceiveEnvironments_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page, $direction, $sort);
    }
    public function createPreReceiveEnvironment_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreatePreReceiveEnvironment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreatePreReceiveEnvironment_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getPreReceiveEnvironment_(int $pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetPreReceiveEnvironment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetPreReceiveEnvironment_($this->requestSchemaValidator, $this->responseSchemaValidator, $pre_receive_environment_id);
    }
    public function deletePreReceiveEnvironment_(int $pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment_($this->requestSchemaValidator, $this->responseSchemaValidator, $pre_receive_environment_id);
    }
    public function updatePreReceiveEnvironment_(int $pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdatePreReceiveEnvironment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdatePreReceiveEnvironment_($this->requestSchemaValidator, $this->responseSchemaValidator, $pre_receive_environment_id);
    }
    public function startPreReceiveEnvironmentDownload_(int $pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload_($this->requestSchemaValidator, $this->responseSchemaValidator, $pre_receive_environment_id);
    }
    public function getDownloadStatusForPreReceiveEnvironment_(int $pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment_($this->requestSchemaValidator, $this->responseSchemaValidator, $pre_receive_environment_id);
    }
    public function listPreReceiveHooks_(int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListPreReceiveHooks_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListPreReceiveHooks_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page, $direction, $sort);
    }
    public function createPreReceiveHook_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreatePreReceiveHook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreatePreReceiveHook_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getPreReceiveHook_(int $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetPreReceiveHook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetPreReceiveHook_($this->requestSchemaValidator, $this->responseSchemaValidator, $pre_receive_hook_id);
    }
    public function deletePreReceiveHook_(int $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeletePreReceiveHook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeletePreReceiveHook_($this->requestSchemaValidator, $this->responseSchemaValidator, $pre_receive_hook_id);
    }
    public function updatePreReceiveHook_(int $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdatePreReceiveHook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdatePreReceiveHook_($this->requestSchemaValidator, $this->responseSchemaValidator, $pre_receive_hook_id);
    }
    public function listPersonalAccessTokens_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListPersonalAccessTokens_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListPersonalAccessTokens_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
    public function deletePersonalAccessToken_(int $token_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeletePersonalAccessToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeletePersonalAccessToken_($this->requestSchemaValidator, $this->responseSchemaValidator, $token_id);
    }
    public function createUser_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateUser_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function deleteUser_(string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeleteUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeleteUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function updateUsernameForUser_(string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateUsernameForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateUsernameForUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function createImpersonationOAuthToken_(string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateImpersonationOAuthToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateImpersonationOAuthToken_($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function deleteImpersonationOAuthToken_(string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeleteImpersonationOAuthToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeleteImpersonationOAuthToken_($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function getAnnouncement_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetAnnouncement_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetAnnouncement_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function removeAnnouncement_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemoveAnnouncement_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemoveAnnouncement_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function setAnnouncement_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetAnnouncement_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetAnnouncement_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getLicenseInformation_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetLicenseInformation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetLicenseInformation_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getAllStats_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetAllStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetAllStats_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getCommentStats_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetCommentStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetCommentStats_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getGistStats_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetGistStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetGistStats_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getHooksStats_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetHooksStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetHooksStats_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getIssueStats_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetIssueStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetIssueStats_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getMilestoneStats_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetMilestoneStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetMilestoneStats_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getOrgStats_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetOrgStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetOrgStats_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getPagesStats_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetPagesStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetPagesStats_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getPullRequestStats_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetPullRequestStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetPullRequestStats_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getRepoStats_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetRepoStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetRepoStats_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getUserStats_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetUserStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetUserStats_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getGithubActionsPermissionsEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetGithubActionsPermissionsEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function setGithubActionsPermissionsEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetGithubActionsPermissionsEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function listSelectedOrganizationsEnabledGithubActionsEnterprise_(string $enterprise, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListSelectedOrganizationsEnabledGithubActionsEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $per_page, $page);
    }
    public function setSelectedOrganizationsEnabledGithubActionsEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetSelectedOrganizationsEnabledGithubActionsEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function enableSelectedOrganizationGithubActionsEnterprise_(string $enterprise, int $org_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\EnableSelectedOrganizationGithubActionsEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $org_id);
    }
    public function disableSelectedOrganizationGithubActionsEnterprise_(string $enterprise, int $org_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DisableSelectedOrganizationGithubActionsEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $org_id);
    }
    public function getAllowedActionsEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetAllowedActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetAllowedActionsEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function setAllowedActionsEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetAllowedActionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetAllowedActionsEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function listSelfHostedRunnerGroupsForEnterprise_(string $enterprise, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListSelfHostedRunnerGroupsForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $per_page, $page);
    }
    public function createSelfHostedRunnerGroupForEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateSelfHostedRunnerGroupForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function getSelfHostedRunnerGroupForEnterprise_(string $enterprise, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetSelfHostedRunnerGroupForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id);
    }
    public function deleteSelfHostedRunnerGroupFromEnterprise_(string $enterprise, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerGroupFromEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id);
    }
    public function updateSelfHostedRunnerGroupForEnterprise_(string $enterprise, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdateSelfHostedRunnerGroupForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id);
    }
    public function listOrgAccessToSelfHostedRunnerGroupInEnterprise_(string $enterprise, int $runner_group_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListOrgAccessToSelfHostedRunnerGroupInEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id, $per_page, $page);
    }
    public function setOrgAccessToSelfHostedRunnerGroupInEnterprise_(string $enterprise, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetOrgAccessToSelfHostedRunnerGroupInEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id);
    }
    public function addOrgAccessToSelfHostedRunnerGroupInEnterprise_(string $enterprise, int $runner_group_id, int $org_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\AddOrgAccessToSelfHostedRunnerGroupInEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id, $org_id);
    }
    public function removeOrgAccessToSelfHostedRunnerGroupInEnterprise_(string $enterprise, int $runner_group_id, int $org_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemoveOrgAccessToSelfHostedRunnerGroupInEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id, $org_id);
    }
    public function listSelfHostedRunnersInGroupForEnterprise_(string $enterprise, int $runner_group_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListSelfHostedRunnersInGroupForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id, $per_page, $page);
    }
    public function setSelfHostedRunnersInGroupForEnterprise_(string $enterprise, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetSelfHostedRunnersInGroupForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id);
    }
    public function addSelfHostedRunnerToGroupForEnterprise_(string $enterprise, int $runner_group_id, int $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\AddSelfHostedRunnerToGroupForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id, $runner_id);
    }
    public function removeSelfHostedRunnerFromGroupForEnterprise_(string $enterprise, int $runner_group_id, int $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemoveSelfHostedRunnerFromGroupForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_group_id, $runner_id);
    }
    public function listSelfHostedRunnersForEnterprise_(string $enterprise, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListSelfHostedRunnersForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $per_page, $page);
    }
    public function listRunnerApplicationsForEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListRunnerApplicationsForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListRunnerApplicationsForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function createRegistrationTokenForEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateRegistrationTokenForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateRegistrationTokenForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function createRemoveTokenForEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateRemoveTokenForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise);
    }
    public function getSelfHostedRunnerForEnterprise_(string $enterprise, int $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetSelfHostedRunnerForEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_id);
    }
    public function deleteSelfHostedRunnerFromEnterprise_(string $enterprise, int $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeleteSelfHostedRunnerFromEnterprise_($this->requestSchemaValidator, $this->responseSchemaValidator, $enterprise, $runner_id);
    }
    public function listPreReceiveHooksForOrg_(string $org, int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListPreReceiveHooksForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListPreReceiveHooksForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $per_page, $page, $direction, $sort);
    }
    public function getPreReceiveHookForOrg_(string $org, int $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetPreReceiveHookForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetPreReceiveHookForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $pre_receive_hook_id);
    }
    public function removePreReceiveHookEnforcementForOrg_(string $org, int $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $pre_receive_hook_id);
    }
    public function updatePreReceiveHookEnforcementForOrg_(string $org, int $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $pre_receive_hook_id);
    }
    public function listPreReceiveHooksForRepo_(string $owner, string $repo, int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListPreReceiveHooksForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\ListPreReceiveHooksForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page, $direction, $sort);
    }
    public function getPreReceiveHookForRepo_(string $owner, string $repo, int $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetPreReceiveHookForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetPreReceiveHookForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pre_receive_hook_id);
    }
    public function removePreReceiveHookEnforcementForRepo_(string $owner, string $repo, int $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pre_receive_hook_id);
    }
    public function updatePreReceiveHookEnforcementForRepo_(string $owner, string $repo, int $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $pre_receive_hook_id);
    }
    public function getConfigurationStatus_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetConfigurationStatus_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetConfigurationStatus_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function startConfigurationProcess_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\StartConfigurationProcess_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\StartConfigurationProcess_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getMaintenanceStatus_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetMaintenanceStatus_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetMaintenanceStatus_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function enableOrDisableMaintenanceMode_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\EnableOrDisableMaintenanceMode_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\EnableOrDisableMaintenanceMode_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getSettings_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetSettings_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetSettings_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function setSettings_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetSettings_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SetSettings_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getAllAuthorizedSshKeys_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetAllAuthorizedSshKeys_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetAllAuthorizedSshKeys_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function addAuthorizedSshKey_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\AddAuthorizedSshKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\AddAuthorizedSshKey_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function removeAuthorizedSshKey_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemoveAuthorizedSshKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemoveAuthorizedSshKey_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function createEnterpriseServerLicense_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateEnterpriseServerLicense_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\CreateEnterpriseServerLicense_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function upgradeLicense_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpgradeLicense_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpgradeLicense_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function promoteUserToBeSiteAdministrator_(string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\PromoteUserToBeSiteAdministrator_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\PromoteUserToBeSiteAdministrator_($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function demoteSiteAdministrator_(string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DemoteSiteAdministrator_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DemoteSiteAdministrator_($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function suspendUser_(string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SuspendUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\SuspendUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
    public function unsuspendUser_(string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UnsuspendUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UnsuspendUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $username);
    }
}
