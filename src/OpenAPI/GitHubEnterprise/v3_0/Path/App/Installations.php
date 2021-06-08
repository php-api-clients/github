<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\App;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\ListInstallations;

final class Installations
{
    function get(int $per_page = 30, int $page = 1, $since, $outdated): ListInstallations
    {
        return new ListInstallations($per_page, $page, $since, $outdated);
    }
}
