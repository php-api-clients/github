<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Transfer
{
    function post($owner, $repo): \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\Transfer
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\Transfer($owner, $repo);
    }
}
