<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class IssueEventLabel
{
    public const SCHEMA_JSON = '{"title":"Issue Event Label","required":["name","color"],"type":"object","properties":{"name":{"type":["string","null"]},"color":{"type":["string","null"]}},"description":"Issue Event Label"}';
    public const SCHEMA_TITLE = 'Issue Event Label';
    public const SCHEMA_DESCRIPTION = 'Issue Event Label';
    public readonly ?string $name;
    public readonly ?string $color;
    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
}
