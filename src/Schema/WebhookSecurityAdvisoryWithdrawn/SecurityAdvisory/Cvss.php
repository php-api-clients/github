<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\WebhookSecurityAdvisoryWithdrawn\SecurityAdvisory;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Cvss
{
    public const SCHEMA_JSON = '{"required":["vector_string","score"],"type":"object","properties":{"score":{"type":"number"},"vector_string":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"score":13,"vector_string":"generated_vector_string_null"}';
    public function __construct(public int $score, #[\EventSauce\ObjectHydrator\MapFrom('vector_string')] public ?string $vectorString)
    {
    }
}
