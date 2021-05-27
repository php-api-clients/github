<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path;

final class Emojis
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Emojis\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Emojis\GetOperation();
    }
}
