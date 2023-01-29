<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Teams
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\OptimizedHydratorMapper $hydrator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function list_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\List_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\List_($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $per_page, $page);
    }
    public function create(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\Create
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\Create($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
    }
    public function getByName(string $org, string $team_slug) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetByName
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetByName($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug);
    }
    public function deleteInOrg(string $org, string $team_slug) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug);
    }
    public function updateInOrg(string $org, string $team_slug) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug);
    }
    public function listDiscussionsInOrg(string $org, string $team_slug, string $direction = 'desc', int $per_page = 30, int $page = 1, string $pinned) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionsInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionsInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $direction, $per_page, $page, $pinned);
    }
    public function createDiscussionInOrg(string $org, string $team_slug) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug);
    }
    public function getDiscussionInOrg(string $org, string $team_slug, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $discussion_number);
    }
    public function deleteDiscussionInOrg(string $org, string $team_slug, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $discussion_number);
    }
    public function updateDiscussionInOrg(string $org, string $team_slug, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $discussion_number);
    }
    public function listDiscussionCommentsInOrg(string $org, string $team_slug, int $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionCommentsInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionCommentsInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $discussion_number, $direction, $per_page, $page);
    }
    public function createDiscussionCommentInOrg(string $org, string $team_slug, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionCommentInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionCommentInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $discussion_number);
    }
    public function getDiscussionCommentInOrg(string $org, string $team_slug, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionCommentInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionCommentInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $discussion_number, $comment_number);
    }
    public function deleteDiscussionCommentInOrg(string $org, string $team_slug, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionCommentInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionCommentInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $discussion_number, $comment_number);
    }
    public function updateDiscussionCommentInOrg(string $org, string $team_slug, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionCommentInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionCommentInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $discussion_number, $comment_number);
    }
    public function listPendingInvitationsInOrg(string $org, string $team_slug, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListPendingInvitationsInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListPendingInvitationsInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $per_page, $page);
    }
    public function listMembersInOrg(string $org, string $team_slug, string $role = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListMembersInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListMembersInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $role, $per_page, $page);
    }
    public function getMembershipForUserInOrg(string $org, string $team_slug, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetMembershipForUserInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetMembershipForUserInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $username);
    }
    public function addOrUpdateMembershipForUserInOrg(string $org, string $team_slug, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateMembershipForUserInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateMembershipForUserInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $username);
    }
    public function removeMembershipForUserInOrg(string $org, string $team_slug, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveMembershipForUserInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveMembershipForUserInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $username);
    }
    public function listProjectsInOrg(string $org, string $team_slug, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListProjectsInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListProjectsInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $per_page, $page);
    }
    public function checkPermissionsForProjectInOrg(string $org, string $team_slug, int $project_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForProjectInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForProjectInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $project_id);
    }
    public function addOrUpdateProjectPermissionsInOrg(string $org, string $team_slug, int $project_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateProjectPermissionsInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateProjectPermissionsInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $project_id);
    }
    public function removeProjectInOrg(string $org, string $team_slug, int $project_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveProjectInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveProjectInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $project_id);
    }
    public function listReposInOrg(string $org, string $team_slug, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListReposInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListReposInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $per_page, $page);
    }
    public function checkPermissionsForRepoInOrg(string $org, string $team_slug, string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForRepoInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForRepoInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $owner, $repo);
    }
    public function addOrUpdateRepoPermissionsInOrg(string $org, string $team_slug, string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateRepoPermissionsInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateRepoPermissionsInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $owner, $repo);
    }
    public function removeRepoInOrg(string $org, string $team_slug, string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveRepoInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveRepoInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $owner, $repo);
    }
    public function listChildInOrg(string $org, string $team_slug, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListChildInOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListChildInOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org, $team_slug, $per_page, $page);
    }
    public function getLegacy(int $team_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id);
    }
    public function deleteLegacy(int $team_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id);
    }
    public function updateLegacy(int $team_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id);
    }
    public function listDiscussionsLegacy(int $team_id, string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionsLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionsLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $direction, $per_page, $page);
    }
    public function createDiscussionLegacy(int $team_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id);
    }
    public function getDiscussionLegacy(int $team_id, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $discussion_number);
    }
    public function deleteDiscussionLegacy(int $team_id, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $discussion_number);
    }
    public function updateDiscussionLegacy(int $team_id, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $discussion_number);
    }
    public function listDiscussionCommentsLegacy(int $team_id, int $discussion_number, string $direction = 'desc', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionCommentsLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListDiscussionCommentsLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $discussion_number, $direction, $per_page, $page);
    }
    public function createDiscussionCommentLegacy(int $team_id, int $discussion_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionCommentLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CreateDiscussionCommentLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $discussion_number);
    }
    public function getDiscussionCommentLegacy(int $team_id, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionCommentLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetDiscussionCommentLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $discussion_number, $comment_number);
    }
    public function deleteDiscussionCommentLegacy(int $team_id, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionCommentLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\DeleteDiscussionCommentLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $discussion_number, $comment_number);
    }
    public function updateDiscussionCommentLegacy(int $team_id, int $discussion_number, int $comment_number) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionCommentLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\UpdateDiscussionCommentLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $discussion_number, $comment_number);
    }
    public function listPendingInvitationsLegacy(int $team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListPendingInvitationsLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListPendingInvitationsLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $per_page, $page);
    }
    public function listMembersLegacy(int $team_id, string $role = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListMembersLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListMembersLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $role, $per_page, $page);
    }
    public function getMemberLegacy(int $team_id, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetMemberLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetMemberLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $username);
    }
    public function addMemberLegacy(int $team_id, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddMemberLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddMemberLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $username);
    }
    public function removeMemberLegacy(int $team_id, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveMemberLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveMemberLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $username);
    }
    public function getMembershipForUserLegacy(int $team_id, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetMembershipForUserLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\GetMembershipForUserLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $username);
    }
    public function addOrUpdateMembershipForUserLegacy(int $team_id, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateMembershipForUserLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateMembershipForUserLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $username);
    }
    public function removeMembershipForUserLegacy(int $team_id, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveMembershipForUserLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveMembershipForUserLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $username);
    }
    public function listProjectsLegacy(int $team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListProjectsLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListProjectsLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $per_page, $page);
    }
    public function checkPermissionsForProjectLegacy(int $team_id, int $project_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForProjectLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForProjectLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $project_id);
    }
    public function addOrUpdateProjectPermissionsLegacy(int $team_id, int $project_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateProjectPermissionsLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateProjectPermissionsLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $project_id);
    }
    public function removeProjectLegacy(int $team_id, int $project_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveProjectLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveProjectLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $project_id);
    }
    public function listReposLegacy(int $team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListReposLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListReposLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $per_page, $page);
    }
    public function checkPermissionsForRepoLegacy(int $team_id, string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForRepoLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\CheckPermissionsForRepoLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $owner, $repo);
    }
    public function addOrUpdateRepoPermissionsLegacy(int $team_id, string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateRepoPermissionsLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\AddOrUpdateRepoPermissionsLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $owner, $repo);
    }
    public function removeRepoLegacy(int $team_id, string $owner, string $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveRepoLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\RemoveRepoLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $owner, $repo);
    }
    public function listChildLegacy(int $team_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListChildLegacy
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListChildLegacy($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $team_id, $per_page, $page);
    }
    public function listForAuthenticatedUser(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListForAuthenticatedUser($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $per_page, $page);
    }
}
