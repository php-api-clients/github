<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Admin\Users;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\DeleteUser;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\EnterpriseAdmin\UpdateUsernameForUser;

final class CbUsernameRcb
{
    function delete($username): DeleteUser
    {
        return new DeleteUser($username);
    }

    function patch($username): UpdateUsernameForUser
    {
        return new UpdateUsernameForUser($username);
    }
}
