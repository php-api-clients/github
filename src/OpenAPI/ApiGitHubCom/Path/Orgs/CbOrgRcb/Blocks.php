<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListBlockedUsers;

final class Blocks
{
    function get($org): ListBlockedUsers
    {
        return new ListBlockedUsers($org);
    }
}
