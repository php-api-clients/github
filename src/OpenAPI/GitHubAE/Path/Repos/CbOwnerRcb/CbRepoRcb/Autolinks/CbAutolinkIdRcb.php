<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Autolinks;

final class CbAutolinkIdRcb
{
    function get($owner, $repo, $autolink_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetAutolink
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\GetAutolink($owner, $repo, $autolink_id);
    }
    function delete($owner, $repo, $autolink_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteAutolink
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\DeleteAutolink($owner, $repo, $autolink_id);
    }
}
