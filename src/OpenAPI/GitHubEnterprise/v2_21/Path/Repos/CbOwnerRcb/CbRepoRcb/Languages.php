<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos\ListLanguages;

final class Languages
{
    function get($owner, $repo): ListLanguages
    {
        return new ListLanguages($owner, $repo);
    }
}
