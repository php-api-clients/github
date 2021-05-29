<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Users\CbUsernameRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\DemoteSiteAdministrator;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\PromoteUserToBeSiteAdministrator;

final class SiteAdmin
{
    function put($username): PromoteUserToBeSiteAdministrator
    {
        return new PromoteUserToBeSiteAdministrator($username);
    }

    function delete($username): DemoteSiteAdministrator
    {
        return new DemoteSiteAdministrator($username);
    }
}
