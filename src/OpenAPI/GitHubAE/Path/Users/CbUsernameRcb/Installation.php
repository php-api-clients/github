<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetUserInstallationOperation;

final class Installation
{
    function get($username): GetUserInstallationOperation
    {
        return new GetUserInstallationOperation($username);
    }
}
