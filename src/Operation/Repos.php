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
use ApiClients\Client\GitHub\Schema\RuleSuite;
use ApiClients\Client\GitHub\Schema\Status;
use ApiClients\Client\GitHub\Schema\StatusCheckPolicy;
use ApiClients\Client\GitHub\Schema\TagProtection;
use ApiClients\Client\GitHub\Schema\Topic;
use ApiClients\Client\GitHub\Schema\ViewTraffic;
use ApiClients\Client\GitHub\Schema\WebhookConfig;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Repos
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return iterable<int,Schema\MinimalRepository> */
    public function listForOrg(string $org, string $direction, string $type, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListForOrg()->call($org, $direction, $type, $sort, $perPage, $page);
    }

    /** @return iterable<int,Schema\MinimalRepository> */
    public function listForOrgListing(string $org, string $direction, string $type, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListForOrgListing()->call($org, $direction, $type, $sort, $perPage, $page);
    }

    public function createInOrg(string $org, array $params): Repository
    {
        return $this->operators->repos👷CreateInOrg()->call($org, $params);
    }

    /** @return iterable<int,Schema\RepositoryRuleset> */
    public function getOrgRulesets(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷GetOrgRulesets()->call($org, $perPage, $page);
    }

    /** @return iterable<int,Schema\RepositoryRuleset> */
    public function getOrgRulesetsListing(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷GetOrgRulesetsListing()->call($org, $perPage, $page);
    }

    public function createOrgRuleset(string $org, array $params): RepositoryRuleset
    {
        return $this->operators->repos👷CreateOrgRuleset()->call($org, $params);
    }

    /** @return iterable<int,Schema\RuleSuites> */
    public function getOrgRuleSuites(string $org, int $repositoryName, string $actorName, string $timePeriod, string $ruleSuiteResult, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷GetOrgRuleSuites()->call($org, $repositoryName, $actorName, $timePeriod, $ruleSuiteResult, $perPage, $page);
    }

    /** @return iterable<int,Schema\RuleSuites> */
    public function getOrgRuleSuitesListing(string $org, int $repositoryName, string $actorName, string $timePeriod, string $ruleSuiteResult, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷GetOrgRuleSuitesListing()->call($org, $repositoryName, $actorName, $timePeriod, $ruleSuiteResult, $perPage, $page);
    }

    public function getOrgRuleSuite(string $org, int $ruleSuiteId): RuleSuite
    {
        return $this->operators->repos👷GetOrgRuleSuite()->call($org, $ruleSuiteId);
    }

    public function getOrgRuleset(string $org, int $rulesetId): RepositoryRuleset
    {
        return $this->operators->repos👷GetOrgRuleset()->call($org, $rulesetId);
    }

    public function updateOrgRuleset(string $org, int $rulesetId, array $params): RepositoryRuleset
    {
        return $this->operators->repos👷UpdateOrgRuleset()->call($org, $rulesetId, $params);
    }

    public function deleteOrgRuleset(string $org, int $rulesetId): WithoutBody
    {
        return $this->operators->repos👷DeleteOrgRuleset()->call($org, $rulesetId);
    }

    public function get(string $owner, string $repo): FullRepository|BasicError
    {
        return $this->operators->repos👷Get()->call($owner, $repo);
    }

    public function delete(string $owner, string $repo): BasicError|WithoutBody
    {
        return $this->operators->repos👷Delete()->call($owner, $repo);
    }

    public function update(string $owner, string $repo, array $params): FullRepository|BasicError
    {
        return $this->operators->repos👷Update()->call($owner, $repo, $params);
    }

    /** @return iterable<int,Schema\Activity> */
    public function listActivities(string $owner, string $repo, string $before, string $after, string $ref, string $actor, string $timePeriod, string $activityType, string $direction, int $perPage): iterable
    {
        return $this->operators->repos👷ListActivities()->call($owner, $repo, $before, $after, $ref, $actor, $timePeriod, $activityType, $direction, $perPage);
    }

    /** @return iterable<int,Schema\Autolink> */
    public function listAutolinks(string $owner, string $repo, int $page): iterable
    {
        return $this->operators->repos👷ListAutolinks()->call($owner, $repo, $page);
    }

    public function createAutolink(string $owner, string $repo, array $params): Autolink
    {
        return $this->operators->repos👷CreateAutolink()->call($owner, $repo, $params);
    }

    public function getAutolink(string $owner, string $repo, int $autolinkId): Autolink
    {
        return $this->operators->repos👷GetAutolink()->call($owner, $repo, $autolinkId);
    }

    public function deleteAutolink(string $owner, string $repo, int $autolinkId): WithoutBody
    {
        return $this->operators->repos👷DeleteAutolink()->call($owner, $repo, $autolinkId);
    }

    public function checkAutomatedSecurityFixes(string $owner, string $repo): CheckAutomatedSecurityFixes|WithoutBody
    {
        return $this->operators->repos👷CheckAutomatedSecurityFixes()->call($owner, $repo);
    }

    public function enableAutomatedSecurityFixes(string $owner, string $repo): WithoutBody
    {
        return $this->operators->repos👷EnableAutomatedSecurityFixes()->call($owner, $repo);
    }

    public function disableAutomatedSecurityFixes(string $owner, string $repo): WithoutBody
    {
        return $this->operators->repos👷DisableAutomatedSecurityFixes()->call($owner, $repo);
    }

    /** @return iterable<int,Schema\ShortBranch> */
    public function listBranches(string $owner, string $repo, bool $protected, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListBranches()->call($owner, $repo, $protected, $perPage, $page);
    }

    /** @return iterable<int,Schema\ShortBranch> */
    public function listBranchesListing(string $owner, string $repo, bool $protected, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListBranchesListing()->call($owner, $repo, $protected, $perPage, $page);
    }

    public function getBranch(string $owner, string $repo, string $branch): BranchWithProtection|BasicError
    {
        return $this->operators->repos👷GetBranch()->call($owner, $repo, $branch);
    }

    public function getBranchProtection(string $owner, string $repo, string $branch): BranchProtection
    {
        return $this->operators->repos👷GetBranchProtection()->call($owner, $repo, $branch);
    }

    public function updateBranchProtection(string $owner, string $repo, string $branch, array $params): ProtectedBranch
    {
        return $this->operators->repos👷UpdateBranchProtection()->call($owner, $repo, $branch, $params);
    }

    public function deleteBranchProtection(string $owner, string $repo, string $branch): WithoutBody
    {
        return $this->operators->repos👷DeleteBranchProtection()->call($owner, $repo, $branch);
    }

    public function getAdminBranchProtection(string $owner, string $repo, string $branch): ProtectedBranchAdminEnforced
    {
        return $this->operators->repos👷GetAdminBranchProtection()->call($owner, $repo, $branch);
    }

    public function setAdminBranchProtection(string $owner, string $repo, string $branch): ProtectedBranchAdminEnforced
    {
        return $this->operators->repos👷SetAdminBranchProtection()->call($owner, $repo, $branch);
    }

    public function deleteAdminBranchProtection(string $owner, string $repo, string $branch): WithoutBody
    {
        return $this->operators->repos👷DeleteAdminBranchProtection()->call($owner, $repo, $branch);
    }

    public function getPullRequestReviewProtection(string $owner, string $repo, string $branch): ProtectedBranchPullRequestReview
    {
        return $this->operators->repos👷GetPullRequestReviewProtection()->call($owner, $repo, $branch);
    }

    public function deletePullRequestReviewProtection(string $owner, string $repo, string $branch): WithoutBody
    {
        return $this->operators->repos👷DeletePullRequestReviewProtection()->call($owner, $repo, $branch);
    }

    public function updatePullRequestReviewProtection(string $owner, string $repo, string $branch, array $params): ProtectedBranchPullRequestReview
    {
        return $this->operators->repos👷UpdatePullRequestReviewProtection()->call($owner, $repo, $branch, $params);
    }

    public function getCommitSignatureProtection(string $owner, string $repo, string $branch): ProtectedBranchAdminEnforced
    {
        return $this->operators->repos👷GetCommitSignatureProtection()->call($owner, $repo, $branch);
    }

    public function createCommitSignatureProtection(string $owner, string $repo, string $branch): ProtectedBranchAdminEnforced
    {
        return $this->operators->repos👷CreateCommitSignatureProtection()->call($owner, $repo, $branch);
    }

    public function deleteCommitSignatureProtection(string $owner, string $repo, string $branch): WithoutBody
    {
        return $this->operators->repos👷DeleteCommitSignatureProtection()->call($owner, $repo, $branch);
    }

    public function getStatusChecksProtection(string $owner, string $repo, string $branch): StatusCheckPolicy
    {
        return $this->operators->repos👷GetStatusChecksProtection()->call($owner, $repo, $branch);
    }

    public function removeStatusCheckProtection(string $owner, string $repo, string $branch): WithoutBody
    {
        return $this->operators->repos👷RemoveStatusCheckProtection()->call($owner, $repo, $branch);
    }

    public function updateStatusCheckProtection(string $owner, string $repo, string $branch, array $params): StatusCheckPolicy
    {
        return $this->operators->repos👷UpdateStatusCheckProtection()->call($owner, $repo, $branch, $params);
    }

    /** @return iterable<int,string> */
    public function getAllStatusCheckContexts(string $owner, string $repo, string $branch): iterable
    {
        return $this->operators->repos👷GetAllStatusCheckContexts()->call($owner, $repo, $branch);
    }

    /** @return iterable<int,string> */
    public function setStatusCheckContexts(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷SetStatusCheckContexts()->call($owner, $repo, $branch, $params);
    }

    /** @return iterable<int,string> */
    public function addStatusCheckContexts(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷AddStatusCheckContexts()->call($owner, $repo, $branch, $params);
    }

    /** @return iterable<int,string> */
    public function removeStatusCheckContexts(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷RemoveStatusCheckContexts()->call($owner, $repo, $branch, $params);
    }

    public function getAccessRestrictions(string $owner, string $repo, string $branch): BranchRestrictionPolicy
    {
        return $this->operators->repos👷GetAccessRestrictions()->call($owner, $repo, $branch);
    }

    public function deleteAccessRestrictions(string $owner, string $repo, string $branch): WithoutBody
    {
        return $this->operators->repos👷DeleteAccessRestrictions()->call($owner, $repo, $branch);
    }

    /** @return iterable<int,Schema\Integration> */
    public function getAppsWithAccessToProtectedBranch(string $owner, string $repo, string $branch): iterable
    {
        return $this->operators->repos👷GetAppsWithAccessToProtectedBranch()->call($owner, $repo, $branch);
    }

    /** @return iterable<int,Schema\Integration> */
    public function setAppAccessRestrictions(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷SetAppAccessRestrictions()->call($owner, $repo, $branch, $params);
    }

    /** @return iterable<int,Schema\Integration> */
    public function addAppAccessRestrictions(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷AddAppAccessRestrictions()->call($owner, $repo, $branch, $params);
    }

    /** @return iterable<int,Schema\Integration> */
    public function removeAppAccessRestrictions(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷RemoveAppAccessRestrictions()->call($owner, $repo, $branch, $params);
    }

    /** @return iterable<int,Schema\Team> */
    public function getTeamsWithAccessToProtectedBranch(string $owner, string $repo, string $branch): iterable
    {
        return $this->operators->repos👷GetTeamsWithAccessToProtectedBranch()->call($owner, $repo, $branch);
    }

    /** @return iterable<int,Schema\Team> */
    public function setTeamAccessRestrictions(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷SetTeamAccessRestrictions()->call($owner, $repo, $branch, $params);
    }

    /** @return iterable<int,Schema\Team> */
    public function addTeamAccessRestrictions(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷AddTeamAccessRestrictions()->call($owner, $repo, $branch, $params);
    }

    /** @return iterable<int,Schema\Team> */
    public function removeTeamAccessRestrictions(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷RemoveTeamAccessRestrictions()->call($owner, $repo, $branch, $params);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function getUsersWithAccessToProtectedBranch(string $owner, string $repo, string $branch): iterable
    {
        return $this->operators->repos👷GetUsersWithAccessToProtectedBranch()->call($owner, $repo, $branch);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function setUserAccessRestrictions(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷SetUserAccessRestrictions()->call($owner, $repo, $branch, $params);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function addUserAccessRestrictions(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷AddUserAccessRestrictions()->call($owner, $repo, $branch, $params);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function removeUserAccessRestrictions(string $owner, string $repo, string $branch, array $params): iterable
    {
        return $this->operators->repos👷RemoveUserAccessRestrictions()->call($owner, $repo, $branch, $params);
    }

    public function renameBranch(string $owner, string $repo, string $branch, array $params): BranchWithProtection
    {
        return $this->operators->repos👷RenameBranch()->call($owner, $repo, $branch, $params);
    }

    public function codeownersErrors(string $owner, string $repo, string $ref): CodeownersErrors|WithoutBody
    {
        return $this->operators->repos👷CodeownersErrors()->call($owner, $repo, $ref);
    }

    /** @return iterable<int,Schema\Collaborator> */
    public function listCollaborators(string $owner, string $repo, string $permission, string $affiliation, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListCollaborators()->call($owner, $repo, $permission, $affiliation, $perPage, $page);
    }

    /** @return iterable<int,Schema\Collaborator> */
    public function listCollaboratorsListing(string $owner, string $repo, string $permission, string $affiliation, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListCollaboratorsListing()->call($owner, $repo, $permission, $affiliation, $perPage, $page);
    }

    public function checkCollaborator(string $owner, string $repo, string $username): WithoutBody
    {
        return $this->operators->repos👷CheckCollaborator()->call($owner, $repo, $username);
    }

    public function addCollaborator(string $owner, string $repo, string $username, array $params): RepositoryInvitation|WithoutBody
    {
        return $this->operators->repos👷AddCollaborator()->call($owner, $repo, $username, $params);
    }

    public function removeCollaborator(string $owner, string $repo, string $username): WithoutBody
    {
        return $this->operators->repos👷RemoveCollaborator()->call($owner, $repo, $username);
    }

    public function getCollaboratorPermissionLevel(string $owner, string $repo, string $username): RepositoryCollaboratorPermission
    {
        return $this->operators->repos👷GetCollaboratorPermissionLevel()->call($owner, $repo, $username);
    }

    /** @return iterable<int,Schema\CommitComment> */
    public function listCommitCommentsForRepo(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListCommitCommentsForRepo()->call($owner, $repo, $perPage, $page);
    }

    /** @return iterable<int,Schema\CommitComment> */
    public function listCommitCommentsForRepoListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListCommitCommentsForRepoListing()->call($owner, $repo, $perPage, $page);
    }

    public function getCommitComment(string $owner, string $repo, int $commentId): CommitComment
    {
        return $this->operators->repos👷GetCommitComment()->call($owner, $repo, $commentId);
    }

    public function deleteCommitComment(string $owner, string $repo, int $commentId): WithoutBody
    {
        return $this->operators->repos👷DeleteCommitComment()->call($owner, $repo, $commentId);
    }

    public function updateCommitComment(string $owner, string $repo, int $commentId, array $params): CommitComment
    {
        return $this->operators->repos👷UpdateCommitComment()->call($owner, $repo, $commentId, $params);
    }

    /** @return iterable<int,Schema\Commit> */
    public function listCommits(string $owner, string $repo, string $sha, string $path, string $author, string $committer, string $since, string $until, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListCommits()->call($owner, $repo, $sha, $path, $author, $committer, $since, $until, $perPage, $page);
    }

    /** @return iterable<int,Schema\Commit> */
    public function listCommitsListing(string $owner, string $repo, string $sha, string $path, string $author, string $committer, string $since, string $until, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListCommitsListing()->call($owner, $repo, $sha, $path, $author, $committer, $since, $until, $perPage, $page);
    }

    /** @return iterable<int,Schema\BranchShort> */
    public function listBranchesForHeadCommit(string $owner, string $repo, string $commitSha): iterable
    {
        return $this->operators->repos👷ListBranchesForHeadCommit()->call($owner, $repo, $commitSha);
    }

    /** @return iterable<int,Schema\CommitComment> */
    public function listCommentsForCommit(string $owner, string $repo, string $commitSha, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListCommentsForCommit()->call($owner, $repo, $commitSha, $perPage, $page);
    }

    /** @return iterable<int,Schema\CommitComment> */
    public function listCommentsForCommitListing(string $owner, string $repo, string $commitSha, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListCommentsForCommitListing()->call($owner, $repo, $commitSha, $perPage, $page);
    }

    public function createCommitComment(string $owner, string $repo, string $commitSha, array $params): CommitComment
    {
        return $this->operators->repos👷CreateCommitComment()->call($owner, $repo, $commitSha, $params);
    }

    /** @return iterable<int,Schema\PullRequestSimple> */
    public function listPullRequestsAssociatedWithCommit(string $owner, string $repo, string $commitSha, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListPullRequestsAssociatedWithCommit()->call($owner, $repo, $commitSha, $perPage, $page);
    }

    /** @return iterable<int,Schema\PullRequestSimple> */
    public function listPullRequestsAssociatedWithCommitListing(string $owner, string $repo, string $commitSha, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListPullRequestsAssociatedWithCommitListing()->call($owner, $repo, $commitSha, $perPage, $page);
    }

    public function getCommit(string $owner, string $repo, string $ref, int $page, int $perPage): Commit
    {
        return $this->operators->repos👷GetCommit()->call($owner, $repo, $ref, $page, $perPage);
    }

    public function getCombinedStatusForRef(string $owner, string $repo, string $ref, int $perPage, int $page): CombinedCommitStatus
    {
        return $this->operators->repos👷GetCombinedStatusForRef()->call($owner, $repo, $ref, $perPage, $page);
    }

    /** @return iterable<int,Schema\Status>|Schema\BasicError */
    public function listCommitStatusesForRef(string $owner, string $repo, string $ref, int $perPage, int $page): iterable|BasicError
    {
        return $this->operators->repos👷ListCommitStatusesForRef()->call($owner, $repo, $ref, $perPage, $page);
    }

    /** @return iterable<int,Schema\Status>|Schema\BasicError */
    public function listCommitStatusesForRefListing(string $owner, string $repo, string $ref, int $perPage, int $page): iterable|BasicError
    {
        return $this->operators->repos👷ListCommitStatusesForRefListing()->call($owner, $repo, $ref, $perPage, $page);
    }

    public function getCommunityProfileMetrics(string $owner, string $repo): CommunityProfile
    {
        return $this->operators->repos👷GetCommunityProfileMetrics()->call($owner, $repo);
    }

    public function compareCommits(string $owner, string $repo, string $basehead, int $page, int $perPage): CommitComparison
    {
        return $this->operators->repos👷CompareCommits()->call($owner, $repo, $basehead, $page, $perPage);
    }

    public function getContent(string $owner, string $repo, string $path, string $ref): ContentDirectory|ContentFile|ContentSymlink|ContentSubmodule|WithoutBody
    {
        return $this->operators->repos👷GetContent()->call($owner, $repo, $path, $ref);
    }

    public function createOrUpdateFileContents(string $owner, string $repo, string $path, array $params): FileCommit
    {
        return $this->operators->repos👷CreateOrUpdateFileContents()->call($owner, $repo, $path, $params);
    }

    public function deleteFile(string $owner, string $repo, string $path, array $params): FileCommit
    {
        return $this->operators->repos👷DeleteFile()->call($owner, $repo, $path, $params);
    }

    /** @return iterable<int,Schema\Contributor>|WithoutBody */
    public function listContributors(string $owner, string $repo, string $anon, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->repos👷ListContributors()->call($owner, $repo, $anon, $perPage, $page);
    }

    /** @return iterable<int,Schema\Contributor>|WithoutBody */
    public function listContributorsListing(string $owner, string $repo, string $anon, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->repos👷ListContributorsListing()->call($owner, $repo, $anon, $perPage, $page);
    }

    /** @return iterable<int,Schema\Deployment> */
    public function listDeployments(string $owner, string $repo, string $sha, string $ref, string $task, string|null $environment, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListDeployments()->call($owner, $repo, $sha, $ref, $task, $environment, $perPage, $page);
    }

    /** @return iterable<int,Schema\Deployment> */
    public function listDeploymentsListing(string $owner, string $repo, string $sha, string $ref, string $task, string|null $environment, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListDeploymentsListing()->call($owner, $repo, $sha, $ref, $task, $environment, $perPage, $page);
    }

    public function createDeployment(string $owner, string $repo, array $params): Deployment|Json|WithoutBody
    {
        return $this->operators->repos👷CreateDeployment()->call($owner, $repo, $params);
    }

    public function getDeployment(string $owner, string $repo, int $deploymentId): Deployment
    {
        return $this->operators->repos👷GetDeployment()->call($owner, $repo, $deploymentId);
    }

    public function deleteDeployment(string $owner, string $repo, int $deploymentId): WithoutBody
    {
        return $this->operators->repos👷DeleteDeployment()->call($owner, $repo, $deploymentId);
    }

    /** @return iterable<int,Schema\DeploymentStatus> */
    public function listDeploymentStatuses(string $owner, string $repo, int $deploymentId, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListDeploymentStatuses()->call($owner, $repo, $deploymentId, $perPage, $page);
    }

    /** @return iterable<int,Schema\DeploymentStatus> */
    public function listDeploymentStatusesListing(string $owner, string $repo, int $deploymentId, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListDeploymentStatusesListing()->call($owner, $repo, $deploymentId, $perPage, $page);
    }

    public function createDeploymentStatus(string $owner, string $repo, int $deploymentId, array $params): DeploymentStatus
    {
        return $this->operators->repos👷CreateDeploymentStatus()->call($owner, $repo, $deploymentId, $params);
    }

    public function getDeploymentStatus(string $owner, string $repo, int $deploymentId, int $statusId): DeploymentStatus
    {
        return $this->operators->repos👷GetDeploymentStatus()->call($owner, $repo, $deploymentId, $statusId);
    }

    public function createDispatchEvent(string $owner, string $repo, array $params): WithoutBody
    {
        return $this->operators->repos👷CreateDispatchEvent()->call($owner, $repo, $params);
    }

    public function getAllEnvironments(string $owner, string $repo, int $perPage, int $page): Ok
    {
        return $this->operators->repos👷GetAllEnvironments()->call($owner, $repo, $perPage, $page);
    }

    public function getEnvironment(string $owner, string $repo, string $environmentName): Environment
    {
        return $this->operators->repos👷GetEnvironment()->call($owner, $repo, $environmentName);
    }

    public function createOrUpdateEnvironment(string $owner, string $repo, string $environmentName, array $params): Environment
    {
        return $this->operators->repos👷CreateOrUpdateEnvironment()->call($owner, $repo, $environmentName, $params);
    }

    public function deleteAnEnvironment(string $owner, string $repo, string $environmentName): WithoutBody
    {
        return $this->operators->repos👷DeleteAnEnvironment()->call($owner, $repo, $environmentName);
    }

    public function listDeploymentBranchPolicies(string $owner, string $repo, string $environmentName, int $perPage, int $page): \ApiClients\Client\GitHub\Schema\Operations\Repos\ListDeploymentBranchPolicies\Response\ApplicationJson\Ok
    {
        return $this->operators->repos👷ListDeploymentBranchPolicies()->call($owner, $repo, $environmentName, $perPage, $page);
    }

    public function createDeploymentBranchPolicy(string $owner, string $repo, string $environmentName, array $params): DeploymentBranchPolicy|WithoutBody
    {
        return $this->operators->repos👷CreateDeploymentBranchPolicy()->call($owner, $repo, $environmentName, $params);
    }

    public function getDeploymentBranchPolicy(string $owner, string $repo, string $environmentName, int $branchPolicyId): DeploymentBranchPolicy
    {
        return $this->operators->repos👷GetDeploymentBranchPolicy()->call($owner, $repo, $environmentName, $branchPolicyId);
    }

    public function updateDeploymentBranchPolicy(string $owner, string $repo, string $environmentName, int $branchPolicyId, array $params): DeploymentBranchPolicy
    {
        return $this->operators->repos👷UpdateDeploymentBranchPolicy()->call($owner, $repo, $environmentName, $branchPolicyId, $params);
    }

    public function deleteDeploymentBranchPolicy(string $owner, string $repo, string $environmentName, int $branchPolicyId): WithoutBody
    {
        return $this->operators->repos👷DeleteDeploymentBranchPolicy()->call($owner, $repo, $environmentName, $branchPolicyId);
    }

    public function getAllDeploymentProtectionRules(string $environmentName, string $repo, string $owner): \ApiClients\Client\GitHub\Schema\Operations\Repos\GetAllDeploymentProtectionRules\Response\ApplicationJson\Ok
    {
        return $this->operators->repos👷GetAllDeploymentProtectionRules()->call($environmentName, $repo, $owner);
    }

    public function createDeploymentProtectionRule(string $environmentName, string $repo, string $owner, array $params): DeploymentProtectionRule
    {
        return $this->operators->repos👷CreateDeploymentProtectionRule()->call($environmentName, $repo, $owner, $params);
    }

    public function listCustomDeploymentRuleIntegrations(string $environmentName, string $repo, string $owner, int $page, int $perPage): \ApiClients\Client\GitHub\Schema\Operations\Repos\ListCustomDeploymentRuleIntegrations\Response\ApplicationJson\Ok
    {
        return $this->operators->repos👷ListCustomDeploymentRuleIntegrations()->call($environmentName, $repo, $owner, $page, $perPage);
    }

    public function getCustomDeploymentProtectionRule(string $owner, string $repo, string $environmentName, int $protectionRuleId): DeploymentProtectionRule
    {
        return $this->operators->repos👷GetCustomDeploymentProtectionRule()->call($owner, $repo, $environmentName, $protectionRuleId);
    }

    public function disableDeploymentProtectionRule(string $environmentName, string $repo, string $owner, int $protectionRuleId): WithoutBody
    {
        return $this->operators->repos👷DisableDeploymentProtectionRule()->call($environmentName, $repo, $owner, $protectionRuleId);
    }

    /** @return iterable<int,Schema\MinimalRepository> */
    public function listForks(string $owner, string $repo, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListForks()->call($owner, $repo, $sort, $perPage, $page);
    }

    /** @return iterable<int,Schema\MinimalRepository> */
    public function listForksListing(string $owner, string $repo, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListForksListing()->call($owner, $repo, $sort, $perPage, $page);
    }

    public function createFork(string $owner, string $repo, array $params): FullRepository
    {
        return $this->operators->repos👷CreateFork()->call($owner, $repo, $params);
    }

    /** @return iterable<int,Schema\Hook> */
    public function listWebhooks(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListWebhooks()->call($owner, $repo, $perPage, $page);
    }

    /** @return iterable<int,Schema\Hook> */
    public function listWebhooksListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListWebhooksListing()->call($owner, $repo, $perPage, $page);
    }

    public function createWebhook(string $owner, string $repo, array $params): Hook
    {
        return $this->operators->repos👷CreateWebhook()->call($owner, $repo, $params);
    }

    public function getWebhook(string $owner, string $repo, int $hookId): Hook
    {
        return $this->operators->repos👷GetWebhook()->call($owner, $repo, $hookId);
    }

    public function deleteWebhook(string $owner, string $repo, int $hookId): WithoutBody
    {
        return $this->operators->repos👷DeleteWebhook()->call($owner, $repo, $hookId);
    }

    public function updateWebhook(string $owner, string $repo, int $hookId, array $params): Hook
    {
        return $this->operators->repos👷UpdateWebhook()->call($owner, $repo, $hookId, $params);
    }

    public function getWebhookConfigForRepo(string $owner, string $repo, int $hookId): WebhookConfig
    {
        return $this->operators->repos👷GetWebhookConfigForRepo()->call($owner, $repo, $hookId);
    }

    public function updateWebhookConfigForRepo(string $owner, string $repo, int $hookId, array $params): WebhookConfig
    {
        return $this->operators->repos👷UpdateWebhookConfigForRepo()->call($owner, $repo, $hookId, $params);
    }

    /** @return iterable<int,Schema\HookDeliveryItem> */
    public function listWebhookDeliveries(string $owner, string $repo, int $hookId, string $cursor, bool $redelivery, int $perPage): iterable
    {
        return $this->operators->repos👷ListWebhookDeliveries()->call($owner, $repo, $hookId, $cursor, $redelivery, $perPage);
    }

    public function getWebhookDelivery(string $owner, string $repo, int $hookId, int $deliveryId): HookDelivery
    {
        return $this->operators->repos👷GetWebhookDelivery()->call($owner, $repo, $hookId, $deliveryId);
    }

    public function redeliverWebhookDelivery(string $owner, string $repo, int $hookId, int $deliveryId): \ApiClients\Client\GitHub\Schema\Operations\Repos\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json
    {
        return $this->operators->repos👷RedeliverWebhookDelivery()->call($owner, $repo, $hookId, $deliveryId);
    }

    public function pingWebhook(string $owner, string $repo, int $hookId): WithoutBody
    {
        return $this->operators->repos👷PingWebhook()->call($owner, $repo, $hookId);
    }

    public function testPushWebhook(string $owner, string $repo, int $hookId): WithoutBody
    {
        return $this->operators->repos👷TestPushWebhook()->call($owner, $repo, $hookId);
    }

    /** @return iterable<int,Schema\RepositoryInvitation> */
    public function listInvitations(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListInvitations()->call($owner, $repo, $perPage, $page);
    }

    /** @return iterable<int,Schema\RepositoryInvitation> */
    public function listInvitationsListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListInvitationsListing()->call($owner, $repo, $perPage, $page);
    }

    public function deleteInvitation(string $owner, string $repo, int $invitationId): WithoutBody
    {
        return $this->operators->repos👷DeleteInvitation()->call($owner, $repo, $invitationId);
    }

    public function updateInvitation(string $owner, string $repo, int $invitationId, array $params): RepositoryInvitation
    {
        return $this->operators->repos👷UpdateInvitation()->call($owner, $repo, $invitationId, $params);
    }

    /** @return iterable<int,Schema\DeployKey> */
    public function listDeployKeys(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListDeployKeys()->call($owner, $repo, $perPage, $page);
    }

    /** @return iterable<int,Schema\DeployKey> */
    public function listDeployKeysListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListDeployKeysListing()->call($owner, $repo, $perPage, $page);
    }

    public function createDeployKey(string $owner, string $repo, array $params): DeployKey
    {
        return $this->operators->repos👷CreateDeployKey()->call($owner, $repo, $params);
    }

    public function getDeployKey(string $owner, string $repo, int $keyId): DeployKey
    {
        return $this->operators->repos👷GetDeployKey()->call($owner, $repo, $keyId);
    }

    public function deleteDeployKey(string $owner, string $repo, int $keyId): WithoutBody
    {
        return $this->operators->repos👷DeleteDeployKey()->call($owner, $repo, $keyId);
    }

    public function listLanguages(string $owner, string $repo): Language
    {
        return $this->operators->repos👷ListLanguages()->call($owner, $repo);
    }

    public function mergeUpstream(string $owner, string $repo, array $params): MergedUpstream|WithoutBody
    {
        return $this->operators->repos👷MergeUpstream()->call($owner, $repo, $params);
    }

    public function merge(string $owner, string $repo, array $params): Commit|WithoutBody
    {
        return $this->operators->repos👷Merge()->call($owner, $repo, $params);
    }

    public function getPages(string $owner, string $repo): Page
    {
        return $this->operators->repos👷GetPages()->call($owner, $repo);
    }

    public function updateInformationAboutPagesSite(string $owner, string $repo, array $params): WithoutBody
    {
        return $this->operators->repos👷UpdateInformationAboutPagesSite()->call($owner, $repo, $params);
    }

    public function createPagesSite(string $owner, string $repo, array $params): Page
    {
        return $this->operators->repos👷CreatePagesSite()->call($owner, $repo, $params);
    }

    public function deletePagesSite(string $owner, string $repo): WithoutBody
    {
        return $this->operators->repos👷DeletePagesSite()->call($owner, $repo);
    }

    /** @return iterable<int,Schema\PageBuild> */
    public function listPagesBuilds(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListPagesBuilds()->call($owner, $repo, $perPage, $page);
    }

    /** @return iterable<int,Schema\PageBuild> */
    public function listPagesBuildsListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListPagesBuildsListing()->call($owner, $repo, $perPage, $page);
    }

    public function requestPagesBuild(string $owner, string $repo): PageBuildStatus
    {
        return $this->operators->repos👷RequestPagesBuild()->call($owner, $repo);
    }

    public function getLatestPagesBuild(string $owner, string $repo): PageBuild
    {
        return $this->operators->repos👷GetLatestPagesBuild()->call($owner, $repo);
    }

    public function getPagesBuild(string $owner, string $repo, int $buildId): PageBuild
    {
        return $this->operators->repos👷GetPagesBuild()->call($owner, $repo, $buildId);
    }

    public function createPagesDeployment(string $owner, string $repo, array $params): PageDeployment
    {
        return $this->operators->repos👷CreatePagesDeployment()->call($owner, $repo, $params);
    }

    public function getPagesHealthCheck(string $owner, string $repo): PagesHealthCheck|EmptyObject|WithoutBody
    {
        return $this->operators->repos👷GetPagesHealthCheck()->call($owner, $repo);
    }

    public function enablePrivateVulnerabilityReporting(string $owner, string $repo): WithoutBody
    {
        return $this->operators->repos👷EnablePrivateVulnerabilityReporting()->call($owner, $repo);
    }

    public function disablePrivateVulnerabilityReporting(string $owner, string $repo): WithoutBody
    {
        return $this->operators->repos👷DisablePrivateVulnerabilityReporting()->call($owner, $repo);
    }

    /** @return iterable<int,Schema\CustomPropertyValue> */
    public function getCustomPropertiesValues(string $owner, string $repo): iterable
    {
        return $this->operators->repos👷GetCustomPropertiesValues()->call($owner, $repo);
    }

    public function getReadme(string $owner, string $repo, string $ref): ContentFile
    {
        return $this->operators->repos👷GetReadme()->call($owner, $repo, $ref);
    }

    public function getReadmeInDirectory(string $owner, string $repo, string $dir, string $ref): ContentFile
    {
        return $this->operators->repos👷GetReadmeInDirectory()->call($owner, $repo, $dir, $ref);
    }

    /** @return iterable<int,Schema\Release> */
    public function listReleases(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListReleases()->call($owner, $repo, $perPage, $page);
    }

    /** @return iterable<int,Schema\Release> */
    public function listReleasesListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListReleasesListing()->call($owner, $repo, $perPage, $page);
    }

    public function createRelease(string $owner, string $repo, array $params): Release
    {
        return $this->operators->repos👷CreateRelease()->call($owner, $repo, $params);
    }

    public function getReleaseAsset(string $owner, string $repo, int $assetId): ReleaseAsset|WithoutBody
    {
        return $this->operators->repos👷GetReleaseAsset()->call($owner, $repo, $assetId);
    }

    public function deleteReleaseAsset(string $owner, string $repo, int $assetId): WithoutBody
    {
        return $this->operators->repos👷DeleteReleaseAsset()->call($owner, $repo, $assetId);
    }

    public function updateReleaseAsset(string $owner, string $repo, int $assetId, array $params): ReleaseAsset
    {
        return $this->operators->repos👷UpdateReleaseAsset()->call($owner, $repo, $assetId, $params);
    }

    public function generateReleaseNotes(string $owner, string $repo, array $params): ReleaseNotesContent
    {
        return $this->operators->repos👷GenerateReleaseNotes()->call($owner, $repo, $params);
    }

    public function getLatestRelease(string $owner, string $repo): Release
    {
        return $this->operators->repos👷GetLatestRelease()->call($owner, $repo);
    }

    public function getReleaseByTag(string $owner, string $repo, string $tag): Release
    {
        return $this->operators->repos👷GetReleaseByTag()->call($owner, $repo, $tag);
    }

    public function getRelease(string $owner, string $repo, int $releaseId): Release|WithoutBody
    {
        return $this->operators->repos👷GetRelease()->call($owner, $repo, $releaseId);
    }

    public function deleteRelease(string $owner, string $repo, int $releaseId): WithoutBody
    {
        return $this->operators->repos👷DeleteRelease()->call($owner, $repo, $releaseId);
    }

    public function updateRelease(string $owner, string $repo, int $releaseId, array $params): Release
    {
        return $this->operators->repos👷UpdateRelease()->call($owner, $repo, $releaseId, $params);
    }

    /** @return iterable<int,Schema\ReleaseAsset> */
    public function listReleaseAssets(string $owner, string $repo, int $releaseId, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListReleaseAssets()->call($owner, $repo, $releaseId, $perPage, $page);
    }

    /** @return iterable<int,Schema\ReleaseAsset> */
    public function listReleaseAssetsListing(string $owner, string $repo, int $releaseId, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListReleaseAssetsListing()->call($owner, $repo, $releaseId, $perPage, $page);
    }

    public function uploadReleaseAsset(string $owner, string $repo, int $releaseId, string $name, string $label, array $params): ReleaseAsset|WithoutBody
    {
        return $this->operators->repos👷UploadReleaseAsset()->call($owner, $repo, $releaseId, $name, $label, $params);
    }

    /** @return iterable<int,Schema\RepositoryRuleCreation|Schema\RepositoryRuleUpdate|Schema\RepositoryRuleDeletion|Schema\RepositoryRuleRequiredLinearHistory|Schema\RepositoryRuleRequiredDeployments|Schema\RepositoryRuleRequiredSignatures|Schema\RepositoryRulePullRequest|Schema\RepositoryRuleRequiredStatusChecks|Schema\RepositoryRuleNonFastForward|Schema\RepositoryRuleCommitMessagePattern|Schema\RepositoryRuleCommitAuthorEmailPattern|Schema\RepositoryRuleCommitterEmailPattern|Schema\RepositoryRuleBranchNamePattern|Schema\RepositoryRuleTagNamePattern|Schema\RepositoryRuleWorkflows> */
    public function getBranchRules(string $owner, string $repo, string $branch, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷GetBranchRules()->call($owner, $repo, $branch, $perPage, $page);
    }

    /** @return iterable<int,Schema\RepositoryRuleCreation|Schema\RepositoryRuleUpdate|Schema\RepositoryRuleDeletion|Schema\RepositoryRuleRequiredLinearHistory|Schema\RepositoryRuleRequiredDeployments|Schema\RepositoryRuleRequiredSignatures|Schema\RepositoryRulePullRequest|Schema\RepositoryRuleRequiredStatusChecks|Schema\RepositoryRuleNonFastForward|Schema\RepositoryRuleCommitMessagePattern|Schema\RepositoryRuleCommitAuthorEmailPattern|Schema\RepositoryRuleCommitterEmailPattern|Schema\RepositoryRuleBranchNamePattern|Schema\RepositoryRuleTagNamePattern|Schema\RepositoryRuleWorkflows> */
    public function getBranchRulesListing(string $owner, string $repo, string $branch, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷GetBranchRulesListing()->call($owner, $repo, $branch, $perPage, $page);
    }

    /** @return iterable<int,Schema\RepositoryRuleset> */
    public function getRepoRulesets(string $owner, string $repo, int $perPage, int $page, bool $includesParents): iterable
    {
        return $this->operators->repos👷GetRepoRulesets()->call($owner, $repo, $perPage, $page, $includesParents);
    }

    /** @return iterable<int,Schema\RepositoryRuleset> */
    public function getRepoRulesetsListing(string $owner, string $repo, int $perPage, int $page, bool $includesParents): iterable
    {
        return $this->operators->repos👷GetRepoRulesetsListing()->call($owner, $repo, $perPage, $page, $includesParents);
    }

    public function createRepoRuleset(string $owner, string $repo, array $params): RepositoryRuleset
    {
        return $this->operators->repos👷CreateRepoRuleset()->call($owner, $repo, $params);
    }

    /** @return iterable<int,Schema\RuleSuites> */
    public function getRepoRuleSuites(string $owner, string $repo, string $ref, string $actorName, string $timePeriod, string $ruleSuiteResult, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷GetRepoRuleSuites()->call($owner, $repo, $ref, $actorName, $timePeriod, $ruleSuiteResult, $perPage, $page);
    }

    /** @return iterable<int,Schema\RuleSuites> */
    public function getRepoRuleSuitesListing(string $owner, string $repo, string $ref, string $actorName, string $timePeriod, string $ruleSuiteResult, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷GetRepoRuleSuitesListing()->call($owner, $repo, $ref, $actorName, $timePeriod, $ruleSuiteResult, $perPage, $page);
    }

    public function getRepoRuleSuite(string $owner, string $repo, int $ruleSuiteId): RuleSuite
    {
        return $this->operators->repos👷GetRepoRuleSuite()->call($owner, $repo, $ruleSuiteId);
    }

    public function getRepoRuleset(string $owner, string $repo, int $rulesetId, bool $includesParents): RepositoryRuleset
    {
        return $this->operators->repos👷GetRepoRuleset()->call($owner, $repo, $rulesetId, $includesParents);
    }

    public function updateRepoRuleset(string $owner, string $repo, int $rulesetId, array $params): RepositoryRuleset
    {
        return $this->operators->repos👷UpdateRepoRuleset()->call($owner, $repo, $rulesetId, $params);
    }

    public function deleteRepoRuleset(string $owner, string $repo, int $rulesetId): WithoutBody
    {
        return $this->operators->repos👷DeleteRepoRuleset()->call($owner, $repo, $rulesetId);
    }

    /** @return iterable<int,int>|Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted\Application\Json|WithoutBody */
    public function getCodeFrequencyStats(string $owner, string $repo): iterable|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetCodeFrequencyStats\Response\ApplicationJson\Accepted\Application\Json|WithoutBody
    {
        return $this->operators->repos👷GetCodeFrequencyStats()->call($owner, $repo);
    }

    /** @return iterable<int,Schema\CommitActivity>|Schema\Operations\Repos\GetCommitActivityStats\Response\ApplicationJson\Accepted\Application\Json|WithoutBody */
    public function getCommitActivityStats(string $owner, string $repo): iterable|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetCommitActivityStats\Response\ApplicationJson\Accepted\Application\Json|WithoutBody
    {
        return $this->operators->repos👷GetCommitActivityStats()->call($owner, $repo);
    }

    /** @return iterable<int,Schema\ContributorActivity>|Schema\Operations\Repos\GetContributorsStats\Response\ApplicationJson\Accepted\Application\Json|WithoutBody */
    public function getContributorsStats(string $owner, string $repo): iterable|\ApiClients\Client\GitHub\Schema\Operations\Repos\GetContributorsStats\Response\ApplicationJson\Accepted\Application\Json|WithoutBody
    {
        return $this->operators->repos👷GetContributorsStats()->call($owner, $repo);
    }

    public function getParticipationStats(string $owner, string $repo): ParticipationStats
    {
        return $this->operators->repos👷GetParticipationStats()->call($owner, $repo);
    }

    /** @return iterable<int,int>|WithoutBody */
    public function getPunchCardStats(string $owner, string $repo): iterable|WithoutBody
    {
        return $this->operators->repos👷GetPunchCardStats()->call($owner, $repo);
    }

    public function createCommitStatus(string $owner, string $repo, string $sha, array $params): Status
    {
        return $this->operators->repos👷CreateCommitStatus()->call($owner, $repo, $sha, $params);
    }

    /** @return iterable<int,Schema\Tag> */
    public function listTags(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListTags()->call($owner, $repo, $perPage, $page);
    }

    /** @return iterable<int,Schema\Tag> */
    public function listTagsListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListTagsListing()->call($owner, $repo, $perPage, $page);
    }

    /** @return iterable<int,Schema\TagProtection> */
    public function listTagProtection(string $owner, string $repo): iterable
    {
        return $this->operators->repos👷ListTagProtection()->call($owner, $repo);
    }

    public function createTagProtection(string $owner, string $repo, array $params): TagProtection
    {
        return $this->operators->repos👷CreateTagProtection()->call($owner, $repo, $params);
    }

    public function deleteTagProtection(string $owner, string $repo, int $tagProtectionId): WithoutBody
    {
        return $this->operators->repos👷DeleteTagProtection()->call($owner, $repo, $tagProtectionId);
    }

    public function downloadTarballArchive(string $owner, string $repo, string $ref): WithoutBody
    {
        return $this->operators->repos👷DownloadTarballArchive()->call($owner, $repo, $ref);
    }

    /** @return iterable<int,string> */
    public function downloadTarballArchiveStreaming(string $owner, string $repo, string $ref): iterable
    {
        return $this->operators->repos👷DownloadTarballArchiveStreaming()->call($owner, $repo, $ref);
    }

    /** @return iterable<int,Schema\Team> */
    public function listTeams(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListTeams()->call($owner, $repo, $perPage, $page);
    }

    /** @return iterable<int,Schema\Team> */
    public function listTeamsListing(string $owner, string $repo, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListTeamsListing()->call($owner, $repo, $perPage, $page);
    }

    public function getAllTopics(string $owner, string $repo, int $page, int $perPage): Topic
    {
        return $this->operators->repos👷GetAllTopics()->call($owner, $repo, $page, $perPage);
    }

    public function replaceAllTopics(string $owner, string $repo, array $params): Topic
    {
        return $this->operators->repos👷ReplaceAllTopics()->call($owner, $repo, $params);
    }

    public function getClones(string $owner, string $repo, string $per): CloneTraffic
    {
        return $this->operators->repos👷GetClones()->call($owner, $repo, $per);
    }

    /** @return iterable<int,Schema\ContentTraffic> */
    public function getTopPaths(string $owner, string $repo): iterable
    {
        return $this->operators->repos👷GetTopPaths()->call($owner, $repo);
    }

    /** @return iterable<int,Schema\ReferrerTraffic> */
    public function getTopReferrers(string $owner, string $repo): iterable
    {
        return $this->operators->repos👷GetTopReferrers()->call($owner, $repo);
    }

    public function getViews(string $owner, string $repo, string $per): ViewTraffic
    {
        return $this->operators->repos👷GetViews()->call($owner, $repo, $per);
    }

    public function transfer(string $owner, string $repo, array $params): MinimalRepository
    {
        return $this->operators->repos👷Transfer()->call($owner, $repo, $params);
    }

    public function checkVulnerabilityAlerts(string $owner, string $repo): WithoutBody
    {
        return $this->operators->repos👷CheckVulnerabilityAlerts()->call($owner, $repo);
    }

    public function enableVulnerabilityAlerts(string $owner, string $repo): WithoutBody
    {
        return $this->operators->repos👷EnableVulnerabilityAlerts()->call($owner, $repo);
    }

    public function disableVulnerabilityAlerts(string $owner, string $repo): WithoutBody
    {
        return $this->operators->repos👷DisableVulnerabilityAlerts()->call($owner, $repo);
    }

    public function downloadZipballArchive(string $owner, string $repo, string $ref): WithoutBody
    {
        return $this->operators->repos👷DownloadZipballArchive()->call($owner, $repo, $ref);
    }

    /** @return iterable<int,string> */
    public function downloadZipballArchiveStreaming(string $owner, string $repo, string $ref): iterable
    {
        return $this->operators->repos👷DownloadZipballArchiveStreaming()->call($owner, $repo, $ref);
    }

    public function createUsingTemplate(string $templateOwner, string $templateRepo, array $params): Repository
    {
        return $this->operators->repos👷CreateUsingTemplate()->call($templateOwner, $templateRepo, $params);
    }

    /** @return iterable<int,Schema\MinimalRepository>|WithoutBody */
    public function listPublic(int $since): iterable|WithoutBody
    {
        return $this->operators->repos👷ListPublic()->call($since);
    }

    /** @return iterable<int,Schema\Repository>|WithoutBody */
    public function listForAuthenticatedUser(string $direction, string $since, string $before, string $visibility, string $affiliation, string $type, string $sort, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->repos👷ListForAuthenticatedUser()->call($direction, $since, $before, $visibility, $affiliation, $type, $sort, $perPage, $page);
    }

    /** @return iterable<int,Schema\Repository>|WithoutBody */
    public function listForAuthenticatedUserListing(string $direction, string $since, string $before, string $visibility, string $affiliation, string $type, string $sort, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->repos👷ListForAuthenticatedUserListing()->call($direction, $since, $before, $visibility, $affiliation, $type, $sort, $perPage, $page);
    }

    public function createForAuthenticatedUser(array $params): Repository|WithoutBody
    {
        return $this->operators->repos👷CreateForAuthenticatedUser()->call($params);
    }

    /** @return iterable<int,Schema\RepositoryInvitation>|WithoutBody */
    public function listInvitationsForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->repos👷ListInvitationsForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\RepositoryInvitation>|WithoutBody */
    public function listInvitationsForAuthenticatedUserListing(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->repos👷ListInvitationsForAuthenticatedUserListing()->call($perPage, $page);
    }

    public function declineInvitationForAuthenticatedUser(int $invitationId): WithoutBody
    {
        return $this->operators->repos👷DeclineInvitationForAuthenticatedUser()->call($invitationId);
    }

    public function acceptInvitationForAuthenticatedUser(int $invitationId): WithoutBody
    {
        return $this->operators->repos👷AcceptInvitationForAuthenticatedUser()->call($invitationId);
    }

    /** @return iterable<int,Schema\MinimalRepository> */
    public function listForUser(string $username, string $direction, string $type, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListForUser()->call($username, $direction, $type, $sort, $perPage, $page);
    }

    /** @return iterable<int,Schema\MinimalRepository> */
    public function listForUserListing(string $username, string $direction, string $type, string $sort, int $perPage, int $page): iterable
    {
        return $this->operators->repos👷ListForUserListing()->call($username, $direction, $type, $sort, $perPage, $page);
    }
}
