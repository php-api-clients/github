<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Users;

final class CbUsernameRcb
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetByUsernameOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\GetByUsernameOperation($username);
    }
}
