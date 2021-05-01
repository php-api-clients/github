<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Gitignore\Templates;

final class CbNameRcb
{
    function get($name) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gitignore\GetTemplateOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gitignore\GetTemplateOperation($name);
    }
}
