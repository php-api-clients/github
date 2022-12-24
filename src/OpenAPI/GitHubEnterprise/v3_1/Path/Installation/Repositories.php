<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Installation;

final class Repositories
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\ListReposAccessibleToInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Apps\ListReposAccessibleToInstallation($per_page, $page);
    }
}