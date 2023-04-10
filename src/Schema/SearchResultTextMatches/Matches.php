<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\SearchResultTextMatches;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class Matches
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"text":"generated_text_null","indices":[13]}';
    /**
     * @param ?array<int> $indices
     */
    public function __construct(public ?string $text, public ?array $indices)
    {
    }
}
