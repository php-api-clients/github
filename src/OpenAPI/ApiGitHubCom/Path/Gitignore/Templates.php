<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Path\\Gitignore;

final class Templates
{
    function get() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gitignore\GetAllTemplatesOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gitignore\GetAllTemplatesOperation();
    }
}
