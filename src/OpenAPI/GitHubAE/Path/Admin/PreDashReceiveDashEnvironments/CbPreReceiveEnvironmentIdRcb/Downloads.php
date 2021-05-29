<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\StartPreReceiveEnvironmentDownloadOperation;

final class Downloads
{
    function post($pre_receive_environment_id): StartPreReceiveEnvironmentDownloadOperation
    {
        return new StartPreReceiveEnvironmentDownloadOperation($pre_receive_environment_id);
    }
}
