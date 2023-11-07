<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\HookDelivery;
use ApiClients\Client\GitHub\Schema\Operations\Orgs\Delete\Response\ApplicationJson\Accepted\Application\Json;
use ApiClients\Client\GitHub\Schema\Operations\Orgs\ListAppInstallations\Response\ApplicationJson\Ok;
use ApiClients\Client\GitHub\Schema\OrganizationFull;
use ApiClients\Client\GitHub\Schema\OrganizationInvitation;
use ApiClients\Client\GitHub\Schema\OrgCustomProperty;
use ApiClients\Client\GitHub\Schema\OrgHook;
use ApiClients\Client\GitHub\Schema\OrgMembership;
use ApiClients\Client\GitHub\Schema\WebhookConfig;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;

final class Orgs
{
    public function __construct(private Internal\Operators $operators)
    {
    }

    /** @return iterable<int,Schema\OrganizationSimple>|WithoutBody */
    public function list(int $since, int $perPage): iterable|WithoutBody
    {
        return $this->operators->orgs👷List_()->call($since, $perPage);
    }

    public function get(string $org): OrganizationFull
    {
        return $this->operators->orgs👷Get()->call($org);
    }

    public function delete(string $org): Json
    {
        return $this->operators->orgs👷Delete()->call($org);
    }

