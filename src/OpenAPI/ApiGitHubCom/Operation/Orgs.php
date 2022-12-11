<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Orgs
{
    public function list_(int $since, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\List_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\List_($since, $per_page);
    }
    public function listCustomRoles_(string $organization_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListCustomRoles_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListCustomRoles_($organization_id);
    }
    public function get_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\Get_($org);
    }
    public function update_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\Update_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\Update_($org);
    }
    public function listBlockedUsers_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListBlockedUsers_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListBlockedUsers_($org, $per_page, $page);
    }
    public function checkBlockedUser_(string $org, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckBlockedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckBlockedUser_($org, $username);
    }
    public function blockUser_(string $org, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\BlockUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\BlockUser_($org, $username);
    }
    public function unblockUser_(string $org, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UnblockUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UnblockUser_($org, $username);
    }
    public function createCustomRole_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateCustomRole_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateCustomRole_($org);
    }
    public function getCustomRole_(string $org, int $role_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetCustomRole_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetCustomRole_($org, $role_id);
    }
    public function deleteCustomRole_(string $org, int $role_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\DeleteCustomRole_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\DeleteCustomRole_($org, $role_id);
    }
    public function updateCustomRole_(string $org, int $role_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateCustomRole_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateCustomRole_($org, $role_id);
    }
    public function listFailedInvitations_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListFailedInvitations_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListFailedInvitations_($org, $per_page, $page);
    }
    public function listFineGrainedPermissions_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListFineGrainedPermissions_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListFineGrainedPermissions_($org);
    }
    public function listWebhooks_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListWebhooks_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListWebhooks_($org, $per_page, $page);
    }
    public function createWebhook_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateWebhook_($org);
    }
    public function getWebhook_(string $org, int $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhook_($org, $hook_id);
    }
    public function deleteWebhook_(string $org, int $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\DeleteWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\DeleteWebhook_($org, $hook_id);
    }
    public function updateWebhook_(string $org, int $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateWebhook_($org, $hook_id);
    }
    public function getWebhookConfigForOrg_(string $org, int $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhookConfigForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhookConfigForOrg_($org, $hook_id);
    }
    public function updateWebhookConfigForOrg_(string $org, int $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateWebhookConfigForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateWebhookConfigForOrg_($org, $hook_id);
    }
    public function listWebhookDeliveries_(string $org, int $hook_id, int $per_page = 30, string $cursor, bool $redelivery) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListWebhookDeliveries_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListWebhookDeliveries_($org, $hook_id, $per_page, $cursor, $redelivery);
    }
    public function getWebhookDelivery_(string $org, int $hook_id, int $delivery_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhookDelivery_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetWebhookDelivery_($org, $hook_id, $delivery_id);
    }
    public function redeliverWebhookDelivery_(string $org, int $hook_id, int $delivery_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RedeliverWebhookDelivery_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RedeliverWebhookDelivery_($org, $hook_id, $delivery_id);
    }
    public function pingWebhook_(string $org, int $hook_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\PingWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\PingWebhook_($org, $hook_id);
    }
    public function listAppInstallations_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListAppInstallations_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListAppInstallations_($org, $per_page, $page);
    }
    public function listPendingInvitations_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListPendingInvitations_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListPendingInvitations_($org, $per_page, $page);
    }
    public function createInvitation_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateInvitation_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateInvitation_($org);
    }
    public function cancelInvitation_(string $org, int $invitation_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CancelInvitation_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CancelInvitation_($org, $invitation_id);
    }
    public function listInvitationTeams_(string $org, int $invitation_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListInvitationTeams_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListInvitationTeams_($org, $invitation_id, $per_page, $page);
    }
    public function listMembers_(string $org, string $filter = 'all', string $role = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListMembers_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListMembers_($org, $filter, $role, $per_page, $page);
    }
    public function checkMembershipForUser_(string $org, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckMembershipForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckMembershipForUser_($org, $username);
    }
    public function removeMember_(string $org, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveMember_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveMember_($org, $username);
    }
    public function getMembershipForUser_(string $org, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetMembershipForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetMembershipForUser_($org, $username);
    }
    public function setMembershipForUser_(string $org, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\SetMembershipForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\SetMembershipForUser_($org, $username);
    }
    public function removeMembershipForUser_(string $org, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveMembershipForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveMembershipForUser_($org, $username);
    }
    public function listOutsideCollaborators_(string $org, string $filter = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListOutsideCollaborators_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListOutsideCollaborators_($org, $filter, $per_page, $page);
    }
    public function convertMemberToOutsideCollaborator_(string $org, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ConvertMemberToOutsideCollaborator_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ConvertMemberToOutsideCollaborator_($org, $username);
    }
    public function removeOutsideCollaborator_(string $org, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveOutsideCollaborator_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveOutsideCollaborator_($org, $username);
    }
    public function listPublicMembers_(string $org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListPublicMembers_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListPublicMembers_($org, $per_page, $page);
    }
    public function checkPublicMembershipForUser_(string $org, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckPublicMembershipForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckPublicMembershipForUser_($org, $username);
    }
    public function setPublicMembershipForAuthenticatedUser_(string $org, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\SetPublicMembershipForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\SetPublicMembershipForAuthenticatedUser_($org, $username);
    }
    public function removePublicMembershipForAuthenticatedUser_(string $org, string $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemovePublicMembershipForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemovePublicMembershipForAuthenticatedUser_($org, $username);
    }
    public function listSecurityManagerTeams_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListSecurityManagerTeams_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListSecurityManagerTeams_($org);
    }
    public function addSecurityManagerTeam_(string $org, string $team_slug) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\AddSecurityManagerTeam_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\AddSecurityManagerTeam_($org, $team_slug);
    }
    public function removeSecurityManagerTeam_(string $org, string $team_slug) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveSecurityManagerTeam_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\RemoveSecurityManagerTeam_($org, $team_slug);
    }
    public function enableOrDisableSecurityProductOnAllOrgRepos_(string $org, string $security_product, string $enablement) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\EnableOrDisableSecurityProductOnAllOrgRepos_($org, $security_product, $enablement);
    }
    public function listMembershipsForAuthenticatedUser_(string $state, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListMembershipsForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListMembershipsForAuthenticatedUser_($state, $per_page, $page);
    }
    public function getMembershipForAuthenticatedUser_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetMembershipForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\GetMembershipForAuthenticatedUser_($org);
    }
    public function updateMembershipForAuthenticatedUser_(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateMembershipForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UpdateMembershipForAuthenticatedUser_($org);
    }
    public function listForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListForAuthenticatedUser_($per_page, $page);
    }
    public function listForUser_(string $username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListForUser_($username, $per_page, $page);
    }
}
