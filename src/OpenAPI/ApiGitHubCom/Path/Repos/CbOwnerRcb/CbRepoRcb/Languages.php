<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\ListLanguages;

final class Languages
{
    function get($owner, $repo): ListLanguages
    {
        return new ListLanguages($owner, $repo);
    }
}
