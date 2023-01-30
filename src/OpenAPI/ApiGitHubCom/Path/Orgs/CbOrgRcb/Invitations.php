<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

final class Invitations
{
    function get($org, int $per_page = 30, int $page = 1, string $role = 'all', string $invitation_source = 'all') : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListPendingInvitations
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListPendingInvitations($org, $per_page, $page, $role, $invitation_source);
    }
    function post($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateInvitation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateInvitation($org);
    }
}
