<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Path;

final class Emojis
{
    function get() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Emojis\GetOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Emojis\GetOperation();
    }
}