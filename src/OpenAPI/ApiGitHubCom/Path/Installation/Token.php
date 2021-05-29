<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Installation;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\RevokeInstallationAccessTokenOperation;

final class Token
{
    function delete(): RevokeInstallationAccessTokenOperation
    {
        return new RevokeInstallationAccessTokenOperation();
    }
}
