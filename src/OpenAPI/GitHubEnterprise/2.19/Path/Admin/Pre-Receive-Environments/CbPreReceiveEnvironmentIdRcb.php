<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Path\\Admin\Pre-Receive-Environments;

final class CbPreReceiveEnvironmentIdRcb
{
    function get($pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\EnterpriseAdmin\GetPreReceiveEnvironmentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\EnterpriseAdmin\GetPreReceiveEnvironmentOperation($pre_receive_environment_id);
    }
    function delete($pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\EnterpriseAdmin\DeletePreReceiveEnvironmentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\EnterpriseAdmin\DeletePreReceiveEnvironmentOperation($pre_receive_environment_id);
    }
    function patch($pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\EnterpriseAdmin\UpdatePreReceiveEnvironmentOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\2.19\Operation\EnterpriseAdmin\UpdatePreReceiveEnvironmentOperation($pre_receive_environment_id);
    }
}
