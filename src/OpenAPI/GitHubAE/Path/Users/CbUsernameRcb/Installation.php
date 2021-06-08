<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetUserInstallation;

final class Installation
{
    function get($username): GetUserInstallation
    {
        return new GetUserInstallation($username);
    }
}
