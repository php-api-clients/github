<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class CDd0031A1A96C40Def9Afdd59Cf0D0Bb6
{
    public const SCHEMA_JSON = '{"required":["title","summary","text","annotations_count","annotations_url"],"type":"object","properties":{"title":{"type":["string","null"]},"summary":{"type":["string","null"]},"text":{"type":["string","null"]},"annotations_count":{"type":"integer"},"annotations_url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = 'c_dd0031a1a96c40def9afdd59cf0d0bb6';
    public const SCHEMA_DESCRIPTION = '';
    private $title;
    private $summary;
    private $text;
    private int $annotations_count;
    private string $annotations_url;
    public function title()
    {
        return $this->title;
    }
    public function summary()
    {
        return $this->summary;
    }
    public function text()
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
