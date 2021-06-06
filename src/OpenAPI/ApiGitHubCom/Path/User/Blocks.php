<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User;

final class Blocks
{
    function get() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListBlockedByAuthenticated
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\ListBlockedByAuthenticated();
    }
}
