<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\User\GpgKeys;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Users\DeleteGpgKeyForAuthenticated;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Users\GetGpgKeyForAuthenticated;

final class CbGpgKeyIdRcb
{
    function get($gpg_key_id): GetGpgKeyForAuthenticated
    {
        return new GetGpgKeyForAuthenticated($gpg_key_id);
    }

    function delete($gpg_key_id): DeleteGpgKeyForAuthenticated
    {
        return new DeleteGpgKeyForAuthenticated($gpg_key_id);
    }
}
