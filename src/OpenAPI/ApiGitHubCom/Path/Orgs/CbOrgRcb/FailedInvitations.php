<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListFailedInvitations;

final class FailedInvitations
{
    function get($org, int $per_page = 30, int $page = 1): ListFailedInvitations
    {
        return new ListFailedInvitations($org, $per_page, $page);
    }
}
