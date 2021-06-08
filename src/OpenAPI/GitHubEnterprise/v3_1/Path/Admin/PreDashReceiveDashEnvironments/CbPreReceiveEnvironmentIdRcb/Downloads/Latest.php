<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironment;

final class Latest
{
    function get($pre_receive_environment_id): GetDownloadStatusForPreReceiveEnvironment
    {
        return new GetDownloadStatusForPreReceiveEnvironment($pre_receive_environment_id);
    }
}
