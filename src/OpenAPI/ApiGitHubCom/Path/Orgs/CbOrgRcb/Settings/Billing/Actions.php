<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Settings\Billing;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubActionsBillingOrgOperation;

final class Actions
{
    function get($org): GetGithubActionsBillingOrgOperation
    {
        return new GetGithubActionsBillingOrgOperation($org);
    }
}
