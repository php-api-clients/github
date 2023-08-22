<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\ResponseInterface;
use React\Http\Browser;

use function array_key_exists;

final class Teams
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function list(string $org, int $perPage, int $page): Schema\Team
    {
        if (array_key_exists(Operator\Teams\List_::class, $this->operator) === false) {
            $this->operator[Operator\Teams\List_::class] = new Operator\Teams\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams());
        }

        return $this->operator[Operator\Teams\List_::class]->call($org, $perPage, $page);
    }

    public function listListing(string $org, int $perPage, int $page): Schema\Team
    {
        if (array_key_exists(Operator\Teams\ListListing::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListListing::class] = new Operator\Teams\ListListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams());
        }

        return $this->operator[Operator\Teams\ListListing::class]->call($org, $perPage, $page);
    }

    public function create(string $org, array $params): Schema\TeamFull
    {
        if (array_key_exists(Operator\Teams\Create::class, $this->operator) === false) {
            $this->operator[Operator\Teams\Create::class] = new Operator\Teams\Create($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams());
        }

        return $this->operator[Operator\Teams\Create::class]->call($org, $params);
    }

    public function getByName(string $org, string $teamSlug): Schema\TeamFull
    {
        if (array_key_exists(Operator\Teams\GetByName::class, $this->operator) === false) {
            $this->operator[Operator\Teams\GetByName::class] = new Operator\Teams\GetByName($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug());
        }

        return $this->operator[Operator\Teams\GetByName::class]->call($org, $teamSlug);
    }

    public function deleteInOrg(string $org, string $teamSlug): ResponseInterface
    {
        if (array_key_exists(Operator\Teams\DeleteInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\DeleteInOrg::class] = new Operator\Teams\DeleteInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug());
        }

        return $this->operator[Operator\Teams\DeleteInOrg::class]->call($org, $teamSlug);
    }

    public function updateInOrg(string $org, string $teamSlug, array $params): Schema\TeamFull
    {
        if (array_key_exists(Operator\Teams\UpdateInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\UpdateInOrg::class] = new Operator\Teams\UpdateInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug());
        }

        return $this->operator[Operator\Teams\UpdateInOrg::class]->call($org, $teamSlug, $params);
    }

    public function listDiscussionsInOrg(string $org, string $teamSlug, string $pinned, string $direction, int $perPage, int $page): Schema\TeamDiscussion
    {
        if (array_key_exists(Operator\Teams\ListDiscussionsInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListDiscussionsInOrg::class] = new Operator\Teams\ListDiscussionsInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions());
        }

        return $this->operator[Operator\Teams\ListDiscussionsInOrg::class]->call($org, $teamSlug, $pinned, $direction, $perPage, $page);
    }

    public function listDiscussionsInOrgListing(string $org, string $teamSlug, string $pinned, string $direction, int $perPage, int $page): Schema\TeamDiscussion
    {
        if (array_key_exists(Operator\Teams\ListDiscussionsInOrgListing::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListDiscussionsInOrgListing::class] = new Operator\Teams\ListDiscussionsInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions());
        }

        return $this->operator[Operator\Teams\ListDiscussionsInOrgListing::class]->call($org, $teamSlug, $pinned, $direction, $perPage, $page);
    }

    public function createDiscussionInOrg(string $org, string $teamSlug, array $params): Schema\TeamDiscussion
    {
        if (array_key_exists(Operator\Teams\CreateDiscussionInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\CreateDiscussionInOrg::class] = new Operator\Teams\CreateDiscussionInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions());
        }

        return $this->operator[Operator\Teams\CreateDiscussionInOrg::class]->call($org, $teamSlug, $params);
    }

    public function getDiscussionInOrg(string $org, string $teamSlug, int $discussionNumber): Schema\TeamDiscussion
    {
        if (array_key_exists(Operator\Teams\GetDiscussionInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\GetDiscussionInOrg::class] = new Operator\Teams\GetDiscussionInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber());
        }

        return $this->operator[Operator\Teams\GetDiscussionInOrg::class]->call($org, $teamSlug, $discussionNumber);
    }

    public function deleteDiscussionInOrg(string $org, string $teamSlug, int $discussionNumber): ResponseInterface
    {
        if (array_key_exists(Operator\Teams\DeleteDiscussionInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\DeleteDiscussionInOrg::class] = new Operator\Teams\DeleteDiscussionInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber());
        }

        return $this->operator[Operator\Teams\DeleteDiscussionInOrg::class]->call($org, $teamSlug, $discussionNumber);
    }

    public function updateDiscussionInOrg(string $org, string $teamSlug, int $discussionNumber, array $params): Schema\TeamDiscussion
    {
        if (array_key_exists(Operator\Teams\UpdateDiscussionInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\UpdateDiscussionInOrg::class] = new Operator\Teams\UpdateDiscussionInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber());
        }

        return $this->operator[Operator\Teams\UpdateDiscussionInOrg::class]->call($org, $teamSlug, $discussionNumber, $params);
    }

    public function listDiscussionCommentsInOrg(string $org, string $teamSlug, int $discussionNumber, string $direction, int $perPage, int $page): Schema\TeamDiscussionComment
    {
        if (array_key_exists(Operator\Teams\ListDiscussionCommentsInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListDiscussionCommentsInOrg::class] = new Operator\Teams\ListDiscussionCommentsInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->operator[Operator\Teams\ListDiscussionCommentsInOrg::class]->call($org, $teamSlug, $discussionNumber, $direction, $perPage, $page);
    }

    public function listDiscussionCommentsInOrgListing(string $org, string $teamSlug, int $discussionNumber, string $direction, int $perPage, int $page): Schema\TeamDiscussionComment
    {
        if (array_key_exists(Operator\Teams\ListDiscussionCommentsInOrgListing::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListDiscussionCommentsInOrgListing::class] = new Operator\Teams\ListDiscussionCommentsInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->operator[Operator\Teams\ListDiscussionCommentsInOrgListing::class]->call($org, $teamSlug, $discussionNumber, $direction, $perPage, $page);
    }

    public function createDiscussionCommentInOrg(string $org, string $teamSlug, int $discussionNumber, array $params): Schema\TeamDiscussionComment
    {
        if (array_key_exists(Operator\Teams\CreateDiscussionCommentInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\CreateDiscussionCommentInOrg::class] = new Operator\Teams\CreateDiscussionCommentInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->operator[Operator\Teams\CreateDiscussionCommentInOrg::class]->call($org, $teamSlug, $discussionNumber, $params);
    }

    public function getDiscussionCommentInOrg(string $org, string $teamSlug, int $discussionNumber, int $commentNumber): Schema\TeamDiscussionComment
    {
        if (array_key_exists(Operator\Teams\GetDiscussionCommentInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\GetDiscussionCommentInOrg::class] = new Operator\Teams\GetDiscussionCommentInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber());
        }

        return $this->operator[Operator\Teams\GetDiscussionCommentInOrg::class]->call($org, $teamSlug, $discussionNumber, $commentNumber);
    }

    public function deleteDiscussionCommentInOrg(string $org, string $teamSlug, int $discussionNumber, int $commentNumber): ResponseInterface
    {
        if (array_key_exists(Operator\Teams\DeleteDiscussionCommentInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\DeleteDiscussionCommentInOrg::class] = new Operator\Teams\DeleteDiscussionCommentInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber());
        }

        return $this->operator[Operator\Teams\DeleteDiscussionCommentInOrg::class]->call($org, $teamSlug, $discussionNumber, $commentNumber);
    }

    public function updateDiscussionCommentInOrg(string $org, string $teamSlug, int $discussionNumber, int $commentNumber, array $params): Schema\TeamDiscussionComment
    {
        if (array_key_exists(Operator\Teams\UpdateDiscussionCommentInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\UpdateDiscussionCommentInOrg::class] = new Operator\Teams\UpdateDiscussionCommentInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber());
        }

        return $this->operator[Operator\Teams\UpdateDiscussionCommentInOrg::class]->call($org, $teamSlug, $discussionNumber, $commentNumber, $params);
    }

    public function listPendingInvitationsInOrg(string $org, string $teamSlug, int $perPage, int $page): Schema\OrganizationInvitation
    {
        if (array_key_exists(Operator\Teams\ListPendingInvitationsInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListPendingInvitationsInOrg::class] = new Operator\Teams\ListPendingInvitationsInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Invitations());
        }

        return $this->operator[Operator\Teams\ListPendingInvitationsInOrg::class]->call($org, $teamSlug, $perPage, $page);
    }

    public function listPendingInvitationsInOrgListing(string $org, string $teamSlug, int $perPage, int $page): Schema\OrganizationInvitation
    {
        if (array_key_exists(Operator\Teams\ListPendingInvitationsInOrgListing::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListPendingInvitationsInOrgListing::class] = new Operator\Teams\ListPendingInvitationsInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Invitations());
        }

        return $this->operator[Operator\Teams\ListPendingInvitationsInOrgListing::class]->call($org, $teamSlug, $perPage, $page);
    }

    public function listMembersInOrg(string $org, string $teamSlug, string $role, int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Teams\ListMembersInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListMembersInOrg::class] = new Operator\Teams\ListMembersInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members());
        }

        return $this->operator[Operator\Teams\ListMembersInOrg::class]->call($org, $teamSlug, $role, $perPage, $page);
    }

    public function listMembersInOrgListing(string $org, string $teamSlug, string $role, int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Teams\ListMembersInOrgListing::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListMembersInOrgListing::class] = new Operator\Teams\ListMembersInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Members());
        }

        return $this->operator[Operator\Teams\ListMembersInOrgListing::class]->call($org, $teamSlug, $role, $perPage, $page);
    }

    public function getMembershipForUserInOrg(string $org, string $teamSlug, string $username): Schema\TeamMembership
    {
        if (array_key_exists(Operator\Teams\GetMembershipForUserInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\GetMembershipForUserInOrg::class] = new Operator\Teams\GetMembershipForUserInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username());
        }

        return $this->operator[Operator\Teams\GetMembershipForUserInOrg::class]->call($org, $teamSlug, $username);
    }

    public function addOrUpdateMembershipForUserInOrg(string $org, string $teamSlug, string $username, array $params): Schema\TeamMembership
    {
        if (array_key_exists(Operator\Teams\AddOrUpdateMembershipForUserInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\AddOrUpdateMembershipForUserInOrg::class] = new Operator\Teams\AddOrUpdateMembershipForUserInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username());
        }

        return $this->operator[Operator\Teams\AddOrUpdateMembershipForUserInOrg::class]->call($org, $teamSlug, $username, $params);
    }

    public function removeMembershipForUserInOrg(string $org, string $teamSlug, string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Teams\RemoveMembershipForUserInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\RemoveMembershipForUserInOrg::class] = new Operator\Teams\RemoveMembershipForUserInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Memberships🌀Username());
        }

        return $this->operator[Operator\Teams\RemoveMembershipForUserInOrg::class]->call($org, $teamSlug, $username);
    }

    public function listProjectsInOrg(string $org, string $teamSlug, int $perPage, int $page): Schema\TeamProject
    {
        if (array_key_exists(Operator\Teams\ListProjectsInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListProjectsInOrg::class] = new Operator\Teams\ListProjectsInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects());
        }

        return $this->operator[Operator\Teams\ListProjectsInOrg::class]->call($org, $teamSlug, $perPage, $page);
    }

    public function listProjectsInOrgListing(string $org, string $teamSlug, int $perPage, int $page): Schema\TeamProject
    {
        if (array_key_exists(Operator\Teams\ListProjectsInOrgListing::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListProjectsInOrgListing::class] = new Operator\Teams\ListProjectsInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects());
        }

        return $this->operator[Operator\Teams\ListProjectsInOrgListing::class]->call($org, $teamSlug, $perPage, $page);
    }

    public function checkPermissionsForProjectInOrg(string $org, string $teamSlug, int $projectId): Schema\TeamProject
    {
        if (array_key_exists(Operator\Teams\CheckPermissionsForProjectInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\CheckPermissionsForProjectInOrg::class] = new Operator\Teams\CheckPermissionsForProjectInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId());
        }

        return $this->operator[Operator\Teams\CheckPermissionsForProjectInOrg::class]->call($org, $teamSlug, $projectId);
    }

    public function addOrUpdateProjectPermissionsInOrg(string $org, string $teamSlug, int $projectId, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\Teams\AddOrUpdateProjectPermissionsInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\AddOrUpdateProjectPermissionsInOrg::class] = new Operator\Teams\AddOrUpdateProjectPermissionsInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId());
        }

        return $this->operator[Operator\Teams\AddOrUpdateProjectPermissionsInOrg::class]->call($org, $teamSlug, $projectId, $params);
    }

    public function removeProjectInOrg(string $org, string $teamSlug, int $projectId): ResponseInterface
    {
        if (array_key_exists(Operator\Teams\RemoveProjectInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\RemoveProjectInOrg::class] = new Operator\Teams\RemoveProjectInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Projects🌀ProjectId());
        }

        return $this->operator[Operator\Teams\RemoveProjectInOrg::class]->call($org, $teamSlug, $projectId);
    }

    public function listReposInOrg(string $org, string $teamSlug, int $perPage, int $page): Schema\MinimalRepository
    {
        if (array_key_exists(Operator\Teams\ListReposInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListReposInOrg::class] = new Operator\Teams\ListReposInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos());
        }

        return $this->operator[Operator\Teams\ListReposInOrg::class]->call($org, $teamSlug, $perPage, $page);
    }

    public function listReposInOrgListing(string $org, string $teamSlug, int $perPage, int $page): Schema\MinimalRepository
    {
        if (array_key_exists(Operator\Teams\ListReposInOrgListing::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListReposInOrgListing::class] = new Operator\Teams\ListReposInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos());
        }

        return $this->operator[Operator\Teams\ListReposInOrgListing::class]->call($org, $teamSlug, $perPage, $page);
    }

    public function checkPermissionsForRepoInOrg(string $org, string $teamSlug, string $owner, string $repo): Schema\TeamRepository
    {
        if (array_key_exists(Operator\Teams\CheckPermissionsForRepoInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\CheckPermissionsForRepoInOrg::class] = new Operator\Teams\CheckPermissionsForRepoInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo());
        }

        return $this->operator[Operator\Teams\CheckPermissionsForRepoInOrg::class]->call($org, $teamSlug, $owner, $repo);
    }

    public function addOrUpdateRepoPermissionsInOrg(string $org, string $teamSlug, string $owner, string $repo, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\Teams\AddOrUpdateRepoPermissionsInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\AddOrUpdateRepoPermissionsInOrg::class] = new Operator\Teams\AddOrUpdateRepoPermissionsInOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo());
        }

        return $this->operator[Operator\Teams\AddOrUpdateRepoPermissionsInOrg::class]->call($org, $teamSlug, $owner, $repo, $params);
    }

    public function removeRepoInOrg(string $org, string $teamSlug, string $owner, string $repo): ResponseInterface
    {
        if (array_key_exists(Operator\Teams\RemoveRepoInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\RemoveRepoInOrg::class] = new Operator\Teams\RemoveRepoInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Repos🌀Owner🌀Repo());
        }

        return $this->operator[Operator\Teams\RemoveRepoInOrg::class]->call($org, $teamSlug, $owner, $repo);
    }

    public function listChildInOrg(string $org, string $teamSlug, int $perPage, int $page): Schema\Team
    {
        if (array_key_exists(Operator\Teams\ListChildInOrg::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListChildInOrg::class] = new Operator\Teams\ListChildInOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams());
        }

        return $this->operator[Operator\Teams\ListChildInOrg::class]->call($org, $teamSlug, $perPage, $page);
    }

    public function listChildInOrgListing(string $org, string $teamSlug, int $perPage, int $page): Schema\Team
    {
        if (array_key_exists(Operator\Teams\ListChildInOrgListing::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListChildInOrgListing::class] = new Operator\Teams\ListChildInOrgListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Teams🌀TeamSlug🌀Teams());
        }

        return $this->operator[Operator\Teams\ListChildInOrgListing::class]->call($org, $teamSlug, $perPage, $page);
    }

    public function getLegacy(int $teamId): Schema\TeamFull
    {
        if (array_key_exists(Operator\Teams\GetLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\GetLegacy::class] = new Operator\Teams\GetLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId());
        }

        return $this->operator[Operator\Teams\GetLegacy::class]->call($teamId);
    }

    public function deleteLegacy(int $teamId): ResponseInterface
    {
        if (array_key_exists(Operator\Teams\DeleteLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\DeleteLegacy::class] = new Operator\Teams\DeleteLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId());
        }

        return $this->operator[Operator\Teams\DeleteLegacy::class]->call($teamId);
    }

    public function updateLegacy(int $teamId, array $params): Schema\TeamFull
    {
        if (array_key_exists(Operator\Teams\UpdateLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\UpdateLegacy::class] = new Operator\Teams\UpdateLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId());
        }

        return $this->operator[Operator\Teams\UpdateLegacy::class]->call($teamId, $params);
    }

    public function listDiscussionsLegacy(int $teamId, string $direction, int $perPage, int $page): Schema\TeamDiscussion
    {
        if (array_key_exists(Operator\Teams\ListDiscussionsLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListDiscussionsLegacy::class] = new Operator\Teams\ListDiscussionsLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions());
        }

        return $this->operator[Operator\Teams\ListDiscussionsLegacy::class]->call($teamId, $direction, $perPage, $page);
    }

    public function listDiscussionsLegacyListing(int $teamId, string $direction, int $perPage, int $page): Schema\TeamDiscussion
    {
        if (array_key_exists(Operator\Teams\ListDiscussionsLegacyListing::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListDiscussionsLegacyListing::class] = new Operator\Teams\ListDiscussionsLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions());
        }

        return $this->operator[Operator\Teams\ListDiscussionsLegacyListing::class]->call($teamId, $direction, $perPage, $page);
    }

    public function createDiscussionLegacy(int $teamId, array $params): Schema\TeamDiscussion
    {
        if (array_key_exists(Operator\Teams\CreateDiscussionLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\CreateDiscussionLegacy::class] = new Operator\Teams\CreateDiscussionLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions());
        }

        return $this->operator[Operator\Teams\CreateDiscussionLegacy::class]->call($teamId, $params);
    }

    public function getDiscussionLegacy(int $teamId, int $discussionNumber): Schema\TeamDiscussion
    {
        if (array_key_exists(Operator\Teams\GetDiscussionLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\GetDiscussionLegacy::class] = new Operator\Teams\GetDiscussionLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber());
        }

        return $this->operator[Operator\Teams\GetDiscussionLegacy::class]->call($teamId, $discussionNumber);
    }

    public function deleteDiscussionLegacy(int $teamId, int $discussionNumber): ResponseInterface
    {
        if (array_key_exists(Operator\Teams\DeleteDiscussionLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\DeleteDiscussionLegacy::class] = new Operator\Teams\DeleteDiscussionLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber());
        }

        return $this->operator[Operator\Teams\DeleteDiscussionLegacy::class]->call($teamId, $discussionNumber);
    }

    public function updateDiscussionLegacy(int $teamId, int $discussionNumber, array $params): Schema\TeamDiscussion
    {
        if (array_key_exists(Operator\Teams\UpdateDiscussionLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\UpdateDiscussionLegacy::class] = new Operator\Teams\UpdateDiscussionLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber());
        }

        return $this->operator[Operator\Teams\UpdateDiscussionLegacy::class]->call($teamId, $discussionNumber, $params);
    }

    public function listDiscussionCommentsLegacy(int $teamId, int $discussionNumber, string $direction, int $perPage, int $page): Schema\TeamDiscussionComment
    {
        if (array_key_exists(Operator\Teams\ListDiscussionCommentsLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListDiscussionCommentsLegacy::class] = new Operator\Teams\ListDiscussionCommentsLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->operator[Operator\Teams\ListDiscussionCommentsLegacy::class]->call($teamId, $discussionNumber, $direction, $perPage, $page);
    }

    public function listDiscussionCommentsLegacyListing(int $teamId, int $discussionNumber, string $direction, int $perPage, int $page): Schema\TeamDiscussionComment
    {
        if (array_key_exists(Operator\Teams\ListDiscussionCommentsLegacyListing::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListDiscussionCommentsLegacyListing::class] = new Operator\Teams\ListDiscussionCommentsLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->operator[Operator\Teams\ListDiscussionCommentsLegacyListing::class]->call($teamId, $discussionNumber, $direction, $perPage, $page);
    }

    public function createDiscussionCommentLegacy(int $teamId, int $discussionNumber, array $params): Schema\TeamDiscussionComment
    {
        if (array_key_exists(Operator\Teams\CreateDiscussionCommentLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\CreateDiscussionCommentLegacy::class] = new Operator\Teams\CreateDiscussionCommentLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments());
        }

        return $this->operator[Operator\Teams\CreateDiscussionCommentLegacy::class]->call($teamId, $discussionNumber, $params);
    }

    public function getDiscussionCommentLegacy(int $teamId, int $discussionNumber, int $commentNumber): Schema\TeamDiscussionComment
    {
        if (array_key_exists(Operator\Teams\GetDiscussionCommentLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\GetDiscussionCommentLegacy::class] = new Operator\Teams\GetDiscussionCommentLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber());
        }

        return $this->operator[Operator\Teams\GetDiscussionCommentLegacy::class]->call($teamId, $discussionNumber, $commentNumber);
    }

    public function deleteDiscussionCommentLegacy(int $teamId, int $discussionNumber, int $commentNumber): ResponseInterface
    {
        if (array_key_exists(Operator\Teams\DeleteDiscussionCommentLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\DeleteDiscussionCommentLegacy::class] = new Operator\Teams\DeleteDiscussionCommentLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber());
        }

        return $this->operator[Operator\Teams\DeleteDiscussionCommentLegacy::class]->call($teamId, $discussionNumber, $commentNumber);
    }

    public function updateDiscussionCommentLegacy(int $teamId, int $discussionNumber, int $commentNumber, array $params): Schema\TeamDiscussionComment
    {
        if (array_key_exists(Operator\Teams\UpdateDiscussionCommentLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\UpdateDiscussionCommentLegacy::class] = new Operator\Teams\UpdateDiscussionCommentLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Discussions🌀DiscussionNumber🌀Comments🌀CommentNumber());
        }

        return $this->operator[Operator\Teams\UpdateDiscussionCommentLegacy::class]->call($teamId, $discussionNumber, $commentNumber, $params);
    }

    public function listPendingInvitationsLegacy(int $teamId, int $perPage, int $page): Schema\OrganizationInvitation
    {
        if (array_key_exists(Operator\Teams\ListPendingInvitationsLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListPendingInvitationsLegacy::class] = new Operator\Teams\ListPendingInvitationsLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Invitations());
        }

        return $this->operator[Operator\Teams\ListPendingInvitationsLegacy::class]->call($teamId, $perPage, $page);
    }

    public function listPendingInvitationsLegacyListing(int $teamId, int $perPage, int $page): Schema\OrganizationInvitation
    {
        if (array_key_exists(Operator\Teams\ListPendingInvitationsLegacyListing::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListPendingInvitationsLegacyListing::class] = new Operator\Teams\ListPendingInvitationsLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Invitations());
        }

        return $this->operator[Operator\Teams\ListPendingInvitationsLegacyListing::class]->call($teamId, $perPage, $page);
    }

    public function listMembersLegacy(int $teamId, string $role, int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Teams\ListMembersLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListMembersLegacy::class] = new Operator\Teams\ListMembersLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Members());
        }

        return $this->operator[Operator\Teams\ListMembersLegacy::class]->call($teamId, $role, $perPage, $page);
    }

    public function listMembersLegacyListing(int $teamId, string $role, int $perPage, int $page): Schema\SimpleUser
    {
        if (array_key_exists(Operator\Teams\ListMembersLegacyListing::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListMembersLegacyListing::class] = new Operator\Teams\ListMembersLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Members());
        }

        return $this->operator[Operator\Teams\ListMembersLegacyListing::class]->call($teamId, $role, $perPage, $page);
    }

    public function getMemberLegacy(int $teamId, string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Teams\GetMemberLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\GetMemberLegacy::class] = new Operator\Teams\GetMemberLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Members🌀Username());
        }

        return $this->operator[Operator\Teams\GetMemberLegacy::class]->call($teamId, $username);
    }

    public function addMemberLegacy(int $teamId, string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Teams\AddMemberLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\AddMemberLegacy::class] = new Operator\Teams\AddMemberLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Members🌀Username());
        }

        return $this->operator[Operator\Teams\AddMemberLegacy::class]->call($teamId, $username);
    }

    public function removeMemberLegacy(int $teamId, string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Teams\RemoveMemberLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\RemoveMemberLegacy::class] = new Operator\Teams\RemoveMemberLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Members🌀Username());
        }

        return $this->operator[Operator\Teams\RemoveMemberLegacy::class]->call($teamId, $username);
    }

    public function getMembershipForUserLegacy(int $teamId, string $username): Schema\TeamMembership
    {
        if (array_key_exists(Operator\Teams\GetMembershipForUserLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\GetMembershipForUserLegacy::class] = new Operator\Teams\GetMembershipForUserLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Memberships🌀Username());
        }

        return $this->operator[Operator\Teams\GetMembershipForUserLegacy::class]->call($teamId, $username);
    }

    public function addOrUpdateMembershipForUserLegacy(int $teamId, string $username, array $params): Schema\TeamMembership
    {
        if (array_key_exists(Operator\Teams\AddOrUpdateMembershipForUserLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\AddOrUpdateMembershipForUserLegacy::class] = new Operator\Teams\AddOrUpdateMembershipForUserLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Memberships🌀Username());
        }

        return $this->operator[Operator\Teams\AddOrUpdateMembershipForUserLegacy::class]->call($teamId, $username, $params);
    }

    public function removeMembershipForUserLegacy(int $teamId, string $username): ResponseInterface
    {
        if (array_key_exists(Operator\Teams\RemoveMembershipForUserLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\RemoveMembershipForUserLegacy::class] = new Operator\Teams\RemoveMembershipForUserLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Memberships🌀Username());
        }

        return $this->operator[Operator\Teams\RemoveMembershipForUserLegacy::class]->call($teamId, $username);
    }

    public function listProjectsLegacy(int $teamId, int $perPage, int $page): Schema\TeamProject
    {
        if (array_key_exists(Operator\Teams\ListProjectsLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListProjectsLegacy::class] = new Operator\Teams\ListProjectsLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects());
        }

        return $this->operator[Operator\Teams\ListProjectsLegacy::class]->call($teamId, $perPage, $page);
    }

    public function listProjectsLegacyListing(int $teamId, int $perPage, int $page): Schema\TeamProject
    {
        if (array_key_exists(Operator\Teams\ListProjectsLegacyListing::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListProjectsLegacyListing::class] = new Operator\Teams\ListProjectsLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects());
        }

        return $this->operator[Operator\Teams\ListProjectsLegacyListing::class]->call($teamId, $perPage, $page);
    }

    public function checkPermissionsForProjectLegacy(int $teamId, int $projectId): Schema\TeamProject
    {
        if (array_key_exists(Operator\Teams\CheckPermissionsForProjectLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\CheckPermissionsForProjectLegacy::class] = new Operator\Teams\CheckPermissionsForProjectLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId());
        }

        return $this->operator[Operator\Teams\CheckPermissionsForProjectLegacy::class]->call($teamId, $projectId);
    }

    public function addOrUpdateProjectPermissionsLegacy(int $teamId, int $projectId, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\Teams\AddOrUpdateProjectPermissionsLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\AddOrUpdateProjectPermissionsLegacy::class] = new Operator\Teams\AddOrUpdateProjectPermissionsLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId());
        }

        return $this->operator[Operator\Teams\AddOrUpdateProjectPermissionsLegacy::class]->call($teamId, $projectId, $params);
    }

    public function removeProjectLegacy(int $teamId, int $projectId): ResponseInterface
    {
        if (array_key_exists(Operator\Teams\RemoveProjectLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\RemoveProjectLegacy::class] = new Operator\Teams\RemoveProjectLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Projects🌀ProjectId());
        }

        return $this->operator[Operator\Teams\RemoveProjectLegacy::class]->call($teamId, $projectId);
    }

    public function listReposLegacy(int $teamId, int $perPage, int $page): Schema\MinimalRepository
    {
        if (array_key_exists(Operator\Teams\ListReposLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListReposLegacy::class] = new Operator\Teams\ListReposLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Repos());
        }

        return $this->operator[Operator\Teams\ListReposLegacy::class]->call($teamId, $perPage, $page);
    }

    public function listReposLegacyListing(int $teamId, int $perPage, int $page): Schema\MinimalRepository
    {
        if (array_key_exists(Operator\Teams\ListReposLegacyListing::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListReposLegacyListing::class] = new Operator\Teams\ListReposLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Repos());
        }

        return $this->operator[Operator\Teams\ListReposLegacyListing::class]->call($teamId, $perPage, $page);
    }

    public function checkPermissionsForRepoLegacy(int $teamId, string $owner, string $repo): Schema\TeamRepository
    {
        if (array_key_exists(Operator\Teams\CheckPermissionsForRepoLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\CheckPermissionsForRepoLegacy::class] = new Operator\Teams\CheckPermissionsForRepoLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo());
        }

        return $this->operator[Operator\Teams\CheckPermissionsForRepoLegacy::class]->call($teamId, $owner, $repo);
    }

    public function addOrUpdateRepoPermissionsLegacy(int $teamId, string $owner, string $repo, array $params): ResponseInterface
    {
        if (array_key_exists(Operator\Teams\AddOrUpdateRepoPermissionsLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\AddOrUpdateRepoPermissionsLegacy::class] = new Operator\Teams\AddOrUpdateRepoPermissionsLegacy($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo());
        }

        return $this->operator[Operator\Teams\AddOrUpdateRepoPermissionsLegacy::class]->call($teamId, $owner, $repo, $params);
    }

    public function removeRepoLegacy(int $teamId, string $owner, string $repo): ResponseInterface
    {
        if (array_key_exists(Operator\Teams\RemoveRepoLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\RemoveRepoLegacy::class] = new Operator\Teams\RemoveRepoLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Repos🌀Owner🌀Repo());
        }

        return $this->operator[Operator\Teams\RemoveRepoLegacy::class]->call($teamId, $owner, $repo);
    }

    public function listChildLegacy(int $teamId, int $perPage, int $page): Schema\Team
    {
        if (array_key_exists(Operator\Teams\ListChildLegacy::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListChildLegacy::class] = new Operator\Teams\ListChildLegacy($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Teams());
        }

        return $this->operator[Operator\Teams\ListChildLegacy::class]->call($teamId, $perPage, $page);
    }

    public function listChildLegacyListing(int $teamId, int $perPage, int $page): Schema\Team
    {
        if (array_key_exists(Operator\Teams\ListChildLegacyListing::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListChildLegacyListing::class] = new Operator\Teams\ListChildLegacyListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Teams🌀TeamId🌀Teams());
        }

        return $this->operator[Operator\Teams\ListChildLegacyListing::class]->call($teamId, $perPage, $page);
    }

    public function listForAuthenticatedUser(int $perPage, int $page): Schema\TeamFull
    {
        if (array_key_exists(Operator\Teams\ListForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListForAuthenticatedUser::class] = new Operator\Teams\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Teams());
        }

        return $this->operator[Operator\Teams\ListForAuthenticatedUser::class]->call($perPage, $page);
    }

    public function listForAuthenticatedUserListing(int $perPage, int $page): Schema\TeamFull
    {
        if (array_key_exists(Operator\Teams\ListForAuthenticatedUserListing::class, $this->operator) === false) {
            $this->operator[Operator\Teams\ListForAuthenticatedUserListing::class] = new Operator\Teams\ListForAuthenticatedUserListing($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Teams());
        }

        return $this->operator[Operator\Teams\ListForAuthenticatedUserListing::class]->call($perPage, $page);
    }
}
