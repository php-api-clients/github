<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\WebHook;

final class CommitComment implements \ApiClients\Client\Github\OpenAPI\WebHooks\WebHookInterface
{
    public function resolve(array $data) : string
    {
        $schemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_REQUEST);
        a:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"commit_comment created event","required":["action"],"properties":{"action":{"enum":["created"],"type":"string","description":"The action performed. Can be `created`."}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\CommitComment\\Created';
        } catch (\Throwable $b) {
            goto b;
        }
        b:
        throw $b;
    }
}
