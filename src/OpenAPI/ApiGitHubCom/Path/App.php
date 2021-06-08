<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\GetAuthenticated;

final class App
{
    function get(): GetAuthenticated
    {
        return new GetAuthenticated();
    }
}
