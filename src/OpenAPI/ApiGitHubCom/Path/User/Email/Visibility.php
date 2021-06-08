<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Email;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\SetPrimaryEmailVisibilityForAuthenticated;

final class Visibility
{
    function patch(): SetPrimaryEmailVisibilityForAuthenticated
    {
        return new SetPrimaryEmailVisibilityForAuthenticated();
    }
}
