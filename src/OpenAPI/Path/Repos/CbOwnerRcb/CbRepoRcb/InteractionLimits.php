<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Repos\CbOwnerRcb\CbRepoRcb;

final class InteractionLimits
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Interactions\GetRestrictionsForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Interactions\GetRestrictionsForRepoOperation($owner, $repo);
    }
    function put($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Interactions\SetRestrictionsForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Interactions\SetRestrictionsForRepoOperation($owner, $repo);
    }
    function delete($owner, $repo) : \ApiClients\Client\Github\OpenAPI\Operation\Interactions\RemoveRestrictionsForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Interactions\RemoveRestrictionsForRepoOperation($owner, $repo);
    }
}
