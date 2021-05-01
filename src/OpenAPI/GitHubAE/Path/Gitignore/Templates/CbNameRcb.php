<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Path\\Gitignore\Templates;

final class CbNameRcb
{
    function get($name) : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore\GetTemplateOperation
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Gitignore\GetTemplateOperation($name);
    }
}
