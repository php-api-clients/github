<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Actions
{
    public function getActionsCacheUsageForEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsageForEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsageForEnterprise_($enterprise);
    }
    public function getGithubActionsDefaultWorkflowPermissionsEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsEnterprise_($enterprise);
    }
    public function setGithubActionsDefaultWorkflowPermissionsEnterprise_(string $enterprise) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsEnterprise_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsEnterprise_($enterprise);
    }
    public function getActionsCacheUsageForOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsageForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsageForOrg_($org);
    }
    public function getActionsCacheUsageByRepoForOrg_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsageByRepoForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsageByRepoForOrg_($org, $per_page, $page);
    }
    public function getGithubActionsPermissionsOrganization_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsPermissionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsPermissionsOrganization_($org);
    }
    public function setGithubActionsPermissionsOrganization_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsPermissionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsPermissionsOrganization_($org);
    }
    public function listSelectedRepositoriesEnabledGithubActionsOrganization_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization_($org, $per_page, $page);
    }
    public function setSelectedRepositoriesEnabledGithubActionsOrganization_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization_($org);
    }
    public function enableSelectedRepositoryGithubActionsOrganization_(string $org, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\EnableSelectedRepositoryGithubActionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\EnableSelectedRepositoryGithubActionsOrganization_($org, $repository_id);
    }
    public function disableSelectedRepositoryGithubActionsOrganization_(string $org, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DisableSelectedRepositoryGithubActionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DisableSelectedRepositoryGithubActionsOrganization_($org, $repository_id);
    }
    public function getAllowedActionsOrganization_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetAllowedActionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetAllowedActionsOrganization_($org);
    }
    public function setAllowedActionsOrganization_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetAllowedActionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetAllowedActionsOrganization_($org);
    }
    public function getGithubActionsDefaultWorkflowPermissionsOrganization_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsOrganization_($org);
    }
    public function setGithubActionsDefaultWorkflowPermissionsOrganization_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsOrganization_($org);
    }
    public function listSelfHostedRunnerGroupsForOrg_(string $org, int $per_page = 30, int $page = 1, string $visible_to_repository) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnerGroupsForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnerGroupsForOrg_($org, $per_page, $page, $visible_to_repository);
    }
    public function createSelfHostedRunnerGroupForOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateSelfHostedRunnerGroupForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateSelfHostedRunnerGroupForOrg_($org);
    }
    public function getSelfHostedRunnerGroupForOrg_(string $org, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetSelfHostedRunnerGroupForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetSelfHostedRunnerGroupForOrg_($org, $runner_group_id);
    }
    public function deleteSelfHostedRunnerGroupFromOrg_(string $org, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteSelfHostedRunnerGroupFromOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteSelfHostedRunnerGroupFromOrg_($org, $runner_group_id);
    }
    public function updateSelfHostedRunnerGroupForOrg_(string $org, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\UpdateSelfHostedRunnerGroupForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\UpdateSelfHostedRunnerGroupForOrg_($org, $runner_group_id);
    }
    public function listRepoAccessToSelfHostedRunnerGroupInOrg_(string $org, int $runner_group_id, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg_($org, $runner_group_id, $page, $per_page);
    }
    public function setRepoAccessToSelfHostedRunnerGroupInOrg_(string $org, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrg_($org, $runner_group_id);
    }
    public function removeRepoAccessToSelfHostedRunnerGroupInOrg_(string $org, int $runner_group_id, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveRepoAccessToSelfHostedRunnerGroupInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveRepoAccessToSelfHostedRunnerGroupInOrg_($org, $runner_group_id, $repository_id);
    }
    public function listSelfHostedRunnersInGroupForOrg_(string $org, int $runner_group_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnersInGroupForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnersInGroupForOrg_($org, $runner_group_id, $per_page, $page);
    }
    public function setSelfHostedRunnersInGroupForOrg_(string $org, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelfHostedRunnersInGroupForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelfHostedRunnersInGroupForOrg_($org, $runner_group_id);
    }
    public function addSelfHostedRunnerToGroupForOrg_(string $org, int $runner_group_id, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddSelfHostedRunnerToGroupForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddSelfHostedRunnerToGroupForOrg_($org, $runner_group_id, $runner_id);
    }
    public function removeSelfHostedRunnerFromGroupForOrg_(string $org, int $runner_group_id, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveSelfHostedRunnerFromGroupForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveSelfHostedRunnerFromGroupForOrg_($org, $runner_group_id, $runner_id);
    }
    public function listSelfHostedRunnersForOrg_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnersForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnersForOrg_($org, $per_page, $page);
    }
    public function listRunnerApplicationsForOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRunnerApplicationsForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRunnerApplicationsForOrg_($org);
    }
    public function createRegistrationTokenForOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRegistrationTokenForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRegistrationTokenForOrg_($org);
    }
    public function createRemoveTokenForOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRemoveTokenForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRemoveTokenForOrg_($org);
    }
    public function getSelfHostedRunnerForOrg_(string $org, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetSelfHostedRunnerForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetSelfHostedRunnerForOrg_($org, $runner_id);
    }
    public function deleteSelfHostedRunnerFromOrg_(string $org, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteSelfHostedRunnerFromOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteSelfHostedRunnerFromOrg_($org, $runner_id);
    }
    public function listLabelsForSelfHostedRunnerForOrg_(string $org, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListLabelsForSelfHostedRunnerForOrg_($org, $runner_id);
    }
    public function setCustomLabelsForSelfHostedRunnerForOrg_(string $org, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomLabelsForSelfHostedRunnerForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomLabelsForSelfHostedRunnerForOrg_($org, $runner_id);
    }
    public function addCustomLabelsToSelfHostedRunnerForOrg_(string $org, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddCustomLabelsToSelfHostedRunnerForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddCustomLabelsToSelfHostedRunnerForOrg_($org, $runner_id);
    }
    public function removeAllCustomLabelsFromSelfHostedRunnerForOrg_(string $org, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg_($org, $runner_id);
    }
    public function removeCustomLabelFromSelfHostedRunnerForOrg_(string $org, int $runner_id, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveCustomLabelFromSelfHostedRunnerForOrg_($org, $runner_id, $name);
    }
    public function listOrgSecrets_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListOrgSecrets_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListOrgSecrets_($org, $per_page, $page);
    }
    public function getOrgPublicKey_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetOrgPublicKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetOrgPublicKey_($org);
    }
    public function getOrgSecret_(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetOrgSecret_($org, $secret_name);
    }
    public function createOrUpdateOrgSecret_(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateOrgSecret_($org, $secret_name);
    }
    public function deleteOrgSecret_(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteOrgSecret_($org, $secret_name);
    }
    public function listSelectedReposForOrgSecret_(string $org, string $secret_name, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedReposForOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelectedReposForOrgSecret_($org, $secret_name, $page, $per_page);
    }
    public function setSelectedReposForOrgSecret_(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedReposForOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetSelectedReposForOrgSecret_($org, $secret_name);
    }
    public function addSelectedRepoToOrgSecret_(string $org, string $secret_name, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddSelectedRepoToOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddSelectedRepoToOrgSecret_($org, $secret_name, $repository_id);
    }
    public function removeSelectedRepoFromOrgSecret_(string $org, string $secret_name, int $repository_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveSelectedRepoFromOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveSelectedRepoFromOrgSecret_($org, $secret_name, $repository_id);
    }
    public function listArtifactsForRepo_(string $owner, string $repo, int $per_page = 30, int $page = 1, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListArtifactsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListArtifactsForRepo_($owner, $repo, $per_page, $page, $name);
    }
    public function getArtifact_(string $owner, string $repo, int $artifact_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetArtifact_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetArtifact_($owner, $repo, $artifact_id);
    }
    public function deleteArtifact_(string $owner, string $repo, int $artifact_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteArtifact_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteArtifact_($owner, $repo, $artifact_id);
    }
    public function downloadArtifact_(string $owner, string $repo, int $artifact_id, string $archive_format) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadArtifact_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadArtifact_($owner, $repo, $artifact_id, $archive_format);
    }
    public function getActionsCacheUsage_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsage_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheUsage_($owner, $repo);
    }
    public function getActionsCacheList_(string $owner, string $repo, int $per_page = 30, int $page = 1, string $ref, string $key, string $sort = 'last_accessed_at', string $direction = 'desc') : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheList_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetActionsCacheList_($owner, $repo, $per_page, $page, $ref, $key, $sort, $direction);
    }
    public function deleteActionsCacheByKey_(string $owner, string $repo, string $key, string $ref) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteActionsCacheByKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteActionsCacheByKey_($owner, $repo, $key, $ref);
    }
    public function deleteActionsCacheById_(string $owner, string $repo, int $cache_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteActionsCacheById_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteActionsCacheById_($owner, $repo, $cache_id);
    }
    public function getJobForWorkflowRun_(string $owner, string $repo, int $job_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetJobForWorkflowRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetJobForWorkflowRun_($owner, $repo, $job_id);
    }
    public function downloadJobLogsForWorkflowRun_(string $owner, string $repo, int $job_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadJobLogsForWorkflowRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadJobLogsForWorkflowRun_($owner, $repo, $job_id);
    }
    public function reRunJobForWorkflowRun_(string $owner, string $repo, int $job_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunJobForWorkflowRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunJobForWorkflowRun_($owner, $repo, $job_id);
    }
    public function getCustomOidcSubClaimForRepo_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetCustomOidcSubClaimForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetCustomOidcSubClaimForRepo_($owner, $repo);
    }
    public function setCustomOidcSubClaimForRepo_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomOidcSubClaimForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomOidcSubClaimForRepo_($owner, $repo);
    }
    public function getGithubActionsPermissionsRepository_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsPermissionsRepository_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsPermissionsRepository_($owner, $repo);
    }
    public function setGithubActionsPermissionsRepository_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsPermissionsRepository_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsPermissionsRepository_($owner, $repo);
    }
    public function getWorkflowAccessToRepository_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowAccessToRepository_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowAccessToRepository_($owner, $repo);
    }
    public function setWorkflowAccessToRepository_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetWorkflowAccessToRepository_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetWorkflowAccessToRepository_($owner, $repo);
    }
    public function getAllowedActionsRepository_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetAllowedActionsRepository_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetAllowedActionsRepository_($owner, $repo);
    }
    public function setAllowedActionsRepository_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetAllowedActionsRepository_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetAllowedActionsRepository_($owner, $repo);
    }
    public function getGithubActionsDefaultWorkflowPermissionsRepository_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetGithubActionsDefaultWorkflowPermissionsRepository_($owner, $repo);
    }
    public function setGithubActionsDefaultWorkflowPermissionsRepository_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetGithubActionsDefaultWorkflowPermissionsRepository_($owner, $repo);
    }
    public function listSelfHostedRunnersForRepo_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnersForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListSelfHostedRunnersForRepo_($owner, $repo, $per_page, $page);
    }
    public function listRunnerApplicationsForRepo_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRunnerApplicationsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRunnerApplicationsForRepo_($owner, $repo);
    }
    public function createRegistrationTokenForRepo_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRegistrationTokenForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRegistrationTokenForRepo_($owner, $repo);
    }
    public function createRemoveTokenForRepo_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRemoveTokenForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateRemoveTokenForRepo_($owner, $repo);
    }
    public function getSelfHostedRunnerForRepo_(string $owner, string $repo, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetSelfHostedRunnerForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetSelfHostedRunnerForRepo_($owner, $repo, $runner_id);
    }
    public function deleteSelfHostedRunnerFromRepo_(string $owner, string $repo, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteSelfHostedRunnerFromRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteSelfHostedRunnerFromRepo_($owner, $repo, $runner_id);
    }
    public function listLabelsForSelfHostedRunnerForRepo_(string $owner, string $repo, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListLabelsForSelfHostedRunnerForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListLabelsForSelfHostedRunnerForRepo_($owner, $repo, $runner_id);
    }
    public function setCustomLabelsForSelfHostedRunnerForRepo_(string $owner, string $repo, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomLabelsForSelfHostedRunnerForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\SetCustomLabelsForSelfHostedRunnerForRepo_($owner, $repo, $runner_id);
    }
    public function addCustomLabelsToSelfHostedRunnerForRepo_(string $owner, string $repo, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddCustomLabelsToSelfHostedRunnerForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\AddCustomLabelsToSelfHostedRunnerForRepo_($owner, $repo, $runner_id);
    }
    public function removeAllCustomLabelsFromSelfHostedRunnerForRepo_(string $owner, string $repo, int $runner_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo_($owner, $repo, $runner_id);
    }
    public function removeCustomLabelFromSelfHostedRunnerForRepo_(string $owner, string $repo, int $runner_id, string $name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\RemoveCustomLabelFromSelfHostedRunnerForRepo_($owner, $repo, $runner_id, $name);
    }
    public function listWorkflowRunsForRepo_(string $owner, string $repo, string $actor, string $branch, string $event, string $status, int $per_page = 30, int $page = 1, string $created, bool $exclude_pull_requests = false, int $check_suite_id, string $head_sha) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListWorkflowRunsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListWorkflowRunsForRepo_($owner, $repo, $actor, $branch, $event, $status, $per_page, $page, $created, $exclude_pull_requests, $check_suite_id, $head_sha);
    }
    public function getWorkflowRun_(string $owner, string $repo, int $run_id, bool $exclude_pull_requests = false) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRun_($owner, $repo, $run_id, $exclude_pull_requests);
    }
    public function deleteWorkflowRun_(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteWorkflowRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteWorkflowRun_($owner, $repo, $run_id);
    }
    public function getReviewsForRun_(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetReviewsForRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetReviewsForRun_($owner, $repo, $run_id);
    }
    public function approveWorkflowRun_(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ApproveWorkflowRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ApproveWorkflowRun_($owner, $repo, $run_id);
    }
    public function listWorkflowRunArtifacts_(string $owner, string $repo, int $run_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListWorkflowRunArtifacts_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListWorkflowRunArtifacts_($owner, $repo, $run_id, $per_page, $page);
    }
    public function getWorkflowRunAttempt_(string $owner, string $repo, int $run_id, int $attempt_number, bool $exclude_pull_requests = false) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRunAttempt_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRunAttempt_($owner, $repo, $run_id, $attempt_number, $exclude_pull_requests);
    }
    public function listJobsForWorkflowRunAttempt_(string $owner, string $repo, int $run_id, int $attempt_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListJobsForWorkflowRunAttempt_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListJobsForWorkflowRunAttempt_($owner, $repo, $run_id, $attempt_number, $per_page, $page);
    }
    public function downloadWorkflowRunAttemptLogs_(string $owner, string $repo, int $run_id, int $attempt_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadWorkflowRunAttemptLogs_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadWorkflowRunAttemptLogs_($owner, $repo, $run_id, $attempt_number);
    }
    public function cancelWorkflowRun_(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CancelWorkflowRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CancelWorkflowRun_($owner, $repo, $run_id);
    }
    public function listJobsForWorkflowRun_(string $owner, string $repo, int $run_id, string $filter = 'latest', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListJobsForWorkflowRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListJobsForWorkflowRun_($owner, $repo, $run_id, $filter, $per_page, $page);
    }
    public function downloadWorkflowRunLogs_(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadWorkflowRunLogs_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DownloadWorkflowRunLogs_($owner, $repo, $run_id);
    }
    public function deleteWorkflowRunLogs_(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteWorkflowRunLogs_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteWorkflowRunLogs_($owner, $repo, $run_id);
    }
    public function getPendingDeploymentsForRun_(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetPendingDeploymentsForRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetPendingDeploymentsForRun_($owner, $repo, $run_id);
    }
    public function reviewPendingDeploymentsForRun_(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReviewPendingDeploymentsForRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReviewPendingDeploymentsForRun_($owner, $repo, $run_id);
    }
    public function reRunWorkflow_(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunWorkflow_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunWorkflow_($owner, $repo, $run_id);
    }
    public function reRunWorkflowFailedJobs_(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunWorkflowFailedJobs_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ReRunWorkflowFailedJobs_($owner, $repo, $run_id);
    }
    public function getWorkflowRunUsage_(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRunUsage_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowRunUsage_($owner, $repo, $run_id);
    }
    public function listRepoSecrets_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoSecrets_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoSecrets_($owner, $repo, $per_page, $page);
    }
    public function getRepoPublicKey_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoPublicKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoPublicKey_($owner, $repo);
    }
    public function getRepoSecret_(string $owner, string $repo, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetRepoSecret_($owner, $repo, $secret_name);
    }
    public function createOrUpdateRepoSecret_(string $owner, string $repo, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateRepoSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateRepoSecret_($owner, $repo, $secret_name);
    }
    public function deleteRepoSecret_(string $owner, string $repo, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteRepoSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteRepoSecret_($owner, $repo, $secret_name);
    }
    public function listRepoWorkflows_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoWorkflows_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListRepoWorkflows_($owner, $repo, $per_page, $page);
    }
    public function getWorkflow_(string $owner, string $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflow_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflow_($owner, $repo, $workflow_id);
    }
    public function disableWorkflow_(string $owner, string $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DisableWorkflow_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DisableWorkflow_($owner, $repo, $workflow_id);
    }
    public function createWorkflowDispatch_(string $owner, string $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateWorkflowDispatch_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateWorkflowDispatch_($owner, $repo, $workflow_id);
    }
    public function enableWorkflow_(string $owner, string $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\EnableWorkflow_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\EnableWorkflow_($owner, $repo, $workflow_id);
    }
    public function listWorkflowRuns_(string $owner, string $repo, $workflow_id, string $actor, string $branch, string $event, string $status, int $per_page = 30, int $page = 1, string $created, bool $exclude_pull_requests = false, int $check_suite_id, string $head_sha) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListWorkflowRuns_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListWorkflowRuns_($owner, $repo, $workflow_id, $actor, $branch, $event, $status, $per_page, $page, $created, $exclude_pull_requests, $check_suite_id, $head_sha);
    }
    public function getWorkflowUsage_(string $owner, string $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowUsage_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetWorkflowUsage_($owner, $repo, $workflow_id);
    }
    public function listEnvironmentSecrets_(int $repository_id, string $environment_name, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListEnvironmentSecrets_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\ListEnvironmentSecrets_($repository_id, $environment_name, $per_page, $page);
    }
    public function getEnvironmentPublicKey_(int $repository_id, string $environment_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentPublicKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentPublicKey_($repository_id, $environment_name);
    }
    public function getEnvironmentSecret_(int $repository_id, string $environment_name, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\GetEnvironmentSecret_($repository_id, $environment_name, $secret_name);
    }
    public function createOrUpdateEnvironmentSecret_(int $repository_id, string $environment_name, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateEnvironmentSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\CreateOrUpdateEnvironmentSecret_($repository_id, $environment_name, $secret_name);
    }
    public function deleteEnvironmentSecret_(int $repository_id, string $environment_name, string $secret_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteEnvironmentSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions\DeleteEnvironmentSecret_($repository_id, $environment_name, $secret_name);
    }
}
