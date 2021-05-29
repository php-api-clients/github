<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos\TransferOperation;

final class Transfer
{
    function post($owner, $repo): TransferOperation
    {
        return new TransferOperation($owner, $repo);
    }
}
