<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\ActionsCacheList;
use ApiClients\Client\GitHub\Schema\ActionsCacheUsageByRepository;
use ApiClients\Client\GitHub\Schema\ActionsCacheUsageOrgEnterprise;
use ApiClients\Client\GitHub\Schema\ActionsGetDefaultWorkflowPermissions;
use ApiClients\Client\GitHub\Schema\ActionsOrganizationPermissions;
use ApiClients\Client\GitHub\Schema\ActionsPublicKey;
use ApiClients\Client\GitHub\Schema\ActionsRepositoryPermissions;
use ApiClients\Client\GitHub\Schema\ActionsSecret;
use ApiClients\Client\GitHub\Schema\ActionsVariable;
use ApiClients\Client\GitHub\Schema\ActionsWorkflowAccessToRepository;
use ApiClients\Client\GitHub\Schema\Artifact;
use ApiClients\Client\GitHub\Schema\AuthenticationToken;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\Job;
use ApiClients\Client\GitHub\Schema\OidcCustomSubRepo;
use ApiClients\Client\GitHub\Schema\Operations\Actions\GenerateRunnerJitconfigForOrg\Response\ApplicationJson\Created;
use ApiClients\Client\GitHub\Schema\Operations\Actions\GetActionsCacheUsageByRepoForOrg\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg\Response\ApplicationJson\Ok\Application\Json;
use ApiClients\Client\GitHub\Schema\OrganizationActionsSecret;
use ApiClients\Client\GitHub\Schema\OrganizationActionsVariable;
use ApiClients\Client\GitHub\Schema\Runner;
use ApiClients\Client\GitHub\Schema\SelectedActions;
use ApiClients\Client\GitHub\Schema\Workflow;
use ApiClients\Client\GitHub\Schema\WorkflowRun;
use ApiClients\Client\GitHub\Schema\WorkflowRunUsage;
use ApiClients\Client\GitHub\Schema\WorkflowUsage;

