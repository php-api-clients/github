<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Path\Gitignore\Templates;

final class CbNameRcb
{
    function get($name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Gitignore\GetTemplate
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Gitignore\GetTemplate($name);
    }
}
