<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Path\\Admin\Pre-Receive-Hooks;

final class CbPreReceiveHookIdRcb
{
    function get($pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\EnterpriseAdmin\GetPreReceiveHookOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\EnterpriseAdmin\GetPreReceiveHookOperation($pre_receive_hook_id);
    }
    function delete($pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\EnterpriseAdmin\DeletePreReceiveHookOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\EnterpriseAdmin\DeletePreReceiveHookOperation($pre_receive_hook_id);
    }
    function patch($pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\EnterpriseAdmin\UpdatePreReceiveHookOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.18\Operation\EnterpriseAdmin\UpdatePreReceiveHookOperation($pre_receive_hook_id);
    }
}
