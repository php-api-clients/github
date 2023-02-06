<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun;

final class Output
{
    public const SCHEMA_JSON = '{"required":["title","summary","text","annotations_count","annotations_url"],"type":"object","properties":{"title":{"type":["string","null"]},"summary":{"type":["string","null"]},"text":{"type":["string","null"]},"annotations_count":{"type":"integer"},"annotations_url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'CheckRun\\Output';
    public const SCHEMA_DESCRIPTION = '';
    public readonly ?string $title;
    public readonly ?string $summary;
    public readonly ?string $text;
    public readonly int $annotations_count;
    public readonly string $annotations_url;
    public function __construct(string $title, string $summary, string $text, int $annotations_count, string $annotations_url)
    {
        $this->title = $title;
        $this->summary = $summary;
        $this->text = $text;
        $this->annotations_count = $annotations_count;
        $this->annotations_url = $annotations_url;
    }
}
