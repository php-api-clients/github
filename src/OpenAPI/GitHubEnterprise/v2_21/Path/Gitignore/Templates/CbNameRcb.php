<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Path\Gitignore\Templates;

final class CbNameRcb
{
    function get($name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Gitignore\GetTemplate
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Gitignore\GetTemplate($name);
    }
}
