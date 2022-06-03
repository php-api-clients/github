<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation;

final class Teams
{
    public function list_($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\List_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\List_($org, $per_page, $page);
    }
    public function create_($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\Create_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\Create_($org);
    }
    public function getByName_($org, $team_slug) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetByName_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetByName_($org, $team_slug);
    }
    public function get_($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\Get_($team_id);
    }
    public function delete_($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\Delete_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\Delete_($team_id);
    }
    public function update_($team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\Update_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\Update_($team_id);
    }
    public function listDiscussions_(string $accept = 'application/vnd.github.echo-preview+json', $team_id, string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListDiscussions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListDiscussions_($accept, $team_id, $direction, $per_page, $page);
    }
    public function createDiscussion_(string $accept = 'application/vnd.github.echo-preview+json', $team_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\CreateDiscussion_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\CreateDiscussion_($accept, $team_id);
    }
    public function getDiscussion_(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetDiscussion_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetDiscussion_($accept, $team_id, $discussion_number);
    }
    public function deleteDiscussion_(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\DeleteDiscussion_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\DeleteDiscussion_($accept, $team_id, $discussion_number);
    }
    public function updateDiscussion_(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\UpdateDiscussion_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\UpdateDiscussion_($accept, $team_id, $discussion_number);
    }
    public function listDiscussionComments_(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListDiscussionComments_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListDiscussionComments_($accept, $team_id, $discussion_number, $direction, $per_page, $page);
    }
    public function createDiscussionComment_(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\CreateDiscussionComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\CreateDiscussionComment_($accept, $team_id, $discussion_number);
    }
    public function getDiscussionComment_(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetDiscussionComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetDiscussionComment_($accept, $team_id, $discussion_number, $comment_number);
    }
    public function deleteDiscussionComment_(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\DeleteDiscussionComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\DeleteDiscussionComment_($accept, $team_id, $discussion_number, $comment_number);
    }
    public function updateDiscussionComment_(string $accept = 'application/vnd.github.echo-preview+json', $team_id, $discussion_number, $comment_number) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\UpdateDiscussionComment_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\UpdateDiscussionComment_($accept, $team_id, $discussion_number, $comment_number);
    }
    public function listMembers_($team_id, string $role = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListMembers_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListMembers_($team_id, $role, $per_page, $page);
    }
    public function getMemberLegacy_($team_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetMemberLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetMemberLegacy_($team_id, $username);
    }
    public function addMemberLegacy_($team_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\AddMemberLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\AddMemberLegacy_($team_id, $username);
    }
    public function removeMemberLegacy_($team_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\RemoveMemberLegacy_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\RemoveMemberLegacy_($team_id, $username);
    }
    public function getMembershipForUser_($team_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetMembershipForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\GetMembershipForUser_($team_id, $username);
    }
    public function addOrUpdateMembershipForUser_($team_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\AddOrUpdateMembershipForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\AddOrUpdateMembershipForUser_($team_id, $username);
    }
    public function removeMembershipForUser_($team_id, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\RemoveMembershipForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\RemoveMembershipForUser_($team_id, $username);
    }
    public function listProjects_(string $accept = 'application/vnd.github.inertia-preview+json', $team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListProjects_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListProjects_($accept, $team_id, $per_page, $page);
    }
    public function checkPermissionsForProject_(string $accept = 'application/vnd.github.inertia-preview+json', $team_id, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\CheckPermissionsForProject_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\CheckPermissionsForProject_($accept, $team_id, $project_id);
    }
    public function addOrUpdateProjectPermissions_(string $accept = 'application/vnd.github.inertia-preview+json', $team_id, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\AddOrUpdateProjectPermissions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\AddOrUpdateProjectPermissions_($accept, $team_id, $project_id);
    }
    public function removeProject_($team_id, $project_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\RemoveProject_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\RemoveProject_($team_id, $project_id);
    }
    public function listRepos_($team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListRepos_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListRepos_($team_id, $per_page, $page);
    }
    public function checkPermissionsForRepo_($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\CheckPermissionsForRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\CheckPermissionsForRepo_($team_id, $owner, $repo);
    }
    public function addOrUpdateRepoPermissions_($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\AddOrUpdateRepoPermissions_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\AddOrUpdateRepoPermissions_($team_id, $owner, $repo);
    }
    public function removeRepo_($team_id, $owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\RemoveRepo_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\RemoveRepo_($team_id, $owner, $repo);
    }
    public function listChild_($team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListChild_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListChild_($team_id, $per_page, $page);
    }
    public function listForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Teams\ListForAuthenticatedUser_($per_page, $page);
    }
}
