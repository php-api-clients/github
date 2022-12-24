<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation;

final class Markdown
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function render_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Markdown\Render_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Markdown\Render_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function renderRaw_() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Markdown\RenderRaw_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Markdown\RenderRaw_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
}
