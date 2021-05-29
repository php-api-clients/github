<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Orgs\CbOrgRcb\PreDashReceiveDashHooks;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetPreReceiveHookForOrg;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForOrg;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForOrg;

final class CbPreReceiveHookIdRcb
{
    function get($org, $pre_receive_hook_id): GetPreReceiveHookForOrg
    {
        return new GetPreReceiveHookForOrg($org, $pre_receive_hook_id);
    }

    function delete($org, $pre_receive_hook_id): RemovePreReceiveHookEnforcementForOrg
    {
        return new RemovePreReceiveHookEnforcementForOrg($org, $pre_receive_hook_id);
    }

    function patch($org, $pre_receive_hook_id): UpdatePreReceiveHookEnforcementForOrg
    {
        return new UpdatePreReceiveHookEnforcementForOrg($org, $pre_receive_hook_id);
    }
}