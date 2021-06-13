<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\WebHook;

final class GithubAppAuthorization implements \ApiClients\Client\Github\OpenAPI\WebHooks\WebHookInterface
{
    public function resolve(array $data) : string
    {
        $schemaValidator = new \League\OpenAPIValidation\Schema\SchemaValidator(\League\OpenAPIValidation\Schema\SchemaValidator::VALIDATE_AS_REQUEST);
        a:
        try {
            $schemaValidator->validate($data, \cebe\openapi\Reader::readFromJson('{"title":"github_app_authorization revoked event","required":["action","sender"],"type":"object","properties":{"action":{"enum":["revoked"],"type":"string"},"sender":{"title":"User","required":["login","id","node_id","avatar_url","gravatar_id","url","html_url","followers_url","following_url","gists_url","starred_url","subscriptions_url","organizations_url","repos_url","events_url","received_events_url","type","site_admin"],"type":"object","properties":{"login":{"type":"string"},"id":{"type":"integer"},"node_id":{"type":"string"},"name":{"type":"string"},"email":{"type":["string","null"]},"avatar_url":{"type":"string","format":"uri"},"gravatar_id":{"type":"string"},"url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"organizations_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"events_url":{"type":"string","format":"uri-template"},"received_events_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"site_admin":{"type":"boolean"}},"additionalProperties":false}},"additionalProperties":false}', '\\cebe\\openapi\\spec\\Schema'));
            return 'ApiClients\\Client\\Github\\OpenAPI\\WebHooks\\Schema\\GithubAppAuthorization\\Revoked';
        } catch (\Throwable $b) {
            goto b;
        }
        b:
        throw $b;
    }
}
