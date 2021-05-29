<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\PreDashReceiveDashHooks;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin\GetPreReceiveHookForRepoOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForRepoOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForRepoOperation;

final class CbPreReceiveHookIdRcb
{
    function get($owner, $repo, $pre_receive_hook_id): GetPreReceiveHookForRepoOperation
    {
        return new GetPreReceiveHookForRepoOperation($owner, $repo, $pre_receive_hook_id);
    }

    function delete($owner, $repo, $pre_receive_hook_id): RemovePreReceiveHookEnforcementForRepoOperation
    {
        return new RemovePreReceiveHookEnforcementForRepoOperation($owner, $repo, $pre_receive_hook_id);
    }

    function patch($owner, $repo, $pre_receive_hook_id): UpdatePreReceiveHookEnforcementForRepoOperation
    {
        return new UpdatePreReceiveHookEnforcementForRepoOperation($owner, $repo, $pre_receive_hook_id);
    }
}
