<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\CodesOfConduct;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\CodesOfConduct\GetConductCode;

final class CbKeyRcb
{
    function get($key): GetConductCode
    {
        return new GetConductCode($key);
    }
}
