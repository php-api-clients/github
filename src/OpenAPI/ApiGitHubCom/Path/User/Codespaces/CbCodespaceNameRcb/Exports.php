<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Codespaces\CbCodespaceNameRcb;

final class Exports
{
    function post($codespace_name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ExportForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\ExportForAuthenticatedUser($codespace_name);
    }
}
