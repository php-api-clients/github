<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C443E4026D4005C937Bd3509Cf8Cd8Faf
{
    public const SCHEMA_JSON = '{"required":["title","summary","text","annotations_count","annotations_url"],"type":"object","properties":{"annotations_count":{"type":"integer"},"annotations_url":{"type":"string","format":"uri"},"summary":{"type":["string","null"]},"text":{"type":["string","null"]},"title":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'c_443e4026d4005c937bd3509cf8cd8faf';
    public const SCHEMA_DESCRIPTION = '';
    private int $annotations_count;
    private string $annotations_url;
    private $summary;
    private $text;
    private $title;
    public function annotations_count() : int
    {
        return $this->annotations_count;
    }
    public function annotations_url() : string
    {
        return $this->annotations_url;
    }
    public function summary()
    {
        return $this->summary;
    }
    public function text()
    {
        return $this->text;
    }
    public function title()
    {
        return $this->title;
    }
}
