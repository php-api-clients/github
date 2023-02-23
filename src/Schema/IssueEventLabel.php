<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

final readonly class IssueEventLabel
{
    public const SCHEMA_JSON = '{"title":"Issue Event Label","required":["name","color"],"type":"object","properties":{"name":{"type":["string","null"]},"color":{"type":["string","null"]}},"description":"Issue Event Label"}';
    public const SCHEMA_TITLE = 'Issue Event Label';
    public const SCHEMA_DESCRIPTION = 'Issue Event Label';
    public ?string $name;
    public ?string $color;
    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
}
