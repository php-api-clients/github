<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation;

final class Repos
{
    public function listForOrg_($org, $type, string $sort = 'created', $direction, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListForOrg_($org, $type, $sort, $direction, $per_page, $page);
    }
    public function createInOrg_($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateInOrg_($org);
    }
    public function get_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\Get_($owner, $repo);
    }
    public function delete_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\Delete_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\Delete_($owner, $repo);
    }
    public function update_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\Update_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\Update_($owner, $repo);
    }
    public function listBranches_($owner, $repo, $protected, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListBranches_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListBranches_($owner, $repo, $protected, $per_page, $page);
    }
    public function getBranch_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetBranch_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetBranch_($owner, $repo, $branch);
    }
    public function getBranchProtection_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetBranchProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetBranchProtection_($owner, $repo, $branch);
    }
    public function updateBranchProtection_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\UpdateBranchProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\UpdateBranchProtection_($owner, $repo, $branch);
    }
    public function deleteBranchProtection_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeleteBranchProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeleteBranchProtection_($owner, $repo, $branch);
    }
    public function getAdminBranchProtection_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetAdminBranchProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetAdminBranchProtection_($owner, $repo, $branch);
    }
    public function setAdminBranchProtection_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\SetAdminBranchProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\SetAdminBranchProtection_($owner, $repo, $branch);
    }
    public function deleteAdminBranchProtection_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeleteAdminBranchProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeleteAdminBranchProtection_($owner, $repo, $branch);
    }
    public function getPullRequestReviewProtection_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetPullRequestReviewProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetPullRequestReviewProtection_($owner, $repo, $branch);
    }
    public function deletePullRequestReviewProtection_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeletePullRequestReviewProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeletePullRequestReviewProtection_($owner, $repo, $branch);
    }
    public function updatePullRequestReviewProtection_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\UpdatePullRequestReviewProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\UpdatePullRequestReviewProtection_($owner, $repo, $branch);
    }
    public function getCommitSignatureProtection_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetCommitSignatureProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetCommitSignatureProtection_($owner, $repo, $branch);
    }
    public function createCommitSignatureProtection_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateCommitSignatureProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateCommitSignatureProtection_($owner, $repo, $branch);
    }
    public function deleteCommitSignatureProtection_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeleteCommitSignatureProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeleteCommitSignatureProtection_($owner, $repo, $branch);
    }
    public function getStatusChecksProtection_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetStatusChecksProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetStatusChecksProtection_($owner, $repo, $branch);
    }
    public function removeStatusCheckProtection_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\RemoveStatusCheckProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\RemoveStatusCheckProtection_($owner, $repo, $branch);
    }
    public function updateStatusCheckProtection_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\UpdateStatusCheckProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\UpdateStatusCheckProtection_($owner, $repo, $branch);
    }
    public function getAllStatusCheckContexts_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetAllStatusCheckContexts_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetAllStatusCheckContexts_($owner, $repo, $branch);
    }
    public function setStatusCheckContexts_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\SetStatusCheckContexts_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\SetStatusCheckContexts_($owner, $repo, $branch);
    }
    public function addStatusCheckContexts_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\AddStatusCheckContexts_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\AddStatusCheckContexts_($owner, $repo, $branch);
    }
    public function removeStatusCheckContexts_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\RemoveStatusCheckContexts_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\RemoveStatusCheckContexts_($owner, $repo, $branch);
    }
    public function getAccessRestrictions_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetAccessRestrictions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetAccessRestrictions_($owner, $repo, $branch);
    }
    public function deleteAccessRestrictions_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeleteAccessRestrictions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeleteAccessRestrictions_($owner, $repo, $branch);
    }
    public function getAppsWithAccessToProtectedBranch_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetAppsWithAccessToProtectedBranch_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetAppsWithAccessToProtectedBranch_($owner, $repo, $branch);
    }
    public function setAppAccessRestrictions_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\SetAppAccessRestrictions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\SetAppAccessRestrictions_($owner, $repo, $branch);
    }
    public function addAppAccessRestrictions_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\AddAppAccessRestrictions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\AddAppAccessRestrictions_($owner, $repo, $branch);
    }
    public function removeAppAccessRestrictions_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\RemoveAppAccessRestrictions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\RemoveAppAccessRestrictions_($owner, $repo, $branch);
    }
    public function getTeamsWithAccessToProtectedBranch_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetTeamsWithAccessToProtectedBranch_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetTeamsWithAccessToProtectedBranch_($owner, $repo, $branch);
    }
    public function setTeamAccessRestrictions_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\SetTeamAccessRestrictions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\SetTeamAccessRestrictions_($owner, $repo, $branch);
    }
    public function addTeamAccessRestrictions_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\AddTeamAccessRestrictions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\AddTeamAccessRestrictions_($owner, $repo, $branch);
    }
    public function removeTeamAccessRestrictions_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\RemoveTeamAccessRestrictions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\RemoveTeamAccessRestrictions_($owner, $repo, $branch);
    }
    public function getUsersWithAccessToProtectedBranch_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetUsersWithAccessToProtectedBranch_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetUsersWithAccessToProtectedBranch_($owner, $repo, $branch);
    }
    public function setUserAccessRestrictions_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\SetUserAccessRestrictions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\SetUserAccessRestrictions_($owner, $repo, $branch);
    }
    public function addUserAccessRestrictions_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\AddUserAccessRestrictions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\AddUserAccessRestrictions_($owner, $repo, $branch);
    }
    public function removeUserAccessRestrictions_($owner, $repo, $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\RemoveUserAccessRestrictions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\RemoveUserAccessRestrictions_($owner, $repo, $branch);
    }
    public function listCollaborators_($owner, $repo, string $affiliation = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListCollaborators_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListCollaborators_($owner, $repo, $affiliation, $per_page, $page);
    }
    public function checkCollaborator_($owner, $repo, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CheckCollaborator_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CheckCollaborator_($owner, $repo, $username);
    }
    public function addCollaborator_($owner, $repo, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\AddCollaborator_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\AddCollaborator_($owner, $repo, $username);
    }
    public function removeCollaborator_($owner, $repo, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\RemoveCollaborator_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\RemoveCollaborator_($owner, $repo, $username);
    }
    public function getCollaboratorPermissionLevel_($owner, $repo, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetCollaboratorPermissionLevel_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetCollaboratorPermissionLevel_($owner, $repo, $username);
    }
    public function listCommitCommentsForRepo_($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListCommitCommentsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListCommitCommentsForRepo_($owner, $repo, $per_page, $page);
    }
    public function getCommitComment_($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetCommitComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetCommitComment_($owner, $repo, $comment_id);
    }
    public function deleteCommitComment_($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeleteCommitComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeleteCommitComment_($owner, $repo, $comment_id);
    }
    public function updateCommitComment_($owner, $repo, $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\UpdateCommitComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\UpdateCommitComment_($owner, $repo, $comment_id);
    }
    public function listCommits_($owner, $repo, $sha, $path, $author, $since, $until, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListCommits_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListCommits_($owner, $repo, $sha, $path, $author, $since, $until, $per_page, $page);
    }
    public function listBranchesForHeadCommit_($owner, $repo, $commit_sha) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListBranchesForHeadCommit_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListBranchesForHeadCommit_($owner, $repo, $commit_sha);
    }
    public function listCommentsForCommit_($owner, $repo, $commit_sha, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListCommentsForCommit_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListCommentsForCommit_($owner, $repo, $commit_sha, $per_page, $page);
    }
    public function createCommitComment_($owner, $repo, $commit_sha) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateCommitComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateCommitComment_($owner, $repo, $commit_sha);
    }
    public function listPullRequestsAssociatedWithCommit_($owner, $repo, $commit_sha, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListPullRequestsAssociatedWithCommit_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListPullRequestsAssociatedWithCommit_($owner, $repo, $commit_sha, $per_page, $page);
    }
    public function getCommit_($owner, $repo, int $page = 1, int $per_page = 30, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetCommit_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetCommit_($owner, $repo, $page, $per_page, $ref);
    }
    public function getCombinedStatusForRef_($owner, $repo, $ref, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetCombinedStatusForRef_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetCombinedStatusForRef_($owner, $repo, $ref, $per_page, $page);
    }
    public function listCommitStatusesForRef_($owner, $repo, $ref, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListCommitStatusesForRef_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListCommitStatusesForRef_($owner, $repo, $ref, $per_page, $page);
    }
    public function compareCommits_($owner, $repo, $basehead) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CompareCommits_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CompareCommits_($owner, $repo, $basehead);
    }
    public function getContent_($owner, $repo, $path, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetContent_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetContent_($owner, $repo, $path, $ref);
    }
    public function createOrUpdateFileContents_($owner, $repo, $path) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateOrUpdateFileContents_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateOrUpdateFileContents_($owner, $repo, $path);
    }
    public function deleteFile_($owner, $repo, $path) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeleteFile_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeleteFile_($owner, $repo, $path);
    }
    public function listContributors_($owner, $repo, $anon, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListContributors_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListContributors_($owner, $repo, $anon, $per_page, $page);
    }
    public function listDeployments_($owner, $repo, string $sha = 'none', string $ref = 'none', string $task = 'none', string $environment = 'none', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListDeployments_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListDeployments_($owner, $repo, $sha, $ref, $task, $environment, $per_page, $page);
    }
    public function createDeployment_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateDeployment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateDeployment_($owner, $repo);
    }
    public function getDeployment_($owner, $repo, $deployment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetDeployment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetDeployment_($owner, $repo, $deployment_id);
    }
    public function listDeploymentStatuses_($owner, $repo, $deployment_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListDeploymentStatuses_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListDeploymentStatuses_($owner, $repo, $deployment_id, $per_page, $page);
    }
    public function createDeploymentStatus_($owner, $repo, $deployment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateDeploymentStatus_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateDeploymentStatus_($owner, $repo, $deployment_id);
    }
    public function getDeploymentStatus_($owner, $repo, $deployment_id, $status_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetDeploymentStatus_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetDeploymentStatus_($owner, $repo, $deployment_id, $status_id);
    }
    public function listForks_($owner, $repo, string $sort = 'newest', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListForks_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListForks_($owner, $repo, $sort, $per_page, $page);
    }
    public function createFork_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateFork_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateFork_($owner, $repo);
    }
    public function listWebhooks_($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListWebhooks_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListWebhooks_($owner, $repo, $per_page, $page);
    }
    public function createWebhook_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateWebhook_($owner, $repo);
    }
    public function getWebhook_($owner, $repo, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetWebhook_($owner, $repo, $hook_id);
    }
    public function deleteWebhook_($owner, $repo, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeleteWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeleteWebhook_($owner, $repo, $hook_id);
    }
    public function updateWebhook_($owner, $repo, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\UpdateWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\UpdateWebhook_($owner, $repo, $hook_id);
    }
    public function pingWebhook_($owner, $repo, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\PingWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\PingWebhook_($owner, $repo, $hook_id);
    }
    public function testPushWebhook_($owner, $repo, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\TestPushWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\TestPushWebhook_($owner, $repo, $hook_id);
    }
    public function listInvitations_($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListInvitations_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListInvitations_($owner, $repo, $per_page, $page);
    }
    public function deleteInvitation_($owner, $repo, $invitation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeleteInvitation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeleteInvitation_($owner, $repo, $invitation_id);
    }
    public function updateInvitation_($owner, $repo, $invitation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\UpdateInvitation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\UpdateInvitation_($owner, $repo, $invitation_id);
    }
    public function listDeployKeys_($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListDeployKeys_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListDeployKeys_($owner, $repo, $per_page, $page);
    }
    public function createDeployKey_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateDeployKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateDeployKey_($owner, $repo);
    }
    public function getDeployKey_($owner, $repo, $key_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetDeployKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetDeployKey_($owner, $repo, $key_id);
    }
    public function deleteDeployKey_($owner, $repo, $key_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeleteDeployKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeleteDeployKey_($owner, $repo, $key_id);
    }
    public function listLanguages_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListLanguages_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListLanguages_($owner, $repo);
    }
    public function merge_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\Merge_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\Merge_($owner, $repo);
    }
    public function getPages_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetPages_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetPages_($owner, $repo);
    }
    public function updateInformationAboutPagesSite_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\UpdateInformationAboutPagesSite_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\UpdateInformationAboutPagesSite_($owner, $repo);
    }
    public function createPagesSite_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreatePagesSite_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreatePagesSite_($owner, $repo);
    }
    public function deletePagesSite_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeletePagesSite_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeletePagesSite_($owner, $repo);
    }
    public function listPagesBuilds_($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListPagesBuilds_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListPagesBuilds_($owner, $repo, $per_page, $page);
    }
    public function requestPagesBuild_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\RequestPagesBuild_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\RequestPagesBuild_($owner, $repo);
    }
    public function getLatestPagesBuild_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetLatestPagesBuild_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetLatestPagesBuild_($owner, $repo);
    }
    public function getPagesBuild_($owner, $repo, $build_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetPagesBuild_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetPagesBuild_($owner, $repo, $build_id);
    }
    public function getReadme_($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetReadme_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetReadme_($owner, $repo, $ref);
    }
    public function getReadmeInDirectory_($owner, $repo, $dir, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetReadmeInDirectory_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetReadmeInDirectory_($owner, $repo, $dir, $ref);
    }
    public function listReleases_($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListReleases_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListReleases_($owner, $repo, $per_page, $page);
    }
    public function createRelease_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateRelease_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateRelease_($owner, $repo);
    }
    public function getReleaseAsset_($owner, $repo, $asset_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetReleaseAsset_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetReleaseAsset_($owner, $repo, $asset_id);
    }
    public function deleteReleaseAsset_($owner, $repo, $asset_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeleteReleaseAsset_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeleteReleaseAsset_($owner, $repo, $asset_id);
    }
    public function updateReleaseAsset_($owner, $repo, $asset_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\UpdateReleaseAsset_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\UpdateReleaseAsset_($owner, $repo, $asset_id);
    }
    public function getLatestRelease_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetLatestRelease_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetLatestRelease_($owner, $repo);
    }
    public function getReleaseByTag_($owner, $repo, $tag) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetReleaseByTag_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetReleaseByTag_($owner, $repo, $tag);
    }
    public function getRelease_($owner, $repo, $release_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetRelease_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetRelease_($owner, $repo, $release_id);
    }
    public function deleteRelease_($owner, $repo, $release_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeleteRelease_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeleteRelease_($owner, $repo, $release_id);
    }
    public function updateRelease_($owner, $repo, $release_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\UpdateRelease_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\UpdateRelease_($owner, $repo, $release_id);
    }
    public function listReleaseAssets_($owner, $repo, $release_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListReleaseAssets_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListReleaseAssets_($owner, $repo, $release_id, $per_page, $page);
    }
    public function uploadReleaseAsset_($owner, $repo, $release_id, $name, $label) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\UploadReleaseAsset_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\UploadReleaseAsset_($owner, $repo, $release_id, $name, $label);
    }
    public function getCodeFrequencyStats_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetCodeFrequencyStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetCodeFrequencyStats_($owner, $repo);
    }
    public function getCommitActivityStats_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetCommitActivityStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetCommitActivityStats_($owner, $repo);
    }
    public function getContributorsStats_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetContributorsStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetContributorsStats_($owner, $repo);
    }
    public function getParticipationStats_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetParticipationStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetParticipationStats_($owner, $repo);
    }
    public function getPunchCardStats_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetPunchCardStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetPunchCardStats_($owner, $repo);
    }
    public function createCommitStatus_($owner, $repo, $sha) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateCommitStatus_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateCommitStatus_($owner, $repo, $sha);
    }
    public function listTags_($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListTags_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListTags_($owner, $repo, $per_page, $page);
    }
    public function downloadTarballArchive_($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DownloadTarballArchive_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DownloadTarballArchive_($owner, $repo, $ref);
    }
    public function listTeams_($owner, $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListTeams_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListTeams_($owner, $repo, $per_page, $page);
    }
    public function getAllTopics_($owner, $repo, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetAllTopics_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\GetAllTopics_($owner, $repo, $page, $per_page);
    }
    public function replaceAllTopics_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ReplaceAllTopics_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ReplaceAllTopics_($owner, $repo);
    }
    public function transfer_($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\Transfer_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\Transfer_($owner, $repo);
    }
    public function downloadZipballArchive_($owner, $repo, $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DownloadZipballArchive_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DownloadZipballArchive_($owner, $repo, $ref);
    }
    public function createUsingTemplate_($template_owner, $template_repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateUsingTemplate_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateUsingTemplate_($template_owner, $template_repo);
    }
    public function listPublic_($since, string $visibility = 'public') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListPublic_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListPublic_($since, $visibility);
    }
    public function listForAuthenticatedUser_(string $visibility = 'all', string $affiliation = 'owner,collaborator,organization_member', string $type = 'all', string $sort = 'full_name', $direction, int $per_page = 30, int $page = 1, $since, $before) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListForAuthenticatedUser_($visibility, $affiliation, $type, $sort, $direction, $per_page, $page, $since, $before);
    }
    public function createForAuthenticatedUser_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\CreateForAuthenticatedUser_();
    }
    public function listInvitationsForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListInvitationsForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListInvitationsForAuthenticatedUser_($per_page, $page);
    }
    public function declineInvitation_($invitation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeclineInvitation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\DeclineInvitation_($invitation_id);
    }
    public function acceptInvitation_($invitation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\AcceptInvitation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\AcceptInvitation_($invitation_id);
    }
    public function listForUser_($username, string $type = 'owner', string $sort = 'full_name', $direction, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListForUser_($username, $type, $sort, $direction, $per_page, $page);
    }
}
