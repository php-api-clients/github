<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Git\Tags;

final class CbTagShaRcb
{
    function get($owner, $repo, $tag_sha) : \ApiClients\Client\Github\OpenAPI\Operation\Git\GetTagOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Git\GetTagOperation($owner, $repo, $tag_sha);
    }
}
