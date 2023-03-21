<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class RunnerLabel
{
    public const SCHEMA_JSON = '{"title":"Self hosted runner label","required":["name"],"type":"object","properties":{"id":{"type":"integer","description":"Unique identifier of the label."},"name":{"type":"string","description":"Name of the label."},"type":{"enum":["read-only","custom"],"type":"string","description":"The type of label. Read-only labels are applied automatically when the runner is configured."}},"description":"A label for a self hosted runner"}';
    public const SCHEMA_TITLE = 'Self hosted runner label';
    public const SCHEMA_DESCRIPTION = 'A label for a self hosted runner';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name_null","type":"generated_type_null"}';
    /**
     * id: Unique identifier of the label.
     * name: Name of the label.
     * type: The type of label. Read-only labels are applied automatically when the runner is configured.
     */
    public function __construct(public ?int $id, public string $name, public ?string $type)
    {
    }
}
