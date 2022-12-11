<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\WebHook;

final class PullRequestReviewRequested implements \ApiClients\Client\Github\OpenAPI\GitHubAE\WebHookInterface
{
    public function resolve(array $data) : string
    {
        $schemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_REQUEST);
        a:
        throw $a;
    }
}
