<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin\PreDashReceiveDashEnvironments;

final class CbPreReceiveEnvironmentIdRcb
{
    function get($pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetPreReceiveEnvironment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetPreReceiveEnvironment($pre_receive_environment_id);
    }
    function delete($pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment($pre_receive_environment_id);
    }
    function patch($pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdatePreReceiveEnvironment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\UpdatePreReceiveEnvironment($pre_receive_environment_id);
    }
}
