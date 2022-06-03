<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\Admin\Users;

final class CbUsernameRcb
{
    function delete($username) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteUser
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\EnterpriseAdmin\DeleteUser($username);
    }
}
