<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Admin\PreDashReceiveDashHooks;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\DeletePreReceiveHook;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetPreReceiveHook;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\UpdatePreReceiveHook;

final class CbPreReceiveHookIdRcb
{
    function get($pre_receive_hook_id): GetPreReceiveHook
    {
        return new GetPreReceiveHook($pre_receive_hook_id);
    }

    function delete($pre_receive_hook_id): DeletePreReceiveHook
    {
        return new DeletePreReceiveHook($pre_receive_hook_id);
    }

    function patch($pre_receive_hook_id): UpdatePreReceiveHook
    {
        return new UpdatePreReceiveHook($pre_receive_hook_id);
    }
}
