<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Email;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\SetPrimaryEmailVisibilityForAuthenticatedOperation;

final class Visibility
{
    function patch(): SetPrimaryEmailVisibilityForAuthenticatedOperation
    {
        return new SetPrimaryEmailVisibilityForAuthenticatedOperation();
    }
}
