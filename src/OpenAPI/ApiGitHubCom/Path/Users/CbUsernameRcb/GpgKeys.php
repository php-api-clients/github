<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Users\CbUsernameRcb;

final class GpgKeys
{
    function get($username, int $per_page = 30, int $page = 1) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListGpgKeysForUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListGpgKeysForUserOperation($username, $per_page, $page);
    }
}
