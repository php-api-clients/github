<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Path\CodesOfConduct;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\CodesOfConduct\GetConductCode;

final class CbKeyRcb
{
    function get($key): GetConductCode
    {
        return new GetConductCode($key);
    }
}
