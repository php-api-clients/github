<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Blocks;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Block;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckBlocked;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Unblock;

final class CbUsernameRcb
{
    function get($username): CheckBlocked
    {
        return new CheckBlocked($username);
    }

    function put($username): Block
    {
        return new Block($username);
    }

    function delete($username): Unblock
    {
        return new Unblock($username);
    }
}
