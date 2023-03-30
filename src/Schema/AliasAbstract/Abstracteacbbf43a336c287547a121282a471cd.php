<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\AliasAbstract;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
abstract readonly class Abstracteacbbf43a336c287547a121282a471cd
{
    public const SCHEMA_JSON = '{"required":["cvss","cwes","ghsa_id","summary","description","severity","identifiers","references","published_at","updated_at","withdrawn_at","vulnerabilities"],"type":"object","properties":{"cvss":{"required":["vector_string","score"],"type":"object","properties":{"score":{"type":"number"},"vector_string":{"type":["string","null"]}}},"cwes":{"type":"array","items":{"required":["cwe_id","name"],"type":"object","properties":{"cwe_id":{"type":"string"},"name":{"type":"string"}}}},"description":{"type":"string"},"ghsa_id":{"type":"string"},"identifiers":{"type":"array","items":{"required":["value","type"],"type":"object","properties":{"type":{"type":"string"},"value":{"type":"string"}}}},"published_at":{"type":"string"},"references":{"type":"array","items":{"required":["url"],"type":"object","properties":{"url":{"type":"string","format":"uri"}}}},"severity":{"type":"string"},"summary":{"type":"string"},"updated_at":{"type":"string"},"vulnerabilities":{"type":"array","items":{"required":["package","severity","vulnerable_version_range","first_patched_version"],"type":"object","properties":{"first_patched_version":{"required":["identifier"],"type":["object","null"],"properties":{"identifier":{"type":"string"}}},"package":{"required":["ecosystem","name"],"type":"object","properties":{"ecosystem":{"type":"string"},"name":{"type":"string"}}},"severity":{"type":"string"},"vulnerable_version_range":{"type":"string"}}}},"withdrawn_at":{"type":["string","null"]}},"description":"The details of the security advisory, including summary, description, and severity."}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = 'The details of the security advisory, including summary, description, and severity.';
    public const SCHEMA_EXAMPLE_DATA = '{"cvss":{"score":13,"vector_string":"generated_vector_string_null"},"cwes":[{"cwe_id":"generated_cwe_id_null","name":"generated_name_null"}],"description":"generated_description_null","ghsa_id":"generated_ghsa_id_null","identifiers":[{"type":"generated_type_null","value":"generated_value_null"}],"published_at":"generated_published_at_null","references":[{"url":"https:\\/\\/example.com\\/"}],"severity":"generated_severity_null","summary":"generated_summary_null","updated_at":"generated_updated_at_null","vulnerabilities":[{"first_patched_version":{"identifier":"generated_identifier_null"},"package":{"ecosystem":"generated_ecosystem_null","name":"generated_name_null"},"severity":"generated_severity_null","vulnerable_version_range":"generated_vulnerable_version_range_null"}],"withdrawn_at":"generated_withdrawn_at_null"}';
    /**
     * @param array<\ApiClients\Client\GitHub\Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\Cwes> $cwes
     * @param array<\ApiClients\Client\GitHub\Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\Identifiers> $identifiers
     * @param array<\ApiClients\Client\GitHub\Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\References> $references
     * @param array<\ApiClients\Client\GitHub\Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\Vulnerabilities> $vulnerabilities
     */
    public function __construct(public Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\Cvss $cvss, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\Cwes::class)] public array $cwes, public string $description, #[\EventSauce\ObjectHydrator\MapFrom('ghsa_id')] public string $ghsaId, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\Identifiers::class)] public array $identifiers, #[\EventSauce\ObjectHydrator\MapFrom('published_at')] public string $publishedAt, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\References::class)] public array $references, public string $severity, public string $summary, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\WebhookSecurityAdvisoryPublished\SecurityAdvisory\Vulnerabilities::class)] public array $vulnerabilities, #[\EventSauce\ObjectHydrator\MapFrom('withdrawn_at')] public ?string $withdrawnAt)
    {
    }
}
