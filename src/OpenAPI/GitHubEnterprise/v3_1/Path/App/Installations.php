<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\App;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\ListInstallationsOperation;

final class Installations
{
    function get(int $per_page = 30, int $page = 1, $since, $outdated): ListInstallationsOperation
    {
        return new ListInstallationsOperation($per_page, $page, $since, $outdated);
    }
}
