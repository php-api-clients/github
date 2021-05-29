<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\CodesOfConduct;

use ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\CodesOfConduct\GetConductCodeOperation;

final class CbKeyRcb
{
    function get($key): GetConductCodeOperation
    {
        return new GetConductCodeOperation($key);
    }
}
