<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Enterprise\Settings;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetLicenseInformationOperation;

final class License
{
    function get(): GetLicenseInformationOperation
    {
        return new GetLicenseInformationOperation();
    }
}
