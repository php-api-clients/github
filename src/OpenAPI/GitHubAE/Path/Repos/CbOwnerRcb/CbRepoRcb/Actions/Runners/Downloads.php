<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners;

final class Downloads
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListRunnerApplicationsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions\ListRunnerApplicationsForRepo($owner, $repo);
    }
}
