<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class IssueEventLabel
{
    public const SCHEMA_JSON = '{"title":"Issue Event Label","required":["name","color"],"type":"object","properties":{"name":{"type":["string","null"]},"color":{"type":["string","null"]}},"description":"Issue Event Label"}';
    public const SCHEMA_TITLE = 'Issue Event Label';
    public const SCHEMA_DESCRIPTION = 'Issue Event Label';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"generated_name_null","color":"generated_color_null"}';
    public function __construct(public ?string $name, public ?string $color)
    {
    }
}
