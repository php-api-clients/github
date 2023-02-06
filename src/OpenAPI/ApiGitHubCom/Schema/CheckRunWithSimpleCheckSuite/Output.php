<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRunWithSimpleCheckSuite;

final class Output
{
    public const SCHEMA_JSON = '{"required":["title","summary","text","annotations_count","annotations_url"],"type":"object","properties":{"annotations_count":{"type":"integer"},"annotations_url":{"type":"string","format":"uri"},"summary":{"type":["string","null"]},"text":{"type":["string","null"]},"title":{"type":["string","null"]}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'CheckRunWithSimpleCheckSuite\\Output';
    public const SCHEMA_DESCRIPTION = '';
    public readonly int $annotations_count;
    public readonly string $annotations_url;
    public readonly ?string $summary;
    public readonly ?string $text;
    public readonly ?string $title;
    public function __construct(int $annotations_count, string $annotations_url, string $summary, string $text, string $title)
    {
        $this->annotations_count = $annotations_count;
        $this->annotations_url = $annotations_url;
        $this->summary = $summary;
        $this->text = $text;
        $this->title = $title;
    }
}
