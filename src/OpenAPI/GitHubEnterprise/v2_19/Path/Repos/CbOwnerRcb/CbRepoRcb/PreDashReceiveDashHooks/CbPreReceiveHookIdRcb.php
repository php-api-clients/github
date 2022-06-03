<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Repos\CbOwnerRcb\CbRepoRcb\PreDashReceiveDashHooks;

final class CbPreReceiveHookIdRcb
{
    function get($owner, $repo, $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\GetPreReceiveHookForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\GetPreReceiveHookForRepo($owner, $repo, $pre_receive_hook_id);
    }
    function delete($owner, $repo, $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForRepo($owner, $repo, $pre_receive_hook_id);
    }
    function patch($owner, $repo, $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForRepo
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForRepo($owner, $repo, $pre_receive_hook_id);
    }
}
