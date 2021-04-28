<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Enterprises\CbEnterpriseRcb\Settings\Billing;

final class Packages
{
    function get($enterprise) : \ApiClients\Client\Github\OpenAPI\Operation\Billing\GetGithubPackagesBillingGheOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Billing\GetGithubPackagesBillingGheOperation($enterprise);
    }
}
