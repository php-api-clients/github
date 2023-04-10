<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\RepositoryAdvisory;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Cvss
{
    public const SCHEMA_JSON = '{"required":["vector_string","score"],"type":["object","null"],"properties":{"vector_string":{"type":["string","null"],"description":"The CVSS vector."},"score":{"maximum":10,"minimum":0,"type":["number","null"],"description":"The CVSS score.","readOnly":true}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"vector_string":"generated_vector_string_null","score":13.13}';
    /**
     * vectorString: The CVSS vector.
     * score: The CVSS score.
     */
    public function __construct(#[\EventSauce\ObjectHydrator\MapFrom('vector_string')] public ?string $vectorString, public ?float $score)
    {
    }
}
