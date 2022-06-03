<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class MergeUpstream
{
    function post($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\MergeUpstream
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\MergeUpstream($owner, $repo);
    }
}
