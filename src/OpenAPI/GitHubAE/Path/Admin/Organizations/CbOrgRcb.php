<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin\Organizations;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdateOrgName;

final class CbOrgRcb
{
    function patch($org): UpdateOrgName
    {
        return new UpdateOrgName($org);
    }
}
