<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Enterprise\Settings;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetLicenseInformation;

final class License
{
    function get(): GetLicenseInformation
    {
        return new GetLicenseInformation();
    }
}
