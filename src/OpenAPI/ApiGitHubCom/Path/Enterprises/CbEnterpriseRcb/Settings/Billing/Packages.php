<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Settings\Billing;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingGheOperation;

final class Packages
{
    function get($enterprise): GetGithubPackagesBillingGheOperation
    {
        return new GetGithubPackagesBillingGheOperation($enterprise);
    }
}
