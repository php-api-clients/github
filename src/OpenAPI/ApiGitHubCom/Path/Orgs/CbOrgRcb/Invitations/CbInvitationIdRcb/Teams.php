<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Invitations\CbInvitationIdRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListInvitationTeams;

final class Teams
{
    function get($org, $invitation_id, int $per_page = 30, int $page = 1): ListInvitationTeams
    {
        return new ListInvitationTeams($org, $invitation_id, $per_page, $page);
    }
}
