<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\DemilestonedIssueEvent;

final class Milestone
{
    public const SCHEMA_JSON = '{"required":["title"],"type":"object","properties":{"title":{"type":"string"}}}';
    public const SCHEMA_TITLE = 'DemilestonedIssueEvent\\Milestone';
    public const SCHEMA_DESCRIPTION = '';
    private string $title;
    public function title() : string
    {
        return $this->title;
    }
}
