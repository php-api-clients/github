<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Path\\Gitignore\Templates;

final class CbNameRcb
{
    function get($name) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gitignore\GetTemplateOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gitignore\GetTemplateOperation($name);
    }
}
