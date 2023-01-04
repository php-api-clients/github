<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\LabeledIssueEvent;

final class Label
{
    public const SCHEMA_JSON = '{"required":["name","color"],"type":"object","properties":{"name":{"type":"string"},"color":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'LabeledIssueEvent\\Label';
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
