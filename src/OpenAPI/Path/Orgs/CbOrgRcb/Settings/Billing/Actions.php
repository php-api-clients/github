<?php

namespace ApiClients\Client\Github\OpenAPI\Path\\Orgs\CbOrgRcb\Settings\Billing;

final class Actions
{
    function get($org) : \ApiClients\Client\Github\OpenAPI\Operation\Billing\GetGithubActionsBillingOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\Operation\Billing\GetGithubActionsBillingOrgOperation($org);
    }
}
