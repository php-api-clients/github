<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\CodeScanning\Codeql\Databases;

final class CbLanguageRcb
{
    function get($owner, $repo, $language) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetCodeqlDatabase
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\CodeScanning\GetCodeqlDatabase($owner, $repo, $language);
    }
}
