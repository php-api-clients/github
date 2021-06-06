<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User;

final class Installations
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallationsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Apps\ListInstallationsForAuthenticatedUser($per_page, $page);
    }
}
