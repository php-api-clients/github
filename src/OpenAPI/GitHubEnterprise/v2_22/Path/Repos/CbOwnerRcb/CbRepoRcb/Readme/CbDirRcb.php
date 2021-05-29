<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Repos\CbOwnerRcb\CbRepoRcb\Readme;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos\GetReadmeInDirectoryOperation;

final class CbDirRcb
{
    function get($owner, $repo, $dir, $ref): GetReadmeInDirectoryOperation
    {
        return new GetReadmeInDirectoryOperation($owner, $repo, $dir, $ref);
    }
}
