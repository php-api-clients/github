<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprise\Settings;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetLicenseInformation;

final class License
{
    function get(): GetLicenseInformation
    {
        return new GetLicenseInformation();
    }
}
