<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\TeamDiscussion;
use ApiClients\Client\GitHub\Schema\TeamDiscussionComment;
use ApiClients\Client\GitHub\Schema\TeamFull;
use ApiClients\Client\GitHub\Schema\TeamMembership;
use ApiClients\Client\GitHub\Schema\TeamProject;
use ApiClients\Client\GitHub\Schema\TeamRepository;

final class Teams
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return Observable<Schema\Team> */
    public function list(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷List_()->call($org, $perPage, $page);
    }

    /** @return Observable<Schema\Team> */
    public function listListing(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListListing()->call($org, $perPage, $page);
    }

    /** @return */
    public function create(string $org, array $params): TeamFull|array
    {
        return $this->operators->teams👷Create()->call($org, $params);
    }

    /** @return */
    public function getByName(string $org, string $teamSlug): TeamFull|array
    {
        return $this->operators->teams👷GetByName()->call($org, $teamSlug);
    }

    /** @return array{code:int} */
    public function deleteInOrg(string $org, string $teamSlug): array
    {
        return $this->operators->teams👷DeleteInOrg()->call($org, $teamSlug);
    }

    /** @return */
    public function updateInOrg(string $org, string $teamSlug, array $params): TeamFull|array
    {
        return $this->operators->teams👷UpdateInOrg()->call($org, $teamSlug, $params);
    }

    /** @return Observable<Schema\TeamDiscussion> */
    public function listDiscussionsInOrg(string $org, string $teamSlug, string $pinned, string $direction, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListDiscussionsInOrg()->call($org, $teamSlug, $pinned, $direction, $perPage, $page);
    }

    /** @return Observable<Schema\TeamDiscussion> */
    public function listDiscussionsInOrgListing(string $org, string $teamSlug, string $pinned, string $direction, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListDiscussionsInOrgListing()->call($org, $teamSlug, $pinned, $direction, $perPage, $page);
    }

    /** @return */
    public function createDiscussionInOrg(string $org, string $teamSlug, array $params): TeamDiscussion|array
    {
        return $this->operators->teams👷CreateDiscussionInOrg()->call($org, $teamSlug, $params);
    }

    /** @return */
    public function getDiscussionInOrg(string $org, string $teamSlug, int $discussionNumber): TeamDiscussion|array
    {
        return $this->operators->teams👷GetDiscussionInOrg()->call($org, $teamSlug, $discussionNumber);
    }

    /** @return array{code:int} */
    public function deleteDiscussionInOrg(string $org, string $teamSlug, int $discussionNumber): array
    {
        return $this->operators->teams👷DeleteDiscussionInOrg()->call($org, $teamSlug, $discussionNumber);
    }

    /** @return */
    public function updateDiscussionInOrg(string $org, string $teamSlug, int $discussionNumber, array $params): TeamDiscussion|array
    {
        return $this->operators->teams👷UpdateDiscussionInOrg()->call($org, $teamSlug, $discussionNumber, $params);
    }

    /** @return Observable<Schema\TeamDiscussionComment> */
    public function listDiscussionCommentsInOrg(string $org, string $teamSlug, int $discussionNumber, string $direction, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListDiscussionCommentsInOrg()->call($org, $teamSlug, $discussionNumber, $direction, $perPage, $page);
    }

    /** @return Observable<Schema\TeamDiscussionComment> */
    public function listDiscussionCommentsInOrgListing(string $org, string $teamSlug, int $discussionNumber, string $direction, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListDiscussionCommentsInOrgListing()->call($org, $teamSlug, $discussionNumber, $direction, $perPage, $page);
    }

    /** @return */
    public function createDiscussionCommentInOrg(string $org, string $teamSlug, int $discussionNumber, array $params): TeamDiscussionComment|array
    {
        return $this->operators->teams👷CreateDiscussionCommentInOrg()->call($org, $teamSlug, $discussionNumber, $params);
    }

    /** @return */
    public function getDiscussionCommentInOrg(string $org, string $teamSlug, int $discussionNumber, int $commentNumber): TeamDiscussionComment|array
    {
        return $this->operators->teams👷GetDiscussionCommentInOrg()->call($org, $teamSlug, $discussionNumber, $commentNumber);
    }

    /** @return array{code:int} */
    public function deleteDiscussionCommentInOrg(string $org, string $teamSlug, int $discussionNumber, int $commentNumber): array
    {
        return $this->operators->teams👷DeleteDiscussionCommentInOrg()->call($org, $teamSlug, $discussionNumber, $commentNumber);
    }

    /** @return */
    public function updateDiscussionCommentInOrg(string $org, string $teamSlug, int $discussionNumber, int $commentNumber, array $params): TeamDiscussionComment|array
    {
        return $this->operators->teams👷UpdateDiscussionCommentInOrg()->call($org, $teamSlug, $discussionNumber, $commentNumber, $params);
    }

    /** @return Observable<Schema\OrganizationInvitation> */
    public function listPendingInvitationsInOrg(string $org, string $teamSlug, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListPendingInvitationsInOrg()->call($org, $teamSlug, $perPage, $page);
    }

    /** @return Observable<Schema\OrganizationInvitation> */
    public function listPendingInvitationsInOrgListing(string $org, string $teamSlug, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListPendingInvitationsInOrgListing()->call($org, $teamSlug, $perPage, $page);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listMembersInOrg(string $org, string $teamSlug, string $role, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListMembersInOrg()->call($org, $teamSlug, $role, $perPage, $page);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listMembersInOrgListing(string $org, string $teamSlug, string $role, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListMembersInOrgListing()->call($org, $teamSlug, $role, $perPage, $page);
    }

    /** @return Schema\TeamMembership|array{code:int} */
    public function getMembershipForUserInOrg(string $org, string $teamSlug, string $username): TeamMembership|array
    {
        return $this->operators->teams👷GetMembershipForUserInOrg()->call($org, $teamSlug, $username);
    }

    /** @return Schema\TeamMembership|array{code:int} */
    public function addOrUpdateMembershipForUserInOrg(string $org, string $teamSlug, string $username, array $params): TeamMembership|array
    {
        return $this->operators->teams👷AddOrUpdateMembershipForUserInOrg()->call($org, $teamSlug, $username, $params);
    }

    /** @return array{code:int} */
    public function removeMembershipForUserInOrg(string $org, string $teamSlug, string $username): array
    {
        return $this->operators->teams👷RemoveMembershipForUserInOrg()->call($org, $teamSlug, $username);
    }

    /** @return Observable<Schema\TeamProject> */
    public function listProjectsInOrg(string $org, string $teamSlug, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListProjectsInOrg()->call($org, $teamSlug, $perPage, $page);
    }

    /** @return Observable<Schema\TeamProject> */
    public function listProjectsInOrgListing(string $org, string $teamSlug, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListProjectsInOrgListing()->call($org, $teamSlug, $perPage, $page);
    }

    /** @return Schema\TeamProject|array{code:int} */
    public function checkPermissionsForProjectInOrg(string $org, string $teamSlug, int $projectId): TeamProject|array
    {
        return $this->operators->teams👷CheckPermissionsForProjectInOrg()->call($org, $teamSlug, $projectId);
    }

    /** @return array{code:int} */
    public function addOrUpdateProjectPermissionsInOrg(string $org, string $teamSlug, int $projectId, array $params): array
    {
        return $this->operators->teams👷AddOrUpdateProjectPermissionsInOrg()->call($org, $teamSlug, $projectId, $params);
    }

    /** @return array{code:int} */
    public function removeProjectInOrg(string $org, string $teamSlug, int $projectId): array
    {
        return $this->operators->teams👷RemoveProjectInOrg()->call($org, $teamSlug, $projectId);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listReposInOrg(string $org, string $teamSlug, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListReposInOrg()->call($org, $teamSlug, $perPage, $page);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listReposInOrgListing(string $org, string $teamSlug, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListReposInOrgListing()->call($org, $teamSlug, $perPage, $page);
    }

    /** @return Schema\TeamRepository|array{code:int} */
    public function checkPermissionsForRepoInOrg(string $org, string $teamSlug, string $owner, string $repo): TeamRepository|array
    {
        return $this->operators->teams👷CheckPermissionsForRepoInOrg()->call($org, $teamSlug, $owner, $repo);
    }

    /** @return array{code:int} */
    public function addOrUpdateRepoPermissionsInOrg(string $org, string $teamSlug, string $owner, string $repo, array $params): array
    {
        return $this->operators->teams👷AddOrUpdateRepoPermissionsInOrg()->call($org, $teamSlug, $owner, $repo, $params);
    }

    /** @return array{code:int} */
    public function removeRepoInOrg(string $org, string $teamSlug, string $owner, string $repo): array
    {
        return $this->operators->teams👷RemoveRepoInOrg()->call($org, $teamSlug, $owner, $repo);
    }

    /** @return Observable<Schema\Team> */
    public function listChildInOrg(string $org, string $teamSlug, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListChildInOrg()->call($org, $teamSlug, $perPage, $page);
    }

    /** @return Observable<Schema\Team> */
    public function listChildInOrgListing(string $org, string $teamSlug, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListChildInOrgListing()->call($org, $teamSlug, $perPage, $page);
    }

    /** @return */
    public function getLegacy(int $teamId): TeamFull|array
    {
        return $this->operators->teams👷GetLegacy()->call($teamId);
    }

    /** @return array{code:int} */
    public function deleteLegacy(int $teamId): array
    {
        return $this->operators->teams👷DeleteLegacy()->call($teamId);
    }

    /** @return */
    public function updateLegacy(int $teamId, array $params): TeamFull|array
    {
        return $this->operators->teams👷UpdateLegacy()->call($teamId, $params);
    }

    /** @return Observable<Schema\TeamDiscussion> */
    public function listDiscussionsLegacy(int $teamId, string $direction, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListDiscussionsLegacy()->call($teamId, $direction, $perPage, $page);
    }

    /** @return Observable<Schema\TeamDiscussion> */
    public function listDiscussionsLegacyListing(int $teamId, string $direction, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListDiscussionsLegacyListing()->call($teamId, $direction, $perPage, $page);
    }

    /** @return */
    public function createDiscussionLegacy(int $teamId, array $params): TeamDiscussion|array
    {
        return $this->operators->teams👷CreateDiscussionLegacy()->call($teamId, $params);
    }

    /** @return */
    public function getDiscussionLegacy(int $teamId, int $discussionNumber): TeamDiscussion|array
    {
        return $this->operators->teams👷GetDiscussionLegacy()->call($teamId, $discussionNumber);
    }

    /** @return array{code:int} */
    public function deleteDiscussionLegacy(int $teamId, int $discussionNumber): array
    {
        return $this->operators->teams👷DeleteDiscussionLegacy()->call($teamId, $discussionNumber);
    }

    /** @return */
    public function updateDiscussionLegacy(int $teamId, int $discussionNumber, array $params): TeamDiscussion|array
    {
        return $this->operators->teams👷UpdateDiscussionLegacy()->call($teamId, $discussionNumber, $params);
    }

    /** @return Observable<Schema\TeamDiscussionComment> */
    public function listDiscussionCommentsLegacy(int $teamId, int $discussionNumber, string $direction, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListDiscussionCommentsLegacy()->call($teamId, $discussionNumber, $direction, $perPage, $page);
    }

    /** @return Observable<Schema\TeamDiscussionComment> */
    public function listDiscussionCommentsLegacyListing(int $teamId, int $discussionNumber, string $direction, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListDiscussionCommentsLegacyListing()->call($teamId, $discussionNumber, $direction, $perPage, $page);
    }

    /** @return */
    public function createDiscussionCommentLegacy(int $teamId, int $discussionNumber, array $params): TeamDiscussionComment|array
    {
        return $this->operators->teams👷CreateDiscussionCommentLegacy()->call($teamId, $discussionNumber, $params);
    }

    /** @return */
    public function getDiscussionCommentLegacy(int $teamId, int $discussionNumber, int $commentNumber): TeamDiscussionComment|array
    {
        return $this->operators->teams👷GetDiscussionCommentLegacy()->call($teamId, $discussionNumber, $commentNumber);
    }

    /** @return array{code:int} */
    public function deleteDiscussionCommentLegacy(int $teamId, int $discussionNumber, int $commentNumber): array
    {
        return $this->operators->teams👷DeleteDiscussionCommentLegacy()->call($teamId, $discussionNumber, $commentNumber);
    }

    /** @return */
    public function updateDiscussionCommentLegacy(int $teamId, int $discussionNumber, int $commentNumber, array $params): TeamDiscussionComment|array
    {
        return $this->operators->teams👷UpdateDiscussionCommentLegacy()->call($teamId, $discussionNumber, $commentNumber, $params);
    }

    /** @return Observable<Schema\OrganizationInvitation> */
    public function listPendingInvitationsLegacy(int $teamId, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListPendingInvitationsLegacy()->call($teamId, $perPage, $page);
    }

    /** @return Observable<Schema\OrganizationInvitation> */
    public function listPendingInvitationsLegacyListing(int $teamId, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListPendingInvitationsLegacyListing()->call($teamId, $perPage, $page);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listMembersLegacy(int $teamId, string $role, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListMembersLegacy()->call($teamId, $role, $perPage, $page);
    }

    /** @return Observable<Schema\SimpleUser> */
    public function listMembersLegacyListing(int $teamId, string $role, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListMembersLegacyListing()->call($teamId, $role, $perPage, $page);
    }

    /** @return array{code:int} */
    public function getMemberLegacy(int $teamId, string $username): array
    {
        return $this->operators->teams👷GetMemberLegacy()->call($teamId, $username);
    }

    /** @return array{code:int} */
    public function addMemberLegacy(int $teamId, string $username): array
    {
        return $this->operators->teams👷AddMemberLegacy()->call($teamId, $username);
    }

    /** @return array{code:int} */
    public function removeMemberLegacy(int $teamId, string $username): array
    {
        return $this->operators->teams👷RemoveMemberLegacy()->call($teamId, $username);
    }

    /** @return */
    public function getMembershipForUserLegacy(int $teamId, string $username): TeamMembership|array
    {
        return $this->operators->teams👷GetMembershipForUserLegacy()->call($teamId, $username);
    }

    /** @return Schema\TeamMembership|array{code:int} */
    public function addOrUpdateMembershipForUserLegacy(int $teamId, string $username, array $params): TeamMembership|array
    {
        return $this->operators->teams👷AddOrUpdateMembershipForUserLegacy()->call($teamId, $username, $params);
    }

    /** @return array{code:int} */
    public function removeMembershipForUserLegacy(int $teamId, string $username): array
    {
        return $this->operators->teams👷RemoveMembershipForUserLegacy()->call($teamId, $username);
    }

    /** @return Observable<Schema\TeamProject> */
    public function listProjectsLegacy(int $teamId, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListProjectsLegacy()->call($teamId, $perPage, $page);
    }

    /** @return Observable<Schema\TeamProject> */
    public function listProjectsLegacyListing(int $teamId, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListProjectsLegacyListing()->call($teamId, $perPage, $page);
    }

    /** @return Schema\TeamProject|array{code:int} */
    public function checkPermissionsForProjectLegacy(int $teamId, int $projectId): TeamProject|array
    {
        return $this->operators->teams👷CheckPermissionsForProjectLegacy()->call($teamId, $projectId);
    }

    /** @return array{code:int} */
    public function addOrUpdateProjectPermissionsLegacy(int $teamId, int $projectId, array $params): array
    {
        return $this->operators->teams👷AddOrUpdateProjectPermissionsLegacy()->call($teamId, $projectId, $params);
    }

    /** @return array{code:int} */
    public function removeProjectLegacy(int $teamId, int $projectId): array
    {
        return $this->operators->teams👷RemoveProjectLegacy()->call($teamId, $projectId);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listReposLegacy(int $teamId, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListReposLegacy()->call($teamId, $perPage, $page);
    }

    /** @return Observable<Schema\MinimalRepository> */
    public function listReposLegacyListing(int $teamId, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListReposLegacyListing()->call($teamId, $perPage, $page);
    }

    /** @return Schema\TeamRepository|array{code:int} */
    public function checkPermissionsForRepoLegacy(int $teamId, string $owner, string $repo): TeamRepository|array
    {
        return $this->operators->teams👷CheckPermissionsForRepoLegacy()->call($teamId, $owner, $repo);
    }

    /** @return array{code:int} */
    public function addOrUpdateRepoPermissionsLegacy(int $teamId, string $owner, string $repo, array $params): array
    {
        return $this->operators->teams👷AddOrUpdateRepoPermissionsLegacy()->call($teamId, $owner, $repo, $params);
    }

    /** @return array{code:int} */
    public function removeRepoLegacy(int $teamId, string $owner, string $repo): array
    {
        return $this->operators->teams👷RemoveRepoLegacy()->call($teamId, $owner, $repo);
    }

    /** @return Observable<Schema\Team> */
    public function listChildLegacy(int $teamId, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListChildLegacy()->call($teamId, $perPage, $page);
    }

    /** @return Observable<Schema\Team> */
    public function listChildLegacyListing(int $teamId, int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListChildLegacyListing()->call($teamId, $perPage, $page);
    }

    /** @return Observable<Schema\TeamFull>|array{code:int} */
    public function listForAuthenticatedUser(int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return Observable<Schema\TeamFull>|array{code:int} */
    public function listForAuthenticatedUserListing(int $perPage, int $page): iterable
    {
        return $this->operators->teams👷ListForAuthenticatedUserListing()->call($perPage, $page);
    }
}
