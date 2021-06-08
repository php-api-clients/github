<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\Search;

final class Topics
{
    function get($q): \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Topics
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Search\Topics($q);
    }
}
