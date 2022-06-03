<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Languages
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListLanguages
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos\ListLanguages($owner, $repo);
    }
}
