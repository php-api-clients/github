<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Installation;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\RevokeInstallationAccessTokenOperation;

final class Token
{
    function delete(): RevokeInstallationAccessTokenOperation
    {
        return new RevokeInstallationAccessTokenOperation();
    }
}
