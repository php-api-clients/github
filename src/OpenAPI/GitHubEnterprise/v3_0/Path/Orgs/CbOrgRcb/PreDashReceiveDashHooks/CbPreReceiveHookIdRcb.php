<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\PreDashReceiveDashHooks;

final class CbPreReceiveHookIdRcb
{
    function get($org, $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\GetPreReceiveHookForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\GetPreReceiveHookForOrg($org, $pre_receive_hook_id);
    }
    function delete($org, $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForOrg($org, $pre_receive_hook_id);
    }
    function patch($org, $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForOrg($org, $pre_receive_hook_id);
    }
}
