<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Markdown
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function render() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown\Render
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown\Render($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
    public function renderRaw() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown\RenderRaw
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Markdown\RenderRaw($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator);
    }
}
