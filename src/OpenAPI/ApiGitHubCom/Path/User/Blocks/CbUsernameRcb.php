<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Blocks;

final class CbUsernameRcb
{
    function get($username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckBlockedOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\CheckBlockedOperation($username);
    }
    function put($username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\BlockOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\BlockOperation($username);
    }
    function delete($username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\UnblockOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Users\UnblockOperation($username);
    }
}
