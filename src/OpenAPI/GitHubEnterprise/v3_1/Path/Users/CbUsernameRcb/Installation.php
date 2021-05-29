<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\GetUserInstallationOperation;

final class Installation
{
    function get($username): GetUserInstallationOperation
    {
        return new GetUserInstallationOperation($username);
    }
}
