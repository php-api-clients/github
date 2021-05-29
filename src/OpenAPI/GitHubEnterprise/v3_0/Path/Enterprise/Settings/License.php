<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Enterprise\Settings;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\GetLicenseInformation;

final class License
{
    function get(): GetLicenseInformation
    {
        return new GetLicenseInformation();
    }
}
