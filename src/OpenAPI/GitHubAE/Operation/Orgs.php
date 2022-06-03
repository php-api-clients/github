<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class Orgs
{
    public function list_($since, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\List_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\List_($since, $per_page);
    }
    public function get_($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\Get_($org);
    }
    public function update_($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\Update_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\Update_($org);
    }
    public function getAuditLog_($org, $phrase, $after, $before, $order, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetAuditLog_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetAuditLog_($org, $phrase, $after, $before, $order, $per_page, $page);
    }
    public function listWebhooks_($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListWebhooks_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListWebhooks_($org, $per_page, $page);
    }
    public function createWebhook_($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\CreateWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\CreateWebhook_($org);
    }
    public function getWebhook_($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetWebhook_($org, $hook_id);
    }
    public function deleteWebhook_($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\DeleteWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\DeleteWebhook_($org, $hook_id);
    }
    public function updateWebhook_($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\UpdateWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\UpdateWebhook_($org, $hook_id);
    }
    public function getWebhookConfigForOrg_($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetWebhookConfigForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetWebhookConfigForOrg_($org, $hook_id);
    }
    public function updateWebhookConfigForOrg_($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\UpdateWebhookConfigForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\UpdateWebhookConfigForOrg_($org, $hook_id);
    }
    public function listWebhookDeliveries_($org, $hook_id, int $per_page = 30, $cursor) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListWebhookDeliveries_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListWebhookDeliveries_($org, $hook_id, $per_page, $cursor);
    }
    public function getWebhookDelivery_($org, $hook_id, $delivery_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetWebhookDelivery_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetWebhookDelivery_($org, $hook_id, $delivery_id);
    }
    public function redeliverWebhookDelivery_($org, $hook_id, $delivery_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\RedeliverWebhookDelivery_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\RedeliverWebhookDelivery_($org, $hook_id, $delivery_id);
    }
    public function pingWebhook_($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\PingWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\PingWebhook_($org, $hook_id);
    }
    public function listAppInstallations_($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListAppInstallations_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListAppInstallations_($org, $per_page, $page);
    }
    public function listMembers_($org, string $filter = 'all', string $role = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListMembers_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListMembers_($org, $filter, $role, $per_page, $page);
    }
    public function checkMembershipForUser_($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\CheckMembershipForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\CheckMembershipForUser_($org, $username);
    }
    public function removeMember_($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\RemoveMember_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\RemoveMember_($org, $username);
    }
    public function getMembershipForUser_($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetMembershipForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetMembershipForUser_($org, $username);
    }
    public function setMembershipForUser_($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\SetMembershipForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\SetMembershipForUser_($org, $username);
    }
    public function removeMembershipForUser_($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\RemoveMembershipForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\RemoveMembershipForUser_($org, $username);
    }
    public function listOutsideCollaborators_($org, string $filter = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListOutsideCollaborators_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListOutsideCollaborators_($org, $filter, $per_page, $page);
    }
    public function convertMemberToOutsideCollaborator_($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ConvertMemberToOutsideCollaborator_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ConvertMemberToOutsideCollaborator_($org, $username);
    }
    public function removeOutsideCollaborator_($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\RemoveOutsideCollaborator_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\RemoveOutsideCollaborator_($org, $username);
    }
    public function listMembershipsForAuthenticatedUser_($state, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListMembershipsForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListMembershipsForAuthenticatedUser_($state, $per_page, $page);
    }
    public function getMembershipForAuthenticatedUser_($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetMembershipForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\GetMembershipForAuthenticatedUser_($org);
    }
    public function updateMembershipForAuthenticatedUser_($org) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\UpdateMembershipForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\UpdateMembershipForAuthenticatedUser_($org);
    }
    public function listForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListForAuthenticatedUser_($per_page, $page);
    }
    public function listForUser_($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Orgs\ListForUser_($username, $per_page, $page);
    }
}
