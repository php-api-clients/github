<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Transfer
{
    function post($owner, $repo): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Transfer
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\Transfer($owner, $repo);
    }
}
