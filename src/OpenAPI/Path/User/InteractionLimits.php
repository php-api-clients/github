<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\User;

final class InteractionLimits
{
    function get() : \ApiClients\Client\Github\OpenAPI\Operation\Interactions\GetRestrictionsForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Interactions\GetRestrictionsForAuthenticatedUserOperation();
    }
    function put() : \ApiClients\Client\Github\OpenAPI\Operation\Interactions\SetRestrictionsForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Interactions\SetRestrictionsForAuthenticatedUserOperation();
    }
    function delete() : \ApiClients\Client\Github\OpenAPI\Operation\Interactions\RemoveRestrictionsForAuthenticatedUserOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Interactions\RemoveRestrictionsForAuthenticatedUserOperation();
    }
}
