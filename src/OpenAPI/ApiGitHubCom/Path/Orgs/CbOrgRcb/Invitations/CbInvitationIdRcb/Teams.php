<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Orgs\CbOrgRcb\Invitations\CbInvitationIdRcb;

final class Teams
{
    function get($org, $invitation_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListInvitationTeamsOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListInvitationTeamsOperation($org, $invitation_id, $per_page, $page);
    }
}
