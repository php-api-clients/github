<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\App;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Apps\ListInstallations;

final class Installations
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', int $per_page = 30, int $page = 1): ListInstallations
    {
        return new ListInstallations($accept, $per_page, $page);
    }
}
