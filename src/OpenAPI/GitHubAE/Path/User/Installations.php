<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\User;

final class Installations
{
    function get(int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListInstallationsForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\ListInstallationsForAuthenticatedUserOperation($per_page, $page);
    }
}
