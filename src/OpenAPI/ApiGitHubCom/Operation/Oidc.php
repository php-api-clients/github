<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation;

final class Oidc
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
    public function getOidcCustomSubTemplateForOrg(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc\GetOidcCustomSubTemplateForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc\GetOidcCustomSubTemplateForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
    }
    public function updateOidcCustomSubTemplateForOrg(string $org) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc\UpdateOidcCustomSubTemplateForOrg
    {
        return new \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc\UpdateOidcCustomSubTemplateForOrg($this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator, $org);
    }
}
