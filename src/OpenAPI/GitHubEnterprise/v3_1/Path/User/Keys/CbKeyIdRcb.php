<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\User\Keys;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\DeletePublicSshKeyForAuthenticated;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Users\GetPublicSshKeyForAuthenticated;

final class CbKeyIdRcb
{
    function get($key_id): GetPublicSshKeyForAuthenticated
    {
        return new GetPublicSshKeyForAuthenticated($key_id);
    }

    function delete($key_id): DeletePublicSshKeyForAuthenticated
    {
        return new DeletePublicSshKeyForAuthenticated($key_id);
    }
}