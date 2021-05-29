<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin\Users;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteUser;

final class CbUsernameRcb
{
    function delete($username): DeleteUser
    {
        return new DeleteUser($username);
    }
}
