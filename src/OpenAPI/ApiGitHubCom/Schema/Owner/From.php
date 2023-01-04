<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Owner;

final class From
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"organization":{"title":"Organization","required":["login","id","node_id","url","repos_url","events_url","hooks_url","issues_url","members_url","public_members_url","avatar_url","description"],"type":"object","properties":{"avatar_url":{"type":"string","format":"uri"},"description":{"type":["string","null"]},"events_url":{"type":"string","format":"uri"},"hooks_url":{"type":"string","format":"uri"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"issues_url":{"type":"string","format":"uri"},"login":{"type":"string"},"members_url":{"type":"string","format":"uri-template"},"node_id":{"type":"string"},"public_members_url":{"type":"string","format":"uri-template"},"repos_url":{"type":"string","format":"uri"},"url":{"type":"string","format":"uri"}}},"user":{"title":"User","required":["login","id"],"type":["object","null"],"properties":{"avatar_url":{"type":"string","format":"uri"},"deleted":{"type":"boolean"},"email":{"type":["string","null"]},"events_url":{"type":"string","format":"uri-template"},"followers_url":{"type":"string","format":"uri"},"following_url":{"type":"string","format":"uri-template"},"gists_url":{"type":"string","format":"uri-template"},"gravatar_id":{"type":"string"},"html_url":{"type":"string","format":"uri"},"id":{"type":"integer"},"login":{"type":"string"},"name":{"type":"string"},"node_id":{"type":"string"},"organizations_url":{"type":"string","format":"uri"},"received_events_url":{"type":"string","format":"uri"},"repos_url":{"type":"string","format":"uri"},"site_admin":{"type":"boolean"},"starred_url":{"type":"string","format":"uri-template"},"subscriptions_url":{"type":"string","format":"uri"},"type":{"enum":["Bot","User","Organization"],"type":"string"},"url":{"type":"string","format":"uri"}}}}}';
    public const SCHEMA_TITLE = 'Owner\\From';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\From\Organization::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\From\Organization $organization;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\From\User::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\From\User $user;
    public function organization() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\From\Organization
    {
        return $this->organization;
    }
    public function user() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\From\User
    {
        return $this->user;
    }
}
