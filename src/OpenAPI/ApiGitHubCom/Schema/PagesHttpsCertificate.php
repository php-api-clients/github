<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class PagesHttpsCertificate
{
    public const SCHEMA_JSON = '{"title":"Pages Https Certificate","required":["state","description","domains"],"type":"object","properties":{"state":{"enum":["new","authorization_created","authorization_pending","authorized","authorization_revoked","issued","uploaded","approved","errored","bad_authz","destroy_pending","dns_changed"],"type":"string","examples":["approved"]},"description":{"type":"string","examples":["Certificate is approved"]},"domains":{"type":"array","items":{"type":"string"},"description":"Array of the domain set and its alternate name (if it is configured)","examples":["example.com","www.example.com"]},"expires_at":{"type":"string","format":"date"}}}';
    public const SCHEMA_TITLE = 'Pages Https Certificate';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $state;
    public readonly string $description;
    /**
     * Array of the domain set and its alternate name (if it is configured)
     * @var array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PagesHttpsCertificate\Domains>
     */
    public readonly array $domains;
    public readonly ?string $expires_at;
    /**
     * @param array<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\PagesHttpsCertificate\Domains> $domains
     */
    public function __construct(string $state, string $description, array $domains, string $expires_at)
    {
        $this->state = $state;
        $this->description = $description;
        $this->domains = $domains;
        $this->expires_at = $expires_at;
    }
}
