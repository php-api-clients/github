<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Installation;

final class Repositories
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListReposAccessibleToInstallationOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListReposAccessibleToInstallationOperation($per_page, $page);
    }
}
