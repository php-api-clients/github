<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads;

final class Latest
{
    function get($pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment($pre_receive_environment_id);
    }
}
