<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation;

use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;
use React\Promise\PromiseInterface;

use function array_key_exists;

final class Orgs
{
    private array $operator = [];

    public function __construct(private Browser $browser, private AuthenticationInterface $authentication, private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators)
    {
    }

    public function list(int $since, int $perPage): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\List_::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\List_::class] = new Operator\Orgs\List_($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Organizations());
        }

        return $this->operator[Operator\Orgs\List_::class]->call($since, $perPage);
    }

    public function get(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\Get::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\Get::class] = new Operator\Orgs\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org());
        }

        return $this->operator[Operator\Orgs\Get::class]->call($org);
    }

    public function delete(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\Delete::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\Delete::class] = new Operator\Orgs\Delete($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org());
        }

        return $this->operator[Operator\Orgs\Delete::class]->call($org);
    }

    public function update(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\Update::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\Update::class] = new Operator\Orgs\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org());
        }

        return $this->operator[Operator\Orgs\Update::class]->call($org, $params);
    }

    public function listBlockedUsers(string $org, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListBlockedUsers::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListBlockedUsers::class] = new Operator\Orgs\ListBlockedUsers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Blocks());
        }

        return $this->operator[Operator\Orgs\ListBlockedUsers::class]->call($org, $perPage, $page);
    }

    public function checkBlockedUser(string $org, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\CheckBlockedUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\CheckBlockedUser::class] = new Operator\Orgs\CheckBlockedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Blocks🌀Username());
        }

        return $this->operator[Operator\Orgs\CheckBlockedUser::class]->call($org, $username);
    }

    public function blockUser(string $org, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\BlockUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\BlockUser::class] = new Operator\Orgs\BlockUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Blocks🌀Username());
        }

        return $this->operator[Operator\Orgs\BlockUser::class]->call($org, $username);
    }

    public function unblockUser(string $org, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\UnblockUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\UnblockUser::class] = new Operator\Orgs\UnblockUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Blocks🌀Username());
        }

        return $this->operator[Operator\Orgs\UnblockUser::class]->call($org, $username);
    }

    public function listFailedInvitations(string $org, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListFailedInvitations::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListFailedInvitations::class] = new Operator\Orgs\ListFailedInvitations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀FailedInvitations());
        }

        return $this->operator[Operator\Orgs\ListFailedInvitations::class]->call($org, $perPage, $page);
    }

    public function listWebhooks(string $org, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListWebhooks::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListWebhooks::class] = new Operator\Orgs\ListWebhooks($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks());
        }

        return $this->operator[Operator\Orgs\ListWebhooks::class]->call($org, $perPage, $page);
    }

    public function createWebhook(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\CreateWebhook::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\CreateWebhook::class] = new Operator\Orgs\CreateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks());
        }

        return $this->operator[Operator\Orgs\CreateWebhook::class]->call($org, $params);
    }

    public function getWebhook(string $org, int $hookId): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\GetWebhook::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\GetWebhook::class] = new Operator\Orgs\GetWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());
        }

        return $this->operator[Operator\Orgs\GetWebhook::class]->call($org, $hookId);
    }

    public function deleteWebhook(string $org, int $hookId): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\DeleteWebhook::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\DeleteWebhook::class] = new Operator\Orgs\DeleteWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());
        }

        return $this->operator[Operator\Orgs\DeleteWebhook::class]->call($org, $hookId);
    }

    public function updateWebhook(string $org, int $hookId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\UpdateWebhook::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\UpdateWebhook::class] = new Operator\Orgs\UpdateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId());
        }

        return $this->operator[Operator\Orgs\UpdateWebhook::class]->call($org, $hookId, $params);
    }

    public function getWebhookConfigForOrg(string $org, int $hookId): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\GetWebhookConfigForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\GetWebhookConfigForOrg::class] = new Operator\Orgs\GetWebhookConfigForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config());
        }

        return $this->operator[Operator\Orgs\GetWebhookConfigForOrg::class]->call($org, $hookId);
    }

    public function updateWebhookConfigForOrg(string $org, int $hookId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\UpdateWebhookConfigForOrg::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\UpdateWebhookConfigForOrg::class] = new Operator\Orgs\UpdateWebhookConfigForOrg($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Config());
        }

        return $this->operator[Operator\Orgs\UpdateWebhookConfigForOrg::class]->call($org, $hookId, $params);
    }

    public function listWebhookDeliveries(string $org, int $hookId, string $cursor, bool $redelivery, int $perPage): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListWebhookDeliveries::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListWebhookDeliveries::class] = new Operator\Orgs\ListWebhookDeliveries($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries());
        }

        return $this->operator[Operator\Orgs\ListWebhookDeliveries::class]->call($org, $hookId, $cursor, $redelivery, $perPage);
    }

    public function getWebhookDelivery(string $org, int $hookId, int $deliveryId): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\GetWebhookDelivery::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\GetWebhookDelivery::class] = new Operator\Orgs\GetWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId());
        }

        return $this->operator[Operator\Orgs\GetWebhookDelivery::class]->call($org, $hookId, $deliveryId);
    }

    public function redeliverWebhookDelivery(string $org, int $hookId, int $deliveryId): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\RedeliverWebhookDelivery::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\RedeliverWebhookDelivery::class] = new Operator\Orgs\RedeliverWebhookDelivery($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Deliveries🌀DeliveryId🌀Attempts());
        }

        return $this->operator[Operator\Orgs\RedeliverWebhookDelivery::class]->call($org, $hookId, $deliveryId);
    }

    public function pingWebhook(string $org, int $hookId): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\PingWebhook::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\PingWebhook::class] = new Operator\Orgs\PingWebhook($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Hooks🌀HookId🌀Pings());
        }

        return $this->operator[Operator\Orgs\PingWebhook::class]->call($org, $hookId);
    }

    public function listAppInstallations(string $org, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListAppInstallations::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListAppInstallations::class] = new Operator\Orgs\ListAppInstallations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Installations());
        }

        return $this->operator[Operator\Orgs\ListAppInstallations::class]->call($org, $perPage, $page);
    }

    public function listPendingInvitations(string $org, int $perPage, int $page, string $role, string $invitationSource): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListPendingInvitations::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListPendingInvitations::class] = new Operator\Orgs\ListPendingInvitations($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations());
        }

        return $this->operator[Operator\Orgs\ListPendingInvitations::class]->call($org, $perPage, $page, $role, $invitationSource);
    }

    public function createInvitation(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\CreateInvitation::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\CreateInvitation::class] = new Operator\Orgs\CreateInvitation($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations());
        }

        return $this->operator[Operator\Orgs\CreateInvitation::class]->call($org, $params);
    }

    public function cancelInvitation(string $org, int $invitationId): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\CancelInvitation::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\CancelInvitation::class] = new Operator\Orgs\CancelInvitation($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations🌀InvitationId());
        }

        return $this->operator[Operator\Orgs\CancelInvitation::class]->call($org, $invitationId);
    }

    public function listInvitationTeams(string $org, int $invitationId, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListInvitationTeams::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListInvitationTeams::class] = new Operator\Orgs\ListInvitationTeams($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Invitations🌀InvitationId🌀Teams());
        }

        return $this->operator[Operator\Orgs\ListInvitationTeams::class]->call($org, $invitationId, $perPage, $page);
    }

    public function listMembers(string $org, string $filter, string $role, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListMembers::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListMembers::class] = new Operator\Orgs\ListMembers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members());
        }

        return $this->operator[Operator\Orgs\ListMembers::class]->call($org, $filter, $role, $perPage, $page);
    }

    public function checkMembershipForUser(string $org, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\CheckMembershipForUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\CheckMembershipForUser::class] = new Operator\Orgs\CheckMembershipForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username());
        }

        return $this->operator[Operator\Orgs\CheckMembershipForUser::class]->call($org, $username);
    }

    public function removeMember(string $org, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\RemoveMember::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\RemoveMember::class] = new Operator\Orgs\RemoveMember($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Members🌀Username());
        }

        return $this->operator[Operator\Orgs\RemoveMember::class]->call($org, $username);
    }

    public function getMembershipForUser(string $org, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\GetMembershipForUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\GetMembershipForUser::class] = new Operator\Orgs\GetMembershipForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username());
        }

        return $this->operator[Operator\Orgs\GetMembershipForUser::class]->call($org, $username);
    }

    public function setMembershipForUser(string $org, string $username, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\SetMembershipForUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\SetMembershipForUser::class] = new Operator\Orgs\SetMembershipForUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username());
        }

        return $this->operator[Operator\Orgs\SetMembershipForUser::class]->call($org, $username, $params);
    }

    public function removeMembershipForUser(string $org, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\RemoveMembershipForUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\RemoveMembershipForUser::class] = new Operator\Orgs\RemoveMembershipForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username());
        }

        return $this->operator[Operator\Orgs\RemoveMembershipForUser::class]->call($org, $username);
    }

    public function listOutsideCollaborators(string $org, string $filter, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListOutsideCollaborators::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListOutsideCollaborators::class] = new Operator\Orgs\ListOutsideCollaborators($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators());
        }

        return $this->operator[Operator\Orgs\ListOutsideCollaborators::class]->call($org, $filter, $perPage, $page);
    }

    public function convertMemberToOutsideCollaborator(string $org, string $username, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ConvertMemberToOutsideCollaborator::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ConvertMemberToOutsideCollaborator::class] = new Operator\Orgs\ConvertMemberToOutsideCollaborator($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username());
        }

        return $this->operator[Operator\Orgs\ConvertMemberToOutsideCollaborator::class]->call($org, $username, $params);
    }

    public function removeOutsideCollaborator(string $org, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\RemoveOutsideCollaborator::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\RemoveOutsideCollaborator::class] = new Operator\Orgs\RemoveOutsideCollaborator($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username());
        }

        return $this->operator[Operator\Orgs\RemoveOutsideCollaborator::class]->call($org, $username);
    }

    public function listPatGrantRequests(string $org, array $owner, string $repository, string $permission, string $lastUsedBefore, string $lastUsedAfter, int $perPage, int $page, string $sort, string $direction): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListPatGrantRequests::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListPatGrantRequests::class] = new Operator\Orgs\ListPatGrantRequests($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests());
        }

        return $this->operator[Operator\Orgs\ListPatGrantRequests::class]->call($org, $owner, $repository, $permission, $lastUsedBefore, $lastUsedAfter, $perPage, $page, $sort, $direction);
    }

    public function reviewPatGrantRequestsInBulk(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ReviewPatGrantRequestsInBulk::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ReviewPatGrantRequestsInBulk::class] = new Operator\Orgs\ReviewPatGrantRequestsInBulk($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests());
        }

        return $this->operator[Operator\Orgs\ReviewPatGrantRequestsInBulk::class]->call($org, $params);
    }

    public function reviewPatGrantRequest(string $org, int $patRequestId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ReviewPatGrantRequest::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ReviewPatGrantRequest::class] = new Operator\Orgs\ReviewPatGrantRequest($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId());
        }

        return $this->operator[Operator\Orgs\ReviewPatGrantRequest::class]->call($org, $patRequestId, $params);
    }

    public function listPatGrantRequestRepositories(string $org, int $patRequestId, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListPatGrantRequestRepositories::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListPatGrantRequestRepositories::class] = new Operator\Orgs\ListPatGrantRequestRepositories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokenRequests🌀PatRequestId🌀Repositories());
        }

        return $this->operator[Operator\Orgs\ListPatGrantRequestRepositories::class]->call($org, $patRequestId, $perPage, $page);
    }

    public function listPatGrants(string $org, array $owner, string $repository, string $permission, string $lastUsedBefore, string $lastUsedAfter, int $perPage, int $page, string $sort, string $direction): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListPatGrants::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListPatGrants::class] = new Operator\Orgs\ListPatGrants($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens());
        }

        return $this->operator[Operator\Orgs\ListPatGrants::class]->call($org, $owner, $repository, $permission, $lastUsedBefore, $lastUsedAfter, $perPage, $page, $sort, $direction);
    }

    public function updatePatAccesses(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\UpdatePatAccesses::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\UpdatePatAccesses::class] = new Operator\Orgs\UpdatePatAccesses($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens());
        }

        return $this->operator[Operator\Orgs\UpdatePatAccesses::class]->call($org, $params);
    }

    public function updatePatAccess(string $org, int $patId, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\UpdatePatAccess::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\UpdatePatAccess::class] = new Operator\Orgs\UpdatePatAccess($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId());
        }

        return $this->operator[Operator\Orgs\UpdatePatAccess::class]->call($org, $patId, $params);
    }

    public function listPatGrantRepositories(string $org, int $patId, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListPatGrantRepositories::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListPatGrantRepositories::class] = new Operator\Orgs\ListPatGrantRepositories($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PersonalAccessTokens🌀PatId🌀Repositories());
        }

        return $this->operator[Operator\Orgs\ListPatGrantRepositories::class]->call($org, $patId, $perPage, $page);
    }

    public function listPublicMembers(string $org, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListPublicMembers::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListPublicMembers::class] = new Operator\Orgs\ListPublicMembers($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers());
        }

        return $this->operator[Operator\Orgs\ListPublicMembers::class]->call($org, $perPage, $page);
    }

    public function checkPublicMembershipForUser(string $org, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\CheckPublicMembershipForUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\CheckPublicMembershipForUser::class] = new Operator\Orgs\CheckPublicMembershipForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers🌀Username());
        }

        return $this->operator[Operator\Orgs\CheckPublicMembershipForUser::class]->call($org, $username);
    }

    public function setPublicMembershipForAuthenticatedUser(string $org, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\SetPublicMembershipForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\SetPublicMembershipForAuthenticatedUser::class] = new Operator\Orgs\SetPublicMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers🌀Username());
        }

        return $this->operator[Operator\Orgs\SetPublicMembershipForAuthenticatedUser::class]->call($org, $username);
    }

    public function removePublicMembershipForAuthenticatedUser(string $org, string $username): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\RemovePublicMembershipForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\RemovePublicMembershipForAuthenticatedUser::class] = new Operator\Orgs\RemovePublicMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers🌀Username());
        }

        return $this->operator[Operator\Orgs\RemovePublicMembershipForAuthenticatedUser::class]->call($org, $username);
    }

    public function listSecurityManagerTeams(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListSecurityManagerTeams::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListSecurityManagerTeams::class] = new Operator\Orgs\ListSecurityManagerTeams($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀SecurityManagers());
        }

        return $this->operator[Operator\Orgs\ListSecurityManagerTeams::class]->call($org);
    }

    public function addSecurityManagerTeam(string $org, string $teamSlug): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\AddSecurityManagerTeam::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\AddSecurityManagerTeam::class] = new Operator\Orgs\AddSecurityManagerTeam($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀SecurityManagers🌀Teams🌀TeamSlug());
        }

        return $this->operator[Operator\Orgs\AddSecurityManagerTeam::class]->call($org, $teamSlug);
    }

    public function removeSecurityManagerTeam(string $org, string $teamSlug): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\RemoveSecurityManagerTeam::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\RemoveSecurityManagerTeam::class] = new Operator\Orgs\RemoveSecurityManagerTeam($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀SecurityManagers🌀Teams🌀TeamSlug());
        }

        return $this->operator[Operator\Orgs\RemoveSecurityManagerTeam::class]->call($org, $teamSlug);
    }

    public function enableOrDisableSecurityProductOnAllOrgRepos(string $org, string $securityProduct, string $enablement): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos::class] = new Operator\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀SecurityProduct🌀Enablement());
        }

        return $this->operator[Operator\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos::class]->call($org, $securityProduct, $enablement);
    }

    public function listMembershipsForAuthenticatedUser(string $state, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListMembershipsForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListMembershipsForAuthenticatedUser::class] = new Operator\Orgs\ListMembershipsForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs());
        }

        return $this->operator[Operator\Orgs\ListMembershipsForAuthenticatedUser::class]->call($state, $perPage, $page);
    }

    public function getMembershipForAuthenticatedUser(string $org): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\GetMembershipForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\GetMembershipForAuthenticatedUser::class] = new Operator\Orgs\GetMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs🌀Org());
        }

        return $this->operator[Operator\Orgs\GetMembershipForAuthenticatedUser::class]->call($org);
    }

    public function updateMembershipForAuthenticatedUser(string $org, array $params): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\UpdateMembershipForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\UpdateMembershipForAuthenticatedUser::class] = new Operator\Orgs\UpdateMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Memberships🌀Orgs🌀Org());
        }

        return $this->operator[Operator\Orgs\UpdateMembershipForAuthenticatedUser::class]->call($org, $params);
    }

    public function listForAuthenticatedUser(int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListForAuthenticatedUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListForAuthenticatedUser::class] = new Operator\Orgs\ListForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀User🌀Orgs());
        }

        return $this->operator[Operator\Orgs\ListForAuthenticatedUser::class]->call($perPage, $page);
    }

    public function listForUser(string $username, int $perPage, int $page): PromiseInterface
    {
        if (array_key_exists(Operator\Orgs\ListForUser::class, $this->operator) === false) {
            $this->operator[Operator\Orgs\ListForUser::class] = new Operator\Orgs\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Orgs());
        }

        return $this->operator[Operator\Orgs\ListForUser::class]->call($username, $perPage, $page);
    }
}
