<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\App;

final class Installations
{
    function get(int $per_page = 30, int $page = 1, $since, $outdated) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallations
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallations($per_page, $page, $since, $outdated);
    }
}
