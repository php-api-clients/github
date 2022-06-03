<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\User\Installations\CbInstallationIdRcb;

final class Repositories
{
    function get($installation_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\ListInstallationReposForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Apps\ListInstallationReposForAuthenticatedUser($installation_id, $per_page, $page);
    }
}
