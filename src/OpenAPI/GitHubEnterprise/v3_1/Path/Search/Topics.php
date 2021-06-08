<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\Search;

final class Topics
{
    function get($q): \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Search\Topics
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Search\Topics($q);
    }
}
