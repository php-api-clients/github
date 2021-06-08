<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Apps\GetAuthenticated;

final class App
{
    function get(): GetAuthenticated
    {
        return new GetAuthenticated();
    }
}
