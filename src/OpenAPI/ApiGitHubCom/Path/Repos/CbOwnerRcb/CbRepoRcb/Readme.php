<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos\GetReadme;

final class Readme
{
    function get($owner, $repo, $ref): GetReadme
    {
        return new GetReadme($owner, $repo, $ref);
    }
}
