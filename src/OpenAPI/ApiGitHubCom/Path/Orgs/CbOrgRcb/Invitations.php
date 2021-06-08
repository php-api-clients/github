<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateInvitation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListPendingInvitations;

final class Invitations
{
    function get($org, int $per_page = 30, int $page = 1): ListPendingInvitations
    {
        return new ListPendingInvitations($org, $per_page, $page);
    }

    function post($org): CreateInvitation
    {
        return new CreateInvitation($org);
    }
}
