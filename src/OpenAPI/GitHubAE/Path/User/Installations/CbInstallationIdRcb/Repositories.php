<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\User\Installations\CbInstallationIdRcb;

final class Repositories
{
    function get($installation_id, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListInstallationReposForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListInstallationReposForAuthenticatedUserOperation($installation_id, $per_page, $page);
    }
}
