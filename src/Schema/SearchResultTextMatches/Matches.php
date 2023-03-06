<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\SearchResultTextMatches;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Matches
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"text":{"type":"string"},"indices":{"type":"array","items":{"type":"integer"}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"text":"generated_text","indices":[13]}';
    /**
     * @param ?array<int> $indices
     */
    public function __construct(public ?string $text, public ?array $indices)
    {
    }
}
