<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class Actions
{
    public function getGithubActionsPermissionsOrganization_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetGithubActionsPermissionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetGithubActionsPermissionsOrganization_($org);
    }
    public function setGithubActionsPermissionsOrganization_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetGithubActionsPermissionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetGithubActionsPermissionsOrganization_($org);
    }
    public function listSelectedRepositoriesEnabledGithubActionsOrganization_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization_($org, $per_page, $page);
    }
    public function setSelectedRepositoriesEnabledGithubActionsOrganization_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization_($org);
    }
    public function enableSelectedRepositoryGithubActionsOrganization_(string $org, int $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\EnableSelectedRepositoryGithubActionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\EnableSelectedRepositoryGithubActionsOrganization_($org, $repository_id);
    }
    public function disableSelectedRepositoryGithubActionsOrganization_(string $org, int $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DisableSelectedRepositoryGithubActionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DisableSelectedRepositoryGithubActionsOrganization_($org, $repository_id);
    }
    public function getAllowedActionsOrganization_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetAllowedActionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetAllowedActionsOrganization_($org);
    }
    public function setAllowedActionsOrganization_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetAllowedActionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetAllowedActionsOrganization_($org);
    }
    public function listSelfHostedRunnerGroupsForOrg_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListSelfHostedRunnerGroupsForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListSelfHostedRunnerGroupsForOrg_($org, $per_page, $page);
    }
    public function createSelfHostedRunnerGroupForOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateSelfHostedRunnerGroupForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateSelfHostedRunnerGroupForOrg_($org);
    }
    public function getSelfHostedRunnerGroupForOrg_(string $org, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetSelfHostedRunnerGroupForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetSelfHostedRunnerGroupForOrg_($org, $runner_group_id);
    }
    public function deleteSelfHostedRunnerGroupFromOrg_(string $org, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteSelfHostedRunnerGroupFromOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteSelfHostedRunnerGroupFromOrg_($org, $runner_group_id);
    }
    public function updateSelfHostedRunnerGroupForOrg_(string $org, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\UpdateSelfHostedRunnerGroupForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\UpdateSelfHostedRunnerGroupForOrg_($org, $runner_group_id);
    }
    public function addSelfHostedRunnerToGroupForOrg_(string $org, int $runner_group_id, int $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\AddSelfHostedRunnerToGroupForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\AddSelfHostedRunnerToGroupForOrg_($org, $runner_group_id, $runner_id);
    }
    public function listSelfHostedRunnersForOrg_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListSelfHostedRunnersForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListSelfHostedRunnersForOrg_($org, $per_page, $page);
    }
    public function listRunnerApplicationsForOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListRunnerApplicationsForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListRunnerApplicationsForOrg_($org);
    }
    public function createRegistrationTokenForOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateRegistrationTokenForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateRegistrationTokenForOrg_($org);
    }
    public function createRemoveTokenForOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateRemoveTokenForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateRemoveTokenForOrg_($org);
    }
    public function getSelfHostedRunnerForOrg_(string $org, int $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetSelfHostedRunnerForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetSelfHostedRunnerForOrg_($org, $runner_id);
    }
    public function deleteSelfHostedRunnerFromOrg_(string $org, int $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteSelfHostedRunnerFromOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteSelfHostedRunnerFromOrg_($org, $runner_id);
    }
    public function listOrgSecrets_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListOrgSecrets_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListOrgSecrets_($org, $per_page, $page);
    }
    public function getOrgPublicKey_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetOrgPublicKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetOrgPublicKey_($org);
    }
    public function getOrgSecret_(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetOrgSecret_($org, $secret_name);
    }
    public function createOrUpdateOrgSecret_(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateOrUpdateOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateOrUpdateOrgSecret_($org, $secret_name);
    }
    public function deleteOrgSecret_(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteOrgSecret_($org, $secret_name);
    }
    public function listSelectedReposForOrgSecret_(string $org, string $secret_name, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListSelectedReposForOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListSelectedReposForOrgSecret_($org, $secret_name, $page, $per_page);
    }
    public function setSelectedReposForOrgSecret_(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetSelectedReposForOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetSelectedReposForOrgSecret_($org, $secret_name);
    }
    public function addSelectedRepoToOrgSecret_(string $org, string $secret_name, int $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\AddSelectedRepoToOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\AddSelectedRepoToOrgSecret_($org, $secret_name, $repository_id);
    }
    public function removeSelectedRepoFromOrgSecret_(string $org, string $secret_name, int $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\RemoveSelectedRepoFromOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\RemoveSelectedRepoFromOrgSecret_($org, $secret_name, $repository_id);
    }
    public function listArtifactsForRepo_(string $owner, string $repo, int $per_page = 30, int $page = 1, string $name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListArtifactsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListArtifactsForRepo_($owner, $repo, $per_page, $page, $name);
    }
    public function getArtifact_(string $owner, string $repo, int $artifact_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetArtifact_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetArtifact_($owner, $repo, $artifact_id);
    }
    public function deleteArtifact_(string $owner, string $repo, int $artifact_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteArtifact_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteArtifact_($owner, $repo, $artifact_id);
    }
    public function downloadArtifact_(string $owner, string $repo, int $artifact_id, string $archive_format) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DownloadArtifact_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DownloadArtifact_($owner, $repo, $artifact_id, $archive_format);
    }
    public function getJobForWorkflowRun_(string $owner, string $repo, int $job_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetJobForWorkflowRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetJobForWorkflowRun_($owner, $repo, $job_id);
    }
    public function downloadJobLogsForWorkflowRun_(string $owner, string $repo, int $job_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DownloadJobLogsForWorkflowRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DownloadJobLogsForWorkflowRun_($owner, $repo, $job_id);
    }
    public function getGithubActionsPermissionsRepository_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetGithubActionsPermissionsRepository_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetGithubActionsPermissionsRepository_($owner, $repo);
    }
    public function setGithubActionsPermissionsRepository_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetGithubActionsPermissionsRepository_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetGithubActionsPermissionsRepository_($owner, $repo);
    }
    public function getAllowedActionsRepository_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetAllowedActionsRepository_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetAllowedActionsRepository_($owner, $repo);
    }
    public function setAllowedActionsRepository_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetAllowedActionsRepository_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\SetAllowedActionsRepository_($owner, $repo);
    }
    public function listSelfHostedRunnersForRepo_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListSelfHostedRunnersForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListSelfHostedRunnersForRepo_($owner, $repo, $per_page, $page);
    }
    public function listRunnerApplicationsForRepo_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListRunnerApplicationsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListRunnerApplicationsForRepo_($owner, $repo);
    }
    public function createRegistrationTokenForRepo_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateRegistrationTokenForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateRegistrationTokenForRepo_($owner, $repo);
    }
    public function createRemoveTokenForRepo_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateRemoveTokenForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateRemoveTokenForRepo_($owner, $repo);
    }
    public function getSelfHostedRunnerForRepo_(string $owner, string $repo, int $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetSelfHostedRunnerForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetSelfHostedRunnerForRepo_($owner, $repo, $runner_id);
    }
    public function deleteSelfHostedRunnerFromRepo_(string $owner, string $repo, int $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteSelfHostedRunnerFromRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteSelfHostedRunnerFromRepo_($owner, $repo, $runner_id);
    }
    public function listWorkflowRunsForRepo_(string $owner, string $repo, string $actor, string $branch, string $event, string $status, int $per_page = 30, int $page = 1, string $created, bool $exclude_pull_requests = false) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListWorkflowRunsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListWorkflowRunsForRepo_($owner, $repo, $actor, $branch, $event, $status, $per_page, $page, $created, $exclude_pull_requests);
    }
    public function getWorkflowRun_(string $owner, string $repo, int $run_id, bool $exclude_pull_requests = false) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetWorkflowRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetWorkflowRun_($owner, $repo, $run_id, $exclude_pull_requests);
    }
    public function deleteWorkflowRun_(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteWorkflowRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteWorkflowRun_($owner, $repo, $run_id);
    }
    public function listWorkflowRunArtifacts_(string $owner, string $repo, int $run_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListWorkflowRunArtifacts_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListWorkflowRunArtifacts_($owner, $repo, $run_id, $per_page, $page);
    }
    public function getWorkflowRunAttempt_(string $owner, string $repo, int $run_id, int $attempt_number, bool $exclude_pull_requests = false) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetWorkflowRunAttempt_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetWorkflowRunAttempt_($owner, $repo, $run_id, $attempt_number, $exclude_pull_requests);
    }
    public function listJobsForWorkflowRunAttempt_(string $owner, string $repo, int $run_id, int $attempt_number, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListJobsForWorkflowRunAttempt_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListJobsForWorkflowRunAttempt_($owner, $repo, $run_id, $attempt_number, $per_page, $page);
    }
    public function downloadWorkflowRunAttemptLogs_(string $owner, string $repo, int $run_id, int $attempt_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DownloadWorkflowRunAttemptLogs_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DownloadWorkflowRunAttemptLogs_($owner, $repo, $run_id, $attempt_number);
    }
    public function cancelWorkflowRun_(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CancelWorkflowRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CancelWorkflowRun_($owner, $repo, $run_id);
    }
    public function listJobsForWorkflowRun_(string $owner, string $repo, int $run_id, string $filter = 'latest', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListJobsForWorkflowRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListJobsForWorkflowRun_($owner, $repo, $run_id, $filter, $per_page, $page);
    }
    public function downloadWorkflowRunLogs_(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DownloadWorkflowRunLogs_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DownloadWorkflowRunLogs_($owner, $repo, $run_id);
    }
    public function deleteWorkflowRunLogs_(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteWorkflowRunLogs_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteWorkflowRunLogs_($owner, $repo, $run_id);
    }
    public function reRunWorkflow_(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ReRunWorkflow_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ReRunWorkflow_($owner, $repo, $run_id);
    }
    public function getWorkflowRunUsage_(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetWorkflowRunUsage_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetWorkflowRunUsage_($owner, $repo, $run_id);
    }
    public function listRepoSecrets_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListRepoSecrets_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListRepoSecrets_($owner, $repo, $per_page, $page);
    }
    public function getRepoPublicKey_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetRepoPublicKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetRepoPublicKey_($owner, $repo);
    }
    public function getRepoSecret_(string $owner, string $repo, string $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetRepoSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetRepoSecret_($owner, $repo, $secret_name);
    }
    public function createOrUpdateRepoSecret_(string $owner, string $repo, string $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateOrUpdateRepoSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateOrUpdateRepoSecret_($owner, $repo, $secret_name);
    }
    public function deleteRepoSecret_(string $owner, string $repo, string $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteRepoSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DeleteRepoSecret_($owner, $repo, $secret_name);
    }
    public function listRepoWorkflows_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListRepoWorkflows_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListRepoWorkflows_($owner, $repo, $per_page, $page);
    }
    public function getWorkflow_(string $owner, string $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetWorkflow_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetWorkflow_($owner, $repo, $workflow_id);
    }
    public function disableWorkflow_(string $owner, string $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DisableWorkflow_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\DisableWorkflow_($owner, $repo, $workflow_id);
    }
    public function createWorkflowDispatch_(string $owner, string $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateWorkflowDispatch_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\CreateWorkflowDispatch_($owner, $repo, $workflow_id);
    }
    public function enableWorkflow_(string $owner, string $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\EnableWorkflow_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\EnableWorkflow_($owner, $repo, $workflow_id);
    }
    public function listWorkflowRuns_(string $owner, string $repo, $workflow_id, string $actor, string $branch, string $event, string $status, int $per_page = 30, int $page = 1, string $created, bool $exclude_pull_requests = false) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListWorkflowRuns_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListWorkflowRuns_($owner, $repo, $workflow_id, $actor, $branch, $event, $status, $per_page, $page, $created, $exclude_pull_requests);
    }
    public function getWorkflowUsage_(string $owner, string $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetWorkflowUsage_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\GetWorkflowUsage_($owner, $repo, $workflow_id);
    }
}
