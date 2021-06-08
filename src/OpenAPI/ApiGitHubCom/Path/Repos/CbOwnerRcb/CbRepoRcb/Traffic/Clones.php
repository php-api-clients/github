<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Traffic;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetClones;

final class Clones
{
    function get($owner, $repo, string $per = 'day'): GetClones
    {
        return new GetClones($owner, $repo, $per);
    }
}
