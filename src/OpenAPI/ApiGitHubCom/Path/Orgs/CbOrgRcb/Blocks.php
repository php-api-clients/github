<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListBlockedUsersOperation;

final class Blocks
{
    function get($org): ListBlockedUsersOperation
    {
        return new ListBlockedUsersOperation($org);
    }
}
