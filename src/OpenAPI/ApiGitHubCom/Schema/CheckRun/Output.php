<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRun;

final class Output
{
    public const SCHEMA_JSON = '{"required":["title","summary","text","annotations_count","annotations_url"],"type":"object","properties":{"title":{"type":["string","null"]},"summary":{"type":["string","null"]},"text":{"type":["string","null"]},"annotations_count":{"type":"integer"},"annotations_url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'CheckRun\\Output';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $title;
    private ?string $summary;
    private ?string $text;
    private int $annotations_count;
    private string $annotations_url;
    public function title() : ?string
    {
        return $this->title;
    }
    public function summary() : ?string
    {
        return $this->summary;
    }
    public function text() : ?string
    {
        return $this->text;
    }
    public function annotations_count() : int
    {
        return $this->annotations_count;
    }
    public function annotations_url() : string
    {
        return $this->annotations_url;
    }
}
