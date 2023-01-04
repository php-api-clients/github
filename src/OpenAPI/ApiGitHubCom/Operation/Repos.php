<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Repos
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function listForOrg(string $org, string $type, string $sort = 'created', string $direction, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $type, $sort, $direction, $per_page, $page);
    }
    public function createInOrg(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function get(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Get($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function delete(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Delete
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Delete($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function update(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Update
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Update($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function listAutolinks(string $owner, string $repo, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListAutolinks
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListAutolinks($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $page);
    }
    public function createAutolink(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateAutolink
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateAutolink($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getAutolink(string $owner, string $repo, int $autolink_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAutolink
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAutolink($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $autolink_id);
    }
    public function deleteAutolink(string $owner, string $repo, int $autolink_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAutolink
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAutolink($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $autolink_id);
    }
    public function enableAutomatedSecurityFixes(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\EnableAutomatedSecurityFixes
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\EnableAutomatedSecurityFixes($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function disableAutomatedSecurityFixes(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DisableAutomatedSecurityFixes
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DisableAutomatedSecurityFixes($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function listBranches(string $owner, string $repo, bool $protected, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListBranches
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListBranches($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $protected, $per_page, $page);
    }
    public function getBranch(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetBranch
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetBranch($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function getBranchProtection(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetBranchProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetBranchProtection($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function updateBranchProtection(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateBranchProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateBranchProtection($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function deleteBranchProtection(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteBranchProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteBranchProtection($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function getAdminBranchProtection(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAdminBranchProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAdminBranchProtection($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function setAdminBranchProtection(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetAdminBranchProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetAdminBranchProtection($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function deleteAdminBranchProtection(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAdminBranchProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAdminBranchProtection($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function getPullRequestReviewProtection(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPullRequestReviewProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPullRequestReviewProtection($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function deletePullRequestReviewProtection(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeletePullRequestReviewProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeletePullRequestReviewProtection($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function updatePullRequestReviewProtection(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdatePullRequestReviewProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdatePullRequestReviewProtection($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function getCommitSignatureProtection(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommitSignatureProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommitSignatureProtection($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function createCommitSignatureProtection(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateCommitSignatureProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateCommitSignatureProtection($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function deleteCommitSignatureProtection(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteCommitSignatureProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteCommitSignatureProtection($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function getStatusChecksProtection(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetStatusChecksProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetStatusChecksProtection($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function removeStatusCheckProtection(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveStatusCheckProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveStatusCheckProtection($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function updateStatusCheckProtection(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateStatusCheckProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateStatusCheckProtection($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function getAllStatusCheckContexts(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAllStatusCheckContexts
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAllStatusCheckContexts($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function setStatusCheckContexts(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetStatusCheckContexts
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetStatusCheckContexts($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function addStatusCheckContexts(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddStatusCheckContexts
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddStatusCheckContexts($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function removeStatusCheckContexts(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveStatusCheckContexts
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveStatusCheckContexts($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function getAccessRestrictions(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAccessRestrictions($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function deleteAccessRestrictions(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAccessRestrictions($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function getAppsWithAccessToProtectedBranch(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAppsWithAccessToProtectedBranch
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAppsWithAccessToProtectedBranch($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function setAppAccessRestrictions(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetAppAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetAppAccessRestrictions($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function addAppAccessRestrictions(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddAppAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddAppAccessRestrictions($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function removeAppAccessRestrictions(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveAppAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveAppAccessRestrictions($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function getTeamsWithAccessToProtectedBranch(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetTeamsWithAccessToProtectedBranch
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetTeamsWithAccessToProtectedBranch($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function setTeamAccessRestrictions(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetTeamAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetTeamAccessRestrictions($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function addTeamAccessRestrictions(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddTeamAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddTeamAccessRestrictions($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function removeTeamAccessRestrictions(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveTeamAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveTeamAccessRestrictions($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function getUsersWithAccessToProtectedBranch(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetUsersWithAccessToProtectedBranch
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetUsersWithAccessToProtectedBranch($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function setUserAccessRestrictions(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetUserAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\SetUserAccessRestrictions($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function addUserAccessRestrictions(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddUserAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddUserAccessRestrictions($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function removeUserAccessRestrictions(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveUserAccessRestrictions
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveUserAccessRestrictions($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function renameBranch(string $owner, string $repo, string $branch) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RenameBranch
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RenameBranch($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $branch);
    }
    public function codeownersErrors(string $owner, string $repo, string $ref) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CodeownersErrors
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CodeownersErrors($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $ref);
    }
    public function listCollaborators(string $owner, string $repo, string $affiliation = 'all', string $permission, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCollaborators
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCollaborators($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $affiliation, $permission, $per_page, $page);
    }
    public function checkCollaborator(string $owner, string $repo, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CheckCollaborator
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CheckCollaborator($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $username);
    }
    public function addCollaborator(string $owner, string $repo, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddCollaborator
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AddCollaborator($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $username);
    }
    public function removeCollaborator(string $owner, string $repo, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveCollaborator
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RemoveCollaborator($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $username);
    }
    public function getCollaboratorPermissionLevel(string $owner, string $repo, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCollaboratorPermissionLevel
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCollaboratorPermissionLevel($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $username);
    }
    public function listCommitCommentsForRepo(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCommitCommentsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCommitCommentsForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function getCommitComment(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommitComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommitComment($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id);
    }
    public function deleteCommitComment(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteCommitComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteCommitComment($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id);
    }
    public function updateCommitComment(string $owner, string $repo, int $comment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateCommitComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateCommitComment($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $comment_id);
    }
    public function listCommits(string $owner, string $repo, string $sha, string $path, string $author, string $since, string $until, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCommits
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCommits($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $sha, $path, $author, $since, $until, $per_page, $page);
    }
    public function listBranchesForHeadCommit(string $owner, string $repo, string $commit_sha) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListBranchesForHeadCommit
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListBranchesForHeadCommit($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $commit_sha);
    }
    public function listCommentsForCommit(string $owner, string $repo, string $commit_sha, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCommentsForCommit
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCommentsForCommit($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $commit_sha, $per_page, $page);
    }
    public function createCommitComment(string $owner, string $repo, string $commit_sha) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateCommitComment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateCommitComment($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $commit_sha);
    }
    public function listPullRequestsAssociatedWithCommit(string $owner, string $repo, string $commit_sha, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListPullRequestsAssociatedWithCommit
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListPullRequestsAssociatedWithCommit($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $commit_sha, $per_page, $page);
    }
    public function getCommit(string $owner, string $repo, int $page = 1, int $per_page = 30, string $ref) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommit
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommit($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $page, $per_page, $ref);
    }
    public function getCombinedStatusForRef(string $owner, string $repo, string $ref, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCombinedStatusForRef
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCombinedStatusForRef($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $ref, $per_page, $page);
    }
    public function listCommitStatusesForRef(string $owner, string $repo, string $ref, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCommitStatusesForRef
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListCommitStatusesForRef($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $ref, $per_page, $page);
    }
    public function getCommunityProfileMetrics(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommunityProfileMetrics
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommunityProfileMetrics($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function compareCommits(string $owner, string $repo, int $page = 1, int $per_page = 30, string $basehead) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CompareCommits
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CompareCommits($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $page, $per_page, $basehead);
    }
    public function getContent(string $owner, string $repo, string $path, string $ref) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetContent
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetContent($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $path, $ref);
    }
    public function createOrUpdateFileContents(string $owner, string $repo, string $path) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateOrUpdateFileContents
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateOrUpdateFileContents($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $path);
    }
    public function deleteFile(string $owner, string $repo, string $path) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteFile
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteFile($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $path);
    }
    public function listContributors(string $owner, string $repo, string $anon, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListContributors
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListContributors($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $anon, $per_page, $page);
    }
    public function listDeployments(string $owner, string $repo, string $sha = 'none', string $ref = 'none', string $task = 'none', string|null $environment = 'none', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeployments
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeployments($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $sha, $ref, $task, $environment, $per_page, $page);
    }
    public function createDeployment(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeployment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeployment($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getDeployment(string $owner, string $repo, int $deployment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeployment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeployment($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $deployment_id);
    }
    public function deleteDeployment(string $owner, string $repo, int $deployment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteDeployment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteDeployment($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $deployment_id);
    }
    public function listDeploymentStatuses(string $owner, string $repo, int $deployment_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeploymentStatuses
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeploymentStatuses($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $deployment_id, $per_page, $page);
    }
    public function createDeploymentStatus(string $owner, string $repo, int $deployment_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeploymentStatus
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeploymentStatus($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $deployment_id);
    }
    public function getDeploymentStatus(string $owner, string $repo, int $deployment_id, int $status_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeploymentStatus
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeploymentStatus($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $deployment_id, $status_id);
    }
    public function createDispatchEvent(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDispatchEvent
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDispatchEvent($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getAllEnvironments(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAllEnvironments
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAllEnvironments($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function getEnvironment(string $owner, string $repo, string $environment_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetEnvironment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetEnvironment($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $environment_name);
    }
    public function createOrUpdateEnvironment(string $owner, string $repo, string $environment_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateOrUpdateEnvironment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateOrUpdateEnvironment($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $environment_name);
    }
    public function deleteAnEnvironment(string $owner, string $repo, string $environment_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAnEnvironment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteAnEnvironment($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $environment_name);
    }
    public function listDeploymentBranchPolicies(string $owner, string $repo, string $environment_name, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeploymentBranchPolicies
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeploymentBranchPolicies($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $environment_name, $per_page, $page);
    }
    public function createDeploymentBranchPolicy(string $owner, string $repo, string $environment_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeploymentBranchPolicy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeploymentBranchPolicy($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $environment_name);
    }
    public function getDeploymentBranchPolicy(string $owner, string $repo, string $environment_name, int $branch_policy_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeploymentBranchPolicy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeploymentBranchPolicy($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $environment_name, $branch_policy_id);
    }
    public function updateDeploymentBranchPolicy(string $owner, string $repo, string $environment_name, int $branch_policy_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateDeploymentBranchPolicy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateDeploymentBranchPolicy($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $environment_name, $branch_policy_id);
    }
    public function deleteDeploymentBranchPolicy(string $owner, string $repo, string $environment_name, int $branch_policy_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteDeploymentBranchPolicy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteDeploymentBranchPolicy($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $environment_name, $branch_policy_id);
    }
    public function listForks(string $owner, string $repo, string $sort = 'newest', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForks
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForks($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $sort, $per_page, $page);
    }
    public function createFork(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateFork
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateFork($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function listWebhooks(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListWebhooks
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListWebhooks($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function createWebhook(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateWebhook($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getWebhook(string $owner, string $repo, int $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetWebhook($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $hook_id);
    }
    public function deleteWebhook(string $owner, string $repo, int $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteWebhook($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $hook_id);
    }
    public function updateWebhook(string $owner, string $repo, int $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateWebhook($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $hook_id);
    }
    public function getWebhookConfigForRepo(string $owner, string $repo, int $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetWebhookConfigForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetWebhookConfigForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $hook_id);
    }
    public function updateWebhookConfigForRepo(string $owner, string $repo, int $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateWebhookConfigForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateWebhookConfigForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $hook_id);
    }
    public function listWebhookDeliveries(string $owner, string $repo, int $hook_id, int $per_page = 30, string $cursor, bool $redelivery) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListWebhookDeliveries
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListWebhookDeliveries($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $hook_id, $per_page, $cursor, $redelivery);
    }
    public function getWebhookDelivery(string $owner, string $repo, int $hook_id, int $delivery_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetWebhookDelivery
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetWebhookDelivery($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $hook_id, $delivery_id);
    }
    public function redeliverWebhookDelivery(string $owner, string $repo, int $hook_id, int $delivery_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RedeliverWebhookDelivery
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RedeliverWebhookDelivery($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $hook_id, $delivery_id);
    }
    public function pingWebhook(string $owner, string $repo, int $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\PingWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\PingWebhook($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $hook_id);
    }
    public function testPushWebhook(string $owner, string $repo, int $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\TestPushWebhook
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\TestPushWebhook($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $hook_id);
    }
    public function listInvitations(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListInvitations
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListInvitations($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function deleteInvitation(string $owner, string $repo, int $invitation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteInvitation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteInvitation($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $invitation_id);
    }
    public function updateInvitation(string $owner, string $repo, int $invitation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateInvitation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateInvitation($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $invitation_id);
    }
    public function listDeployKeys(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeployKeys
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListDeployKeys($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function createDeployKey(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeployKey
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateDeployKey($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getDeployKey(string $owner, string $repo, int $key_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeployKey
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetDeployKey($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $key_id);
    }
    public function deleteDeployKey(string $owner, string $repo, int $key_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteDeployKey
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteDeployKey($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $key_id);
    }
    public function listLanguages(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListLanguages
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListLanguages($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function enableLfsForRepo(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\EnableLfsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\EnableLfsForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function disableLfsForRepo(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DisableLfsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DisableLfsForRepo($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function mergeUpstream(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\MergeUpstream
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\MergeUpstream($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function merge(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Merge
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Merge($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getPages(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPages
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPages($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function updateInformationAboutPagesSite(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateInformationAboutPagesSite
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateInformationAboutPagesSite($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function createPagesSite(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreatePagesSite
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreatePagesSite($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function deletePagesSite(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeletePagesSite
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeletePagesSite($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function listPagesBuilds(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListPagesBuilds
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListPagesBuilds($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function requestPagesBuild(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RequestPagesBuild
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\RequestPagesBuild($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getLatestPagesBuild(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetLatestPagesBuild
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetLatestPagesBuild($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getPagesBuild(string $owner, string $repo, int $build_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPagesBuild
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPagesBuild($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $build_id);
    }
    public function createPagesDeployment(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreatePagesDeployment
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreatePagesDeployment($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getPagesHealthCheck(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPagesHealthCheck
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPagesHealthCheck($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getReadme(string $owner, string $repo, string $ref) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReadme
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReadme($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $ref);
    }
    public function getReadmeInDirectory(string $owner, string $repo, string $dir, string $ref) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReadmeInDirectory
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReadmeInDirectory($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $dir, $ref);
    }
    public function listReleases(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListReleases
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListReleases($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function createRelease(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateRelease
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateRelease($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getReleaseAsset(string $owner, string $repo, int $asset_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReleaseAsset
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReleaseAsset($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $asset_id);
    }
    public function deleteReleaseAsset(string $owner, string $repo, int $asset_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteReleaseAsset
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteReleaseAsset($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $asset_id);
    }
    public function updateReleaseAsset(string $owner, string $repo, int $asset_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateReleaseAsset
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateReleaseAsset($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $asset_id);
    }
    public function generateReleaseNotes(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GenerateReleaseNotes
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GenerateReleaseNotes($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getLatestRelease(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetLatestRelease
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetLatestRelease($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getReleaseByTag(string $owner, string $repo, string $tag) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReleaseByTag
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReleaseByTag($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $tag);
    }
    public function getRelease(string $owner, string $repo, int $release_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetRelease
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetRelease($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $release_id);
    }
    public function deleteRelease(string $owner, string $repo, int $release_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteRelease
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteRelease($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $release_id);
    }
    public function updateRelease(string $owner, string $repo, int $release_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateRelease
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UpdateRelease($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $release_id);
    }
    public function listReleaseAssets(string $owner, string $repo, int $release_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListReleaseAssets
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListReleaseAssets($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $release_id, $per_page, $page);
    }
    public function uploadReleaseAsset(string $owner, string $repo, int $release_id, string $name, string $label) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UploadReleaseAsset
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\UploadReleaseAsset($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $release_id, $name, $label);
    }
    public function getCodeFrequencyStats(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCodeFrequencyStats
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCodeFrequencyStats($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getCommitActivityStats(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommitActivityStats
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetCommitActivityStats($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getContributorsStats(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetContributorsStats
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetContributorsStats($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getParticipationStats(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetParticipationStats
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetParticipationStats($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getPunchCardStats(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPunchCardStats
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetPunchCardStats($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function createCommitStatus(string $owner, string $repo, string $sha) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateCommitStatus
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateCommitStatus($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $sha);
    }
    public function listTags(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListTags
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListTags($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function listTagProtection(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListTagProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListTagProtection($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function createTagProtection(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateTagProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateTagProtection($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function deleteTagProtection(string $owner, string $repo, int $tag_protection_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteTagProtection
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeleteTagProtection($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $tag_protection_id);
    }
    public function downloadTarballArchive(string $owner, string $repo, string $ref) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DownloadTarballArchive
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DownloadTarballArchive($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $ref);
    }
    public function listTeams(string $owner, string $repo, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListTeams
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListTeams($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per_page, $page);
    }
    public function getAllTopics(string $owner, string $repo, int $page = 1, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAllTopics
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetAllTopics($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $page, $per_page);
    }
    public function replaceAllTopics(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ReplaceAllTopics
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ReplaceAllTopics($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getClones(string $owner, string $repo, string $per = 'day') : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetClones
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetClones($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per);
    }
    public function getTopPaths(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetTopPaths
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetTopPaths($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getTopReferrers(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetTopReferrers
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetTopReferrers($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function getViews(string $owner, string $repo, string $per = 'day') : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetViews
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetViews($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $per);
    }
    public function transfer(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Transfer
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Transfer($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function checkVulnerabilityAlerts(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CheckVulnerabilityAlerts
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CheckVulnerabilityAlerts($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function enableVulnerabilityAlerts(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\EnableVulnerabilityAlerts
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\EnableVulnerabilityAlerts($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function disableVulnerabilityAlerts(string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DisableVulnerabilityAlerts
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DisableVulnerabilityAlerts($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo);
    }
    public function downloadZipballArchive(string $owner, string $repo, string $ref) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DownloadZipballArchive
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DownloadZipballArchive($this->requestSchemaValidator, $this->responseSchemaValidator, $owner, $repo, $ref);
    }
    public function createUsingTemplate(string $template_owner, string $template_repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateUsingTemplate
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateUsingTemplate($this->requestSchemaValidator, $this->responseSchemaValidator, $template_owner, $template_repo);
    }
    public function listPublic(int $since) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListPublic
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListPublic($this->requestSchemaValidator, $this->responseSchemaValidator, $since);
    }
    public function listForAuthenticatedUser(string $visibility = 'all', string $affiliation = 'owner,collaborator,organization_member', string $type = 'all', string $sort = 'full_name', string $direction, int $per_page = 30, int $page = 1, string $since, string $before) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $visibility, $affiliation, $type, $sort, $direction, $per_page, $page, $since, $before);
    }
    public function createForAuthenticatedUser() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\CreateForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function listInvitationsForAuthenticatedUser(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListInvitationsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListInvitationsForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
    public function declineInvitationForAuthenticatedUser(int $invitation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeclineInvitationForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\DeclineInvitationForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $invitation_id);
    }
    public function acceptInvitationForAuthenticatedUser(int $invitation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AcceptInvitationForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\AcceptInvitationForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $invitation_id);
    }
    public function listForUser(string $username, string $type = 'owner', string $sort = 'full_name', string $direction, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListForUser($this->requestSchemaValidator, $this->responseSchemaValidator, $username, $type, $sort, $direction, $per_page, $page);
    }
}
