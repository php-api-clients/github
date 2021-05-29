<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Installation;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\RevokeInstallationAccessTokenOperation;

final class Token
{
    function delete(): RevokeInstallationAccessTokenOperation
    {
        return new RevokeInstallationAccessTokenOperation();
    }
}
