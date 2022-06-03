<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\User\Installations\CbInstallationIdRcb;

final class Repositories
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', $installation_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Apps\ListInstallationReposForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Apps\ListInstallationReposForAuthenticatedUser($accept, $installation_id, $per_page, $page);
    }
}
