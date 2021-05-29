<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Teams\CbTeamSlugRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Teams\ListPendingInvitationsInOrg;

final class Invitations
{
    function get($org, $team_slug, int $per_page = 30, int $page = 1): ListPendingInvitationsInOrg
    {
        return new ListPendingInvitationsInOrg($org, $team_slug, $per_page, $page);
    }
}
