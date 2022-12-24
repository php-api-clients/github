<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation;

final class OauthAuthorizations
{
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
    }
    public function listGrants_(int $per_page = 30, int $page = 1, string $client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\ListGrants_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\ListGrants_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page, $client_id);
    }
    public function getGrant_(int $grant_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\GetGrant_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\GetGrant_($this->requestSchemaValidator, $this->responseSchemaValidator, $grant_id);
    }
    public function deleteGrant_(int $grant_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\DeleteGrant_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\DeleteGrant_($this->requestSchemaValidator, $this->responseSchemaValidator, $grant_id);
    }
    public function listAuthorizations_(int $per_page = 30, int $page = 1, string $client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\ListAuthorizations_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\ListAuthorizations_($this->requestSchemaValidator, $this->responseSchemaValidator, $per_page, $page, $client_id);
    }
    public function createAuthorization_() : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\CreateAuthorization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\CreateAuthorization_($this->requestSchemaValidator, $this->responseSchemaValidator);
    }
    public function getOrCreateAuthorizationForApp_(string $client_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\GetOrCreateAuthorizationForApp_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\GetOrCreateAuthorizationForApp_($this->requestSchemaValidator, $this->responseSchemaValidator, $client_id);
    }
    public function getOrCreateAuthorizationForAppAndFingerprint_(string $client_id, string $fingerprint) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\GetOrCreateAuthorizationForAppAndFingerprint_($this->requestSchemaValidator, $this->responseSchemaValidator, $client_id, $fingerprint);
    }
    public function getAuthorization_(int $authorization_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\GetAuthorization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\GetAuthorization_($this->requestSchemaValidator, $this->responseSchemaValidator, $authorization_id);
    }
    public function deleteAuthorization_(int $authorization_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\DeleteAuthorization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\DeleteAuthorization_($this->requestSchemaValidator, $this->responseSchemaValidator, $authorization_id);
    }
    public function updateAuthorization_(int $authorization_id) : \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\UpdateAuthorization_
    {
        return new \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\OauthAuthorizations\UpdateAuthorization_($this->requestSchemaValidator, $this->responseSchemaValidator, $authorization_id);
    }
}
