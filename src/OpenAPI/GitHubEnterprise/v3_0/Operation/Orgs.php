<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation;

final class Orgs
{
    public function list_($since, int $per_page = 30) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\List_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\List_($since, $per_page);
    }
    public function get_($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\Get_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\Get_($org);
    }
    public function update_($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\Update_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\Update_($org);
    }
    public function listWebhooks_($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\ListWebhooks_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\ListWebhooks_($org, $per_page, $page);
    }
    public function createWebhook_($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\CreateWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\CreateWebhook_($org);
    }
    public function getWebhook_($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\GetWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\GetWebhook_($org, $hook_id);
    }
    public function deleteWebhook_($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\DeleteWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\DeleteWebhook_($org, $hook_id);
    }
    public function updateWebhook_($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\UpdateWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\UpdateWebhook_($org, $hook_id);
    }
    public function getWebhookConfigForOrg_($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\GetWebhookConfigForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\GetWebhookConfigForOrg_($org, $hook_id);
    }
    public function updateWebhookConfigForOrg_($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\UpdateWebhookConfigForOrg_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\UpdateWebhookConfigForOrg_($org, $hook_id);
    }
    public function pingWebhook_($org, $hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\PingWebhook_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\PingWebhook_($org, $hook_id);
    }
    public function listAppInstallations_($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\ListAppInstallations_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\ListAppInstallations_($org, $per_page, $page);
    }
    public function listMembers_($org, string $filter = 'all', string $role = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\ListMembers_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\ListMembers_($org, $filter, $role, $per_page, $page);
    }
    public function checkMembershipForUser_($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\CheckMembershipForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\CheckMembershipForUser_($org, $username);
    }
    public function removeMember_($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\RemoveMember_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\RemoveMember_($org, $username);
    }
    public function getMembershipForUser_($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\GetMembershipForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\GetMembershipForUser_($org, $username);
    }
    public function setMembershipForUser_($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\SetMembershipForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\SetMembershipForUser_($org, $username);
    }
    public function removeMembershipForUser_($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\RemoveMembershipForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\RemoveMembershipForUser_($org, $username);
    }
    public function listOutsideCollaborators_($org, string $filter = 'all', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\ListOutsideCollaborators_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\ListOutsideCollaborators_($org, $filter, $per_page, $page);
    }
    public function convertMemberToOutsideCollaborator_($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\ConvertMemberToOutsideCollaborator_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\ConvertMemberToOutsideCollaborator_($org, $username);
    }
    public function removeOutsideCollaborator_($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\RemoveOutsideCollaborator_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\RemoveOutsideCollaborator_($org, $username);
    }
    public function listPublicMembers_($org, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\ListPublicMembers_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\ListPublicMembers_($org, $per_page, $page);
    }
    public function checkPublicMembershipForUser_($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\CheckPublicMembershipForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\CheckPublicMembershipForUser_($org, $username);
    }
    public function setPublicMembershipForAuthenticatedUser_($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\SetPublicMembershipForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\SetPublicMembershipForAuthenticatedUser_($org, $username);
    }
    public function removePublicMembershipForAuthenticatedUser_($org, $username) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\RemovePublicMembershipForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\RemovePublicMembershipForAuthenticatedUser_($org, $username);
    }
    public function listMembershipsForAuthenticatedUser_($state, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\ListMembershipsForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\ListMembershipsForAuthenticatedUser_($state, $per_page, $page);
    }
    public function getMembershipForAuthenticatedUser_($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\GetMembershipForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\GetMembershipForAuthenticatedUser_($org);
    }
    public function updateMembershipForAuthenticatedUser_($org) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\UpdateMembershipForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\UpdateMembershipForAuthenticatedUser_($org);
    }
    public function listForAuthenticatedUser_(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\ListForAuthenticatedUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\ListForAuthenticatedUser_($per_page, $page);
    }
    public function listForUser_($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\ListForUser_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Orgs\ListForUser_($username, $per_page, $page);
    }
}
