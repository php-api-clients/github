<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\WebHook;

final class GithubAppAuthorization implements \ApiClients\Client\Github\OpenAPI\WebHooks\WebHookInterface
{
    public function resolve(array $data) : string
    {
        $schemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_REQUEST);
        a:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"github_app_authorization revoked event","required":["action"],"properties":{"action":{"enum":["revoked"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\GithubAppAuthorization\\Revoked';
        } catch (\Throwable $b) {
            goto b;
        }
        b:
        throw $b;
    }
}
