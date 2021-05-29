<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\GetReadmeOperation;

final class Readme
{
    function get($owner, $repo, $ref): GetReadmeOperation
    {
        return new GetReadmeOperation($owner, $repo, $ref);
    }
}
