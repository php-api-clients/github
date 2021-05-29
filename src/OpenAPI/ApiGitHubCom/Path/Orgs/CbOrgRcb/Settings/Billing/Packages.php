<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Orgs\CbOrgRcb\Settings\Billing;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingOrgOperation;

final class Packages
{
    function get($org): GetGithubPackagesBillingOrgOperation
    {
        return new GetGithubPackagesBillingOrgOperation($org);
    }
}
