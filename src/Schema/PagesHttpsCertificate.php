<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class PagesHttpsCertificate
{
    public const SCHEMA_JSON = '{"title":"Pages Https Certificate","required":["state","description","domains"],"type":"object","properties":{"state":{"enum":["new","authorization_created","authorization_pending","authorized","authorization_revoked","issued","uploaded","approved","errored","bad_authz","destroy_pending","dns_changed"],"type":"string","examples":["approved"]},"description":{"type":"string","examples":["Certificate is approved"]},"domains":{"type":"array","items":{"type":"string"},"description":"Array of the domain set and its alternate name (if it is configured)","examples":["example.com","www.example.com"]},"expires_at":{"type":"string","format":"date"}}}';
    public const SCHEMA_TITLE = 'Pages Https Certificate';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"state":"approved","description":"Certificate is approved","domains":["example.com"],"expires_at":"generated_expires_at_date"}';
    /**
     * domains: Array of the domain set and its alternate name (if it is configured)
     * @param array<string> $domains
     */
    public function __construct(public string $state, public string $description, public array $domains, #[\EventSauce\ObjectHydrator\MapFrom('expires_at')] public ?string $expiresAt)
    {
    }
}
