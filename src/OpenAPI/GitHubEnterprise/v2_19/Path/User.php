<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Users\GetAuthenticated;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Users\UpdateAuthenticated;

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
