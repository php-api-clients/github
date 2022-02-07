<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\WebHook;

final class WebHook_11 implements \ApiClients\Client\Github\OpenAPI\WebHooks\WebHookInterface
{
    public function resolve(array $data) : string
    {
        $schemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_REQUEST);
        a:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"discussion answered event","required":["action"],"properties":{"action":{"enum":["answered"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Discussion\\Answered';
        } catch (\Throwable $b) {
            goto b;
        }
        b:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"discussion category changed event","required":["action"],"properties":{"action":{"enum":["category_changed"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Discussion\\CategoryChanged';
        } catch (\Throwable $c) {
            goto c;
        }
        c:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"discussion created event","required":["action"],"properties":{"action":{"enum":["created"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Discussion\\Created';
        } catch (\Throwable $d) {
            goto d;
        }
        d:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"discussion deleted event","required":["action"],"properties":{"action":{"enum":["deleted"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Discussion\\Deleted';
        } catch (\Throwable $e) {
            goto e;
        }
        e:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"discussion edited event","required":["action"],"properties":{"action":{"enum":["edited"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Discussion\\Edited';
        } catch (\Throwable $f) {
            goto f;
        }
        f:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"discussion labeled event","required":["action"],"properties":{"action":{"enum":["labeled"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Discussion\\Labeled';
        } catch (\Throwable $g) {
            goto g;
        }
        g:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"discussion locked event","required":["action"],"properties":{"action":{"enum":["locked"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Discussion\\Locked';
        } catch (\Throwable $h) {
            goto h;
        }
        h:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"discussion pinned event","required":["action"],"properties":{"action":{"enum":["pinned"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Discussion\\Pinned';
        } catch (\Throwable $i) {
            goto i;
        }
        i:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"discussion transferred event","required":["action"],"properties":{"action":{"enum":["transferred"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Discussion\\Transferred';
        } catch (\Throwable $j) {
            goto j;
        }
        j:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"discussion unanswered event","required":["action"],"properties":{"action":{"enum":["unanswered"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Discussion\\Unanswered';
        } catch (\Throwable $k) {
            goto k;
        }
        k:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"discussion unlabeled event","required":["action"],"properties":{"action":{"enum":["unlabeled"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Discussion\\Unlabeled';
        } catch (\Throwable $l) {
            goto l;
        }
        l:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"discussion unlocked event","required":["action"],"properties":{"action":{"enum":["unlocked"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Discussion\\Unlocked';
        } catch (\Throwable $m) {
            goto m;
        }
        m:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"discussion unpinned event","required":["action"],"properties":{"action":{"enum":["unpinned"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Discussion\\Unpinned';
        } catch (\Throwable $n) {
            goto n;
        }
        n:
        throw $n;
    }
}
