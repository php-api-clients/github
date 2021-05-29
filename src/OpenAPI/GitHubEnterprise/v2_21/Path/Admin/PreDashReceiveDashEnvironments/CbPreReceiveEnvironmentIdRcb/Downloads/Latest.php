<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Admin\PreDashReceiveDashEnvironments\CbPreReceiveEnvironmentIdRcb\Downloads;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\GetDownloadStatusForPreReceiveEnvironmentOperation;

final class Latest
{
    function get($pre_receive_environment_id): GetDownloadStatusForPreReceiveEnvironmentOperation
    {
        return new GetDownloadStatusForPreReceiveEnvironmentOperation($pre_receive_environment_id);
    }
}
