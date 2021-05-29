<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetUserInstallation;

final class Installation
{
    function get($username): GetUserInstallation
    {
        return new GetUserInstallation($username);
    }
}
