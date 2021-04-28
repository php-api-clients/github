<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Settings\Billing;

final class Packages
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\Operation\Billing\GetGithubPackagesBillingOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Billing\GetGithubPackagesBillingOrgOperation($org);
    }
}
