<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Enterprise\Settings;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin\GetLicenseInformationOperation;

final class License
{
    function get(): GetLicenseInformationOperation
    {
        return new GetLicenseInformationOperation();
    }
}
