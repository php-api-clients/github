<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\Admin\PreDashReceiveDashEnvironments;

final class CbPreReceiveEnvironmentIdRcb
{
    function get($pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\GetPreReceiveEnvironment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\GetPreReceiveEnvironment($pre_receive_environment_id);
    }
    function delete($pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment($pre_receive_environment_id);
    }
    function patch($pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\UpdatePreReceiveEnvironment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\EnterpriseAdmin\UpdatePreReceiveEnvironment($pre_receive_environment_id);
    }
}
