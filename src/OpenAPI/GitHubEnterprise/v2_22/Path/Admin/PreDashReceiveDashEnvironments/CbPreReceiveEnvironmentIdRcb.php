<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Admin\PreDashReceiveDashEnvironments;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\DeletePreReceiveEnvironment;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\GetPreReceiveEnvironment;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\UpdatePreReceiveEnvironment;

final class CbPreReceiveEnvironmentIdRcb
{
    function get($pre_receive_environment_id): GetPreReceiveEnvironment
    {
        return new GetPreReceiveEnvironment($pre_receive_environment_id);
    }

    function delete($pre_receive_environment_id): DeletePreReceiveEnvironment
    {
        return new DeletePreReceiveEnvironment($pre_receive_environment_id);
    }

    function patch($pre_receive_environment_id): UpdatePreReceiveEnvironment
    {
        return new UpdatePreReceiveEnvironment($pre_receive_environment_id);
    }
}
