<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation;

final class Teams
{
    public function list_($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\List_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\List_($org, $per_page, $page);
    }
    public function create_($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\Create_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\Create_($org);
    }
    public function getByName_($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\GetByName_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\GetByName_($org, $team_slug);
    }
    public function deleteInOrg_($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\DeleteInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\DeleteInOrg_($org, $team_slug);
    }
    public function updateInOrg_($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\UpdateInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\UpdateInOrg_($org, $team_slug);
    }
    public function listDiscussionsInOrg_($org, $team_slug, string $direction = 'desc', int $per_page = 30, int $page = 1, $pinned) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListDiscussionsInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListDiscussionsInOrg_($org, $team_slug, $direction, $per_page, $page, $pinned);
    }
    public function createDiscussionInOrg_($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CreateDiscussionInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CreateDiscussionInOrg_($org, $team_slug);
    }
    public function getDiscussionInOrg_($org, $team_slug, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\GetDiscussionInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\GetDiscussionInOrg_($org, $team_slug, $discussion_number);
    }
    public function deleteDiscussionInOrg_($org, $team_slug, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\DeleteDiscussionInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\DeleteDiscussionInOrg_($org, $team_slug, $discussion_number);
    }
    public function updateDiscussionInOrg_($org, $team_slug, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\UpdateDiscussionInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\UpdateDiscussionInOrg_($org, $team_slug, $discussion_number);
    }
    public function listDiscussionCommentsInOrg_($org, $team_slug, $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListDiscussionCommentsInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListDiscussionCommentsInOrg_($org, $team_slug, $discussion_number, $direction, $per_page, $page);
    }
    public function createDiscussionCommentInOrg_($org, $team_slug, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CreateDiscussionCommentInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CreateDiscussionCommentInOrg_($org, $team_slug, $discussion_number);
    }
    public function getDiscussionCommentInOrg_($org, $team_slug, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\GetDiscussionCommentInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\GetDiscussionCommentInOrg_($org, $team_slug, $discussion_number, $comment_number);
    }
    public function deleteDiscussionCommentInOrg_($org, $team_slug, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\DeleteDiscussionCommentInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\DeleteDiscussionCommentInOrg_($org, $team_slug, $discussion_number, $comment_number);
    }
    public function updateDiscussionCommentInOrg_($org, $team_slug, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\UpdateDiscussionCommentInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\UpdateDiscussionCommentInOrg_($org, $team_slug, $discussion_number, $comment_number);
    }
    public function listMembersInOrg_($org, $team_slug, string $role = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListMembersInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListMembersInOrg_($org, $team_slug, $role, $per_page, $page);
    }
    public function getMembershipForUserInOrg_($org, $team_slug, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\GetMembershipForUserInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\GetMembershipForUserInOrg_($org, $team_slug, $username);
    }
    public function addOrUpdateMembershipForUserInOrg_($org, $team_slug, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddOrUpdateMembershipForUserInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddOrUpdateMembershipForUserInOrg_($org, $team_slug, $username);
    }
    public function removeMembershipForUserInOrg_($org, $team_slug, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveMembershipForUserInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveMembershipForUserInOrg_($org, $team_slug, $username);
    }
    public function listProjectsInOrg_($org, $team_slug, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListProjectsInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListProjectsInOrg_($org, $team_slug, $per_page, $page);
    }
    public function checkPermissionsForProjectInOrg_($org, $team_slug, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CheckPermissionsForProjectInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CheckPermissionsForProjectInOrg_($org, $team_slug, $project_id);
    }
    public function addOrUpdateProjectPermissionsInOrg_($org, $team_slug, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddOrUpdateProjectPermissionsInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddOrUpdateProjectPermissionsInOrg_($org, $team_slug, $project_id);
    }
    public function removeProjectInOrg_($org, $team_slug, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveProjectInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveProjectInOrg_($org, $team_slug, $project_id);
    }
    public function listReposInOrg_($org, $team_slug, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListReposInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListReposInOrg_($org, $team_slug, $per_page, $page);
    }
    public function checkPermissionsForRepoInOrg_($org, $team_slug, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CheckPermissionsForRepoInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CheckPermissionsForRepoInOrg_($org, $team_slug, $owner, $repo);
    }
    public function addOrUpdateRepoPermissionsInOrg_($org, $team_slug, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddOrUpdateRepoPermissionsInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddOrUpdateRepoPermissionsInOrg_($org, $team_slug, $owner, $repo);
    }
    public function removeRepoInOrg_($org, $team_slug, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveRepoInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveRepoInOrg_($org, $team_slug, $owner, $repo);
    }
    public function listChildInOrg_($org, $team_slug, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListChildInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListChildInOrg_($org, $team_slug, $per_page, $page);
    }
    public function getLegacy_($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\GetLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\GetLegacy_($team_id);
    }
    public function deleteLegacy_($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\DeleteLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\DeleteLegacy_($team_id);
    }
    public function updateLegacy_($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\UpdateLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\UpdateLegacy_($team_id);
    }
    public function listDiscussionsLegacy_($team_id, string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListDiscussionsLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListDiscussionsLegacy_($team_id, $direction, $per_page, $page);
    }
    public function createDiscussionLegacy_($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CreateDiscussionLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CreateDiscussionLegacy_($team_id);
    }
    public function getDiscussionLegacy_($team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\GetDiscussionLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\GetDiscussionLegacy_($team_id, $discussion_number);
    }
    public function deleteDiscussionLegacy_($team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\DeleteDiscussionLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\DeleteDiscussionLegacy_($team_id, $discussion_number);
    }
    public function updateDiscussionLegacy_($team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\UpdateDiscussionLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\UpdateDiscussionLegacy_($team_id, $discussion_number);
    }
    public function listDiscussionCommentsLegacy_($team_id, $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListDiscussionCommentsLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListDiscussionCommentsLegacy_($team_id, $discussion_number, $direction, $per_page, $page);
    }
    public function createDiscussionCommentLegacy_($team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CreateDiscussionCommentLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CreateDiscussionCommentLegacy_($team_id, $discussion_number);
    }
    public function getDiscussionCommentLegacy_($team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\GetDiscussionCommentLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\GetDiscussionCommentLegacy_($team_id, $discussion_number, $comment_number);
    }
    public function deleteDiscussionCommentLegacy_($team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\DeleteDiscussionCommentLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\DeleteDiscussionCommentLegacy_($team_id, $discussion_number, $comment_number);
    }
    public function updateDiscussionCommentLegacy_($team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\UpdateDiscussionCommentLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\UpdateDiscussionCommentLegacy_($team_id, $discussion_number, $comment_number);
    }
    public function listMembersLegacy_($team_id, string $role = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListMembersLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListMembersLegacy_($team_id, $role, $per_page, $page);
    }
    public function getMemberLegacy_($team_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\GetMemberLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\GetMemberLegacy_($team_id, $username);
    }
    public function addMemberLegacy_($team_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddMemberLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddMemberLegacy_($team_id, $username);
    }
    public function removeMemberLegacy_($team_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveMemberLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveMemberLegacy_($team_id, $username);
    }
    public function getMembershipForUserLegacy_($team_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\GetMembershipForUserLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\GetMembershipForUserLegacy_($team_id, $username);
    }
    public function addOrUpdateMembershipForUserLegacy_($team_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddOrUpdateMembershipForUserLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddOrUpdateMembershipForUserLegacy_($team_id, $username);
    }
    public function removeMembershipForUserLegacy_($team_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveMembershipForUserLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveMembershipForUserLegacy_($team_id, $username);
    }
    public function listProjectsLegacy_($team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListProjectsLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListProjectsLegacy_($team_id, $per_page, $page);
    }
    public function checkPermissionsForProjectLegacy_($team_id, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CheckPermissionsForProjectLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CheckPermissionsForProjectLegacy_($team_id, $project_id);
    }
    public function addOrUpdateProjectPermissionsLegacy_($team_id, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddOrUpdateProjectPermissionsLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddOrUpdateProjectPermissionsLegacy_($team_id, $project_id);
    }
    public function removeProjectLegacy_($team_id, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveProjectLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveProjectLegacy_($team_id, $project_id);
    }
    public function listReposLegacy_($team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListReposLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListReposLegacy_($team_id, $per_page, $page);
    }
    public function checkPermissionsForRepoLegacy_($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CheckPermissionsForRepoLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\CheckPermissionsForRepoLegacy_($team_id, $owner, $repo);
    }
    public function addOrUpdateRepoPermissionsLegacy_($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddOrUpdateRepoPermissionsLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\AddOrUpdateRepoPermissionsLegacy_($team_id, $owner, $repo);
    }
    public function removeRepoLegacy_($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveRepoLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\RemoveRepoLegacy_($team_id, $owner, $repo);
    }
    public function listChildLegacy_($team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListChildLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListChildLegacy_($team_id, $per_page, $page);
    }
    public function listForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Teams\ListForAuthenticatedUser_($per_page, $page);
    }
}
