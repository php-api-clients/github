<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\WebHook;

final class RepositoryDispatch implements \ApiClients\Client\Github\OpenAPI\WebHooks\WebHookInterface
{
    public function resolve(array $data) : string
    {
        $schemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_REQUEST);
        a:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"repository_dispatch on-demand-test event","required":["action"],"properties":{"action":{"enum":["on-demand-test"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\RepositoryDispatch\\OnDashDemandDashTest';
        } catch (\Throwable $b) {
            goto b;
        }
        b:
        throw $b;
    }
}
