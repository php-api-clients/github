<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb;

final class Downloads
{
    function post($pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload($pre_receive_environment_id);
    }
}