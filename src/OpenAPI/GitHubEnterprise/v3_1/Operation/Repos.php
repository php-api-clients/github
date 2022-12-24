<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation;

final class Repos
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function listForOrg_(string $org, string $type, string $sort = 'created', string $direction, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $type, $sort, $direction, $per_page, $page);
    }
    public function createInOrg_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function get_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\Get_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function delete_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\Delete_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\Delete_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function update_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\Update_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\Update_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function listBranches_(string $owner, string $repo, bool $protected, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListBranches_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListBranches_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $protected, $per_page, $page);
    }
    public function getBranch_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetBranch_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetBranch_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function getBranchProtection_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetBranchProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetBranchProtection_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function updateBranchProtection_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateBranchProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateBranchProtection_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function deleteBranchProtection_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteBranchProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteBranchProtection_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function getAdminBranchProtection_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetAdminBranchProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetAdminBranchProtection_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function setAdminBranchProtection_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\SetAdminBranchProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\SetAdminBranchProtection_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function deleteAdminBranchProtection_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteAdminBranchProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteAdminBranchProtection_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function getPullRequestReviewProtection_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetPullRequestReviewProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetPullRequestReviewProtection_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function deletePullRequestReviewProtection_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeletePullRequestReviewProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeletePullRequestReviewProtection_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function updatePullRequestReviewProtection_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdatePullRequestReviewProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdatePullRequestReviewProtection_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function getCommitSignatureProtection_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCommitSignatureProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCommitSignatureProtection_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function createCommitSignatureProtection_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateCommitSignatureProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateCommitSignatureProtection_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function deleteCommitSignatureProtection_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteCommitSignatureProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteCommitSignatureProtection_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function getStatusChecksProtection_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetStatusChecksProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetStatusChecksProtection_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function removeStatusCheckProtection_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RemoveStatusCheckProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RemoveStatusCheckProtection_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function updateStatusCheckProtection_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateStatusCheckProtection_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateStatusCheckProtection_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function getAllStatusCheckContexts_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetAllStatusCheckContexts_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetAllStatusCheckContexts_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function setStatusCheckContexts_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\SetStatusCheckContexts_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\SetStatusCheckContexts_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function addStatusCheckContexts_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\AddStatusCheckContexts_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\AddStatusCheckContexts_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function removeStatusCheckContexts_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RemoveStatusCheckContexts_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RemoveStatusCheckContexts_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function getAccessRestrictions_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetAccessRestrictions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetAccessRestrictions_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function deleteAccessRestrictions_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteAccessRestrictions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteAccessRestrictions_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function getAppsWithAccessToProtectedBranch_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetAppsWithAccessToProtectedBranch_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetAppsWithAccessToProtectedBranch_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function setAppAccessRestrictions_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\SetAppAccessRestrictions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\SetAppAccessRestrictions_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function addAppAccessRestrictions_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\AddAppAccessRestrictions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\AddAppAccessRestrictions_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function removeAppAccessRestrictions_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RemoveAppAccessRestrictions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RemoveAppAccessRestrictions_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function getTeamsWithAccessToProtectedBranch_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetTeamsWithAccessToProtectedBranch_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetTeamsWithAccessToProtectedBranch_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function setTeamAccessRestrictions_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\SetTeamAccessRestrictions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\SetTeamAccessRestrictions_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function addTeamAccessRestrictions_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\AddTeamAccessRestrictions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\AddTeamAccessRestrictions_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function removeTeamAccessRestrictions_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RemoveTeamAccessRestrictions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RemoveTeamAccessRestrictions_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function getUsersWithAccessToProtectedBranch_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetUsersWithAccessToProtectedBranch_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetUsersWithAccessToProtectedBranch_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function setUserAccessRestrictions_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\SetUserAccessRestrictions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\SetUserAccessRestrictions_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function addUserAccessRestrictions_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\AddUserAccessRestrictions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\AddUserAccessRestrictions_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function removeUserAccessRestrictions_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RemoveUserAccessRestrictions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RemoveUserAccessRestrictions_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function renameBranch_(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RenameBranch_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RenameBranch_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function listCollaborators_(string $owner, string $repo, string $affiliation = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListCollaborators_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListCollaborators_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $affiliation, $per_page, $page);
    }
    public function checkCollaborator_(string $owner, string $repo, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CheckCollaborator_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CheckCollaborator_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $username);
    }
    public function addCollaborator_(string $owner, string $repo, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\AddCollaborator_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\AddCollaborator_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $username);
    }
    public function removeCollaborator_(string $owner, string $repo, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RemoveCollaborator_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RemoveCollaborator_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $username);
    }
    public function getCollaboratorPermissionLevel_(string $owner, string $repo, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCollaboratorPermissionLevel_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCollaboratorPermissionLevel_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $username);
    }
    public function listCommitCommentsForRepo_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListCommitCommentsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListCommitCommentsForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function getCommitComment_(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCommitComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCommitComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id);
    }
    public function deleteCommitComment_(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteCommitComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteCommitComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id);
    }
    public function updateCommitComment_(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateCommitComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateCommitComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id);
    }
    public function listCommits_(string $owner, string $repo, string $sha, string $path, string $author, string $since, string $until, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListCommits_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListCommits_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $sha, $path, $author, $since, $until, $per_page, $page);
    }
    public function listBranchesForHeadCommit_(string $owner, string $repo, string $commit_sha) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListBranchesForHeadCommit_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListBranchesForHeadCommit_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $commit_sha);
    }
    public function listCommentsForCommit_(string $owner, string $repo, string $commit_sha, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListCommentsForCommit_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListCommentsForCommit_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $commit_sha, $per_page, $page);
    }
    public function createCommitComment_(string $owner, string $repo, string $commit_sha) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateCommitComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateCommitComment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $commit_sha);
    }
    public function listPullRequestsAssociatedWithCommit_(string $owner, string $repo, string $commit_sha, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListPullRequestsAssociatedWithCommit_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListPullRequestsAssociatedWithCommit_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $commit_sha, $per_page, $page);
    }
    public function getCommit_(string $owner, string $repo, int $page = 1, int $per_page = 30, string $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCommit_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCommit_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $page, $per_page, $ref);
    }
    public function getCombinedStatusForRef_(string $owner, string $repo, string $ref, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCombinedStatusForRef_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCombinedStatusForRef_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $ref, $per_page, $page);
    }
    public function listCommitStatusesForRef_(string $owner, string $repo, string $ref, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListCommitStatusesForRef_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListCommitStatusesForRef_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $ref, $per_page, $page);
    }
    public function compareCommits_(string $owner, string $repo, string $basehead) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CompareCommits_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CompareCommits_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $basehead);
    }
    public function getContent_(string $owner, string $repo, string $path, string $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetContent_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetContent_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $path, $ref);
    }
    public function createOrUpdateFileContents_(string $owner, string $repo, string $path) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateOrUpdateFileContents_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateOrUpdateFileContents_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $path);
    }
    public function deleteFile_(string $owner, string $repo, string $path) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteFile_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteFile_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $path);
    }
    public function listContributors_(string $owner, string $repo, string $anon, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListContributors_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListContributors_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $anon, $per_page, $page);
    }
    public function listDeployments_(string $owner, string $repo, string $sha = 'none', string $ref = 'none', string $task = 'none', string|null $environment = 'none', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListDeployments_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListDeployments_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $sha, $ref, $task, $environment, $per_page, $page);
    }
    public function createDeployment_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateDeployment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateDeployment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getDeployment_(string $owner, string $repo, int $deployment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetDeployment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetDeployment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $deployment_id);
    }
    public function deleteDeployment_(string $owner, string $repo, int $deployment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteDeployment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteDeployment_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $deployment_id);
    }
    public function listDeploymentStatuses_(string $owner, string $repo, int $deployment_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListDeploymentStatuses_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListDeploymentStatuses_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $deployment_id, $per_page, $page);
    }
    public function createDeploymentStatus_(string $owner, string $repo, int $deployment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateDeploymentStatus_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateDeploymentStatus_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $deployment_id);
    }
    public function getDeploymentStatus_(string $owner, string $repo, int $deployment_id, int $status_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetDeploymentStatus_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetDeploymentStatus_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $deployment_id, $status_id);
    }
    public function createDispatchEvent_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateDispatchEvent_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateDispatchEvent_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function listForks_(string $owner, string $repo, string $sort = 'newest', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListForks_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListForks_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $sort, $per_page, $page);
    }
    public function createFork_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateFork_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateFork_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function listWebhooks_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListWebhooks_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListWebhooks_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function createWebhook_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateWebhook_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getWebhook_(string $owner, string $repo, int $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetWebhook_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $hook_id);
    }
    public function deleteWebhook_(string $owner, string $repo, int $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteWebhook_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $hook_id);
    }
    public function updateWebhook_(string $owner, string $repo, int $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateWebhook_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $hook_id);
    }
    public function getWebhookConfigForRepo_(string $owner, string $repo, int $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetWebhookConfigForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetWebhookConfigForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $hook_id);
    }
    public function updateWebhookConfigForRepo_(string $owner, string $repo, int $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateWebhookConfigForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateWebhookConfigForRepo_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $hook_id);
    }
    public function pingWebhook_(string $owner, string $repo, int $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\PingWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\PingWebhook_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $hook_id);
    }
    public function testPushWebhook_(string $owner, string $repo, int $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\TestPushWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\TestPushWebhook_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $hook_id);
    }
    public function listInvitations_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListInvitations_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListInvitations_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function deleteInvitation_(string $owner, string $repo, int $invitation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteInvitation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteInvitation_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $invitation_id);
    }
    public function updateInvitation_(string $owner, string $repo, int $invitation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateInvitation_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateInvitation_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $invitation_id);
    }
    public function listDeployKeys_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListDeployKeys_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListDeployKeys_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function createDeployKey_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateDeployKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateDeployKey_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getDeployKey_(string $owner, string $repo, int $key_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetDeployKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetDeployKey_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $key_id);
    }
    public function deleteDeployKey_(string $owner, string $repo, int $key_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteDeployKey_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteDeployKey_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $key_id);
    }
    public function listLanguages_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListLanguages_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListLanguages_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function merge_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\Merge_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\Merge_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getPages_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetPages_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetPages_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function updateInformationAboutPagesSite_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateInformationAboutPagesSite_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateInformationAboutPagesSite_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function createPagesSite_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreatePagesSite_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreatePagesSite_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function deletePagesSite_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeletePagesSite_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeletePagesSite_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function listPagesBuilds_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListPagesBuilds_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListPagesBuilds_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function requestPagesBuild_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RequestPagesBuild_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\RequestPagesBuild_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getLatestPagesBuild_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetLatestPagesBuild_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetLatestPagesBuild_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getPagesBuild_(string $owner, string $repo, int $build_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetPagesBuild_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetPagesBuild_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $build_id);
    }
    public function getReadme_(string $owner, string $repo, string $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetReadme_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetReadme_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $ref);
    }
    public function getReadmeInDirectory_(string $owner, string $repo, string $dir, string $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetReadmeInDirectory_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetReadmeInDirectory_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $dir, $ref);
    }
    public function listReleases_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListReleases_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListReleases_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function createRelease_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateRelease_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateRelease_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getReleaseAsset_(string $owner, string $repo, int $asset_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetReleaseAsset_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetReleaseAsset_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $asset_id);
    }
    public function deleteReleaseAsset_(string $owner, string $repo, int $asset_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteReleaseAsset_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteReleaseAsset_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $asset_id);
    }
    public function updateReleaseAsset_(string $owner, string $repo, int $asset_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateReleaseAsset_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateReleaseAsset_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $asset_id);
    }
    public function getLatestRelease_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetLatestRelease_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetLatestRelease_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getReleaseByTag_(string $owner, string $repo, string $tag) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetReleaseByTag_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetReleaseByTag_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $tag);
    }
    public function getRelease_(string $owner, string $repo, int $release_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetRelease_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetRelease_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $release_id);
    }
    public function deleteRelease_(string $owner, string $repo, int $release_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteRelease_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeleteRelease_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $release_id);
    }
    public function updateRelease_(string $owner, string $repo, int $release_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateRelease_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UpdateRelease_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $release_id);
    }
    public function listReleaseAssets_(string $owner, string $repo, int $release_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListReleaseAssets_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListReleaseAssets_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $release_id, $per_page, $page);
    }
    public function uploadReleaseAsset_(string $owner, string $repo, int $release_id, string $name, string $label) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UploadReleaseAsset_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\UploadReleaseAsset_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $release_id, $name, $label);
    }
    public function getCodeFrequencyStats_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCodeFrequencyStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCodeFrequencyStats_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getCommitActivityStats_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCommitActivityStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetCommitActivityStats_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getContributorsStats_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetContributorsStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetContributorsStats_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getParticipationStats_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetParticipationStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetParticipationStats_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getPunchCardStats_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetPunchCardStats_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetPunchCardStats_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function createCommitStatus_(string $owner, string $repo, string $sha) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateCommitStatus_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateCommitStatus_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $sha);
    }
    public function listTags_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListTags_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListTags_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function downloadTarballArchive_(string $owner, string $repo, string $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DownloadTarballArchive_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DownloadTarballArchive_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $ref);
    }
    public function listTeams_(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListTeams_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListTeams_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function getAllTopics_(string $owner, string $repo, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetAllTopics_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\GetAllTopics_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $page, $per_page);
    }
    public function replaceAllTopics_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ReplaceAllTopics_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ReplaceAllTopics_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function transfer_(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\Transfer_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\Transfer_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function downloadZipballArchive_(string $owner, string $repo, string $ref) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DownloadZipballArchive_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DownloadZipballArchive_($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $ref);
    }
    public function createUsingTemplate_(string $template_owner, string $template_repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateUsingTemplate_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateUsingTemplate_($this->requestSchemaValidator, $this->responseSchemaValidator, $template_owner, $template_repo);
    }
    public function listPublic_(int $since, string $visibility = 'public') : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListPublic_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListPublic_($this->requestSchemaValidator, $this->responseSchemaValidator, $since, $visibility);
    }
    public function listForAuthenticatedUser_(string $visibility = 'all', string $affiliation = 'owner,collaborator,organization_member', string $type = 'all', string $sort = 'full_name', string $direction, int $per_page = 30, int $page = 1, string $since, string $before) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $visibility, $affiliation, $type, $sort, $direction, $per_page, $page, $since, $before);
    }
    public function createForAuthenticatedUser_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\CreateForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function listInvitationsForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListInvitationsForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListInvitationsForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
    public function declineInvitationForAuthenticatedUser_(int $invitation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeclineInvitationForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\DeclineInvitationForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $invitation_id);
    }
    public function acceptInvitationForAuthenticatedUser_(int $invitation_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\AcceptInvitationForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\AcceptInvitationForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $invitation_id);
    }
    public function listForUser_(string $username, string $type = 'owner', string $sort = 'full_name', string $direction, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\ListForUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $username, $type, $sort, $direction, $per_page, $page);
    }
}
