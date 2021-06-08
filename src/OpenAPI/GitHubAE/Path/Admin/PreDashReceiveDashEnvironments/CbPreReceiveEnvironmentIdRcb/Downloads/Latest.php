<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment;

final class Latest
{
    function get($pre_receive_environment_id): GetDownloadStatusForPreReceiveEnvironment
    {
        return new GetDownloadStatusForPreReceiveEnvironment($pre_receive_environment_id);
    }
}
