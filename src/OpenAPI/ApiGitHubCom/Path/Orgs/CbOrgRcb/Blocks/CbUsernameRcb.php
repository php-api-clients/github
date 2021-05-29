<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Blocks;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\BlockUserOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckBlockedUserOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UnblockUserOperation;

final class CbUsernameRcb
{
    function get($org, $username): CheckBlockedUserOperation
    {
        return new CheckBlockedUserOperation($org, $username);
    }

    function put($org, $username): BlockUserOperation
    {
        return new BlockUserOperation($org, $username);
    }

    function delete($org, $username): UnblockUserOperation
    {
        return new UnblockUserOperation($org, $username);
    }
}
