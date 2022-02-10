<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Blocks;

final class CbUsernameRcb
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckBlocked
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckBlocked($username);
    }
    function put($username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Block
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Block($username);
    }
    function delete($username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Unblock
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\Unblock($username);
    }
}
