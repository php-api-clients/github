<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Path\User\Keys;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Users\DeletePublicSshKeyForAuthenticatedOperation;
use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Users\GetPublicSshKeyForAuthenticatedOperation;

final class CbKeyIdRcb
{
    function get($key_id): GetPublicSshKeyForAuthenticatedOperation
    {
        return new GetPublicSshKeyForAuthenticatedOperation($key_id);
    }

    function delete($key_id): DeletePublicSshKeyForAuthenticatedOperation
    {
        return new DeletePublicSshKeyForAuthenticatedOperation($key_id);
    }
}
