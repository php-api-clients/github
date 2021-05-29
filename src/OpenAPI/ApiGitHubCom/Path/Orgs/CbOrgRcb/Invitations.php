<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CreateInvitationOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListPendingInvitationsOperation;

final class Invitations
{
    function get($org, int $per_page = 30, int $page = 1): ListPendingInvitationsOperation
    {
        return new ListPendingInvitationsOperation($org, $per_page, $page);
    }

    function post($org): CreateInvitationOperation
    {
        return new CreateInvitationOperation($org);
    }
}
