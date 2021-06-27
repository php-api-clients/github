<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\User;

final class InteractionLimits
{
    function get() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\GetRestrictionsForAuthenticatedUser();
    }
    function put() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\SetRestrictionsForAuthenticatedUser();
    }
    function delete() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForAuthenticatedUser
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Interactions\RemoveRestrictionsForAuthenticatedUser();
    }
}
