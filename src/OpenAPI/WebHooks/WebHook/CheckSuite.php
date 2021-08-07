<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\WebHook;

final class CheckSuite implements \ApiClients\Client\Github\OpenAPI\WebHooks\WebHookInterface
{
    public function resolve(array $data) : string
    {
        $schemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_REQUEST);
        a:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"check_suite completed event","required":["action"],"properties":{"action":{"enum":["completed"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\CheckSuite\\Completed';
        } catch (\Throwable $b) {
            goto b;
        }
        b:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"check_suite requested event","required":["action"],"properties":{"action":{"enum":["requested"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\CheckSuite\\Requested';
        } catch (\Throwable $c) {
            goto c;
        }
        c:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"check_suite rerequested event","required":["action"],"properties":{"action":{"enum":["rerequested"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\CheckSuite\\Rerequested';
        } catch (\Throwable $d) {
            goto d;
        }
        d:
        throw $d;
    }
}
