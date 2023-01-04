<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\UnlabeledIssueEvent;

final class Label
{
    public const SCHEMA_JSON = '{"required":["name","color"],"type":"object","properties":{"name":{"type":"string"},"color":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'UnlabeledIssueEvent\\Label';
    public const SCHEMA_DESCRIPTION = '';
    private string $name;
    private string $color;
    public function name() : string
    {
        return $this->name;
    }
    public function color() : string
    {
        return $this->color;
    }
}
