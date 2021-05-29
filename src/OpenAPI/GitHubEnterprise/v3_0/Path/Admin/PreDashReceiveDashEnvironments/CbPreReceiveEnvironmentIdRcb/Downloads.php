<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownload;

final class Downloads
{
    function post($pre_receive_environment_id): StartPreReceiveEnvironmentDownload
    {
        return new StartPreReceiveEnvironmentDownload($pre_receive_environment_id);
    }
}