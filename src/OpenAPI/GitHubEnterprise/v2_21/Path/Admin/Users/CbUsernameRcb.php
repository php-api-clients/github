<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Admin\Users;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\DeleteUserOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\EnterpriseAdmin\UpdateUsernameForUserOperation;

final class CbUsernameRcb
{
    function delete($username): DeleteUserOperation
    {
        return new DeleteUserOperation($username);
    }

    function patch($username): UpdateUsernameForUserOperation
    {
        return new UpdateUsernameForUserOperation($username);
    }
}
