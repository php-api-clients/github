<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\GetUserInstallation;

final class Installation
{
    function get($username): GetUserInstallation
    {
        return new GetUserInstallation($username);
    }
}
