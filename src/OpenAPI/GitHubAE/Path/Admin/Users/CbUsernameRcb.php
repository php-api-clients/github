<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin\Users;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteUserOperation;

final class CbUsernameRcb
{
    function delete($username): DeleteUserOperation
    {
        return new DeleteUserOperation($username);
    }
}
