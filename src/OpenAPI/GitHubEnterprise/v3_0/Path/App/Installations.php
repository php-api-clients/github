<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\App;

final class Installations
{
    function get(int $per_page = 30, int $page = 1, $since, $outdated) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\ListInstallations
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Apps\ListInstallations($per_page, $page, $since, $outdated);
    }
}
