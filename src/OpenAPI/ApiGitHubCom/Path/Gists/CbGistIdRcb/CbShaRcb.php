<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Gists\CbGistIdRcb;

final class CbShaRcb
{
    function get($gist_id, $sha) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\GetRevision
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists\GetRevision($gist_id, $sha);
    }
}
