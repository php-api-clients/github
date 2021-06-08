<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb\Readme;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Repos\GetReadmeInDirectory;

final class CbDirRcb
{
    function get($owner, $repo, $dir, $ref): GetReadmeInDirectory
    {
        return new GetReadmeInDirectory($owner, $repo, $dir, $ref);
    }
}
