<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Enterprises\CbEnterpriseRcb\Settings\Billing;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Billing\GetGithubPackagesBillingGhe;

final class Packages
{
    function get($enterprise): GetGithubPackagesBillingGhe
    {
        return new GetGithubPackagesBillingGhe($enterprise);
    }
}
