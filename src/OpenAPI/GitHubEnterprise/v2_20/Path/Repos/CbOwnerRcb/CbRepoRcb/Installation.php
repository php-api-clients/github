<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Apps\GetRepoInstallation;

final class Installation
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', $owner, $repo): GetRepoInstallation
    {
        return new GetRepoInstallation($accept, $owner, $repo);
    }
}
