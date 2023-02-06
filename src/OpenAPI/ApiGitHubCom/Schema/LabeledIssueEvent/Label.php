<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\LabeledIssueEvent;

final class Label
{
    public const SCHEMA_JSON = '{"required":["name","color"],"type":"object","properties":{"name":{"type":"string"},"color":{"type":"string"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'LabeledIssueEvent\\Label';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $name;
    public readonly string $color;
    public function __construct(string $name, string $color)
    {
        $this->name = $name;
        $this->color = $color;
    }
}
