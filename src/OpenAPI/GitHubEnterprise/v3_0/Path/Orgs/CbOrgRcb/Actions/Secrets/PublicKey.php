<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path\Orgs\CbOrgRcb\Actions\Secrets;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions\GetOrgPublicKey;

final class PublicKey
{
    function get($org): GetOrgPublicKey
    {
        return new GetOrgPublicKey($org);
    }
}
