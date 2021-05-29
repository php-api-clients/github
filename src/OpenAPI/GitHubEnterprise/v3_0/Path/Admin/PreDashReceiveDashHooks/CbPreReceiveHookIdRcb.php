<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Admin\PreDashReceiveDashHooks;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\DeletePreReceiveHookOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\GetPreReceiveHookOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\UpdatePreReceiveHookOperation;

final class CbPreReceiveHookIdRcb
{
    function get($pre_receive_hook_id): GetPreReceiveHookOperation
    {
        return new GetPreReceiveHookOperation($pre_receive_hook_id);
    }

    function delete($pre_receive_hook_id): DeletePreReceiveHookOperation
    {
        return new DeletePreReceiveHookOperation($pre_receive_hook_id);
    }

    function patch($pre_receive_hook_id): UpdatePreReceiveHookOperation
    {
        return new UpdatePreReceiveHookOperation($pre_receive_hook_id);
    }
}
