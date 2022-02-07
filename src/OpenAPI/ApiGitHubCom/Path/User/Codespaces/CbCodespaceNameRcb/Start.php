<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Codespaces\CbCodespaceNameRcb;

final class Start
{
    function post($codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StartForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\StartForAuthenticatedUser($codespace_name);
    }
}
