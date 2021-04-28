<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb\Actions\Runners;

final class Downloads
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Actions\ListRunnerApplicationsForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Actions\ListRunnerApplicationsForRepoOperation($owner, $repo);
    }
}
