<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\Admin\Organizations;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\EnterpriseAdmin\UpdateOrgName;

final class CbOrgRcb
{
    function patch($org): UpdateOrgName
    {
        return new UpdateOrgName($org);
    }
}
