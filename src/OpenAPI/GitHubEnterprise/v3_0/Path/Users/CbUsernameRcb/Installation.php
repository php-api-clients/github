<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\GetUserInstallationOperation;

final class Installation
{
    function get($username): GetUserInstallationOperation
    {
        return new GetUserInstallationOperation($username);
    }
}
