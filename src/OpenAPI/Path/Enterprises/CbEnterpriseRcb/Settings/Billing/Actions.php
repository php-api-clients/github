<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Enterprises\CbEnterpriseRcb\Settings\Billing;

final class Actions
{
    function get($enterprise) : \ApiClients\Client\Github\OpenAPI\Operation\Billing\GetGithubActionsBillingGheOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Billing\GetGithubActionsBillingGheOperation($enterprise);
    }
}
