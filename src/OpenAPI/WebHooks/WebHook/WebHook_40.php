<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\WebHook;

final class WebHook_40 implements \ApiClients\Client\Github\OpenAPI\WebHooks\WebHookInterface
{
    public function resolve(array $data) : string
    {
        $schemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_REQUEST);
        a:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"repository archived event","required":["action"],"properties":{"action":{"enum":["archived"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Repository\\Archived';
        } catch (\Throwable $b) {
            goto b;
        }
        b:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"repository created event","required":["action"],"properties":{"action":{"enum":["created"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Repository\\Created';
        } catch (\Throwable $c) {
            goto c;
        }
        c:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"repository deleted event","required":["action"],"properties":{"action":{"enum":["deleted"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Repository\\Deleted';
        } catch (\Throwable $d) {
            goto d;
        }
        d:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"repository edited event","required":["action"],"properties":{"action":{"enum":["edited"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Repository\\Edited';
        } catch (\Throwable $e) {
            goto e;
        }
        e:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"repository privatized event","required":["action"],"properties":{"action":{"enum":["privatized"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Repository\\Privatized';
        } catch (\Throwable $f) {
            goto f;
        }
        f:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"repository publicized event","required":["action"],"properties":{"action":{"enum":["publicized"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Repository\\Publicized';
        } catch (\Throwable $g) {
            goto g;
        }
        g:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"repository renamed event","required":["action"],"properties":{"action":{"enum":["renamed"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Repository\\Renamed';
        } catch (\Throwable $h) {
            goto h;
        }
        h:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"repository transferred event","required":["action"],"properties":{"action":{"enum":["transferred"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Repository\\Transferred';
        } catch (\Throwable $i) {
            goto i;
        }
        i:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"repository unarchived event","required":["action"],"properties":{"action":{"enum":["unarchived"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Repository\\Unarchived';
        } catch (\Throwable $j) {
            goto j;
        }
        j:
        throw $j;
    }
}
