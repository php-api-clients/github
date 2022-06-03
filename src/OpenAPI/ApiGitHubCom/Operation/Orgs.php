<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Orgs
{
    public function list_($since, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\List_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\List_($since, $per_page);
    }
    public function listCustomRoles_($organization_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListCustomRoles_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListCustomRoles_($organization_id);
    }
    public function get_($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\Get_($org);
    }
    public function update_($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\Update_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\Update_($org);
    }
    public function getAuditLog_($org, $phrase, $include, $after, $before, $order, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetAuditLog_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetAuditLog_($org, $phrase, $include, $after, $before, $order, $per_page);
    }
    public function listBlockedUsers_($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListBlockedUsers_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListBlockedUsers_($org);
    }
    public function checkBlockedUser_($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckBlockedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckBlockedUser_($org, $username);
    }
    public function blockUser_($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\BlockUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\BlockUser_($org, $username);
    }
    public function unblockUser_($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UnblockUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UnblockUser_($org, $username);
    }
    public function listSamlSsoAuthorizations_($org, int $per_page = 30, $page, $login) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListSamlSsoAuthorizations_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListSamlSsoAuthorizations_($org, $per_page, $page, $login);
    }
    public function removeSamlSsoAuthorization_($org, $credential_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveSamlSsoAuthorization_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveSamlSsoAuthorization_($org, $credential_id);
    }
    public function listFailedInvitations_($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListFailedInvitations_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListFailedInvitations_($org, $per_page, $page);
    }
    public function listWebhooks_($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListWebhooks_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListWebhooks_($org, $per_page, $page);
    }
    public function createWebhook_($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateWebhook_($org);
    }
    public function getWebhook_($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhook_($org, $hook_id);
    }
    public function deleteWebhook_($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\DeleteWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\DeleteWebhook_($org, $hook_id);
    }
    public function updateWebhook_($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateWebhook_($org, $hook_id);
    }
    public function getWebhookConfigForOrg_($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhookConfigForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhookConfigForOrg_($org, $hook_id);
    }
    public function updateWebhookConfigForOrg_($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateWebhookConfigForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateWebhookConfigForOrg_($org, $hook_id);
    }
    public function listWebhookDeliveries_($org, $hook_id, int $per_page = 30, $cursor) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListWebhookDeliveries_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListWebhookDeliveries_($org, $hook_id, $per_page, $cursor);
    }
    public function getWebhookDelivery_($org, $hook_id, $delivery_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhookDelivery_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhookDelivery_($org, $hook_id, $delivery_id);
    }
    public function redeliverWebhookDelivery_($org, $hook_id, $delivery_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RedeliverWebhookDelivery_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RedeliverWebhookDelivery_($org, $hook_id, $delivery_id);
    }
    public function pingWebhook_($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\PingWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\PingWebhook_($org, $hook_id);
    }
    public function listAppInstallations_($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListAppInstallations_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListAppInstallations_($org, $per_page, $page);
    }
    public function listPendingInvitations_($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListPendingInvitations_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListPendingInvitations_($org, $per_page, $page);
    }
    public function createInvitation_($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateInvitation_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateInvitation_($org);
    }
    public function cancelInvitation_($org, $invitation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CancelInvitation_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CancelInvitation_($org, $invitation_id);
    }
    public function listInvitationTeams_($org, $invitation_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListInvitationTeams_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListInvitationTeams_($org, $invitation_id, $per_page, $page);
    }
    public function listMembers_($org, string $filter = 'all', string $role = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListMembers_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListMembers_($org, $filter, $role, $per_page, $page);
    }
    public function checkMembershipForUser_($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckMembershipForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckMembershipForUser_($org, $username);
    }
    public function removeMember_($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveMember_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveMember_($org, $username);
    }
    public function getMembershipForUser_($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetMembershipForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetMembershipForUser_($org, $username);
    }
    public function setMembershipForUser_($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\SetMembershipForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\SetMembershipForUser_($org, $username);
    }
    public function removeMembershipForUser_($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveMembershipForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveMembershipForUser_($org, $username);
    }
    public function listOutsideCollaborators_($org, string $filter = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListOutsideCollaborators_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListOutsideCollaborators_($org, $filter, $per_page, $page);
    }
    public function convertMemberToOutsideCollaborator_($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ConvertMemberToOutsideCollaborator_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ConvertMemberToOutsideCollaborator_($org, $username);
    }
    public function removeOutsideCollaborator_($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveOutsideCollaborator_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveOutsideCollaborator_($org, $username);
    }
    public function listPublicMembers_($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListPublicMembers_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListPublicMembers_($org, $per_page, $page);
    }
    public function checkPublicMembershipForUser_($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckPublicMembershipForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckPublicMembershipForUser_($org, $username);
    }
    public function setPublicMembershipForAuthenticatedUser_($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\SetPublicMembershipForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\SetPublicMembershipForAuthenticatedUser_($org, $username);
    }
    public function removePublicMembershipForAuthenticatedUser_($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemovePublicMembershipForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemovePublicMembershipForAuthenticatedUser_($org, $username);
    }
    public function listMembershipsForAuthenticatedUser_($state, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListMembershipsForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListMembershipsForAuthenticatedUser_($state, $per_page, $page);
    }
    public function getMembershipForAuthenticatedUser_($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetMembershipForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetMembershipForAuthenticatedUser_($org);
    }
    public function updateMembershipForAuthenticatedUser_($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateMembershipForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateMembershipForAuthenticatedUser_($org);
    }
    public function listForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListForAuthenticatedUser_($per_page, $page);
    }
    public function listForUser_($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListForUser_($username, $per_page, $page);
    }
}
