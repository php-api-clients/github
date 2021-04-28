<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Releases\Tags;

final class CbTagRcb
{
    function get($owner, $repo, $tag) : \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetReleaseByTagOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Repos\GetReleaseByTagOperation($owner, $repo, $tag);
    }
}
