<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\Actions\Secrets;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\GetOrgPublicKeyOperation;

final class PublicKey
{
    function get($org): GetOrgPublicKeyOperation
    {
        return new GetOrgPublicKeyOperation($org);
    }
}
