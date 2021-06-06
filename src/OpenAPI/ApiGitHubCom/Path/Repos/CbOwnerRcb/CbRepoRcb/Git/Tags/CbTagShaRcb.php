<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags;

final class CbTagShaRcb
{
    function get($owner, $repo, $tag_sha) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetTag
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Git\GetTag($owner, $repo, $tag_sha);
    }
}
