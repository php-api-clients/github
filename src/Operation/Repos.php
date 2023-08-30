<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Autolink;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\BranchProtection;
use ApiClients\Client\GitHub\Schema\BranchRestrictionPolicy;
use ApiClients\Client\GitHub\Schema\BranchWithProtection;
use ApiClients\Client\GitHub\Schema\CheckAutomatedSecurityFixes;
use ApiClients\Client\GitHub\Schema\CloneTraffic;
use ApiClients\Client\GitHub\Schema\CodeownersErrors;
use ApiClients\Client\GitHub\Schema\CombinedCommitStatus;
use ApiClients\Client\GitHub\Schema\Commit;
use ApiClients\Client\GitHub\Schema\CommitComment;
use ApiClients\Client\GitHub\Schema\CommitComparison;
use ApiClients\Client\GitHub\Schema\CommunityProfile;
use ApiClients\Client\GitHub\Schema\ContentDirectory;
use ApiClients\Client\GitHub\Schema\ContentFile;
use ApiClients\Client\GitHub\Schema\ContentSubmodule;
use ApiClients\Client\GitHub\Schema\ContentSymlink;
use ApiClients\Client\GitHub\Schema\DeployKey;
use ApiClients\Client\GitHub\Schema\Deployment;
use ApiClients\Client\GitHub\Schema\DeploymentBranchPolicy;
use ApiClients\Client\GitHub\Schema\DeploymentProtectionRule;
use ApiClients\Client\GitHub\Schema\DeploymentStatus;
use ApiClients\Client\GitHub\Schema\EmptyObject;
use ApiClients\Client\GitHub\Schema\Environment;
use ApiClients\Client\GitHub\Schema\FileCommit;
use ApiClients\Client\GitHub\Schema\FullRepository;
use ApiClients\Client\GitHub\Schema\Hook;
use ApiClients\Client\GitHub\Schema\HookDelivery;
use ApiClients\Client\GitHub\Schema\Language;
use ApiClients\Client\GitHub\Schema\MergedUpstream;
use ApiClients\Client\GitHub\Schema\MinimalRepository;
use ApiClients\Client\GitHub\Schema\Operations\Repos\CreateDeployment\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHub\Schema\Operations\Repos\GetAllEnvironments\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\Page;
use ApiClients\Client\GitHub\Schema\PageBuild;
use ApiClients\Client\GitHub\Schema\PageBuildStatus;
use ApiClients\Client\GitHub\Schema\PageDeployment;
use ApiClients\Client\GitHub\Schema\PagesHealthCheck;
use ApiClients\Client\GitHub\Schema\ParticipationStats;
use ApiClients\Client\GitHub\Schema\ProtectedBranch;
use ApiClients\Client\GitHub\Schema\ProtectedBranchAdminEnforced;
use ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview;
use ApiClients\Client\GitHub\Schema\Release;
use ApiClients\Client\GitHub\Schema\ReleaseAsset;
use ApiClients\Client\GitHub\Schema\ReleaseNotesContent;
use ApiClients\Client\GitHub\Schema\Repository;
use ApiClients\Client\GitHub\Schema\RepositoryCollaboratorPermission;
use ApiClients\Client\GitHub\Schema\RepositoryInvitation;
use ApiClients\Client\GitHub\Schema\RepositoryRuleset;
use ApiClients\Client\GitHub\Schema\Status;
use ApiClients\Client\GitHub\Schema\StatusCheckPolicy;
use ApiClients\Client\GitHub\Schema\TagProtection;
use ApiClients\Client\GitHub\Schema\Topic;
use ApiClients\Client\GitHub\Schema\ViewTraffic;
use ApiClients\Client\GitHub\Schema\WebhookConfig;

