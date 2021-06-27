<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Repos\CbOwnerRcb\CbRepoRcb;

final class InteractionLimits
{
    function get($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForRepo($owner, $repo);
    }
    function put($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForRepo($owner, $repo);
    }
    function delete($owner, $repo) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForRepo($owner, $repo);
    }
}
