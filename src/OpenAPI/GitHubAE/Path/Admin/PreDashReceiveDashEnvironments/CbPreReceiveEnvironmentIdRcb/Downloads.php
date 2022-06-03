<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb;

final class Downloads
{
    function post($pre_receive_environment_id) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload($pre_receive_environment_id);
    }
}
