<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Apps\GetUserInstallationOperation;

final class Installation
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', $username): GetUserInstallationOperation
    {
        return new GetUserInstallationOperation($accept, $username);
    }
}
