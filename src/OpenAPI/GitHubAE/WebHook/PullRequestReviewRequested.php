<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\WebHook;

final class PullRequestReviewRequested implements \ApiClients\Client\Github\OpenAPI\GitHubAE\WebHookInterface
{
    public function resolve(array $data) : string
    {
        $schemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_REQUEST);
        a:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C9488892B4D95Ec93675Fce2578D8Aad0::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\Schema\\Unknown\\C9488892B4D95Ec93675Fce2578D8Aad0';
        } catch (\Throwable $b) {
            goto b;
        }
        b:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\CC989E0C05D0332348606D48C6Ab61995::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\GitHubAE\\Schema\\Unknown\\CC989E0C05D0332348606D48C6Ab61995';
        } catch (\Throwable $c) {
            goto c;
        }
        c:
        throw $c;
    }
}
