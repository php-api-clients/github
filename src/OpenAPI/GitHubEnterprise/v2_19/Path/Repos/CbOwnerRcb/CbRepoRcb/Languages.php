<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos\ListLanguagesOperation;

final class Languages
{
    function get($owner, $repo): ListLanguagesOperation
    {
        return new ListLanguagesOperation($owner, $repo);
    }
}
