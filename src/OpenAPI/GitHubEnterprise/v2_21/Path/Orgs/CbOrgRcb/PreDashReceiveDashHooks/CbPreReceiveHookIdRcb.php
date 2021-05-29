<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Orgs\CbOrgRcb\PreDashReceiveDashHooks;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\GetPreReceiveHookForOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForOrgOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForOrgOperation;

final class CbPreReceiveHookIdRcb
{
    function get($org, $pre_receive_hook_id): GetPreReceiveHookForOrgOperation
    {
        return new GetPreReceiveHookForOrgOperation($org, $pre_receive_hook_id);
    }

    function delete($org, $pre_receive_hook_id): RemovePreReceiveHookEnforcementForOrgOperation
    {
        return new RemovePreReceiveHookEnforcementForOrgOperation($org, $pre_receive_hook_id);
    }

    function patch($org, $pre_receive_hook_id): UpdatePreReceiveHookEnforcementForOrgOperation
    {
        return new UpdatePreReceiveHookEnforcementForOrgOperation($org, $pre_receive_hook_id);
    }
}
