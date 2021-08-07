<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\WebHook;

final class PullRequest implements \ApiClients\Client\Github\OpenAPI\WebHooks\WebHookInterface
{
    public function resolve(array $data) : string
    {
        $schemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_REQUEST);
        a:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"pull_request assigned event","required":["action"],"properties":{"action":{"enum":["assigned"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\PullRequest\\Assigned';
        } catch (\Throwable $b) {
            goto b;
        }
        b:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"pull_request auto_merge_disabled event","required":["action"],"properties":{"action":{"enum":["auto_merge_disabled"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\PullRequest\\AutoMergeDisabled';
        } catch (\Throwable $c) {
            goto c;
        }
        c:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"pull_request auto_merge_enabled event","required":["action"],"properties":{"action":{"enum":["auto_merge_enabled"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\PullRequest\\AutoMergeEnabled';
        } catch (\Throwable $d) {
            goto d;
        }
        d:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"pull_request closed event","required":["action"],"properties":{"action":{"enum":["closed"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\PullRequest\\Closed';
        } catch (\Throwable $e) {
            goto e;
        }
        e:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"pull_request converted_to_draft event","required":["action"],"properties":{"action":{"enum":["converted_to_draft"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\PullRequest\\ConvertedToDraft';
        } catch (\Throwable $f) {
            goto f;
        }
        f:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"pull_request edited event","required":["action"],"properties":{"action":{"enum":["edited"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\PullRequest\\Edited';
        } catch (\Throwable $g) {
            goto g;
        }
        g:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"pull_request labeled event","required":["action"],"properties":{"action":{"enum":["labeled"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\PullRequest\\Labeled';
        } catch (\Throwable $h) {
            goto h;
        }
        h:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"pull_request locked event","required":["action"],"properties":{"action":{"enum":["locked"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\PullRequest\\Locked';
        } catch (\Throwable $i) {
            goto i;
        }
        i:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"pull_request opened event","required":["action"],"properties":{"action":{"enum":["opened"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\PullRequest\\Opened';
        } catch (\Throwable $j) {
            goto j;
        }
        j:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"pull_request ready_for_review event","required":["action"],"properties":{"action":{"enum":["ready_for_review"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\PullRequest\\ReadyForReview';
        } catch (\Throwable $k) {
            goto k;
        }
        k:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"pull_request reopened event","required":["action"],"properties":{"action":{"enum":["reopened"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\PullRequest\\Reopened';
        } catch (\Throwable $l) {
            goto l;
        }
        l:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"pull_request review_request_removed event","required":["action"],"properties":{"action":{"enum":["review_request_removed"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\PullRequest\\ReviewRequestRemoved';
        } catch (\Throwable $m) {
            goto m;
        }
        m:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"pull_request review_requested event","required":["action"],"properties":{"action":{"enum":["review_requested"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\PullRequest\\ReviewRequested';
        } catch (\Throwable $n) {
            goto n;
        }
        n:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"pull_request synchronize event","required":["action"],"properties":{"action":{"enum":["synchronize"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\PullRequest\\Synchronize';
        } catch (\Throwable $o) {
            goto o;
        }
        o:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"pull_request unassigned event","required":["action"],"properties":{"action":{"enum":["unassigned"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\PullRequest\\Unassigned';
        } catch (\Throwable $p) {
            goto p;
        }
        p:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"pull_request unlabeled event","required":["action"],"properties":{"action":{"enum":["unlabeled"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\PullRequest\\Unlabeled';
        } catch (\Throwable $q) {
            goto q;
        }
        q:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"pull_request unlocked event","required":["action"],"properties":{"action":{"enum":["unlocked"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\PullRequest\\Unlocked';
        } catch (\Throwable $r) {
            goto r;
        }
        r:
        throw $r;
    }
}
