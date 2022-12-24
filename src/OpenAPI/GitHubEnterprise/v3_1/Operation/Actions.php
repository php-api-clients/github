<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation;

final class Actions
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function getGithubActionsPermissionsOrganization_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetGithubActionsPermissionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetGithubActionsPermissionsOrganization_($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function setGithubActionsPermissionsOrganization_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetGithubActionsPermissionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetGithubActionsPermissionsOrganization_($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function listSelectedRepositoriesEnabledGithubActionsOrganization_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $per_page, $page);
    }
    public function setSelectedRepositoriesEnabledGithubActionsOrganization_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetSelectedRepositoriesEnabledGithubActionsOrganization_($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function enableSelectedRepositoryGithubActionsOrganization_(string $org, int $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\EnableSelectedRepositoryGithubActionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\EnableSelectedRepositoryGithubActionsOrganization_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $repository_id);
    }
    public function disableSelectedRepositoryGithubActionsOrganization_(string $org, int $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DisableSelectedRepositoryGithubActionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DisableSelectedRepositoryGithubActionsOrganization_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $repository_id);
    }
    public function getAllowedActionsOrganization_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetAllowedActionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetAllowedActionsOrganization_($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function setAllowedActionsOrganization_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetAllowedActionsOrganization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetAllowedActionsOrganization_($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function listSelfHostedRunnerGroupsForOrg_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelfHostedRunnerGroupsForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelfHostedRunnerGroupsForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $per_page, $page);
    }
    public function createSelfHostedRunnerGroupForOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateSelfHostedRunnerGroupForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateSelfHostedRunnerGroupForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function getSelfHostedRunnerGroupForOrg_(string $org, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetSelfHostedRunnerGroupForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetSelfHostedRunnerGroupForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_group_id);
    }
    public function deleteSelfHostedRunnerGroupFromOrg_(string $org, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteSelfHostedRunnerGroupFromOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteSelfHostedRunnerGroupFromOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_group_id);
    }
    public function updateSelfHostedRunnerGroupForOrg_(string $org, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\UpdateSelfHostedRunnerGroupForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\UpdateSelfHostedRunnerGroupForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_group_id);
    }
    public function listRepoAccessToSelfHostedRunnerGroupInOrg_(string $org, int $runner_group_id, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListRepoAccessToSelfHostedRunnerGroupInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_group_id, $page, $per_page);
    }
    public function setRepoAccessToSelfHostedRunnerGroupInOrg_(string $org, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetRepoAccessToSelfHostedRunnerGroupInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_group_id);
    }
    public function addRepoAccessToSelfHostedRunnerGroupInOrg_(string $org, int $runner_group_id, int $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\AddRepoAccessToSelfHostedRunnerGroupInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\AddRepoAccessToSelfHostedRunnerGroupInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_group_id, $repository_id);
    }
    public function removeRepoAccessToSelfHostedRunnerGroupInOrg_(string $org, int $runner_group_id, int $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\RemoveRepoAccessToSelfHostedRunnerGroupInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\RemoveRepoAccessToSelfHostedRunnerGroupInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_group_id, $repository_id);
    }
    public function listSelfHostedRunnersInGroupForOrg_(string $org, int $runner_group_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelfHostedRunnersInGroupForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelfHostedRunnersInGroupForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_group_id, $per_page, $page);
    }
    public function setSelfHostedRunnersInGroupForOrg_(string $org, int $runner_group_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetSelfHostedRunnersInGroupForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetSelfHostedRunnersInGroupForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_group_id);
    }
    public function addSelfHostedRunnerToGroupForOrg_(string $org, int $runner_group_id, int $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\AddSelfHostedRunnerToGroupForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\AddSelfHostedRunnerToGroupForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_group_id, $runner_id);
    }
    public function removeSelfHostedRunnerFromGroupForOrg_(string $org, int $runner_group_id, int $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\RemoveSelfHostedRunnerFromGroupForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\RemoveSelfHostedRunnerFromGroupForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_group_id, $runner_id);
    }
    public function listSelfHostedRunnersForOrg_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelfHostedRunnersForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelfHostedRunnersForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $per_page, $page);
    }
    public function listRunnerApplicationsForOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListRunnerApplicationsForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListRunnerApplicationsForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function createRegistrationTokenForOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateRegistrationTokenForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateRegistrationTokenForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function createRemoveTokenForOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateRemoveTokenForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateRemoveTokenForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function getSelfHostedRunnerForOrg_(string $org, int $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetSelfHostedRunnerForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetSelfHostedRunnerForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_id);
    }
    public function deleteSelfHostedRunnerFromOrg_(string $org, int $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteSelfHostedRunnerFromOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteSelfHostedRunnerFromOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $runner_id);
    }
    public function listOrgSecrets_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListOrgSecrets_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListOrgSecrets_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $per_page, $page);
    }
    public function getOrgPublicKey_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetOrgPublicKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetOrgPublicKey_($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function getOrgSecret_(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetOrgSecret_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $secret_name);
    }
    public function createOrUpdateOrgSecret_(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateOrUpdateOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateOrUpdateOrgSecret_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $secret_name);
    }
    public function deleteOrgSecret_(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteOrgSecret_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $secret_name);
    }
    public function listSelectedReposForOrgSecret_(string $org, string $secret_name, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelectedReposForOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelectedReposForOrgSecret_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $secret_name, $page, $per_page);
    }
    public function setSelectedReposForOrgSecret_(string $org, string $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetSelectedReposForOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetSelectedReposForOrgSecret_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $secret_name);
    }
    public function addSelectedRepoToOrgSecret_(string $org, string $secret_name, int $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\AddSelectedRepoToOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\AddSelectedRepoToOrgSecret_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $secret_name, $repository_id);
    }
    public function removeSelectedRepoFromOrgSecret_(string $org, string $secret_name, int $repository_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\RemoveSelectedRepoFromOrgSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\RemoveSelectedRepoFromOrgSecret_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $secret_name, $repository_id);
    }
    public function listArtifactsForRepo_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListArtifactsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListArtifactsForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function getArtifact_(string $owner, string $repo, int $artifact_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetArtifact_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetArtifact_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $artifact_id);
    }
    public function deleteArtifact_(string $owner, string $repo, int $artifact_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteArtifact_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteArtifact_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $artifact_id);
    }
    public function downloadArtifact_(string $owner, string $repo, int $artifact_id, string $archive_format) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DownloadArtifact_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DownloadArtifact_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $artifact_id, $archive_format);
    }
    public function getJobForWorkflowRun_(string $owner, string $repo, int $job_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetJobForWorkflowRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetJobForWorkflowRun_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $job_id);
    }
    public function downloadJobLogsForWorkflowRun_(string $owner, string $repo, int $job_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DownloadJobLogsForWorkflowRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DownloadJobLogsForWorkflowRun_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $job_id);
    }
    public function getGithubActionsPermissionsRepository_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetGithubActionsPermissionsRepository_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetGithubActionsPermissionsRepository_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function setGithubActionsPermissionsRepository_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetGithubActionsPermissionsRepository_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetGithubActionsPermissionsRepository_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getAllowedActionsRepository_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetAllowedActionsRepository_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetAllowedActionsRepository_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function setAllowedActionsRepository_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetAllowedActionsRepository_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\SetAllowedActionsRepository_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function listSelfHostedRunnersForRepo_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelfHostedRunnersForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListSelfHostedRunnersForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function listRunnerApplicationsForRepo_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListRunnerApplicationsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListRunnerApplicationsForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function createRegistrationTokenForRepo_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateRegistrationTokenForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateRegistrationTokenForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function createRemoveTokenForRepo_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateRemoveTokenForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateRemoveTokenForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getSelfHostedRunnerForRepo_(string $owner, string $repo, int $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetSelfHostedRunnerForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetSelfHostedRunnerForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $runner_id);
    }
    public function deleteSelfHostedRunnerFromRepo_(string $owner, string $repo, int $runner_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteSelfHostedRunnerFromRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteSelfHostedRunnerFromRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $runner_id);
    }
    public function listWorkflowRunsForRepo_(string $owner, string $repo, string $actor, string $branch, string $event, string $status, int $per_page = 30, int $page = 1, string $created, bool $exclude_pull_requests = false) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListWorkflowRunsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListWorkflowRunsForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $actor, $branch, $event, $status, $per_page, $page, $created, $exclude_pull_requests);
    }
    public function getWorkflowRun_(string $owner, string $repo, int $run_id, bool $exclude_pull_requests = false) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetWorkflowRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetWorkflowRun_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id, $exclude_pull_requests);
    }
    public function deleteWorkflowRun_(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteWorkflowRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteWorkflowRun_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id);
    }
    public function listWorkflowRunArtifacts_(string $owner, string $repo, int $run_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListWorkflowRunArtifacts_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListWorkflowRunArtifacts_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id, $per_page, $page);
    }
    public function cancelWorkflowRun_(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CancelWorkflowRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CancelWorkflowRun_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id);
    }
    public function listJobsForWorkflowRun_(string $owner, string $repo, int $run_id, string $filter = 'latest', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListJobsForWorkflowRun_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListJobsForWorkflowRun_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id, $filter, $per_page, $page);
    }
    public function downloadWorkflowRunLogs_(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DownloadWorkflowRunLogs_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DownloadWorkflowRunLogs_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id);
    }
    public function deleteWorkflowRunLogs_(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteWorkflowRunLogs_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteWorkflowRunLogs_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id);
    }
    public function reRunWorkflow_(string $owner, string $repo, int $run_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ReRunWorkflow_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ReRunWorkflow_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $run_id);
    }
    public function listRepoSecrets_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListRepoSecrets_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListRepoSecrets_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function getRepoPublicKey_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetRepoPublicKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetRepoPublicKey_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getRepoSecret_(string $owner, string $repo, string $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetRepoSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetRepoSecret_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $secret_name);
    }
    public function createOrUpdateRepoSecret_(string $owner, string $repo, string $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateOrUpdateRepoSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateOrUpdateRepoSecret_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $secret_name);
    }
    public function deleteRepoSecret_(string $owner, string $repo, string $secret_name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteRepoSecret_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DeleteRepoSecret_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $secret_name);
    }
    public function listRepoWorkflows_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListRepoWorkflows_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListRepoWorkflows_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function getWorkflow_(string $owner, string $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetWorkflow_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\GetWorkflow_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $workflow_id);
    }
    public function disableWorkflow_(string $owner, string $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DisableWorkflow_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\DisableWorkflow_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $workflow_id);
    }
    public function createWorkflowDispatch_(string $owner, string $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateWorkflowDispatch_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\CreateWorkflowDispatch_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $workflow_id);
    }
    public function enableWorkflow_(string $owner, string $repo, $workflow_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\EnableWorkflow_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\EnableWorkflow_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $workflow_id);
    }
    public function listWorkflowRuns_(string $owner, string $repo, $workflow_id, string $actor, string $branch, string $event, string $status, int $per_page = 30, int $page = 1, string $created, bool $exclude_pull_requests = false) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListWorkflowRuns_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions\ListWorkflowRuns_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $workflow_id, $actor, $branch, $event, $status, $per_page, $page, $created, $exclude_pull_requests);
    }
}
