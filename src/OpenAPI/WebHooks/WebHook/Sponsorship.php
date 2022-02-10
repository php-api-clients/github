<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\WebHook;

final class Sponsorship implements \ApiClients\Client\Github\OpenAPI\WebHooks\WebHookInterface
{
    public function resolve(array $data) : string
    {
        $schemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_REQUEST);
        a:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"sponsorship cancelled event","required":["action"],"properties":{"action":{"enum":["cancelled"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Sponsorship\\Cancelled';
        } catch (\Throwable $b) {
            goto b;
        }
        b:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"sponsorship created event","required":["action"],"properties":{"action":{"enum":["created"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Sponsorship\\Created';
        } catch (\Throwable $c) {
            goto c;
        }
        c:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"sponsorship edited event","required":["action"],"properties":{"action":{"enum":["edited"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Sponsorship\\Edited';
        } catch (\Throwable $d) {
            goto d;
        }
        d:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"sponsorship pending_cancellation event","required":["action"],"properties":{"action":{"enum":["pending_cancellation"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Sponsorship\\PendingCancellation';
        } catch (\Throwable $e) {
            goto e;
        }
        e:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"sponsorship pending_tier_change event","required":["action"],"properties":{"action":{"enum":["pending_tier_change"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Sponsorship\\PendingTierChange';
        } catch (\Throwable $f) {
            goto f;
        }
        f:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"sponsorship tier_changed event","required":["action"],"properties":{"action":{"enum":["tier_changed"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Sponsorship\\TierChanged';
        } catch (\Throwable $g) {
            goto g;
        }
        g:
        throw $g;
    }
}
