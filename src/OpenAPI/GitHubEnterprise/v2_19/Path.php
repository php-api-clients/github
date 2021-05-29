<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19;

use ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Meta\Root;

final class Path
{
    function get(): Root
    {
        return new Root();
    }
}
