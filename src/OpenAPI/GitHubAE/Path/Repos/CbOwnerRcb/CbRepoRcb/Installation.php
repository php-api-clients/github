<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class Installation
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetRepoInstallation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps\GetRepoInstallation($owner, $repo);
    }
}
