<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Repos\CbOwnerRcb\CbRepoRcb\PreDashReceiveDashHooks;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin\GetPreReceiveHookForRepo;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForRepo;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForRepo;

final class CbPreReceiveHookIdRcb
{
    function get($owner, $repo, $pre_receive_hook_id): GetPreReceiveHookForRepo
    {
        return new GetPreReceiveHookForRepo($owner, $repo, $pre_receive_hook_id);
    }

    function delete($owner, $repo, $pre_receive_hook_id): RemovePreReceiveHookEnforcementForRepo
    {
        return new RemovePreReceiveHookEnforcementForRepo($owner, $repo, $pre_receive_hook_id);
    }

    function patch($owner, $repo, $pre_receive_hook_id): UpdatePreReceiveHookEnforcementForRepo
    {
        return new UpdatePreReceiveHookEnforcementForRepo($owner, $repo, $pre_receive_hook_id);
    }
}
