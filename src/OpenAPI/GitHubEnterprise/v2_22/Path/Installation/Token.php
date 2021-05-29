<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Installation;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\RevokeInstallationAccessToken;

final class Token
{
    function delete(): RevokeInstallationAccessToken
    {
        return new RevokeInstallationAccessToken();
    }
}
