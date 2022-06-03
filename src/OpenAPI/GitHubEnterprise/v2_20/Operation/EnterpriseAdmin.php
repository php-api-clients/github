<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation;

final class EnterpriseAdmin
{
    public function listGlobalWebhooks_(string $accept = 'application/vnd.github.superpro-preview+json', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\ListGlobalWebhooks_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\ListGlobalWebhooks_($accept, $per_page, $page);
    }
    public function createGlobalWebhook_(string $accept = 'application/vnd.github.superpro-preview+json') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\CreateGlobalWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\CreateGlobalWebhook_($accept);
    }
    public function getGlobalWebhook_(string $accept = 'application/vnd.github.superpro-preview+json', $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetGlobalWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetGlobalWebhook_($accept, $hook_id);
    }
    public function deleteGlobalWebhook_(string $accept = 'application/vnd.github.superpro-preview+json', $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\DeleteGlobalWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\DeleteGlobalWebhook_($accept, $hook_id);
    }
    public function updateGlobalWebhook_(string $accept = 'application/vnd.github.superpro-preview+json', $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UpdateGlobalWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UpdateGlobalWebhook_($accept, $hook_id);
    }
    public function pingGlobalWebhook_(string $accept = 'application/vnd.github.superpro-preview+json', $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\PingGlobalWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\PingGlobalWebhook_($accept, $hook_id);
    }
    public function listPublicKeys_(int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created', $since) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\ListPublicKeys_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\ListPublicKeys_($per_page, $page, $direction, $sort, $since);
    }
    public function deletePublicKey_($key_ids) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\DeletePublicKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\DeletePublicKey_($key_ids);
    }
    public function updateLdapMappingForTeam_($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UpdateLdapMappingForTeam_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UpdateLdapMappingForTeam_($team_id);
    }
    public function syncLdapMappingForTeam_($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\SyncLdapMappingForTeam_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\SyncLdapMappingForTeam_($team_id);
    }
    public function updateLdapMappingForUser_($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UpdateLdapMappingForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UpdateLdapMappingForUser_($username);
    }
    public function syncLdapMappingForUser_($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\SyncLdapMappingForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\SyncLdapMappingForUser_($username);
    }
    public function createOrg_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\CreateOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\CreateOrg_();
    }
    public function updateOrgName_($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UpdateOrgName_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UpdateOrgName_($org);
    }
    public function listPreReceiveEnvironments_(int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\ListPreReceiveEnvironments_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\ListPreReceiveEnvironments_($per_page, $page, $direction, $sort);
    }
    public function createPreReceiveEnvironment_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\CreatePreReceiveEnvironment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\CreatePreReceiveEnvironment_();
    }
    public function getPreReceiveEnvironment_($pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetPreReceiveEnvironment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetPreReceiveEnvironment_($pre_receive_environment_id);
    }
    public function deletePreReceiveEnvironment_($pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment_($pre_receive_environment_id);
    }
    public function updatePreReceiveEnvironment_($pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UpdatePreReceiveEnvironment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UpdatePreReceiveEnvironment_($pre_receive_environment_id);
    }
    public function startPreReceiveEnvironmentDownload_($pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload_($pre_receive_environment_id);
    }
    public function getDownloadStatusForPreReceiveEnvironment_($pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment_($pre_receive_environment_id);
    }
    public function listPreReceiveHooks_(int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\ListPreReceiveHooks_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\ListPreReceiveHooks_($per_page, $page, $direction, $sort);
    }
    public function createPreReceiveHook_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\CreatePreReceiveHook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\CreatePreReceiveHook_();
    }
    public function getPreReceiveHook_($pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetPreReceiveHook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetPreReceiveHook_($pre_receive_hook_id);
    }
    public function deletePreReceiveHook_($pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\DeletePreReceiveHook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\DeletePreReceiveHook_($pre_receive_hook_id);
    }
    public function updatePreReceiveHook_($pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UpdatePreReceiveHook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UpdatePreReceiveHook_($pre_receive_hook_id);
    }
    public function listPersonalAccessTokens_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\ListPersonalAccessTokens_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\ListPersonalAccessTokens_($per_page, $page);
    }
    public function deletePersonalAccessToken_($token_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\DeletePersonalAccessToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\DeletePersonalAccessToken_($token_id);
    }
    public function createUser_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\CreateUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\CreateUser_();
    }
    public function deleteUser_($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\DeleteUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\DeleteUser_($username);
    }
    public function updateUsernameForUser_($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UpdateUsernameForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UpdateUsernameForUser_($username);
    }
    public function createImpersonationOAuthToken_($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\CreateImpersonationOAuthToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\CreateImpersonationOAuthToken_($username);
    }
    public function deleteImpersonationOAuthToken_($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\DeleteImpersonationOAuthToken_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\DeleteImpersonationOAuthToken_($username);
    }
    public function getLicenseInformation_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetLicenseInformation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetLicenseInformation_();
    }
    public function getAllStats_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetAllStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetAllStats_();
    }
    public function getCommentStats_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetCommentStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetCommentStats_();
    }
    public function getHooksStats_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetHooksStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetHooksStats_();
    }
    public function getIssueStats_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetIssueStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetIssueStats_();
    }
    public function getMilestoneStats_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetMilestoneStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetMilestoneStats_();
    }
    public function getOrgStats_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetOrgStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetOrgStats_();
    }
    public function getPagesStats_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetPagesStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetPagesStats_();
    }
    public function getPullRequestStats_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetPullRequestStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetPullRequestStats_();
    }
    public function getRepoStats_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetRepoStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetRepoStats_();
    }
    public function getUserStats_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetUserStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetUserStats_();
    }
    public function listPreReceiveHooksForOrg_($org, int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\ListPreReceiveHooksForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\ListPreReceiveHooksForOrg_($org, $per_page, $page, $direction, $sort);
    }
    public function getPreReceiveHookForOrg_($org, $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetPreReceiveHookForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetPreReceiveHookForOrg_($org, $pre_receive_hook_id);
    }
    public function removePreReceiveHookEnforcementForOrg_($org, $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForOrg_($org, $pre_receive_hook_id);
    }
    public function updatePreReceiveHookEnforcementForOrg_($org, $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForOrg_($org, $pre_receive_hook_id);
    }
    public function listPreReceiveHooksForRepo_($owner, $repo, int $per_page = 30, int $page = 1, string $direction = 'desc', string $sort = 'created') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\ListPreReceiveHooksForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\ListPreReceiveHooksForRepo_($owner, $repo, $per_page, $page, $direction, $sort);
    }
    public function getPreReceiveHookForRepo_($owner, $repo, $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetPreReceiveHookForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetPreReceiveHookForRepo_($owner, $repo, $pre_receive_hook_id);
    }
    public function removePreReceiveHookEnforcementForRepo_($owner, $repo, $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForRepo_($owner, $repo, $pre_receive_hook_id);
    }
    public function updatePreReceiveHookEnforcementForRepo_($owner, $repo, $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForRepo_($owner, $repo, $pre_receive_hook_id);
    }
    public function getConfigurationStatus_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetConfigurationStatus_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetConfigurationStatus_();
    }
    public function startConfigurationProcess_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\StartConfigurationProcess_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\StartConfigurationProcess_();
    }
    public function getMaintenanceStatus_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetMaintenanceStatus_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetMaintenanceStatus_();
    }
    public function enableOrDisableMaintenanceMode_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\EnableOrDisableMaintenanceMode_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\EnableOrDisableMaintenanceMode_();
    }
    public function getSettings_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetSettings_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetSettings_();
    }
    public function setSettings_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\SetSettings_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\SetSettings_();
    }
    public function getAllAuthorizedSshKeys_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetAllAuthorizedSshKeys_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\GetAllAuthorizedSshKeys_();
    }
    public function addAuthorizedSshKey_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\AddAuthorizedSshKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\AddAuthorizedSshKey_();
    }
    public function removeAuthorizedSshKey_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\RemoveAuthorizedSshKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\RemoveAuthorizedSshKey_();
    }
    public function createEnterpriseServerLicense_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\CreateEnterpriseServerLicense_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\CreateEnterpriseServerLicense_();
    }
    public function upgradeLicense_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UpgradeLicense_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UpgradeLicense_();
    }
    public function promoteUserToBeSiteAdministrator_($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\PromoteUserToBeSiteAdministrator_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\PromoteUserToBeSiteAdministrator_($username);
    }
    public function demoteSiteAdministrator_($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\DemoteSiteAdministrator_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\DemoteSiteAdministrator_($username);
    }
    public function suspendUser_($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\SuspendUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\SuspendUser_($username);
    }
    public function unsuspendUser_($username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UnsuspendUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UnsuspendUser_($username);
    }
}
