<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Blocks;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\BlockUser;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckBlockedUser;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UnblockUser;

final class CbUsernameRcb
{
    function get($org, $username): CheckBlockedUser
    {
        return new CheckBlockedUser($org, $username);
    }

    function put($org, $username): BlockUser
    {
        return new BlockUser($org, $username);
    }

    function delete($org, $username): UnblockUser
    {
        return new UnblockUser($org, $username);
    }
}
