<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHook;

final class PullRequestReviewRequestRemoved implements \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\WebHookInterface
{
    public function resolve(array $data) : string
    {
        $schemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_REQUEST);
        a:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewRequestRemoved\B::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\PullRequestReviewRequestRemoved\\B';
        } catch (\Throwable $b) {
            goto b;
        }
        b:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PullRequestReviewRequestRemoved\C::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\PullRequestReviewRequestRemoved\\C';
        } catch (\Throwable $c) {
            goto c;
        }
        c:
        throw $c;
    }
}
