<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb;

final class InteractionLimits
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForOrg($org);
    }
    function put($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForOrg($org);
    }
    function delete($org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForOrg($org);
    }
}
