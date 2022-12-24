<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class Teams
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function externalIdpGroupInfoForOrg_(string $org, int $group_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ExternalIdpGroupInfoForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ExternalIdpGroupInfoForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $group_id);
    }
    public function listExternalIdpGroupsForOrg_(string $org, int $per_page = 30, int $page, string $display_name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListExternalIdpGroupsForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListExternalIdpGroupsForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $per_page, $page, $display_name);
    }
    public function list_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\List_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\List_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $per_page, $page);
    }
    public function create_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\Create_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\Create_($this->requestSchemaValidator, $this->responseSchemaValidator, $org);
    }
    public function getByName_(string $org, string $team_slug) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetByName_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetByName_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug);
    }
    public function deleteInOrg_(string $org, string $team_slug) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug);
    }
    public function updateInOrg_(string $org, string $team_slug) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug);
    }
    public function listDiscussionsInOrg_(string $org, string $team_slug, string $direction = 'desc', int $per_page = 30, int $page = 1, string $pinned) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListDiscussionsInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListDiscussionsInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $direction, $per_page, $page, $pinned);
    }
    public function createDiscussionInOrg_(string $org, string $team_slug) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CreateDiscussionInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CreateDiscussionInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug);
    }
    public function getDiscussionInOrg_(string $org, string $team_slug, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $discussion_number);
    }
    public function deleteDiscussionInOrg_(string $org, string $team_slug, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $discussion_number);
    }
    public function updateDiscussionInOrg_(string $org, string $team_slug, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $discussion_number);
    }
    public function listDiscussionCommentsInOrg_(string $org, string $team_slug, int $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListDiscussionCommentsInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListDiscussionCommentsInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $discussion_number, $direction, $per_page, $page);
    }
    public function createDiscussionCommentInOrg_(string $org, string $team_slug, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CreateDiscussionCommentInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CreateDiscussionCommentInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $discussion_number);
    }
    public function getDiscussionCommentInOrg_(string $org, string $team_slug, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionCommentInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionCommentInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $discussion_number, $comment_number);
    }
    public function deleteDiscussionCommentInOrg_(string $org, string $team_slug, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionCommentInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionCommentInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $discussion_number, $comment_number);
    }
    public function updateDiscussionCommentInOrg_(string $org, string $team_slug, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionCommentInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionCommentInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $discussion_number, $comment_number);
    }
    public function unlinkExternalIdpGroupFromTeamForOrg_(string $org, string $team_slug) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UnlinkExternalIdpGroupFromTeamForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UnlinkExternalIdpGroupFromTeamForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug);
    }
    public function linkExternalIdpGroupToTeamForOrg_(string $org, string $team_slug) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\LinkExternalIdpGroupToTeamForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\LinkExternalIdpGroupToTeamForOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug);
    }
    public function listMembersInOrg_(string $org, string $team_slug, string $role = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListMembersInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListMembersInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $role, $per_page, $page);
    }
    public function getMembershipForUserInOrg_(string $org, string $team_slug, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetMembershipForUserInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetMembershipForUserInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $username);
    }
    public function addOrUpdateMembershipForUserInOrg_(string $org, string $team_slug, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateMembershipForUserInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateMembershipForUserInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $username);
    }
    public function removeMembershipForUserInOrg_(string $org, string $team_slug, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveMembershipForUserInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveMembershipForUserInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $username);
    }
    public function listProjectsInOrg_(string $org, string $team_slug, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListProjectsInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListProjectsInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $per_page, $page);
    }
    public function checkPermissionsForProjectInOrg_(string $org, string $team_slug, int $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CheckPermissionsForProjectInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CheckPermissionsForProjectInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $project_id);
    }
    public function addOrUpdateProjectPermissionsInOrg_(string $org, string $team_slug, int $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateProjectPermissionsInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateProjectPermissionsInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $project_id);
    }
    public function removeProjectInOrg_(string $org, string $team_slug, int $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveProjectInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveProjectInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $project_id);
    }
    public function listReposInOrg_(string $org, string $team_slug, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListReposInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListReposInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $per_page, $page);
    }
    public function checkPermissionsForRepoInOrg_(string $org, string $team_slug, string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CheckPermissionsForRepoInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CheckPermissionsForRepoInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $owner, $repo);
    }
    public function addOrUpdateRepoPermissionsInOrg_(string $org, string $team_slug, string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateRepoPermissionsInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateRepoPermissionsInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $owner, $repo);
    }
    public function removeRepoInOrg_(string $org, string $team_slug, string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveRepoInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveRepoInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $owner, $repo);
    }
    public function listChildInOrg_(string $org, string $team_slug, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListChildInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListChildInOrg_($this->requestSchemaValidator, $this->responseSchemaValidator, $org, $team_slug, $per_page, $page);
    }
    public function getLegacy_(int $team_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id);
    }
    public function deleteLegacy_(int $team_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id);
    }
    public function updateLegacy_(int $team_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id);
    }
    public function listDiscussionsLegacy_(int $team_id, string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListDiscussionsLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListDiscussionsLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $direction, $per_page, $page);
    }
    public function createDiscussionLegacy_(int $team_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CreateDiscussionLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CreateDiscussionLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id);
    }
    public function getDiscussionLegacy_(int $team_id, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $discussion_number);
    }
    public function deleteDiscussionLegacy_(int $team_id, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $discussion_number);
    }
    public function updateDiscussionLegacy_(int $team_id, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $discussion_number);
    }
    public function listDiscussionCommentsLegacy_(int $team_id, int $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListDiscussionCommentsLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListDiscussionCommentsLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $discussion_number, $direction, $per_page, $page);
    }
    public function createDiscussionCommentLegacy_(int $team_id, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CreateDiscussionCommentLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CreateDiscussionCommentLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $discussion_number);
    }
    public function getDiscussionCommentLegacy_(int $team_id, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionCommentLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetDiscussionCommentLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $discussion_number, $comment_number);
    }
    public function deleteDiscussionCommentLegacy_(int $team_id, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionCommentLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\DeleteDiscussionCommentLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $discussion_number, $comment_number);
    }
    public function updateDiscussionCommentLegacy_(int $team_id, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionCommentLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\UpdateDiscussionCommentLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $discussion_number, $comment_number);
    }
    public function listMembersLegacy_(int $team_id, string $role = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListMembersLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListMembersLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $role, $per_page, $page);
    }
    public function getMemberLegacy_(int $team_id, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetMemberLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetMemberLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $username);
    }
    public function addMemberLegacy_(int $team_id, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddMemberLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddMemberLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $username);
    }
    public function removeMemberLegacy_(int $team_id, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveMemberLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveMemberLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $username);
    }
    public function getMembershipForUserLegacy_(int $team_id, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetMembershipForUserLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\GetMembershipForUserLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $username);
    }
    public function addOrUpdateMembershipForUserLegacy_(int $team_id, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateMembershipForUserLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateMembershipForUserLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $username);
    }
    public function removeMembershipForUserLegacy_(int $team_id, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveMembershipForUserLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveMembershipForUserLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $username);
    }
    public function listProjectsLegacy_(int $team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListProjectsLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListProjectsLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $per_page, $page);
    }
    public function checkPermissionsForProjectLegacy_(int $team_id, int $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CheckPermissionsForProjectLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CheckPermissionsForProjectLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $project_id);
    }
    public function addOrUpdateProjectPermissionsLegacy_(int $team_id, int $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateProjectPermissionsLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateProjectPermissionsLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $project_id);
    }
    public function removeProjectLegacy_(int $team_id, int $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveProjectLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveProjectLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $project_id);
    }
    public function listReposLegacy_(int $team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListReposLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListReposLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $per_page, $page);
    }
    public function checkPermissionsForRepoLegacy_(int $team_id, string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CheckPermissionsForRepoLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\CheckPermissionsForRepoLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $owner, $repo);
    }
    public function addOrUpdateRepoPermissionsLegacy_(int $team_id, string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateRepoPermissionsLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\AddOrUpdateRepoPermissionsLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $owner, $repo);
    }
    public function removeRepoLegacy_(int $team_id, string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveRepoLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\RemoveRepoLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $owner, $repo);
    }
    public function listChildLegacy_(int $team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListChildLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListChildLegacy_($this->requestSchemaValidator, $this->responseSchemaValidator, $team_id, $per_page, $page);
    }
    public function listForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Teams\ListForAuthenticatedUser_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page);
    }
}
