<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Path\\Repos\CbOwnerRcb\CbRepoRcb\Pre-Receive-Hooks;

final class CbPreReceiveHookIdRcb
{
    function get($owner, $repo, $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\EnterpriseAdmin\GetPreReceiveHookForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\EnterpriseAdmin\GetPreReceiveHookForRepoOperation($owner, $repo, $pre_receive_hook_id);
    }
    function delete($owner, $repo, $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\EnterpriseAdmin\RemovePreReceiveHookEnforcementForRepoOperation($owner, $repo, $pre_receive_hook_id);
    }
    function patch($owner, $repo, $pre_receive_hook_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForRepoOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.20\Operation\EnterpriseAdmin\UpdatePreReceiveHookEnforcementForRepoOperation($owner, $repo, $pre_receive_hook_id);
    }
}
