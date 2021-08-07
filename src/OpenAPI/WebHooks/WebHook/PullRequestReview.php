<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\WebHook;

final class PullRequestReview implements \ApiClients\Client\Github\OpenAPI\WebHooks\WebHookInterface
{
    public function resolve(array $data) : string
    {
        $schemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_REQUEST);
        a:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"pull_request_review dismissed event","required":["action"],"properties":{"action":{"enum":["dismissed"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\PullRequestReview\\Dismissed';
        } catch (\Throwable $b) {
            goto b;
        }
        b:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"pull_request_review edited event","required":["action"],"properties":{"action":{"enum":["edited"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\PullRequestReview\\Edited';
        } catch (\Throwable $c) {
            goto c;
        }
        c:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"pull_request_review submitted event","required":["action"],"properties":{"action":{"enum":["submitted"],"type":"string"}},"additionalProperties":true}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\PullRequestReview\\Submitted';
        } catch (\Throwable $d) {
            goto d;
        }
        d:
        throw $d;
    }
}
