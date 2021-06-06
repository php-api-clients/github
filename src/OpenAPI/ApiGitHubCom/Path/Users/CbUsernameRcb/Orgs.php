<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Users\CbUsernameRcb;

final class Orgs
{
    function get($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListForUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\ListForUser($username, $per_page, $page);
    }
}