final class Repos
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listForOrg(string $org, string $direction, string $type, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListForOrg()->call($org, $direction, $type, $sort, $perPage, $page);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listForOrgListing(string $org, string $direction, string $type, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListForOrgListing()->call($org, $direction, $type, $sort, $perPage, $page);
    }

    /** @return */
    public function createInOrg(string $org, array $params): Repository|array
    {
        return $this->operators->repos👷CreateInOrg()->call($org, $params);
    }

    /** @return Observable<Schema\RepositoryRuleset> */
    public function getOrgRulesets(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷GetOrgRulesets()->call($org, $perPage, $page);
    }

    /** @return Observable<Schema\RepositoryRuleset> */
    public function getOrgRulesetsListing(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷GetOrgRulesetsListing()->call($org, $perPage, $page);
    }

    /** @return */
    public function createOrgRuleset(string $org, array $params): RepositoryRuleset|array
    {
        return $this->operators->repos👷CreateOrgRuleset()->call($org, $params);
    }

    /** @return */
    public function getOrgRuleset(string $org, int $rulesetId): RepositoryRuleset|array
    {
        return $this->operators->repos👷GetOrgRuleset()->call($org, $rulesetId);
    }

    /** @return */
    public function updateOrgRuleset(string $org, int $rulesetId, array $params): RepositoryRuleset|array
    {
        return $this->operators->repos👷UpdateOrgRuleset()->call($org, $rulesetId, $params);
    }

    /** @return array{code:int} */
    public function deleteOrgRuleset(string $org, int $rulesetId): array
    {
        return $this->operators->repos👷DeleteOrgRuleset()->call($org, $rulesetId);
    }

    /** @return */
    public function get(string $owner, string $repo): FullRepository|BasicError|array
    {
        return $this->operators->repos👷Get()->call($owner, $repo);
    }

    /** @return Schema\BasicError|array{code:int} */
    public function delete(string $owner, string $repo): BasicError|array
    {
        return $this->operators->repos👷Delete()->call($owner, $repo);
    }

    /** @return */
    public function update(string $owner, string $repo, array $params): FullRepository|BasicError|array
    {
        return $this->operators->repos👷Update()->call($owner, $repo, $params);
    }

    /** @return Observable<Schema\Activity> */
    public function listActivities(string $owner, string $repo, string $before, string $after, string $ref, string $actor, string $timePeriod, string $activityType, string $direction, int $perPage): iterable
    {
        return $this->operators->repos👷ListActivities()->call($owner, $repo, $before, $after, $ref, $actor, $timePeriod, $activityType, $direction, $perPage);
    }

    /** @return Observable<Schema\Autolink> */
    public function listAutolinks(string $owner, string $repo, int $page): iterable
    {
        return $this->operators->repos👷ListAutolinks()->call($owner, $repo, $page);
    }

    /** @return */
    public function createAutolink(string $owner, string $repo, array $params): Autolink|array
    {
        return $this->operators->repos👷CreateAutolink()->call($owner, $repo, $params);
    }

    /** @return */
    public function getAutolink(string $owner, string $repo, int $autolinkId): Autolink|array
    {
        return $this->operators->repos👷GetAutolink()->call($owner, $repo, $autolinkId);
    }

    /** @return array{code:int} */
    public function deleteAutolink(string $owner, string $repo, int $autolinkId): array
    {
        return $this->operators->repos👷DeleteAutolink()->call($owner, $repo, $autolinkId);
    }

    /** @return Schema\CheckAutomatedSecurityFixes|array{code:int} */
    public function checkAutomatedSecurityFixes(string $owner, string $repo): CheckAutomatedSecurityFixes|array
    {
        return $this->operators->repos👷CheckAutomatedSecurityFixes()->call($owner, $repo);
    }

    /** @return array{code:int} */
    public function enableAutomatedSecurityFixes(string $owner, string $repo): array
    {
        return $this->operators->repos👷EnableAutomatedSecurityFixes()->call($owner, $repo);
    }

    /** @return array{code:int} */
    public function disableAutomatedSecurityFixes(string $owner, string $repo): array
    {
        return $this->operators->repos👷DisableAutomatedSecurityFixes()->call($owner, $repo);
    }

    /** @return Observable<Schema\ShortBranch> */
    public function listBranches(string $owner, string $repo, bool $protected, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListBranches()->call($owner, $repo, $protected, $perPage, $page);
    }

    /** @return Observable<Schema\ShortBranch> */
    public function listBranchesListing(string $owner, string $repo, bool $protected, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListBranchesListing()->call($owner, $repo, $protected, $perPage, $page);
    }

    /** @return */
    public function getBranch(string $owner, string $repo, string $branch): BranchWithProtection|BasicError|array
    {
        return $this->operators->repos👷GetBranch()->call($owner, $repo, $branch);
    }

    /** @return */
    public function getBranchProtection(string $owner, string $repo, string $branch): BranchProtection|array
    {
        return $this->operators->repos👷GetBranchProtection()->call($owner, $repo, $branch);
    }

    /** @return */
    public function updateBranchProtection(string $owner, string $repo, string $branch, array $params): ProtectedBranch|array
    {
        return $this->operators->repos👷UpdateBranchProtection()->call($owner, $repo, $branch, $params);
    }

    /** @return array{code:int} */
    public function deleteBranchProtection(string $owner, string $repo, string $branch): array
    {
        return $this->operators->repos👷DeleteBranchProtection()->call($owner, $repo, $branch);
    }

    /** @return */
    public function getAdminBranchProtection(string $owner, string $repo, string $branch): ProtectedBranchAdminEnforced|array
    {
        return $this->operators->repos👷GetAdminBranchProtection()->call($owner, $repo, $branch);
    }

    /** @return */
    public function setAdminBranchProtection(string $owner, string $repo, string $branch): ProtectedBranchAdminEnforced|array
    {
        return $this->operators->repos👷SetAdminBranchProtection()->call($owner, $repo, $branch);
    }

    /** @return array{code:int} */
    public function deleteAdminBranchProtection(string $owner, string $repo, string $branch): array
    {
        return $this->operators->repos👷DeleteAdminBranchProtection()->call($owner, $repo, $branch);
    }

    /** @return */
    public function getPullRequestReviewProtection(string $owner, string $repo, string $branch): ProtectedBranchPullRequestReview|array
    {
        return $this->operators->repos👷GetPullRequestReviewProtection()->call($owner, $repo, $branch);
    }

    /** @return array{code:int} */
    public function deletePullRequestReviewProtection(string $owner, string $repo, string $branch): array
    {
        return $this->operators->repos👷DeletePullRequestReviewProtection()->call($owner, $repo, $branch);
    }

    /** @return */
    public function updatePullRequestReviewProtection(string $owner, string $repo, string $branch, array $params): ProtectedBranchPullRequestReview|array
    {
        return $this->operators->repos👷UpdatePullRequestReviewProtection()->call($owner, $repo, $branch, $params);
    }

    /** @return */
    public function getCommitSignatureProtection(string $owner, string $repo, string $branch): ProtectedBranchAdminEnforced|array
    {
        return $this->operators->repos👷GetCommitSignatureProtection()->call($owner, $repo, $branch);
    }

    /** @return */
    public function createCommitSignatureProtection(string $owner, string $repo, string $branch): ProtectedBranchAdminEnforced|array
    {
        return $this->operators->repos👷CreateCommitSignatureProtection()->call($owner, $repo, $branch);
    }

    /** @return array{code:int} */
    public function deleteCommitSignatureProtection(string $owner, string $repo, string $branch): array
    {
        return $this->operators->repos👷DeleteCommitSignatureProtection()->call($owner, $repo, $branch);
    }

    /** @return */
    public function getStatusChecksProtection(string $owner, string $repo, string $branch): StatusCheckPolicy|array
    {
        return $this->operators->repos👷GetStatusChecksProtection()->call($owner, $repo, $branch);
    }

    /** @return array{code:int} */
    public function removeStatusCheckProtection(string $owner, string $repo, string $branch): array
    {
        return $this->operators->repos👷RemoveStatusCheckProtection()->call($owner, $repo, $branch);
    }

    /** @return */
    public function updateStatusCheckProtection(string $owner, string $repo, string $branch, array $params): StatusCheckPolicy|array
    {
        return $this->operators->repos👷UpdateStatusCheckProtection()->call($owner, $repo, $branch, $params);
    }

    /** @return Observable<string> */
    public function getAllStatusCheckContexts(string $owner, string $repo, string $branch): iterable
    {
        return $this->operators->repos👷GetAllStatusCheckContexts()->call($owner, $repo, $branch);
    }

    /** @return Observable<string> */
    public function setStatusCheckContexts(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷SetStatusCheckContexts()->call($owner, $repo, $branch, $params);
    }

    /** @return Observable<string> */
    public function addStatusCheckContexts(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷AddStatusCheckContexts()->call($owner, $repo, $branch, $params);
    }

    /** @return Observable<string> */
    public function removeStatusCheckContexts(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷RemoveStatusCheckContexts()->call($owner, $repo, $branch, $params);
    }

    /** @return */
    public function getAccessRestrictions(string $owner, string $repo, string $branch): BranchRestrictionPolicy|array
    {
        return $this->operators->repos👷GetAccessRestrictions()->call($owner, $repo, $branch);
    }

    /** @return array{code:int} */
    public function deleteAccessRestrictions(string $owner, string $repo, string $branch): array
    {
        return $this->operators->repos👷DeleteAccessRestrictions()->call($owner, $repo, $branch);
    }

    /** @return Observable<Schema\Integration> */
    public function getAppsWithAccessToProtectedBranch(string $owner, string $repo, string $branch): iterable
    {
        return $this->operators->repos👷GetAppsWithAccessToProtectedBranch()->call($owner, $repo, $branch);
    }

    /** @return Observable<Schema\Integration> */
    public function setAppAccessRestrictions(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷SetAppAccessRestrictions()->call($owner, $repo, $branch, $params);
    }

    /** @return Observable<Schema\Integration> */
    public function addAppAccessRestrictions(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷AddAppAccessRestrictions()->call($owner, $repo, $branch, $params);
    }

    /** @return Observable<Schema\Integration> */
    public function removeAppAccessRestrictions(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷RemoveAppAccessRestrictions()->call($owner, $repo, $branch, $params);
    }

    /** @return Observable<Schema\Team> */
    public function getTeamsWithAccessToProtectedBranch(string $owner, string $repo, string $branch): iterable
    {
        return $this->operators->repos👷GetTeamsWithAccessToProtectedBranch()->call($owner, $repo, $branch);
    }

    /** @return Observable<Schema\Team> */
    public function setTeamAccessRestrictions(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷SetTeamAccessRestrictions()->call($owner, $repo, $branch, $params);
    }

    /** @return Observable<Schema\Team> */
    public function addTeamAccessRestrictions(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷AddTeamAccessRestrictions()->call($owner, $repo, $branch, $params);
    }

    /** @return Observable<Schema\Team> */
    public function removeTeamAccessRestrictions(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷RemoveTeamAccessRestrictions()->call($owner, $repo, $branch, $params);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function getUsersWithAccessToProtectedBranch(string $owner, string $repo, string $branch): iterable
    {
        return $this->operators->repos👷GetUsersWithAccessToProtectedBranch()->call($owner, $repo, $branch);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function setUserAccessRestrictions(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷SetUserAccessRestrictions()->call($owner, $repo, $branch, $params);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function addUserAccessRestrictions(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷AddUserAccessRestrictions()->call($owner, $repo, $branch, $params);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function removeUserAccessRestrictions(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷RemoveUserAccessRestrictions()->call($owner, $repo, $branch, $params);
    }

    /** @return */
    public function renameBranch(string $owner, string $repo, string $branch, array $params): BranchWithProtection|array
    {
        return $this->operators->repos👷RenameBranch()->call($owner, $repo, $branch, $params);
    }

    /** @return Schema\CodeownersErrors|array{code:int} */
    public function codeownersErrors(string $owner, string $repo, string $ref): CodeownersErrors|array
    {
        return $this->operators->repos👷CodeownersErrors()->call($owner, $repo, $ref);
    }

    /** @return Observable<Schema\Collaborator> */
    public function listCollaborators(string $owner, string $repo, string $permission, string $affiliation, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListCollaborators()->call($owner, $repo, $permission, $affiliation, $perPage, $page);
    }

    /** @return Observable<Schema\Collaborator> */
    public function listCollaboratorsListing(string $owner, string $repo, string $permission, string $affiliation, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListCollaboratorsListing()->call($owner, $repo, $permission, $affiliation, $perPage, $page);
    }

    /** @return array{code:int} */
    public function checkCollaborator(string $owner, string $repo, string $username): array
    {
        return $this->operators->repos👷CheckCollaborator()->call($owner, $repo, $username);
    }

    /** @return Schema\RepositoryInvitation|array{code:int} */
    public function addCollaborator(string $owner, string $repo, string $username, array $params): RepositoryInvitation|array
    {
        return $this->operators->repos👷AddCollaborator()->call($owner, $repo, $username, $params);
    }

    /** @return array{code:int} */
    public function removeCollaborator(string $owner, string $repo, string $username): array
    {
        return $this->operators->repos👷RemoveCollaborator()->call($owner, $repo, $username);
    }

    /** @return */
    public function getCollaboratorPermissionLevel(string $owner, string $repo, string $username): RepositoryCollaboratorPermission|array
    {
        return $this->operators->repos👷GetCollaboratorPermissionLevel()->call($owner, $repo, $username);
    }

    /** @return Observable<Schema\CommitComment> */
    public function listCommitCommentsForRepo(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListCommitCommentsForRepo()->call($owner, $repo, $perPage, $page);
    }

    /** @return Observable<Schema\CommitComment> */
    public function listCommitCommentsForRepoListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListCommitCommentsForRepoListing()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function getCommitComment(string $owner, string $repo, int $commentId): CommitComment|array
    {
        return $this->operators->repos👷GetCommitComment()->call($owner, $repo, $commentId);
    }

    /** @return array{code:int} */
    public function deleteCommitComment(string $owner, string $repo, int $commentId): array
    {
        return $this->operators->repos👷DeleteCommitComment()->call($owner, $repo, $commentId);
    }

    /** @return */
    public function updateCommitComment(string $owner, string $repo, int $commentId, array $params): CommitComment|array
    {
        return $this->operators->repos👷UpdateCommitComment()->call($owner, $repo, $commentId, $params);
    }

    /** @return Observable<Schema\Commit> */
    public function listCommits(string $owner, string $repo, string $sha, string $path, string $author, string $committer, string $since, string $until, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListCommits()->call($owner, $repo, $sha, $path, $author, $committer, $since, $until, $perPage, $page);
    }

    /** @return Observable<Schema\Commit> */
    public function listCommitsListing(string $owner, string $repo, string $sha, string $path, string $author, string $committer, string $since, string $until, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListCommitsListing()->call($owner, $repo, $sha, $path, $author, $committer, $since, $until, $perPage, $page);
    }

    /** @return Observable<Schema\BranchShort> */
    public function listBranchesForHeadCommit(string $owner, string $repo, string $commitSha): iterable
    {
        return $this->operators->repos👷ListBranchesForHeadCommit()->call($owner, $repo, $commitSha);
    }

    /** @return Observable<Schema\CommitComment> */
    public function listCommentsForCommit(string $owner, string $repo, string $commitSha, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListCommentsForCommit()->call($owner, $repo, $commitSha, $perPage, $page);
    }

    /** @return Observable<Schema\CommitComment> */
    public function listCommentsForCommitListing(string $owner, string $repo, string $commitSha, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListCommentsForCommitListing()->call($owner, $repo, $commitSha, $perPage, $page);
    }

    /** @return */
    public function createCommitComment(string $owner, string $repo, string $commitSha, array $params): CommitComment|array
    {
        return $this->operators->repos👷CreateCommitComment()->call($owner, $repo, $commitSha, $params);
    }

    /** @return Observable<Schema\PullRequestSimple> */
    public function listPullRequestsAssociatedWithCommit(string $owner, string $repo, string $commitSha, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListPullRequestsAssociatedWithCommit()->call($owner, $repo, $commitSha, $perPage, $page);
    }

    /** @return Observable<Schema\PullRequestSimple> */
    public function listPullRequestsAssociatedWithCommitListing(string $owner, string $repo, string $commitSha, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListPullRequestsAssociatedWithCommitListing()->call($owner, $repo, $commitSha, $perPage, $page);
    }

    /** @return */
    public function getCommit(string $owner, string $repo, string $ref, int $page, int $perPage): Commit|array
    {
        return $this->operators->repos👷GetCommit()->call($owner, $repo, $ref, $page, $perPage);
    }

    /** @return */
    public function getCombinedStatusForRef(string $owner, string $repo, string $ref, int $perPage, int $page): CombinedCommitStatus|array
    {
        return $this->operators->repos👷GetCombinedStatusForRef()->call($owner, $repo, $ref, $perPage, $page);
    }

    /** @return Observable<Schema\Status>|Schema\BasicError */
    public function listCommitStatusesForRef(string $owner, string $repo, string $ref, int $perPage, int $page): Traversable|BasicError|array
    {
        return $this->operators->repos👷ListCommitStatusesForRef()->call($owner, $repo, $ref, $perPage, $page);
    }

    /** @return Observable<Schema\Status>|Schema\BasicError */
    public function listCommitStatusesForRefListing(string $owner, string $repo, string $ref, int $perPage, int $page): Traversable|BasicError|array
    {
        return $this->operators->repos👷ListCommitStatusesForRefListing()->call($owner, $repo, $ref, $perPage, $page);
    }

    /** @return */
    public function getCommunityProfileMetrics(string $owner, string $repo): CommunityProfile|array
    {
        return $this->operators->repos👷GetCommunityProfileMetrics()->call($owner, $repo);
    }

    /** @return */
    public function compareCommits(string $owner, string $repo, string $basehead, int $page, int $perPage): CommitComparison|array
    {
        return $this->operators->repos👷CompareCommits()->call($owner, $repo, $basehead, $page, $perPage);
    }

    /** @return Schema\ContentDirectory|Schema\ContentFile|Schema\ContentSymlink|Schema\ContentSubmodule|array{code:int} */
    public function getContent(string $owner, string $repo, string $path, string $ref): ContentDirectory|ContentFile|ContentSymlink|ContentSubmodule|array
    {
        return $this->operators->repos👷GetContent()->call($owner, $repo, $path, $ref);
    }

    /** @return */
    public function createOrUpdateFileContents(string $owner, string $repo, string $path, array $params): FileCommit|array
    {
        return $this->operators->repos👷CreateOrUpdateFileContents()->call($owner, $repo, $path, $params);
    }

    /** @return */
    public function deleteFile(string $owner, string $repo, string $path, array $params): FileCommit|array
    {
        return $this->operators->repos👷DeleteFile()->call($owner, $repo, $path, $params);
    }

    /** @return iterable<Schema\Contributor>|array{code:int} */
    public function listContributors(string $owner, string $repo, string $anon, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListContributors()->call($owner, $repo, $anon, $perPage, $page);
    }

    /** @return iterable<Schema\Contributor>|array{code:int} */
    public function listContributorsListing(string $owner, string $repo, string $anon, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListContributorsListing()->call($owner, $repo, $anon, $perPage, $page);
    }

    /** @return Observable<Schema\Deployment> */
    public function listDeployments(string $owner, string $repo, string $sha, string $ref, string $task, string|null $environment, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListDeployments()->call($owner, $repo, $sha, $ref, $task, $environment, $perPage, $page);
    }

    /** @return Observable<Schema\Deployment> */
    public function listDeploymentsListing(string $owner, string $repo, string $sha, string $ref, string $task, string|null $environment, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListDeploymentsListing()->call($owner, $repo, $sha, $ref, $task, $environment, $perPage, $page);
    }

    /** @return Schema\Deployment|Schema\Operations\Repos\CreateDeployment\Response\ApplicationJson\Accepted\Application\Json|array{code:int} */
    public function createDeployment(string $owner, string $repo, array $params): Deployment|Json|array
    {
        return $this->operators->repos👷CreateDeployment()->call($owner, $repo, $params);
    }

    /** @return */
    public function getDeployment(string $owner, string $repo, int $deploymentId): Deployment|array
    {
        return $this->operators->repos👷GetDeployment()->call($owner, $repo, $deploymentId);
    }

    /** @return array{code:int} */
    public function deleteDeployment(string $owner, string $repo, int $deploymentId): array
    {
        return $this->operators->repos👷DeleteDeployment()->call($owner, $repo, $deploymentId);
    }

    /** @return Observable<Schema\DeploymentStatus> */
    public function listDeploymentStatuses(string $owner, string $repo, int $deploymentId, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListDeploymentStatuses()->call($owner, $repo, $deploymentId, $perPage, $page);
    }

    /** @return Observable<Schema\DeploymentStatus> */
    public function listDeploymentStatusesListing(string $owner, string $repo, int $deploymentId, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListDeploymentStatusesListing()->call($owner, $repo, $deploymentId, $perPage, $page);
    }

    /** @return */
    public function createDeploymentStatus(string $owner, string $repo, int $deploymentId, array $params): DeploymentStatus|array
    {
        return $this->operators->repos👷CreateDeploymentStatus()->call($owner, $repo, $deploymentId, $params);
    }

    /** @return */
    public function getDeploymentStatus(string $owner, string $repo, int $deploymentId, int $statusId): DeploymentStatus|array
    {
        return $this->operators->repos👷GetDeploymentStatus()->call($owner, $repo, $deploymentId, $statusId);
    }

    /** @return array{code:int} */
    public function createDispatchEvent(string $owner, string $repo, array $params): array
    {
        return $this->operators->repos👷CreateDispatchEvent()->call($owner, $repo, $params);
    }

    /** @return */
    public function getAllEnvironments(string $owner, string $repo, int $perPage, int $page): Ok|array
    {
        return $this->operators->repos👷GetAllEnvironments()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function getEnvironment(string $owner, string $repo, string $environmentName): Environment|array
    {
        return $this->operators->repos👷GetEnvironment()->call($owner, $repo, $environmentName);
    }

    /** @return */
    public function createOrUpdateEnvironment(string $owner, string $repo, string $environmentName, array $params): Environment|array
    {
        return $this->operators->repos👷CreateOrUpdateEnvironment()->call($owner, $repo, $environmentName, $params);
    }

    /** @return array{code:int} */
    public function deleteAnEnvironment(string $owner, string $repo, string $environmentName): array
    {
        return $this->operators->repos👷DeleteAnEnvironment()->call($owner, $repo, $environmentName);
    }

    /** @return */
    public function listDeploymentBranchPolicies(string $owner, string $repo, string $environmentName, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Repos\ListDeploymentBranchPolicies\Response\ApplicationJson\Ok|array
    {
        return $this->operators->repos👷ListDeploymentBranchPolicies()->call($owner, $repo, $environmentName, $perPage, $page);
    }

    /** @return Schema\DeploymentBranchPolicy|array{code:int} */
    public function createDeploymentBranchPolicy(string $owner, string $repo, string $environmentName, array $params): DeploymentBranchPolicy|array
    {
        return $this->operators->repos👷CreateDeploymentBranchPolicy()->call($owner, $repo, $environmentName, $params);
    }

    /** @return */
    public function getDeploymentBranchPolicy(string $owner, string $repo, string $environmentName, int $branchPolicyId): DeploymentBranchPolicy|array
    {
        return $this->operators->repos👷GetDeploymentBranchPolicy()->call($owner, $repo, $environmentName, $branchPolicyId);
    }

    /** @return */
    public function updateDeploymentBranchPolicy(string $owner, string $repo, string $environmentName, int $branchPolicyId, array $params): DeploymentBranchPolicy|array
    {
        return $this->operators->repos👷UpdateDeploymentBranchPolicy()->call($owner, $repo, $environmentName, $branchPolicyId, $params);
    }

    /** @return array{code:int} */
    public function deleteDeploymentBranchPolicy(string $owner, string $repo, string $environmentName, int $branchPolicyId): array
    {
        return $this->operators->repos👷DeleteDeploymentBranchPolicy()->call($owner, $repo, $environmentName, $branchPolicyId);
    }

    /** @return */
    public function getAllDeploymentProtectionRules(string $environmentName, string $repo, string $owner): \ApiClients\Client\GitHub\Schema\Operations\Repos\GetAllDeploymentProtectionRules\Response\ApplicationJson\Ok|array
    {
        return $this->operators->repos👷GetAllDeploymentProtectionRules()->call($environmentName, $repo, $owner);
    }

    /** @return */
    public function createDeploymentProtectionRule(string $environmentName, string $repo, string $owner, array $params): DeploymentProtectionRule|array
    {
        return $this->operators->repos👷CreateDeploymentProtectionRule()->call($environmentName, $repo, $owner, $params);
    }

    /** @return */
    public function listCustomDeploymentRuleIntegrations(string $environmentName, string $repo, string $owner, int $page, int $perPage): \ApiClients\Client\GitHub\Schema\Operations\Repos\ListCustomDeploymentRuleIntegrations\Response\ApplicationJson\Ok|array
    {
        return $this->operators->repos👷ListCustomDeploymentRuleIntegrations()->call($environmentName, $repo, $owner, $page, $perPage);
    }

    /** @return */
    public function getCustomDeploymentProtectionRule(string $owner, string $repo, string $environmentName, int $protectionRuleId): DeploymentProtectionRule|array
    {
        return $this->operators->repos👷GetCustomDeploymentProtectionRule()->call($owner, $repo, $environmentName, $protectionRuleId);
    }

    /** @return array{code:int} */
    public function disableDeploymentProtectionRule(string $environmentName, string $repo, string $owner, int $protectionRuleId): array
    {
        return $this->operators->repos👷DisableDeploymentProtectionRule()->call($environmentName, $repo, $owner, $protectionRuleId);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listForks(string $owner, string $repo, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListForks()->call($owner, $repo, $sort, $perPage, $page);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listForksListing(string $owner, string $repo, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListForksListing()->call($owner, $repo, $sort, $perPage, $page);
    }

    /** @return */
    public function createFork(string $owner, string $repo, array $params): FullRepository|array
    {
        return $this->operators->repos👷CreateFork()->call($owner, $repo, $params);
    }

    /** @return Observable<Schema\Hook> */
    public function listWebhooks(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListWebhooks()->call($owner, $repo, $perPage, $page);
    }

    /** @return Observable<Schema\Hook> */
    public function listWebhooksListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListWebhooksListing()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function createWebhook(string $owner, string $repo, array $params): Hook|array
    {
        return $this->operators->repos👷CreateWebhook()->call($owner, $repo, $params);
    }

    /** @return */
    public function getWebhook(string $owner, string $repo, int $hookId): Hook|array
    {
        return $this->operators->repos👷GetWebhook()->call($owner, $repo, $hookId);
    }

    /** @return array{code:int} */
    public function deleteWebhook(string $owner, string $repo, int $hookId): array
    {
        return $this->operators->repos👷DeleteWebhook()->call($owner, $repo, $hookId);
    }

    /** @return */
    public function updateWebhook(string $owner, string $repo, int $hookId, array $params): Hook|array
    {
        return $this->operators->repos👷UpdateWebhook()->call($owner, $repo, $hookId, $params);
    }

    /** @return */
    public function getWebhookConfigForRepo(string $owner, string $repo, int $hookId): WebhookConfig|array
    {
        return $this->operators->repos👷GetWebhookConfigForRepo()->call($owner, $repo, $hookId);
    }

    /** @return */
    public function updateWebhookConfigForRepo(string $owner, string $repo, int $hookId, array $params): WebhookConfig|array
    {
        return $this->operators->repos👷UpdateWebhookConfigForRepo()->call($owner, $repo, $hookId, $params);
    }

    /** @return Observable<Schema\HookDeliveryItem> */
    public function listWebhookDeliveries(string $owner, string $repo, int $hookId, string $cursor, bool $redelivery, int $perPage): iterable
    {
        return $this->operators->repos👷ListWebhookDeliveries()->call($owner, $repo, $hookId, $cursor, $redelivery, $perPage);
    }

    /** @return */
    public function getWebhookDelivery(string $owner, string $repo, int $hookId, int $deliveryId): HookDelivery|array
    {
        return $this->operators->repos👷GetWebhookDelivery()->call($owner, $repo, $hookId, $deliveryId);
    }

    /** @return */
    public function redeliverWebhookDelivery(string $owner, string $repo, int $hookId, int $deliveryId): \ApiClients\Client\GitHub\Schema\Operations\Repos\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json|array
    {
        return $this->operators->repos👷RedeliverWebhookDelivery()->call($owner, $repo, $hookId, $deliveryId);
    }

    /** @return array{code:int} */
    public function pingWebhook(string $owner, string $repo, int $hookId): array
    {
        return $this->operators->repos👷PingWebhook()->call($owner, $repo, $hookId);
    }

    /** @return array{code:int} */
    public function testPushWebhook(string $owner, string $repo, int $hookId): array
    {
        return $this->operators->repos👷TestPushWebhook()->call($owner, $repo, $hookId);
    }

    /** @return Observable<Schema\RepositoryInvitation> */
    public function listInvitations(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListInvitations()->call($owner, $repo, $perPage, $page);
    }

    /** @return Observable<Schema\RepositoryInvitation> */
    public function listInvitationsListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListInvitationsListing()->call($owner, $repo, $perPage, $page);
    }

    /** @return array{code:int} */
    public function deleteInvitation(string $owner, string $repo, int $invitationId): array
    {
        return $this->operators->repos👷DeleteInvitation()->call($owner, $repo, $invitationId);
    }

    /** @return */
    public function updateInvitation(string $owner, string $repo, int $invitationId, array $params): RepositoryInvitation|array
    {
        return $this->operators->repos👷UpdateInvitation()->call($owner, $repo, $invitationId, $params);
    }

    /** @return Observable<Schema\DeployKey> */
    public function listDeployKeys(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListDeployKeys()->call($owner, $repo, $perPage, $page);
    }

    /** @return Observable<Schema\DeployKey> */
    public function listDeployKeysListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListDeployKeysListing()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function createDeployKey(string $owner, string $repo, array $params): DeployKey|array
    {
        return $this->operators->repos👷CreateDeployKey()->call($owner, $repo, $params);
    }

    /** @return */
    public function getDeployKey(string $owner, string $repo, int $keyId): DeployKey|array
    {
        return $this->operators->repos👷GetDeployKey()->call($owner, $repo, $keyId);
    }

    /** @return array{code:int} */
    public function deleteDeployKey(string $owner, string $repo, int $keyId): array
    {
        return $this->operators->repos👷DeleteDeployKey()->call($owner, $repo, $keyId);
    }

    /** @return */
    public function listLanguages(string $owner, string $repo): Language|array
    {
        return $this->operators->repos👷ListLanguages()->call($owner, $repo);
    }

    /** @return Schema\MergedUpstream|array{code:int} */
    public function mergeUpstream(string $owner, string $repo, array $params): MergedUpstream|array
    {
        return $this->operators->repos👷MergeUpstream()->call($owner, $repo, $params);
    }

    /** @return Schema\Commit|array{code:int} */
    public function merge(string $owner, string $repo, array $params): Commit|array
    {
        return $this->operators->repos👷Merge()->call($owner, $repo, $params);
    }

    /** @return */
    public function getPages(string $owner, string $repo): Page|array
    {
        return $this->operators->repos👷GetPages()->call($owner, $repo);
    }

    /** @return array{code:int} */
    public function updateInformationAboutPagesSite(string $owner, string $repo, array $params): array
    {
        return $this->operators->repos👷UpdateInformationAboutPagesSite()->call($owner, $repo, $params);
    }

    /** @return */
    public function createPagesSite(string $owner, string $repo, array $params): Page|array
    {
        return $this->operators->repos👷CreatePagesSite()->call($owner, $repo, $params);
    }

    /** @return array{code:int} */
    public function deletePagesSite(string $owner, string $repo): array
    {
        return $this->operators->repos👷DeletePagesSite()->call($owner, $repo);
    }

    /** @return Observable<Schema\PageBuild> */
    public function listPagesBuilds(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListPagesBuilds()->call($owner, $repo, $perPage, $page);
    }

    /** @return Observable<Schema\PageBuild> */
    public function listPagesBuildsListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListPagesBuildsListing()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function requestPagesBuild(string $owner, string $repo): PageBuildStatus|array
    {
        return $this->operators->repos👷RequestPagesBuild()->call($owner, $repo);
    }

    /** @return */
    public function getLatestPagesBuild(string $owner, string $repo): PageBuild|array
    {
        return $this->operators->repos👷GetLatestPagesBuild()->call($owner, $repo);
    }

    /** @return */
    public function getPagesBuild(string $owner, string $repo, int $buildId): PageBuild|array
    {
        return $this->operators->repos👷GetPagesBuild()->call($owner, $repo, $buildId);
    }

    /** @return */
    public function createPagesDeployment(string $owner, string $repo, array $params): PageDeployment|array
    {
        return $this->operators->repos👷CreatePagesDeployment()->call($owner, $repo, $params);
    }

    /** @return Schema\PagesHealthCheck|Schema\EmptyObject|array{code:int} */
    public function getPagesHealthCheck(string $owner, string $repo): PagesHealthCheck|EmptyObject|array
    {
        return $this->operators->repos👷GetPagesHealthCheck()->call($owner, $repo);
    }

    /** @return array{code:int} */
    public function enablePrivateVulnerabilityReporting(string $owner, string $repo): array
    {
        return $this->operators->repos👷EnablePrivateVulnerabilityReporting()->call($owner, $repo);
    }

    /** @return array{code:int} */
    public function disablePrivateVulnerabilityReporting(string $owner, string $repo): array
    {
        return $this->operators->repos👷DisablePrivateVulnerabilityReporting()->call($owner, $repo);
    }

    /** @return */
    public function getReadme(string $owner, string $repo, string $ref): ContentFile|array
    {
        return $this->operators->repos👷GetReadme()->call($owner, $repo, $ref);
    }

    /** @return */
    public function getReadmeInDirectory(string $owner, string $repo, string $dir, string $ref): ContentFile|array
    {
        return $this->operators->repos👷GetReadmeInDirectory()->call($owner, $repo, $dir, $ref);
    }

    /** @return Observable<Schema\Release> */
    public function listReleases(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListReleases()->call($owner, $repo, $perPage, $page);
    }

    /** @return Observable<Schema\Release> */
    public function listReleasesListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListReleasesListing()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function createRelease(string $owner, string $repo, array $params): Release|array
    {
        return $this->operators->repos👷CreateRelease()->call($owner, $repo, $params);
    }

    /** @return Schema\ReleaseAsset|array{code:int} */
    public function getReleaseAsset(string $owner, string $repo, int $assetId): ReleaseAsset|array
    {
        return $this->operators->repos👷GetReleaseAsset()->call($owner, $repo, $assetId);
    }

    /** @return array{code:int} */
    public function deleteReleaseAsset(string $owner, string $repo, int $assetId): array
    {
        return $this->operators->repos👷DeleteReleaseAsset()->call($owner, $repo, $assetId);
    }

    /** @return */
    public function updateReleaseAsset(string $owner, string $repo, int $assetId, array $params): ReleaseAsset|array
    {
        return $this->operators->repos👷UpdateReleaseAsset()->call($owner, $repo, $assetId, $params);
    }

    /** @return */
    public function generateReleaseNotes(string $owner, string $repo, array $params): ReleaseNotesContent|array
    {
        return $this->operators->repos👷GenerateReleaseNotes()->call($owner, $repo, $params);
    }

    /** @return */
    public function getLatestRelease(string $owner, string $repo): Release|array
    {
        return $this->operators->repos👷GetLatestRelease()->call($owner, $repo);
    }

    /** @return */
    public function getReleaseByTag(string $owner, string $repo, string $tag): Release|array
    {
        return $this->operators->repos👷GetReleaseByTag()->call($owner, $repo, $tag);
    }

    /** @return Schema\Release|array{code:int} */
    public function getRelease(string $owner, string $repo, int $releaseId): Release|array
    {
        return $this->operators->repos👷GetRelease()->call($owner, $repo, $releaseId);
    }

    /** @return array{code:int} */
    public function deleteRelease(string $owner, string $repo, int $releaseId): array
    {
        return $this->operators->repos👷DeleteRelease()->call($owner, $repo, $releaseId);
    }

    /** @return */
    public function updateRelease(string $owner, string $repo, int $releaseId, array $params): Release|array
    {
        return $this->operators->repos👷UpdateRelease()->call($owner, $repo, $releaseId, $params);
    }

    /** @return Observable<Schema\ReleaseAsset> */
    public function listReleaseAssets(string $owner, string $repo, int $releaseId, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListReleaseAssets()->call($owner, $repo, $releaseId, $perPage, $page);
    }

    /** @return Observable<Schema\ReleaseAsset> */
    public function listReleaseAssetsListing(string $owner, string $repo, int $releaseId, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListReleaseAssetsListing()->call($owner, $repo, $releaseId, $perPage, $page);
    }

    /** @return Schema\ReleaseAsset|array{code:int} */
    public function uploadReleaseAsset(string $owner, string $repo, int $releaseId, string $name, string $label, array $params): ReleaseAsset|array
    {
        return $this->operators->repos👷UploadReleaseAsset()->call($owner, $repo, $releaseId, $name, $label, $params);
    }

    /** @return Observable<Schema\RepositoryRuleCreation|Schema\RepositoryRuleUpdate|Schema\RepositoryRuleDeletion|Schema\RepositoryRuleRequiredLinearHistory|Schema\RepositoryRuleRequiredDeployments|Schema\RepositoryRuleRequiredSignatures|Schema\RepositoryRulePullRequest|Schema\RepositoryRuleRequiredStatusChecks|Schema\RepositoryRuleNonFastForward|Schema\RepositoryRuleCommitMessagePattern|Schema\RepositoryRuleCommitAuthorEmailPattern|Schema\RepositoryRuleCommitterEmailPattern|Schema\RepositoryRuleBranchNamePattern|Schema\RepositoryRuleTagNamePattern> */
    public function getBranchRules(string $owner, string $repo, string $branch, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷GetBranchRules()->call($owner, $repo, $branch, $perPage, $page);
    }

    /** @return Observable<Schema\RepositoryRuleCreation|Schema\RepositoryRuleUpdate|Schema\RepositoryRuleDeletion|Schema\RepositoryRuleRequiredLinearHistory|Schema\RepositoryRuleRequiredDeployments|Schema\RepositoryRuleRequiredSignatures|Schema\RepositoryRulePullRequest|Schema\RepositoryRuleRequiredStatusChecks|Schema\RepositoryRuleNonFastForward|Schema\RepositoryRuleCommitMessagePattern|Schema\RepositoryRuleCommitAuthorEmailPattern|Schema\RepositoryRuleCommitterEmailPattern|Schema\RepositoryRuleBranchNamePattern|Schema\RepositoryRuleTagNamePattern> */
    public function getBranchRulesListing(string $owner, string $repo, string $branch, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷GetBranchRulesListing()->call($owner, $repo, $branch, $perPage, $page);
    }

    /** @return Observable<Schema\RepositoryRuleset> */
    public function getRepoRulesets(string $owner, string $repo, int $perPage, int $page, bool $includesParents): iterable
    {
        return $this->operators->repos👷GetRepoRulesets()->call($owner, $repo, $perPage, $page, $includesParents);
    }

    /** @return Observable<Schema\RepositoryRuleset> */
    public function getRepoRulesetsListing(string $owner, string $repo, int $perPage, int $page, bool $includesParents): iterable
    {
        return $this->operators->repos👷GetRepoRulesetsListing()->call($owner, $repo, $perPage, $page, $includesParents);
    }

    /** @return */
    public function createRepoRuleset(string $owner, string $repo, array $params): RepositoryRuleset|array
    {
        return $this->operators->repos👷CreateRepoRuleset()->call($owner, $repo, $params);
    }

    /** @return */
    public function getRepoRuleset(string $owner, string $repo, int $rulesetId, bool $includesParents): RepositoryRuleset|array
    {
        return $this->operators->repos👷GetRepoRuleset()->call($owner, $repo, $rulesetId, $includesParents);
    }

    /** @return */
    public function updateRepoRuleset(string $owner, string $repo, int $rulesetId, array $params): RepositoryRuleset|array
    {
        return $this->operators->repos👷UpdateRepoRuleset()->call($owner, $repo, $rulesetId, $params);
    }

    /** @return array{code:int} */
    public function deleteRepoRuleset(string $owner, string $repo, int $rulesetId): array
    {
        return $this->operators->repos👷DeleteRepoRuleset()->call($owner, $repo, $rulesetId);
    }

    /** @return Observable<int>|Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted\Application\Json|array{code:int} */
    public function getCodeFrequencyStats(string $owner, string $repo): Traversable|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted\Application\Json|array
    {
        return $this->operators->repos👷GetCodeFrequencyStats()->call($owner, $repo);
    }

    /** @return Observable<Schema\CommitActivity>|Schema\Operations\Repos\GetCommitActivityStats\Response\ApplicationJson\Accepted\Application\Json|array{code:int} */
    public function getCommitActivityStats(string $owner, string $repo): Traversable|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetCommitActivityStats\Response\ApplicationJson\Accepted\Application\Json|array
    {
        return $this->operators->repos👷GetCommitActivityStats()->call($owner, $repo);
    }

    /** @return Observable<Schema\ContributorActivity>|Schema\Operations\Repos\GetContributorsStats\Response\ApplicationJson\Accepted\Application\Json|array{code:int} */
    public function getContributorsStats(string $owner, string $repo): Traversable|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetContributorsStats\Response\ApplicationJson\Accepted\Application\Json|array
    {
        return $this->operators->repos👷GetContributorsStats()->call($owner, $repo);
    }

    /** @return */
    public function getParticipationStats(string $owner, string $repo): ParticipationStats|array
    {
        return $this->operators->repos👷GetParticipationStats()->call($owner, $repo);
    }

    /** @return Observable<int>|array{code:int} */
    public function getPunchCardStats(string $owner, string $repo): iterable
    {
        return $this->operators->repos👷GetPunchCardStats()->call($owner, $repo);
    }

    /** @return */
    public function createCommitStatus(string $owner, string $repo, string $sha, array $params): Status|array
    {
        return $this->operators->repos👷CreateCommitStatus()->call($owner, $repo, $sha, $params);
    }

    /** @return Observable<Schema\Tag> */
    public function listTags(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListTags()->call($owner, $repo, $perPage, $page);
    }

    /** @return Observable<Schema\Tag> */
    public function listTagsListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListTagsListing()->call($owner, $repo, $perPage, $page);
    }

    /** @return Observable<Schema\TagProtection> */
    public function listTagProtection(string $owner, string $repo): iterable
    {
        return $this->operators->repos👷ListTagProtection()->call($owner, $repo);
    }

    /** @return */
    public function createTagProtection(string $owner, string $repo, array $params): TagProtection|array
    {
        return $this->operators->repos👷CreateTagProtection()->call($owner, $repo, $params);
    }

    /** @return array{code:int} */
    public function deleteTagProtection(string $owner, string $repo, int $tagProtectionId): array
    {
        return $this->operators->repos👷DeleteTagProtection()->call($owner, $repo, $tagProtectionId);
    }

    /** @return array{code:int,location:string} */
    public function downloadTarballArchive(string $owner, string $repo, string $ref): array
    {
        return $this->operators->repos👷DownloadTarballArchive()->call($owner, $repo, $ref);
    }

    /** @return Observable<string> */
    public function downloadTarballArchiveStreaming(string $owner, string $repo, string $ref): iterable
    {
        return $this->operators->repos👷DownloadTarballArchiveStreaming()->call($owner, $repo, $ref);
    }

    /** @return Observable<Schema\Team> */
    public function listTeams(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListTeams()->call($owner, $repo, $perPage, $page);
    }

    /** @return Observable<Schema\Team> */
    public function listTeamsListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListTeamsListing()->call($owner, $repo, $perPage, $page);
    }

    /** @return */
    public function getAllTopics(string $owner, string $repo, int $page, int $perPage): Topic|array
    {
        return $this->operators->repos👷GetAllTopics()->call($owner, $repo, $page, $perPage);
    }

    /** @return */
    public function replaceAllTopics(string $owner, string $repo, array $params): Topic|array
    {
        return $this->operators->repos👷ReplaceAllTopics()->call($owner, $repo, $params);
    }

    /** @return */
    public function getClones(string $owner, string $repo, string $per): CloneTraffic|array
    {
        return $this->operators->repos👷GetClones()->call($owner, $repo, $per);
    }

    /** @return Observable<Schema\ContentTraffic> */
    public function getTopPaths(string $owner, string $repo): iterable
    {
        return $this->operators->repos👷GetTopPaths()->call($owner, $repo);
    }

    /** @return Observable<Schema\ReferrerTraffic> */
    public function getTopReferrers(string $owner, string $repo): iterable
    {
        return $this->operators->repos👷GetTopReferrers()->call($owner, $repo);
    }

    /** @return */
    public function getViews(string $owner, string $repo, string $per): ViewTraffic|array
    {
        return $this->operators->repos👷GetViews()->call($owner, $repo, $per);
    }

    /** @return */
    public function transfer(string $owner, string $repo, array $params): MinimalRepository|array
    {
        return $this->operators->repos👷Transfer()->call($owner, $repo, $params);
    }

    /** @return array{code:int} */
    public function checkVulnerabilityAlerts(string $owner, string $repo): array
    {
        return $this->operators->repos👷CheckVulnerabilityAlerts()->call($owner, $repo);
    }

    /** @return array{code:int} */
    public function enableVulnerabilityAlerts(string $owner, string $repo): array
    {
        return $this->operators->repos👷EnableVulnerabilityAlerts()->call($owner, $repo);
    }

    /** @return array{code:int} */
    public function disableVulnerabilityAlerts(string $owner, string $repo): array
    {
        return $this->operators->repos👷DisableVulnerabilityAlerts()->call($owner, $repo);
    }

    /** @return array{code:int,location:string} */
    public function downloadZipballArchive(string $owner, string $repo, string $ref): array
    {
        return $this->operators->repos👷DownloadZipballArchive()->call($owner, $repo, $ref);
    }

    /** @return Observable<string> */
    public function downloadZipballArchiveStreaming(string $owner, string $repo, string $ref): iterable
    {
        return $this->operators->repos👷DownloadZipballArchiveStreaming()->call($owner, $repo, $ref);
    }

    /** @return Schema\Repository */
    public function createUsingTemplate(string $templateOwner, string $templateRepo, array $params): Repository|array
    {
        return $this->operators->repos👷CreateUsingTemplate()->call($templateOwner, $templateRepo, $params);
    }

    /** @return Observable<Schema\MinimalRepository>|array{code:int} */
    public function listPublic(int $since): iterable
    {
        return $this->operators->repos👷ListPublic()->call($since);
    }

    /** @return Observable<Schema\Repository>|array{code:int} */
    public function listForAuthenticatedUser(string $direction, string $since, string $before, string $visibility, string $affiliation, string $type, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListForAuthenticatedUser()->call($direction, $since, $before, $visibility, $affiliation, $type, $sort, $perPage, $page);
    }

    /** @return Observable<Schema\Repository>|array{code:int} */
    public function listForAuthenticatedUserListing(string $direction, string $since, string $before, string $visibility, string $affiliation, string $type, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListForAuthenticatedUserListing()->call($direction, $since, $before, $visibility, $affiliation, $type, $sort, $perPage, $page);
    }

    /** @return Schema\Repository|array{code:int} */
    public function createForAuthenticatedUser(array $params): Repository|array
    {
        return $this->operators->repos👷CreateForAuthenticatedUser()->call($params);
    }

    /** @return Observable<Schema\RepositoryInvitation>|array{code:int} */
    public function listInvitationsForAuthenticatedUser(int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListInvitationsForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return Observable<Schema\RepositoryInvitation>|array{code:int} */
    public function listInvitationsForAuthenticatedUserListing(int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListInvitationsForAuthenticatedUserListing()->call($perPage, $page);
    }

    /** @return array{code:int} */
    public function declineInvitationForAuthenticatedUser(int $invitationId): array
    {
        return $this->operators->repos👷DeclineInvitationForAuthenticatedUser()->call($invitationId);
    }

    /** @return array{code:int} */
    public function acceptInvitationForAuthenticatedUser(int $invitationId): array
    {
        return $this->operators->repos👷AcceptInvitationForAuthenticatedUser()->call($invitationId);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listForUser(string $username, string $direction, string $type, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListForUser()->call($username, $direction, $type, $sort, $perPage, $page);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listForUserListing(string $username, string $direction, string $type, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListForUserListing()->call($username, $direction, $type, $sort, $perPage, $page);
    }
}
