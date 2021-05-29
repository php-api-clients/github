<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Traffic;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetViewsOperation;

final class Views
{
    function get($owner, $repo, string $per = 'day'): GetViewsOperation
    {
        return new GetViewsOperation($owner, $repo, $per);
    }
}
