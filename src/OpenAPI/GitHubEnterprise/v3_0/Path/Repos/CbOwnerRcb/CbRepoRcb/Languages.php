<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Repos\ListLanguages;

final class Languages
{
    function get($owner, $repo): ListLanguages
    {
        return new ListLanguages($owner, $repo);
    }
}
