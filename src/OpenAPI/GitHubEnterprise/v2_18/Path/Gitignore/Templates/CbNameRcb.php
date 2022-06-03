<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Path\Gitignore\Templates;

final class CbNameRcb
{
    function get($name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Gitignore\GetTemplate
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Gitignore\GetTemplate($name);
    }
}
