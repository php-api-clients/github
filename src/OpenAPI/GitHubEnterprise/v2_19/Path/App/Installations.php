<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\App;

final class Installations
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Apps\ListInstallations
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Apps\ListInstallations($accept, $per_page, $page);
    }
}
