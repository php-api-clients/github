<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Traffic;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetClonesOperation;

final class Clones
{
    function get($owner, $repo, string $per = 'day'): GetClonesOperation
    {
        return new GetClonesOperation($owner, $repo, $per);
    }
}
