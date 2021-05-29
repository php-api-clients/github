<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetAuthenticated;
use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\UpdateAuthenticated;

final class User
{
    function get(): GetAuthenticated
    {
        return new GetAuthenticated();
    }

    function patch(): UpdateAuthenticated
    {
        return new UpdateAuthenticated();
    }
}
