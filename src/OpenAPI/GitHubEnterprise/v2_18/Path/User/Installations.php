<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\User;

final class Installations
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Apps\ListInstallationsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Apps\ListInstallationsForAuthenticatedUser($accept, $per_page, $page);
    }
}
