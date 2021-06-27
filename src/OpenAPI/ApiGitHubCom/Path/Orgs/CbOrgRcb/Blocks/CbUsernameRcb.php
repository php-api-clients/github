<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Blocks;

final class CbUsernameRcb
{
    function get($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckBlockedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\CheckBlockedUser($org, $username);
    }
    function put($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\BlockUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\BlockUser($org, $username);
    }
    function delete($org, $username) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UnblockUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs\UnblockUser($org, $username);
    }
}
