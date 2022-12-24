<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\WebHook;

final class PullRequestReviewRequestRemoved implements \ApiClients\Client\Github\OpenAPI\GitHubAE\WebHookInterface
{
    public function resolve(array $data) : string
    {
        $schemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_REQUEST);
        a:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CE347Ac76F7A84Dc5E0E932006D30D560::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\Schema\\Unknown\\CE347Ac76F7A84Dc5E0E932006D30D560';
        } catch (\Throwable $b) {
            goto b;
        }
        b:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C68055Fb1294A147251861108C53Bd3F8::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\Schema\\Unknown\\C68055Fb1294A147251861108C53Bd3F8';
        } catch (\Throwable $c) {
            goto c;
        }
        c:
        throw $c;
    }
}