    public function update(string $org, array $params): OrganizationFull
    {
        return $this->operators->orgs👷Update()->call($org, $params);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listBlockedUsers(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListBlockedUsers()->call($org, $perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listBlockedUsersListing(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListBlockedUsersListing()->call($org, $perPage, $page);
    }

    public function checkBlockedUser(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷CheckBlockedUser()->call($org, $username);
    }

    public function blockUser(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷BlockUser()->call($org, $username);
    }

    public function unblockUser(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷UnblockUser()->call($org, $username);
    }

    /** @return iterable<int,Schema\OrganizationInvitation> */
    public function listFailedInvitations(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListFailedInvitations()->call($org, $perPage, $page);
    }

    /** @return iterable<int,Schema\OrganizationInvitation> */
    public function listFailedInvitationsListing(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListFailedInvitationsListing()->call($org, $perPage, $page);
    }

    /** @return iterable<int,Schema\OrgHook> */
    public function listWebhooks(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListWebhooks()->call($org, $perPage, $page);
    }

    /** @return iterable<int,Schema\OrgHook> */
    public function listWebhooksListing(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListWebhooksListing()->call($org, $perPage, $page);
    }

    public function createWebhook(string $org, array $params): OrgHook
    {
        return $this->operators->orgs👷CreateWebhook()->call($org, $params);
    }

    public function getWebhook(string $org, int $hookId): OrgHook
    {
        return $this->operators->orgs👷GetWebhook()->call($org, $hookId);
    }

    public function deleteWebhook(string $org, int $hookId): WithoutBody
    {
        return $this->operators->orgs👷DeleteWebhook()->call($org, $hookId);
    }

    public function updateWebhook(string $org, int $hookId, array $params): OrgHook
    {
        return $this->operators->orgs👷UpdateWebhook()->call($org, $hookId, $params);
    }

    public function getWebhookConfigForOrg(string $org, int $hookId): WebhookConfig
    {
        return $this->operators->orgs👷GetWebhookConfigForOrg()->call($org, $hookId);
    }

    public function updateWebhookConfigForOrg(string $org, int $hookId, array $params): WebhookConfig
    {
        return $this->operators->orgs👷UpdateWebhookConfigForOrg()->call($org, $hookId, $params);
    }

    /** @return iterable<int,Schema\HookDeliveryItem> */
    public function listWebhookDeliveries(string $org, int $hookId, string $cursor, bool $redelivery, int $perPage): iterable
    {
        return $this->operators->orgs👷ListWebhookDeliveries()->call($org, $hookId, $cursor, $redelivery, $perPage);
    }

    public function getWebhookDelivery(string $org, int $hookId, int $deliveryId): HookDelivery
    {
        return $this->operators->orgs👷GetWebhookDelivery()->call($org, $hookId, $deliveryId);
    }

    public function redeliverWebhookDelivery(string $org, int $hookId, int $deliveryId): \ApiClients\Client\GitHub\Schema\Operations\Orgs\RedeliverWebhookDelivery\Response\ApplicationJson\Accepted\Application\Json
    {
        return $this->operators->orgs👷RedeliverWebhookDelivery()->call($org, $hookId, $deliveryId);
    }

    public function pingWebhook(string $org, int $hookId): WithoutBody
    {
        return $this->operators->orgs👷PingWebhook()->call($org, $hookId);
    }

    public function listAppInstallations(string $org, int $perPage, int $page): Ok
    {
        return $this->operators->orgs👷ListAppInstallations()->call($org, $perPage, $page);
    }

    /** @return iterable<int,Schema\OrganizationInvitation> */
    public function listPendingInvitations(string $org, int $perPage, int $page, string $role, string $invitationSource): iterable
    {
        return $this->operators->orgs👷ListPendingInvitations()->call($org, $perPage, $page, $role, $invitationSource);
    }

    /** @return iterable<int,Schema\OrganizationInvitation> */
    public function listPendingInvitationsListing(string $org, int $perPage, int $page, string $role, string $invitationSource): iterable
    {
        return $this->operators->orgs👷ListPendingInvitationsListing()->call($org, $perPage, $page, $role, $invitationSource);
    }

    public function createInvitation(string $org, array $params): OrganizationInvitation
    {
        return $this->operators->orgs👷CreateInvitation()->call($org, $params);
    }

    public function cancelInvitation(string $org, int $invitationId): WithoutBody
    {
        return $this->operators->orgs👷CancelInvitation()->call($org, $invitationId);
    }

    /** @return iterable<int,Schema\Team> */
    public function listInvitationTeams(string $org, int $invitationId, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListInvitationTeams()->call($org, $invitationId, $perPage, $page);
    }

    /** @return iterable<int,Schema\Team> */
    public function listInvitationTeamsListing(string $org, int $invitationId, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListInvitationTeamsListing()->call($org, $invitationId, $perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listMembers(string $org, string $filter, string $role, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListMembers()->call($org, $filter, $role, $perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listMembersListing(string $org, string $filter, string $role, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListMembersListing()->call($org, $filter, $role, $perPage, $page);
    }

    public function checkMembershipForUser(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷CheckMembershipForUser()->call($org, $username);
    }

    public function removeMember(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷RemoveMember()->call($org, $username);
    }

    public function getMembershipForUser(string $org, string $username): OrgMembership
    {
        return $this->operators->orgs👷GetMembershipForUser()->call($org, $username);
    }

    public function setMembershipForUser(string $org, string $username, array $params): OrgMembership
    {
        return $this->operators->orgs👷SetMembershipForUser()->call($org, $username, $params);
    }

    public function removeMembershipForUser(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷RemoveMembershipForUser()->call($org, $username);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listOutsideCollaborators(string $org, string $filter, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListOutsideCollaborators()->call($org, $filter, $perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listOutsideCollaboratorsListing(string $org, string $filter, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListOutsideCollaboratorsListing()->call($org, $filter, $perPage, $page);
    }

    public function convertMemberToOutsideCollaborator(string $org, string $username, array $params): \ApiClients\Client\GitHub\Schema\Operations\Orgs\ConvertMemberToOutsideCollaborator\Response\ApplicationJson\Accepted\Application\Json|WithoutBody
    {
        return $this->operators->orgs👷ConvertMemberToOutsideCollaborator()->call($org, $username, $params);
    }

    public function removeOutsideCollaborator(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷RemoveOutsideCollaborator()->call($org, $username);
    }

    /** @return iterable<int,Schema\OrganizationProgrammaticAccessGrantRequest> */
    public function listPatGrantRequests(string $org, array $owner, string $repository, string $permission, string $lastUsedBefore, string $lastUsedAfter, int $perPage, int $page, string $sort, string $direction): iterable
    {
        return $this->operators->orgs👷ListPatGrantRequests()->call($org, $owner, $repository, $permission, $lastUsedBefore, $lastUsedAfter, $perPage, $page, $sort, $direction);
    }

    /** @return iterable<int,Schema\OrganizationProgrammaticAccessGrantRequest> */
    public function listPatGrantRequestsListing(string $org, array $owner, string $repository, string $permission, string $lastUsedBefore, string $lastUsedAfter, int $perPage, int $page, string $sort, string $direction): iterable
    {
        return $this->operators->orgs👷ListPatGrantRequestsListing()->call($org, $owner, $repository, $permission, $lastUsedBefore, $lastUsedAfter, $perPage, $page, $sort, $direction);
    }

    public function reviewPatGrantRequestsInBulk(string $org, array $params): \ApiClients\Client\GitHub\Schema\Operations\Orgs\ReviewPatGrantRequestsInBulk\Response\ApplicationJson\Accepted\Application\Json
    {
        return $this->operators->orgs👷ReviewPatGrantRequestsInBulk()->call($org, $params);
    }

    public function reviewPatGrantRequest(string $org, int $patRequestId, array $params): WithoutBody
    {
        return $this->operators->orgs👷ReviewPatGrantRequest()->call($org, $patRequestId, $params);
    }

    /** @return iterable<int,Schema\MinimalRepository> */
    public function listPatGrantRequestRepositories(string $org, int $patRequestId, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListPatGrantRequestRepositories()->call($org, $patRequestId, $perPage, $page);
    }

    /** @return iterable<int,Schema\MinimalRepository> */
    public function listPatGrantRequestRepositoriesListing(string $org, int $patRequestId, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListPatGrantRequestRepositoriesListing()->call($org, $patRequestId, $perPage, $page);
    }

    /** @return iterable<int,Schema\OrganizationProgrammaticAccessGrant> */
    public function listPatGrants(string $org, array $owner, string $repository, string $permission, string $lastUsedBefore, string $lastUsedAfter, int $perPage, int $page, string $sort, string $direction): iterable
    {
        return $this->operators->orgs👷ListPatGrants()->call($org, $owner, $repository, $permission, $lastUsedBefore, $lastUsedAfter, $perPage, $page, $sort, $direction);
    }

    /** @return iterable<int,Schema\OrganizationProgrammaticAccessGrant> */
    public function listPatGrantsListing(string $org, array $owner, string $repository, string $permission, string $lastUsedBefore, string $lastUsedAfter, int $perPage, int $page, string $sort, string $direction): iterable
    {
        return $this->operators->orgs👷ListPatGrantsListing()->call($org, $owner, $repository, $permission, $lastUsedBefore, $lastUsedAfter, $perPage, $page, $sort, $direction);
    }

    public function updatePatAccesses(string $org, array $params): \ApiClients\Client\GitHub\Schema\Operations\Orgs\UpdatePatAccesses\Response\ApplicationJson\Accepted\Application\Json
    {
        return $this->operators->orgs👷UpdatePatAccesses()->call($org, $params);
    }

    public function updatePatAccess(string $org, int $patId, array $params): WithoutBody
    {
        return $this->operators->orgs👷UpdatePatAccess()->call($org, $patId, $params);
    }

    /** @return iterable<int,Schema\MinimalRepository> */
    public function listPatGrantRepositories(string $org, int $patId, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListPatGrantRepositories()->call($org, $patId, $perPage, $page);
    }

    /** @return iterable<int,Schema\MinimalRepository> */
    public function listPatGrantRepositoriesListing(string $org, int $patId, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListPatGrantRepositoriesListing()->call($org, $patId, $perPage, $page);
    }

    /** @return iterable<int,Schema\OrgCustomProperty> */
    public function getAllCustomProperties(string $org): iterable
    {
        return $this->operators->orgs👷GetAllCustomProperties()->call($org);
    }

    /** @return iterable<int,Schema\OrgCustomProperty> */
    public function createOrUpdateCustomProperties(string $org, array $params): iterable
    {
        return $this->operators->orgs👷CreateOrUpdateCustomProperties()->call($org, $params);
    }

    public function getCustomProperty(string $org, string $customPropertyName): OrgCustomProperty
    {
        return $this->operators->orgs👷GetCustomProperty()->call($org, $customPropertyName);
    }

    public function createOrUpdateCustomProperty(string $org, string $customPropertyName, array $params): OrgCustomProperty
    {
        return $this->operators->orgs👷CreateOrUpdateCustomProperty()->call($org, $customPropertyName, $params);
    }

    public function removeCustomProperty(string $org, string $customPropertyName): WithoutBody
    {
        return $this->operators->orgs👷RemoveCustomProperty()->call($org, $customPropertyName);
    }

    /** @return iterable<int,Schema\OrgRepoCustomPropertyValues> */
    public function listCustomPropertiesValuesForRepos(string $org, string $repositoryQuery, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListCustomPropertiesValuesForRepos()->call($org, $repositoryQuery, $perPage, $page);
    }

    /** @return iterable<int,Schema\OrgRepoCustomPropertyValues> */
    public function listCustomPropertiesValuesForReposListing(string $org, string $repositoryQuery, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListCustomPropertiesValuesForReposListing()->call($org, $repositoryQuery, $perPage, $page);
    }

    public function createOrUpdateCustomPropertiesValuesForRepos(string $org, array $params): WithoutBody
    {
        return $this->operators->orgs👷CreateOrUpdateCustomPropertiesValuesForRepos()->call($org, $params);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listPublicMembers(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListPublicMembers()->call($org, $perPage, $page);
    }

    /** @return iterable<int,Schema\SimpleUser> */
    public function listPublicMembersListing(string $org, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListPublicMembersListing()->call($org, $perPage, $page);
    }

    public function checkPublicMembershipForUser(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷CheckPublicMembershipForUser()->call($org, $username);
    }

    public function setPublicMembershipForAuthenticatedUser(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷SetPublicMembershipForAuthenticatedUser()->call($org, $username);
    }

    public function removePublicMembershipForAuthenticatedUser(string $org, string $username): WithoutBody
    {
        return $this->operators->orgs👷RemovePublicMembershipForAuthenticatedUser()->call($org, $username);
    }

    /** @return iterable<int,Schema\TeamSimple> */
    public function listSecurityManagerTeams(string $org): iterable
    {
        return $this->operators->orgs👷ListSecurityManagerTeams()->call($org);
    }

    public function addSecurityManagerTeam(string $org, string $teamSlug): WithoutBody
    {
        return $this->operators->orgs👷AddSecurityManagerTeam()->call($org, $teamSlug);
    }

    public function removeSecurityManagerTeam(string $org, string $teamSlug): WithoutBody
    {
        return $this->operators->orgs👷RemoveSecurityManagerTeam()->call($org, $teamSlug);
    }

    public function enableOrDisableSecurityProductOnAllOrgRepos(string $org, string $securityProduct, string $enablement, array $params): WithoutBody
    {
        return $this->operators->orgs👷EnableOrDisableSecurityProductOnAllOrgRepos()->call($org, $securityProduct, $enablement, $params);
    }

    /** @return iterable<int,Schema\OrgMembership>|WithoutBody */
    public function listMembershipsForAuthenticatedUser(string $state, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->orgs👷ListMembershipsForAuthenticatedUser()->call($state, $perPage, $page);
    }

    /** @return iterable<int,Schema\OrgMembership>|WithoutBody */
    public function listMembershipsForAuthenticatedUserListing(string $state, int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->orgs👷ListMembershipsForAuthenticatedUserListing()->call($state, $perPage, $page);
    }

    public function getMembershipForAuthenticatedUser(string $org): OrgMembership
    {
        return $this->operators->orgs👷GetMembershipForAuthenticatedUser()->call($org);
    }

    public function updateMembershipForAuthenticatedUser(string $org, array $params): OrgMembership
    {
        return $this->operators->orgs👷UpdateMembershipForAuthenticatedUser()->call($org, $params);
    }

    /** @return iterable<int,Schema\OrganizationSimple>|WithoutBody */
    public function listForAuthenticatedUser(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->orgs👷ListForAuthenticatedUser()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\OrganizationSimple>|WithoutBody */
    public function listForAuthenticatedUserListing(int $perPage, int $page): iterable|WithoutBody
    {
        return $this->operators->orgs👷ListForAuthenticatedUserListing()->call($perPage, $page);
    }

    /** @return iterable<int,Schema\OrganizationSimple> */
    public function listForUser(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListForUser()->call($username, $perPage, $page);
    }

    /** @return iterable<int,Schema\OrganizationSimple> */
    public function listForUserListing(string $username, int $perPage, int $page): iterable
    {
        return $this->operators->orgs👷ListForUserListing()->call($username, $perPage, $page);
    }
}
