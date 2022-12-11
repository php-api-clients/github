<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation;

final class Teams
{
    public function list_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\List_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\List_($org, $per_page, $page);
    }
    public function create_(string $org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\Create_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\Create_($org);
    }
    public function getByName_(string $org, string $team_slug) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetByName_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetByName_($org, $team_slug);
    }
    public function deleteInOrg_(string $org, string $team_slug) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\DeleteInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\DeleteInOrg_($org, $team_slug);
    }
    public function updateInOrg_(string $org, string $team_slug) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\UpdateInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\UpdateInOrg_($org, $team_slug);
    }
    public function listDiscussionsInOrg_(string $org, string $team_slug, string $direction = 'desc', int $per_page = 30, int $page = 1, string $pinned) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListDiscussionsInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListDiscussionsInOrg_($org, $team_slug, $direction, $per_page, $page, $pinned);
    }
    public function createDiscussionInOrg_(string $org, string $team_slug) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CreateDiscussionInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CreateDiscussionInOrg_($org, $team_slug);
    }
    public function getDiscussionInOrg_(string $org, string $team_slug, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetDiscussionInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetDiscussionInOrg_($org, $team_slug, $discussion_number);
    }
    public function deleteDiscussionInOrg_(string $org, string $team_slug, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\DeleteDiscussionInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\DeleteDiscussionInOrg_($org, $team_slug, $discussion_number);
    }
    public function updateDiscussionInOrg_(string $org, string $team_slug, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\UpdateDiscussionInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\UpdateDiscussionInOrg_($org, $team_slug, $discussion_number);
    }
    public function listDiscussionCommentsInOrg_(string $org, string $team_slug, int $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListDiscussionCommentsInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListDiscussionCommentsInOrg_($org, $team_slug, $discussion_number, $direction, $per_page, $page);
    }
    public function createDiscussionCommentInOrg_(string $org, string $team_slug, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CreateDiscussionCommentInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CreateDiscussionCommentInOrg_($org, $team_slug, $discussion_number);
    }
    public function getDiscussionCommentInOrg_(string $org, string $team_slug, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetDiscussionCommentInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetDiscussionCommentInOrg_($org, $team_slug, $discussion_number, $comment_number);
    }
    public function deleteDiscussionCommentInOrg_(string $org, string $team_slug, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\DeleteDiscussionCommentInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\DeleteDiscussionCommentInOrg_($org, $team_slug, $discussion_number, $comment_number);
    }
    public function updateDiscussionCommentInOrg_(string $org, string $team_slug, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\UpdateDiscussionCommentInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\UpdateDiscussionCommentInOrg_($org, $team_slug, $discussion_number, $comment_number);
    }
    public function listMembersInOrg_(string $org, string $team_slug, string $role = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListMembersInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListMembersInOrg_($org, $team_slug, $role, $per_page, $page);
    }
    public function getMembershipForUserInOrg_(string $org, string $team_slug, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetMembershipForUserInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetMembershipForUserInOrg_($org, $team_slug, $username);
    }
    public function addOrUpdateMembershipForUserInOrg_(string $org, string $team_slug, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddOrUpdateMembershipForUserInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddOrUpdateMembershipForUserInOrg_($org, $team_slug, $username);
    }
    public function removeMembershipForUserInOrg_(string $org, string $team_slug, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveMembershipForUserInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveMembershipForUserInOrg_($org, $team_slug, $username);
    }
    public function listProjectsInOrg_(string $org, string $team_slug, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListProjectsInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListProjectsInOrg_($org, $team_slug, $per_page, $page);
    }
    public function checkPermissionsForProjectInOrg_(string $org, string $team_slug, int $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CheckPermissionsForProjectInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CheckPermissionsForProjectInOrg_($org, $team_slug, $project_id);
    }
    public function addOrUpdateProjectPermissionsInOrg_(string $org, string $team_slug, int $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddOrUpdateProjectPermissionsInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddOrUpdateProjectPermissionsInOrg_($org, $team_slug, $project_id);
    }
    public function removeProjectInOrg_(string $org, string $team_slug, int $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveProjectInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveProjectInOrg_($org, $team_slug, $project_id);
    }
    public function listReposInOrg_(string $org, string $team_slug, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListReposInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListReposInOrg_($org, $team_slug, $per_page, $page);
    }
    public function checkPermissionsForRepoInOrg_(string $org, string $team_slug, string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CheckPermissionsForRepoInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CheckPermissionsForRepoInOrg_($org, $team_slug, $owner, $repo);
    }
    public function addOrUpdateRepoPermissionsInOrg_(string $org, string $team_slug, string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddOrUpdateRepoPermissionsInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddOrUpdateRepoPermissionsInOrg_($org, $team_slug, $owner, $repo);
    }
    public function removeRepoInOrg_(string $org, string $team_slug, string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveRepoInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveRepoInOrg_($org, $team_slug, $owner, $repo);
    }
    public function listChildInOrg_(string $org, string $team_slug, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListChildInOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListChildInOrg_($org, $team_slug, $per_page, $page);
    }
    public function getLegacy_(int $team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetLegacy_($team_id);
    }
    public function deleteLegacy_(int $team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\DeleteLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\DeleteLegacy_($team_id);
    }
    public function updateLegacy_(int $team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\UpdateLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\UpdateLegacy_($team_id);
    }
    public function listDiscussionsLegacy_(int $team_id, string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListDiscussionsLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListDiscussionsLegacy_($team_id, $direction, $per_page, $page);
    }
    public function createDiscussionLegacy_(int $team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CreateDiscussionLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CreateDiscussionLegacy_($team_id);
    }
    public function getDiscussionLegacy_(int $team_id, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetDiscussionLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetDiscussionLegacy_($team_id, $discussion_number);
    }
    public function deleteDiscussionLegacy_(int $team_id, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\DeleteDiscussionLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\DeleteDiscussionLegacy_($team_id, $discussion_number);
    }
    public function updateDiscussionLegacy_(int $team_id, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\UpdateDiscussionLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\UpdateDiscussionLegacy_($team_id, $discussion_number);
    }
    public function listDiscussionCommentsLegacy_(int $team_id, int $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListDiscussionCommentsLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListDiscussionCommentsLegacy_($team_id, $discussion_number, $direction, $per_page, $page);
    }
    public function createDiscussionCommentLegacy_(int $team_id, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CreateDiscussionCommentLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CreateDiscussionCommentLegacy_($team_id, $discussion_number);
    }
    public function getDiscussionCommentLegacy_(int $team_id, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetDiscussionCommentLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetDiscussionCommentLegacy_($team_id, $discussion_number, $comment_number);
    }
    public function deleteDiscussionCommentLegacy_(int $team_id, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\DeleteDiscussionCommentLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\DeleteDiscussionCommentLegacy_($team_id, $discussion_number, $comment_number);
    }
    public function updateDiscussionCommentLegacy_(int $team_id, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\UpdateDiscussionCommentLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\UpdateDiscussionCommentLegacy_($team_id, $discussion_number, $comment_number);
    }
    public function listMembersLegacy_(int $team_id, string $role = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListMembersLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListMembersLegacy_($team_id, $role, $per_page, $page);
    }
    public function getMemberLegacy_(int $team_id, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetMemberLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetMemberLegacy_($team_id, $username);
    }
    public function addMemberLegacy_(int $team_id, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddMemberLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddMemberLegacy_($team_id, $username);
    }
    public function removeMemberLegacy_(int $team_id, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveMemberLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveMemberLegacy_($team_id, $username);
    }
    public function getMembershipForUserLegacy_(int $team_id, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetMembershipForUserLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\GetMembershipForUserLegacy_($team_id, $username);
    }
    public function addOrUpdateMembershipForUserLegacy_(int $team_id, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddOrUpdateMembershipForUserLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddOrUpdateMembershipForUserLegacy_($team_id, $username);
    }
    public function removeMembershipForUserLegacy_(int $team_id, string $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveMembershipForUserLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveMembershipForUserLegacy_($team_id, $username);
    }
    public function listProjectsLegacy_(int $team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListProjectsLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListProjectsLegacy_($team_id, $per_page, $page);
    }
    public function checkPermissionsForProjectLegacy_(int $team_id, int $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CheckPermissionsForProjectLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CheckPermissionsForProjectLegacy_($team_id, $project_id);
    }
    public function addOrUpdateProjectPermissionsLegacy_(int $team_id, int $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddOrUpdateProjectPermissionsLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddOrUpdateProjectPermissionsLegacy_($team_id, $project_id);
    }
    public function removeProjectLegacy_(int $team_id, int $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveProjectLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveProjectLegacy_($team_id, $project_id);
    }
    public function listReposLegacy_(int $team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListReposLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListReposLegacy_($team_id, $per_page, $page);
    }
    public function checkPermissionsForRepoLegacy_(int $team_id, string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CheckPermissionsForRepoLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\CheckPermissionsForRepoLegacy_($team_id, $owner, $repo);
    }
    public function addOrUpdateRepoPermissionsLegacy_(int $team_id, string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddOrUpdateRepoPermissionsLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\AddOrUpdateRepoPermissionsLegacy_($team_id, $owner, $repo);
    }
    public function removeRepoLegacy_(int $team_id, string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveRepoLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\RemoveRepoLegacy_($team_id, $owner, $repo);
    }
    public function listChildLegacy_(int $team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListChildLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListChildLegacy_($team_id, $per_page, $page);
    }
    public function listForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Teams\ListForAuthenticatedUser_($per_page, $page);
    }
}
