<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Settings\Billing;

final class SharedStorage
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\Operation\Billing\GetSharedStorageBillingOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Billing\GetSharedStorageBillingOrgOperation($org);
    }
}
