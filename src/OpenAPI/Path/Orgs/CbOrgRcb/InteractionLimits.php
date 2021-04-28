<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb;

final class InteractionLimits
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\Operation\Interactions\GetRestrictionsForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Interactions\GetRestrictionsForOrgOperation($org);
    }
    function put($org) : \ApiClients\Client\Github\OpenAPI\Operation\Interactions\SetRestrictionsForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Interactions\SetRestrictionsForOrgOperation($org);
    }
    function delete($org) : \ApiClients\Client\Github\OpenAPI\Operation\Interactions\RemoveRestrictionsForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Interactions\RemoveRestrictionsForOrgOperation($org);
    }
}
