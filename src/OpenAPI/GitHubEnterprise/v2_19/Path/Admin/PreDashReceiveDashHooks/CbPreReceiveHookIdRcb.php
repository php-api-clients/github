<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Admin\PreDashReceiveDashHooks;

final class CbPreReceiveHookIdRcb
{
    function get($pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\GetPreReceiveHook
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\GetPreReceiveHook($pre_receive_hook_id);
    }
    function delete($pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\DeletePreReceiveHook
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\DeletePreReceiveHook($pre_receive_hook_id);
    }
    function patch($pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\UpdatePreReceiveHook
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\UpdatePreReceiveHook($pre_receive_hook_id);
    }
}
