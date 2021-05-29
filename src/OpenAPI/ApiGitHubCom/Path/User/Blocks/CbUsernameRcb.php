<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Blocks;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\BlockOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckBlockedOperation;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\UnblockOperation;

final class CbUsernameRcb
{
    function get($username): CheckBlockedOperation
    {
        return new CheckBlockedOperation($username);
    }

    function put($username): BlockOperation
    {
        return new BlockOperation($username);
    }

    function delete($username): UnblockOperation
    {
        return new UnblockOperation($username);
    }
}
