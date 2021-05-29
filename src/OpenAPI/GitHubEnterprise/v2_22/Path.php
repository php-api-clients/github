<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Meta\Root;

final class Path
{
    function get(): Root
    {
        return new Root();
    }
}
