<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Path\\User\Installations\CbInstallationIdRcb;

final class Repositories
{
    function get(string $accept = 'application/vnd.github.machine-man-preview+json', $installation_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Apps\ListInstallationReposForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\Apps\ListInstallationReposForAuthenticatedUserOperation($accept, $installation_id, $per_page, $page);
    }
}
