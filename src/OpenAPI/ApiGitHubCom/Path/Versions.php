<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path;

final class Versions
{
    function get() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetAllVersions
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Meta\GetAllVersions();
    }
}
