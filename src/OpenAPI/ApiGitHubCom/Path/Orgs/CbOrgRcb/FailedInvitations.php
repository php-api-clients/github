<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListFailedInvitationsOperation;

final class FailedInvitations
{
    function get($org, int $per_page = 30, int $page = 1): ListFailedInvitationsOperation
    {
        return new ListFailedInvitationsOperation($org, $per_page, $page);
    }
}
