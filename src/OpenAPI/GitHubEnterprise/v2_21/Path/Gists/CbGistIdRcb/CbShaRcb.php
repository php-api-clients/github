<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Gists\CbGistIdRcb;

final class CbShaRcb
{
    function get($gist_id, $sha) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Gists\GetRevision
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Gists\GetRevision($gist_id, $sha);
    }
}
