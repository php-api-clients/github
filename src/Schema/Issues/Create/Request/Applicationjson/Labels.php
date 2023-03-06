<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\Issues\Create\Request\Applicationjson;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Labels
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"id":{"type":"integer"},"name":{"type":"string"},"description":{"type":["string","null"]},"color":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"id":13,"name":"generated_name","description":"generated_description","color":"generated_color"}';
    public function __construct(public ?int $id, public ?string $name, public ?string $description, public ?string $color)
    {
    }
}
