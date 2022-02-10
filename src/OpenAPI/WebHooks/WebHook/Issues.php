<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\WebHook;

final class Issues implements \ApiClients\Client\Github\OpenAPI\WebHooks\WebHookInterface
{
    public function resolve(array $data) : string
    {
        $schemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_REQUEST);
        a:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"issues assigned event","required":["action"],"properties":{"action":{"enum":["assigned"],"type":"string","description":"The action that was performed."}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Issues\\Assigned';
        } catch (\Throwable $b) {
            goto b;
        }
        b:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"issues closed event","required":["action"],"properties":{"action":{"enum":["closed"],"type":"string","description":"The action that was performed."}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Issues\\Closed';
        } catch (\Throwable $c) {
            goto c;
        }
        c:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"issues deleted event","required":["action"],"properties":{"action":{"enum":["deleted"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Issues\\Deleted';
        } catch (\Throwable $d) {
            goto d;
        }
        d:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"issues demilestoned event","required":["action"],"properties":{"action":{"enum":["demilestoned"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Issues\\Demilestoned';
        } catch (\Throwable $e) {
            goto e;
        }
        e:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"issues edited event","required":["action"],"properties":{"action":{"enum":["edited"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Issues\\Edited';
        } catch (\Throwable $f) {
            goto f;
        }
        f:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"issues labeled event","required":["action"],"properties":{"action":{"enum":["labeled"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Issues\\Labeled';
        } catch (\Throwable $g) {
            goto g;
        }
        g:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"issues locked event","required":["action"],"properties":{"action":{"enum":["locked"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Issues\\Locked';
        } catch (\Throwable $h) {
            goto h;
        }
        h:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"issues milestoned event","required":["action"],"properties":{"action":{"enum":["milestoned"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Issues\\Milestoned';
        } catch (\Throwable $i) {
            goto i;
        }
        i:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"issues opened event","required":["action"],"properties":{"action":{"enum":["opened"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Issues\\Opened';
        } catch (\Throwable $j) {
            goto j;
        }
        j:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"issues pinned event","required":["action"],"properties":{"action":{"enum":["pinned"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Issues\\Pinned';
        } catch (\Throwable $k) {
            goto k;
        }
        k:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"issues reopened event","required":["action"],"properties":{"action":{"enum":["reopened"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Issues\\Reopened';
        } catch (\Throwable $l) {
            goto l;
        }
        l:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"issues transferred event","required":["action"],"properties":{"action":{"enum":["transferred"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Issues\\Transferred';
        } catch (\Throwable $m) {
            goto m;
        }
        m:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"issues unassigned event","required":["action"],"properties":{"action":{"enum":["unassigned"],"type":"string","description":"The action that was performed."}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Issues\\Unassigned';
        } catch (\Throwable $n) {
            goto n;
        }
        n:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"issues unlabeled event","required":["action"],"properties":{"action":{"enum":["unlabeled"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Issues\\Unlabeled';
        } catch (\Throwable $o) {
            goto o;
        }
        o:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"issues unlocked event","required":["action"],"properties":{"action":{"enum":["unlocked"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Issues\\Unlocked';
        } catch (\Throwable $p) {
            goto p;
        }
        p:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"issues unpinned event","required":["action"],"properties":{"action":{"enum":["unpinned"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\Issues\\Unpinned';
        } catch (\Throwable $q) {
            goto q;
        }
        q:
        throw $q;
    }
}