final class Actions
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Schema\ActionsCacheUsageOrgEnterprise */
    public function getActionsCacheUsageForOrg(string $org): ActionsCacheUsageOrgEnterprise|array
    {
        return $this->operators->actions👷GetActionsCacheUsageForOrg()->call($org);
    }

    /** @return Schema\Operations\Actions\GetActionsCacheUsageByRepoForOrg\Response\ApplicationJson\Ok */
    public function getActionsCacheUsageByRepoForOrg(string $org, int $perPage, int $page): Ok|array
    {
        return $this->operators->actions👷GetActionsCacheUsageByRepoForOrg()->call($org, $perPage, $page);
    }

    /** @return Schema\ActionsOrganizationPermissions */
    public function getGithubActionsPermissionsOrganization(string $org): ActionsOrganizationPermissions|array
    {
        return $this->operators->actions👷GetGithubActionsPermissionsOrganization()->call($org);
    }

    /** @return array{code:int} */
    public function setGithubActionsPermissionsOrganization(string $org, array $params): array
    {
        return $this->operators->actions👷SetGithubActionsPermissionsOrganization()->call($org, $params);
    }

    /** @return Schema\Operations\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization\Response\ApplicationJson\Ok */
    public function listSelectedRepositoriesEnabledGithubActionsOrganization(string $org, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelectedRepositoriesEnabledGithubActionsOrganization\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListSelectedRepositoriesEnabledGithubActionsOrganization()->call($org, $perPage, $page);
    }

    /** @return array{code:int} */
    public function setSelectedRepositoriesEnabledGithubActionsOrganization(string $org, array $params): array
    {
        return $this->operators->actions👷SetSelectedRepositoriesEnabledGithubActionsOrganization()->call($org, $params);
    }

    /** @return array{code:int} */
    public function enableSelectedRepositoryGithubActionsOrganization(string $org, int $repositoryId): array
    {
        return $this->operators->actions👷EnableSelectedRepositoryGithubActionsOrganization()->call($org, $repositoryId);
    }

    /** @return array{code:int} */
    public function disableSelectedRepositoryGithubActionsOrganization(string $org, int $repositoryId): array
    {
        return $this->operators->actions👷DisableSelectedRepositoryGithubActionsOrganization()->call($org, $repositoryId);
    }

    /** @return Schema\SelectedActions */
    public function getAllowedActionsOrganization(string $org): SelectedActions|array
    {
        return $this->operators->actions👷GetAllowedActionsOrganization()->call($org);
    }

    /** @return array{code:int} */
    public function setAllowedActionsOrganization(string $org, array $params): array
    {
        return $this->operators->actions👷SetAllowedActionsOrganization()->call($org, $params);
    }

    /** @return Schema\ActionsGetDefaultWorkflowPermissions */
    public function getGithubActionsDefaultWorkflowPermissionsOrganization(string $org): ActionsGetDefaultWorkflowPermissions|array
    {
        return $this->operators->actions👷GetGithubActionsDefaultWorkflowPermissionsOrganization()->call($org);
    }

    /** @return array{code:int} */
    public function setGithubActionsDefaultWorkflowPermissionsOrganization(string $org, array $params): array
    {
        return $this->operators->actions👷SetGithubActionsDefaultWorkflowPermissionsOrganization()->call($org, $params);
    }

    /** @return Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok */
    public function listSelfHostedRunnersForOrg(string $org, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelfHostedRunnersForOrg\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListSelfHostedRunnersForOrg()->call($org, $perPage, $page);
    }

    /** @return iterable<Schema\RunnerApplication> */
    public function listRunnerApplicationsForOrg(string $org): iterable
    {
        return $this->operators->actions👷ListRunnerApplicationsForOrg()->call($org);
    }

    /** @return Schema\Operations\Actions\GenerateRunnerJitconfigForOrg\Response\ApplicationJson\Created */
    public function generateRunnerJitconfigForOrg(string $org, array $params): Created|array
    {
        return $this->operators->actions👷GenerateRunnerJitconfigForOrg()->call($org, $params);
    }

    /** @return Schema\AuthenticationToken */
    public function createRegistrationTokenForOrg(string $org): AuthenticationToken|array
    {
        return $this->operators->actions👷CreateRegistrationTokenForOrg()->call($org);
    }

    /** @return Schema\AuthenticationToken */
    public function createRemoveTokenForOrg(string $org): AuthenticationToken|array
    {
        return $this->operators->actions👷CreateRemoveTokenForOrg()->call($org);
    }

    /** @return Schema\Runner */
    public function getSelfHostedRunnerForOrg(string $org, int $runnerId): Runner|array
    {
        return $this->operators->actions👷GetSelfHostedRunnerForOrg()->call($org, $runnerId);
    }

    /** @return array{code:int} */
    public function deleteSelfHostedRunnerFromOrg(string $org, int $runnerId): array
    {
        return $this->operators->actions👷DeleteSelfHostedRunnerFromOrg()->call($org, $runnerId);
    }

    /** @return Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok */
    public function listLabelsForSelfHostedRunnerForOrg(string $org, int $runnerId): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListLabelsForSelfHostedRunnerForOrg()->call($org, $runnerId);
    }

    /** @return Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok */
    public function setCustomLabelsForSelfHostedRunnerForOrg(string $org, int $runnerId, array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷SetCustomLabelsForSelfHostedRunnerForOrg()->call($org, $runnerId, $params);
    }

    /** @return Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok */
    public function addCustomLabelsToSelfHostedRunnerForOrg(string $org, int $runnerId, array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷AddCustomLabelsToSelfHostedRunnerForOrg()->call($org, $runnerId, $params);
    }

    /** @return Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForOrg\Response\ApplicationJson\Ok\Application\Json */
    public function removeAllCustomLabelsFromSelfHostedRunnerForOrg(string $org, int $runnerId): Json|array
    {
        return $this->operators->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForOrg()->call($org, $runnerId);
    }

    /** @return Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok */
    public function removeCustomLabelFromSelfHostedRunnerForOrg(string $org, int $runnerId, string $name): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷RemoveCustomLabelFromSelfHostedRunnerForOrg()->call($org, $runnerId, $name);
    }

    /** @return Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok */
    public function listOrgSecrets(string $org, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListOrgSecrets\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListOrgSecrets()->call($org, $perPage, $page);
    }

    /** @return Schema\ActionsPublicKey */
    public function getOrgPublicKey(string $org): ActionsPublicKey|array
    {
        return $this->operators->actions👷GetOrgPublicKey()->call($org);
    }

    /** @return Schema\OrganizationActionsSecret */
    public function getOrgSecret(string $org, string $secretName): OrganizationActionsSecret|array
    {
        return $this->operators->actions👷GetOrgSecret()->call($org, $secretName);
    }

    /** @return Schema\EmptyObject|array{code:int} */
    public function createOrUpdateOrgSecret(string $org, string $secretName, array $params): EmptyObject|array
    {
        return $this->operators->actions👷CreateOrUpdateOrgSecret()->call($org, $secretName, $params);
    }

    /** @return array{code:int} */
    public function deleteOrgSecret(string $org, string $secretName): array
    {
        return $this->operators->actions👷DeleteOrgSecret()->call($org, $secretName);
    }

    /** @return Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok */
    public function listSelectedReposForOrgSecret(string $org, string $secretName, int $page, int $perPage): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelectedReposForOrgSecret\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListSelectedReposForOrgSecret()->call($org, $secretName, $page, $perPage);
    }

    /** @return array{code:int} */
    public function setSelectedReposForOrgSecret(string $org, string $secretName, array $params): array
    {
        return $this->operators->actions👷SetSelectedReposForOrgSecret()->call($org, $secretName, $params);
    }

    /** @return array{code:int} */
    public function addSelectedRepoToOrgSecret(string $org, string $secretName, int $repositoryId): array
    {
        return $this->operators->actions👷AddSelectedRepoToOrgSecret()->call($org, $secretName, $repositoryId);
    }

    /** @return array{code:int} */
    public function removeSelectedRepoFromOrgSecret(string $org, string $secretName, int $repositoryId): array
    {
        return $this->operators->actions👷RemoveSelectedRepoFromOrgSecret()->call($org, $secretName, $repositoryId);
    }

    /** @return Schema\Operations\Actions\ListOrgVariables\Response\ApplicationJson\Ok */
    public function listOrgVariables(string $org, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListOrgVariables\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListOrgVariables()->call($org, $perPage, $page);
    }

    /** @return Schema\EmptyObject */
    public function createOrgVariable(string $org, array $params): EmptyObject|array
    {
        return $this->operators->actions👷CreateOrgVariable()->call($org, $params);
    }

    /** @return Schema\OrganizationActionsVariable */
    public function getOrgVariable(string $org, string $name): OrganizationActionsVariable|array
    {
        return $this->operators->actions👷GetOrgVariable()->call($org, $name);
    }

    /** @return array{code:int} */
    public function deleteOrgVariable(string $org, string $name): array
    {
        return $this->operators->actions👷DeleteOrgVariable()->call($org, $name);
    }

    /** @return array{code:int} */
    public function updateOrgVariable(string $org, string $name, array $params): array
    {
        return $this->operators->actions👷UpdateOrgVariable()->call($org, $name, $params);
    }

    /** @return Schema\Operations\Actions\ListSelectedReposForOrgVariable\Response\ApplicationJson\Ok\Application\Json|array{code:int} */
    public function listSelectedReposForOrgVariable(string $org, string $name, int $page, int $perPage): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelectedReposForOrgVariable\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷ListSelectedReposForOrgVariable()->call($org, $name, $page, $perPage);
    }

    /** @return array{code:int} */
    public function setSelectedReposForOrgVariable(string $org, string $name, array $params): array
    {
        return $this->operators->actions👷SetSelectedReposForOrgVariable()->call($org, $name, $params);
    }

    /** @return array{code:int} */
    public function addSelectedRepoToOrgVariable(string $org, string $name, int $repositoryId): array
    {
        return $this->operators->actions👷AddSelectedRepoToOrgVariable()->call($org, $name, $repositoryId);
    }

    /** @return array{code:int} */
    public function removeSelectedRepoFromOrgVariable(string $org, string $name, int $repositoryId): array
    {
        return $this->operators->actions👷RemoveSelectedRepoFromOrgVariable()->call($org, $name, $repositoryId);
    }

    /** @return Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok */
    public function listArtifactsForRepo(string $owner, string $repo, string $name, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListArtifactsForRepo\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListArtifactsForRepo()->call($owner, $repo, $name, $perPage, $page);
    }

    /** @return Schema\Artifact */
    public function getArtifact(string $owner, string $repo, int $artifactId): Artifact|array
    {
        return $this->operators->actions👷GetArtifact()->call($owner, $repo, $artifactId);
    }

    /** @return array{code:int} */
    public function deleteArtifact(string $owner, string $repo, int $artifactId): array
    {
        return $this->operators->actions👷DeleteArtifact()->call($owner, $repo, $artifactId);
    }

    /** @return array{code:int,location:string} */
    public function downloadArtifact(string $owner, string $repo, int $artifactId, string $archiveFormat): array
    {
        return $this->operators->actions👷DownloadArtifact()->call($owner, $repo, $artifactId, $archiveFormat);
    }

    /** @return iterable<string> */
    public function downloadArtifactStreaming(string $owner, string $repo, int $artifactId, string $archiveFormat): iterable
    {
        return $this->operators->actions👷DownloadArtifactStreaming()->call($owner, $repo, $artifactId, $archiveFormat);
    }

    /** @return Schema\ActionsCacheUsageByRepository */
    public function getActionsCacheUsage(string $owner, string $repo): ActionsCacheUsageByRepository|array
    {
        return $this->operators->actions👷GetActionsCacheUsage()->call($owner, $repo);
    }

    /** @return Schema\ActionsCacheList */
    public function getActionsCacheList(string $owner, string $repo, string $ref, string $key, int $perPage, int $page, string $sort, string $direction): ActionsCacheList|array
    {
        return $this->operators->actions👷GetActionsCacheList()->call($owner, $repo, $ref, $key, $perPage, $page, $sort, $direction);
    }

    /** @return Schema\ActionsCacheList */
    public function deleteActionsCacheByKey(string $owner, string $repo, string $key, string $ref): ActionsCacheList|array
    {
        return $this->operators->actions👷DeleteActionsCacheByKey()->call($owner, $repo, $key, $ref);
    }

    /** @return array{code:int} */
    public function deleteActionsCacheById(string $owner, string $repo, int $cacheId): array
    {
        return $this->operators->actions👷DeleteActionsCacheById()->call($owner, $repo, $cacheId);
    }

    /** @return Schema\Job */
    public function getJobForWorkflowRun(string $owner, string $repo, int $jobId): Job|array
    {
        return $this->operators->actions👷GetJobForWorkflowRun()->call($owner, $repo, $jobId);
    }

    /** @return array{code:int,location:string} */
    public function downloadJobLogsForWorkflowRun(string $owner, string $repo, int $jobId): array
    {
        return $this->operators->actions👷DownloadJobLogsForWorkflowRun()->call($owner, $repo, $jobId);
    }

    /** @return iterable<string> */
    public function downloadJobLogsForWorkflowRunStreaming(string $owner, string $repo, int $jobId): iterable
    {
        return $this->operators->actions👷DownloadJobLogsForWorkflowRunStreaming()->call($owner, $repo, $jobId);
    }

    /** @return Schema\EmptyObject */
    public function reRunJobForWorkflowRun(string $owner, string $repo, int $jobId, array $params): EmptyObject|array
    {
        return $this->operators->actions👷ReRunJobForWorkflowRun()->call($owner, $repo, $jobId, $params);
    }

    /** @return Schema\OidcCustomSubRepo */
    public function getCustomOidcSubClaimForRepo(string $owner, string $repo): OidcCustomSubRepo|array
    {
        return $this->operators->actions👷GetCustomOidcSubClaimForRepo()->call($owner, $repo);
    }

    /** @return Schema\EmptyObject */
    public function setCustomOidcSubClaimForRepo(string $owner, string $repo, array $params): EmptyObject|array
    {
        return $this->operators->actions👷SetCustomOidcSubClaimForRepo()->call($owner, $repo, $params);
    }

    /** @return Schema\Operations\Actions\ListRepoOrganizationSecrets\Response\ApplicationJson\Ok */
    public function listRepoOrganizationSecrets(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoOrganizationSecrets\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListRepoOrganizationSecrets()->call($owner, $repo, $perPage, $page);
    }

    /** @return Schema\Operations\Actions\ListRepoOrganizationVariables\Response\ApplicationJson\Ok */
    public function listRepoOrganizationVariables(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoOrganizationVariables\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListRepoOrganizationVariables()->call($owner, $repo, $perPage, $page);
    }

    /** @return Schema\ActionsRepositoryPermissions */
    public function getGithubActionsPermissionsRepository(string $owner, string $repo): ActionsRepositoryPermissions|array
    {
        return $this->operators->actions👷GetGithubActionsPermissionsRepository()->call($owner, $repo);
    }

    /** @return array{code:int} */
    public function setGithubActionsPermissionsRepository(string $owner, string $repo, array $params): array
    {
        return $this->operators->actions👷SetGithubActionsPermissionsRepository()->call($owner, $repo, $params);
    }

    /** @return Schema\ActionsWorkflowAccessToRepository */
    public function getWorkflowAccessToRepository(string $owner, string $repo): ActionsWorkflowAccessToRepository|array
    {
        return $this->operators->actions👷GetWorkflowAccessToRepository()->call($owner, $repo);
    }

    /** @return array{code:int} */
    public function setWorkflowAccessToRepository(string $owner, string $repo, array $params): array
    {
        return $this->operators->actions👷SetWorkflowAccessToRepository()->call($owner, $repo, $params);
    }

    /** @return Schema\SelectedActions */
    public function getAllowedActionsRepository(string $owner, string $repo): SelectedActions|array
    {
        return $this->operators->actions👷GetAllowedActionsRepository()->call($owner, $repo);
    }

    /** @return array{code:int} */
    public function setAllowedActionsRepository(string $owner, string $repo, array $params): array
    {
        return $this->operators->actions👷SetAllowedActionsRepository()->call($owner, $repo, $params);
    }

    /** @return Schema\ActionsGetDefaultWorkflowPermissions */
    public function getGithubActionsDefaultWorkflowPermissionsRepository(string $owner, string $repo): ActionsGetDefaultWorkflowPermissions|array
    {
        return $this->operators->actions👷GetGithubActionsDefaultWorkflowPermissionsRepository()->call($owner, $repo);
    }

    /** @return array{code:int} */
    public function setGithubActionsDefaultWorkflowPermissionsRepository(string $owner, string $repo, array $params): array
    {
        return $this->operators->actions👷SetGithubActionsDefaultWorkflowPermissionsRepository()->call($owner, $repo, $params);
    }

    /** @return Schema\Operations\Actions\ListSelfHostedRunnersForRepo\Response\ApplicationJson\Ok\Application\Json */
    public function listSelfHostedRunnersForRepo(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListSelfHostedRunnersForRepo\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷ListSelfHostedRunnersForRepo()->call($owner, $repo, $perPage, $page);
    }

    /** @return iterable<Schema\RunnerApplication> */
    public function listRunnerApplicationsForRepo(string $owner, string $repo): iterable
    {
        return $this->operators->actions👷ListRunnerApplicationsForRepo()->call($owner, $repo);
    }

    /** @return Schema\Operations\Actions\GenerateRunnerJitconfigForOrg\Response\ApplicationJson\Created */
    public function generateRunnerJitconfigForRepo(string $owner, string $repo, array $params): Created|array
    {
        return $this->operators->actions👷GenerateRunnerJitconfigForRepo()->call($owner, $repo, $params);
    }

    /** @return Schema\AuthenticationToken */
    public function createRegistrationTokenForRepo(string $owner, string $repo): AuthenticationToken|array
    {
        return $this->operators->actions👷CreateRegistrationTokenForRepo()->call($owner, $repo);
    }

    /** @return Schema\AuthenticationToken */
    public function createRemoveTokenForRepo(string $owner, string $repo): AuthenticationToken|array
    {
        return $this->operators->actions👷CreateRemoveTokenForRepo()->call($owner, $repo);
    }

    /** @return Schema\Runner */
    public function getSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId): Runner|array
    {
        return $this->operators->actions👷GetSelfHostedRunnerForRepo()->call($owner, $repo, $runnerId);
    }

    /** @return array{code:int} */
    public function deleteSelfHostedRunnerFromRepo(string $owner, string $repo, int $runnerId): array
    {
        return $this->operators->actions👷DeleteSelfHostedRunnerFromRepo()->call($owner, $repo, $runnerId);
    }

    /** @return Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok */
    public function listLabelsForSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListLabelsForSelfHostedRunnerForRepo()->call($owner, $repo, $runnerId);
    }

    /** @return Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok */
    public function setCustomLabelsForSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId, array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷SetCustomLabelsForSelfHostedRunnerForRepo()->call($owner, $repo, $runnerId, $params);
    }

    /** @return Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok */
    public function addCustomLabelsToSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId, array $params): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷AddCustomLabelsToSelfHostedRunnerForRepo()->call($owner, $repo, $runnerId, $params);
    }

    /** @return Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo\Response\ApplicationJson\Ok\Application\Json */
    public function removeAllCustomLabelsFromSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId): \ApiClients\Client\GitHub\Schema\Operations\Actions\RemoveAllCustomLabelsFromSelfHostedRunnerForRepo\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷RemoveAllCustomLabelsFromSelfHostedRunnerForRepo()->call($owner, $repo, $runnerId);
    }

    /** @return Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok */
    public function removeCustomLabelFromSelfHostedRunnerForRepo(string $owner, string $repo, int $runnerId, string $name): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListLabelsForSelfHostedRunnerForOrg\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷RemoveCustomLabelFromSelfHostedRunnerForRepo()->call($owner, $repo, $runnerId, $name);
    }

    /** @return Schema\Operations\Actions\ListWorkflowRunsForRepo\Response\ApplicationJson\Ok */
    public function listWorkflowRunsForRepo(string $owner, string $repo, string $actor, string $branch, string $event, string $status, string $created, int $checkSuiteId, string $headSha, int $perPage, int $page, bool $excludePullRequests): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListWorkflowRunsForRepo\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListWorkflowRunsForRepo()->call($owner, $repo, $actor, $branch, $event, $status, $created, $checkSuiteId, $headSha, $perPage, $page, $excludePullRequests);
    }

    /** @return Schema\WorkflowRun */
    public function getWorkflowRun(string $owner, string $repo, int $runId, bool $excludePullRequests): WorkflowRun|array
    {
        return $this->operators->actions👷GetWorkflowRun()->call($owner, $repo, $runId, $excludePullRequests);
    }

    /** @return array{code:int} */
    public function deleteWorkflowRun(string $owner, string $repo, int $runId): array
    {
        return $this->operators->actions👷DeleteWorkflowRun()->call($owner, $repo, $runId);
    }

    /** @return iterable<Schema\EnvironmentApprovals> */
    public function getReviewsForRun(string $owner, string $repo, int $runId): iterable
    {
        return $this->operators->actions👷GetReviewsForRun()->call($owner, $repo, $runId);
    }

    /** @return Schema\EmptyObject */
    public function approveWorkflowRun(string $owner, string $repo, int $runId): EmptyObject|array
    {
        return $this->operators->actions👷ApproveWorkflowRun()->call($owner, $repo, $runId);
    }

    /** @return Schema\Operations\Actions\ListWorkflowRunArtifacts\Response\ApplicationJson\Ok\Application\Json */
    public function listWorkflowRunArtifacts(string $owner, string $repo, int $runId, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListWorkflowRunArtifacts\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷ListWorkflowRunArtifacts()->call($owner, $repo, $runId, $perPage, $page);
    }

    /** @return Schema\WorkflowRun */
    public function getWorkflowRunAttempt(string $owner, string $repo, int $runId, int $attemptNumber, bool $excludePullRequests): WorkflowRun|array
    {
        return $this->operators->actions👷GetWorkflowRunAttempt()->call($owner, $repo, $runId, $attemptNumber, $excludePullRequests);
    }

    /** @return Schema\Operations\Actions\ListJobsForWorkflowRunAttempt\Response\ApplicationJson\Ok */
    public function listJobsForWorkflowRunAttempt(string $owner, string $repo, int $runId, int $attemptNumber, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListJobsForWorkflowRunAttempt\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListJobsForWorkflowRunAttempt()->call($owner, $repo, $runId, $attemptNumber, $perPage, $page);
    }

    /** @return array{code:int,location:string} */
    public function downloadWorkflowRunAttemptLogs(string $owner, string $repo, int $runId, int $attemptNumber): array
    {
        return $this->operators->actions👷DownloadWorkflowRunAttemptLogs()->call($owner, $repo, $runId, $attemptNumber);
    }

    /** @return iterable<string> */
    public function downloadWorkflowRunAttemptLogsStreaming(string $owner, string $repo, int $runId, int $attemptNumber): iterable
    {
        return $this->operators->actions👷DownloadWorkflowRunAttemptLogsStreaming()->call($owner, $repo, $runId, $attemptNumber);
    }

    /** @return Schema\EmptyObject */
    public function cancelWorkflowRun(string $owner, string $repo, int $runId): EmptyObject|array
    {
        return $this->operators->actions👷CancelWorkflowRun()->call($owner, $repo, $runId);
    }

    /** @return array{code:int} */
    public function reviewCustomGatesForRun(string $owner, string $repo, int $runId, array $params): array
    {
        return $this->operators->actions👷ReviewCustomGatesForRun()->call($owner, $repo, $runId, $params);
    }

    /** @return Schema\Operations\Actions\ListJobsForWorkflowRun\Response\ApplicationJson\Ok\Application\Json */
    public function listJobsForWorkflowRun(string $owner, string $repo, int $runId, string $filter, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListJobsForWorkflowRun\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷ListJobsForWorkflowRun()->call($owner, $repo, $runId, $filter, $perPage, $page);
    }

    /** @return array{code:int,location:string} */
    public function downloadWorkflowRunLogs(string $owner, string $repo, int $runId): array
    {
        return $this->operators->actions👷DownloadWorkflowRunLogs()->call($owner, $repo, $runId);
    }

    /** @return iterable<string> */
    public function downloadWorkflowRunLogsStreaming(string $owner, string $repo, int $runId): iterable
    {
        return $this->operators->actions👷DownloadWorkflowRunLogsStreaming()->call($owner, $repo, $runId);
    }

    /** @return array{code:int} */
    public function deleteWorkflowRunLogs(string $owner, string $repo, int $runId): array
    {
        return $this->operators->actions👷DeleteWorkflowRunLogs()->call($owner, $repo, $runId);
    }

    /** @return iterable<Schema\PendingDeployment> */
    public function getPendingDeploymentsForRun(string $owner, string $repo, int $runId): iterable
    {
        return $this->operators->actions👷GetPendingDeploymentsForRun()->call($owner, $repo, $runId);
    }

    /** @return iterable<Schema\Deployment> */
    public function reviewPendingDeploymentsForRun(string $owner, string $repo, int $runId, array $params): iterable
    {
        return $this->operators->actions👷ReviewPendingDeploymentsForRun()->call($owner, $repo, $runId, $params);
    }

    /** @return Schema\EmptyObject */
    public function reRunWorkflow(string $owner, string $repo, int $runId, array $params): EmptyObject|array
    {
        return $this->operators->actions👷ReRunWorkflow()->call($owner, $repo, $runId, $params);
    }

    /** @return Schema\EmptyObject */
    public function reRunWorkflowFailedJobs(string $owner, string $repo, int $runId, array $params): EmptyObject|array
    {
        return $this->operators->actions👷ReRunWorkflowFailedJobs()->call($owner, $repo, $runId, $params);
    }

    /** @return Schema\WorkflowRunUsage */
    public function getWorkflowRunUsage(string $owner, string $repo, int $runId): WorkflowRunUsage|array
    {
        return $this->operators->actions👷GetWorkflowRunUsage()->call($owner, $repo, $runId);
    }

    /** @return Schema\Operations\Actions\ListRepoSecrets\Response\ApplicationJson\Ok\Application\Json */
    public function listRepoSecrets(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoSecrets\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷ListRepoSecrets()->call($owner, $repo, $perPage, $page);
    }

    /** @return Schema\ActionsPublicKey */
    public function getRepoPublicKey(string $owner, string $repo): ActionsPublicKey|array
    {
        return $this->operators->actions👷GetRepoPublicKey()->call($owner, $repo);
    }

    /** @return Schema\ActionsSecret */
    public function getRepoSecret(string $owner, string $repo, string $secretName): ActionsSecret|array
    {
        return $this->operators->actions👷GetRepoSecret()->call($owner, $repo, $secretName);
    }

    /** @return Schema\EmptyObject|array{code:int} */
    public function createOrUpdateRepoSecret(string $owner, string $repo, string $secretName, array $params): EmptyObject|array
    {
        return $this->operators->actions👷CreateOrUpdateRepoSecret()->call($owner, $repo, $secretName, $params);
    }

    /** @return array{code:int} */
    public function deleteRepoSecret(string $owner, string $repo, string $secretName): array
    {
        return $this->operators->actions👷DeleteRepoSecret()->call($owner, $repo, $secretName);
    }

    /** @return Schema\Operations\Actions\ListRepoVariables\Response\ApplicationJson\Ok\Application\Json */
    public function listRepoVariables(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoVariables\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷ListRepoVariables()->call($owner, $repo, $perPage, $page);
    }

    /** @return Schema\EmptyObject */
    public function createRepoVariable(string $owner, string $repo, array $params): EmptyObject|array
    {
        return $this->operators->actions👷CreateRepoVariable()->call($owner, $repo, $params);
    }

    /** @return Schema\ActionsVariable */
    public function getRepoVariable(string $owner, string $repo, string $name): ActionsVariable|array
    {
        return $this->operators->actions👷GetRepoVariable()->call($owner, $repo, $name);
    }

    /** @return array{code:int} */
    public function deleteRepoVariable(string $owner, string $repo, string $name): array
    {
        return $this->operators->actions👷DeleteRepoVariable()->call($owner, $repo, $name);
    }

    /** @return array{code:int} */
    public function updateRepoVariable(string $owner, string $repo, string $name, array $params): array
    {
        return $this->operators->actions👷UpdateRepoVariable()->call($owner, $repo, $name, $params);
    }

    /** @return Schema\Operations\Actions\ListRepoWorkflows\Response\ApplicationJson\Ok */
    public function listRepoWorkflows(string $owner, string $repo, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListRepoWorkflows\Response\ApplicationJson\Ok|array
    {
        return $this->operators->actions👷ListRepoWorkflows()->call($owner, $repo, $perPage, $page);
    }

    /** @return Schema\Workflow */
    public function getWorkflow(string $owner, string $repo, mixed $workflowId): Workflow|array
    {
        return $this->operators->actions👷GetWorkflow()->call($owner, $repo, $workflowId);
    }

    /** @return array{code:int} */
    public function disableWorkflow(string $owner, string $repo, mixed $workflowId): array
    {
        return $this->operators->actions👷DisableWorkflow()->call($owner, $repo, $workflowId);
    }

    /** @return array{code:int} */
    public function createWorkflowDispatch(string $owner, string $repo, mixed $workflowId, array $params): array
    {
        return $this->operators->actions👷CreateWorkflowDispatch()->call($owner, $repo, $workflowId, $params);
    }

    /** @return array{code:int} */
    public function enableWorkflow(string $owner, string $repo, mixed $workflowId): array
    {
        return $this->operators->actions👷EnableWorkflow()->call($owner, $repo, $workflowId);
    }

    /** @return Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json */
    public function listWorkflowRuns(string $owner, string $repo, mixed $workflowId, string $actor, string $branch, string $event, string $status, string $created, int $checkSuiteId, string $headSha, int $perPage, int $page, bool $excludePullRequests): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListWorkflowRuns\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷ListWorkflowRuns()->call($owner, $repo, $workflowId, $actor, $branch, $event, $status, $created, $checkSuiteId, $headSha, $perPage, $page, $excludePullRequests);
    }

    /** @return Schema\WorkflowUsage */
    public function getWorkflowUsage(string $owner, string $repo, mixed $workflowId): WorkflowUsage|array
    {
        return $this->operators->actions👷GetWorkflowUsage()->call($owner, $repo, $workflowId);
    }

    /** @return Schema\Operations\Actions\ListEnvironmentSecrets\Response\ApplicationJson\Ok\Application\Json */
    public function listEnvironmentSecrets(int $repositoryId, string $environmentName, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListEnvironmentSecrets\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷ListEnvironmentSecrets()->call($repositoryId, $environmentName, $perPage, $page);
    }

    /** @return Schema\ActionsPublicKey */
    public function getEnvironmentPublicKey(int $repositoryId, string $environmentName): ActionsPublicKey|array
    {
        return $this->operators->actions👷GetEnvironmentPublicKey()->call($repositoryId, $environmentName);
    }

    /** @return Schema\ActionsSecret */
    public function getEnvironmentSecret(int $repositoryId, string $environmentName, string $secretName): ActionsSecret|array
    {
        return $this->operators->actions👷GetEnvironmentSecret()->call($repositoryId, $environmentName, $secretName);
    }

    /** @return Schema\EmptyObject|array{code:int} */
    public function createOrUpdateEnvironmentSecret(int $repositoryId, string $environmentName, string $secretName, array $params): EmptyObject|array
    {
        return $this->operators->actions👷CreateOrUpdateEnvironmentSecret()->call($repositoryId, $environmentName, $secretName, $params);
    }

    /** @return array{code:int} */
    public function deleteEnvironmentSecret(int $repositoryId, string $environmentName, string $secretName): array
    {
        return $this->operators->actions👷DeleteEnvironmentSecret()->call($repositoryId, $environmentName, $secretName);
    }

    /** @return Schema\Operations\Actions\ListEnvironmentVariables\Response\ApplicationJson\Ok\Application\Json */
    public function listEnvironmentVariables(int $repositoryId, string $environmentName, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Actions\ListEnvironmentVariables\Response\ApplicationJson\Ok\Application\Json|array
    {
        return $this->operators->actions👷ListEnvironmentVariables()->call($repositoryId, $environmentName, $perPage, $page);
    }

    /** @return Schema\EmptyObject */
    public function createEnvironmentVariable(int $repositoryId, string $environmentName, array $params): EmptyObject|array
    {
        return $this->operators->actions👷CreateEnvironmentVariable()->call($repositoryId, $environmentName, $params);
    }

    /** @return Schema\ActionsVariable */
    public function getEnvironmentVariable(int $repositoryId, string $environmentName, string $name): ActionsVariable|array
    {
        return $this->operators->actions👷GetEnvironmentVariable()->call($repositoryId, $environmentName, $name);
    }

    /** @return array{code:int} */
    public function deleteEnvironmentVariable(int $repositoryId, string $name, string $environmentName): array
    {
        return $this->operators->actions👷DeleteEnvironmentVariable()->call($repositoryId, $name, $environmentName);
    }

    /** @return array{code:int} */
    public function updateEnvironmentVariable(int $repositoryId, string $name, string $environmentName, array $params): array
    {
        return $this->operators->actions👷UpdateEnvironmentVariable()->call($repositoryId, $name, $environmentName, $params);
    }
}
