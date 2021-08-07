<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\WebHook;

final class MarketplacePurchase implements \ApiClients\Client\Github\OpenAPI\WebHooks\WebHookInterface
{
    public function resolve(array $data) : string
    {
        $schemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_REQUEST);
        a:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"marketplace_purchase cancelled event","required":["action"],"properties":{"action":{"enum":["cancelled"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\MarketplacePurchase\\Cancelled';
        } catch (\Throwable $b) {
            goto b;
        }
        b:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"marketplace_purchase changed event","required":["action"],"properties":{"action":{"enum":["changed"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\MarketplacePurchase\\Changed';
        } catch (\Throwable $c) {
            goto c;
        }
        c:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"marketplace_purchase pending_change event","required":["action"],"properties":{"action":{"enum":["pending_change"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\MarketplacePurchase\\PendingChange';
        } catch (\Throwable $d) {
            goto d;
        }
        d:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"marketplace_purchase pending_change_cancelled event","required":["action"],"properties":{"action":{"enum":["pending_change_cancelled"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\MarketplacePurchase\\PendingChangeCancelled';
        } catch (\Throwable $e) {
            goto e;
        }
        e:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"marketplace_purchase purchased event","required":["action"],"properties":{"action":{"enum":["purchased"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\MarketplacePurchase\\Purchased';
        } catch (\Throwable $f) {
            goto f;
        }
        f:
        throw $f;
    }
}
