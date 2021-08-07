<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\WebHook;

final class OrgBlock implements \ApiClients\Client\Github\OpenAPI\WebHooks\WebHookInterface
{
    public function resolve(array $data) : string
    {
        $schemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_REQUEST);
        a:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"org_block blocked event","required":["action"],"properties":{"action":{"enum":["blocked"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\OrgBlock\\Blocked';
        } catch (\Throwable $b) {
            goto b;
        }
        b:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"org_block unblocked event","required":["action"],"properties":{"action":{"enum":["unblocked"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\OrgBlock\\Unblocked';
        } catch (\Throwable $c) {
            goto c;
        }
        c:
        throw $c;
    }
}
