<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Admin\PreDashReceiveDashEnvironments;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\DeletePreReceiveEnvironmentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\GetPreReceiveEnvironmentOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\UpdatePreReceiveEnvironmentOperation;

final class CbPreReceiveEnvironmentIdRcb
{
    function get($pre_receive_environment_id): GetPreReceiveEnvironmentOperation
    {
        return new GetPreReceiveEnvironmentOperation($pre_receive_environment_id);
    }

    function delete($pre_receive_environment_id): DeletePreReceiveEnvironmentOperation
    {
        return new DeletePreReceiveEnvironmentOperation($pre_receive_environment_id);
    }

    function patch($pre_receive_environment_id): UpdatePreReceiveEnvironmentOperation
    {
        return new UpdatePreReceiveEnvironmentOperation($pre_receive_environment_id);
    }
}
