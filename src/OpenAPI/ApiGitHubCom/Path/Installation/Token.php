<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Installation;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RevokeInstallationAccessToken;

final class Token
{
    function delete(): RevokeInstallationAccessToken
    {
        return new RevokeInstallationAccessToken();
    }
}
