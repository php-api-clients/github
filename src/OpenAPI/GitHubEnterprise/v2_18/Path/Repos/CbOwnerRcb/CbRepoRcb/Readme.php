<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Repos\GetReadme;

final class Readme
{
    function get($owner, $repo, $ref): GetReadme
    {
        return new GetReadme($owner, $repo, $ref);
    }
}
