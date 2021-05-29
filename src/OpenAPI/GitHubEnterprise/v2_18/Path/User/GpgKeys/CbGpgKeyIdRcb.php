<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\User\GpgKeys;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Users\DeleteGpgKeyForAuthenticatedOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Users\GetGpgKeyForAuthenticatedOperation;

final class CbGpgKeyIdRcb
{
    function get($gpg_key_id): GetGpgKeyForAuthenticatedOperation
    {
        return new GetGpgKeyForAuthenticatedOperation($gpg_key_id);
    }

    function delete($gpg_key_id): DeleteGpgKeyForAuthenticatedOperation
    {
        return new DeleteGpgKeyForAuthenticatedOperation($gpg_key_id);
    }
}
