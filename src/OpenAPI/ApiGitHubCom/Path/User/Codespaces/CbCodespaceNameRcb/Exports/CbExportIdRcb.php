<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User\Codespaces\CbCodespaceNameRcb\Exports;

final class CbExportIdRcb
{
    function get($codespace_name, $export_id) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetExportDetailsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Codespaces\GetExportDetailsForAuthenticatedUser($codespace_name, $export_id);
    }
}
