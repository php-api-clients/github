<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Gists\CbGistIdRcb;

final class CbShaRcb
{
    function get($gist_id, $sha) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\GetRevision
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gists\GetRevision($gist_id, $sha);
    }
}
