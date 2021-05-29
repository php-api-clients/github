<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Apps\GetRepoInstallationOperation;

final class Installation
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', $owner, $repo): GetRepoInstallationOperation
    {
        return new GetRepoInstallationOperation($accept, $owner, $repo);
    }
}
