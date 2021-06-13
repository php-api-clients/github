<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

final class Meta
{
    function get() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Get
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\Get();
    }
}
