<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Path\\Orgs\CbOrgRcb\Pre-Receive-Hooks;

final class CbPreReceiveHookIdRcb
{
    function get($org, $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\EnterpriseAdmin\GetPreReceiveHookForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\EnterpriseAdmin\GetPreReceiveHookForOrgOperation($org, $pre_receive_hook_id);
    }
    function delete($org, $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForOrgOperation($org, $pre_receive_hook_id);
    }
    function patch($org, $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForOrgOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForOrgOperation($org, $pre_receive_hook_id);
    }
}
