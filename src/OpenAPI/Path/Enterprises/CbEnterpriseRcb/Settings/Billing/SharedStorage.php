<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Enterprises\CbEnterpriseRcb\Settings\Billing;

final class SharedStorage
{
    function get($enterprise) : \ApiClients\Client\Github\OpenAPI\Operation\Billing\GetSharedStorageBillingGheOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Billing\GetSharedStorageBillingGheOperation($enterprise);
    }
}
