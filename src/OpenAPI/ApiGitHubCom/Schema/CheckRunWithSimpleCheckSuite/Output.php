<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\CheckRunWithSimpleCheckSuite;

final class Output
{
    public const SCHEMA_JSON = '{"required":["title","summary","text","annotations_count","annotations_url"],"type":"object","properties":{"annotations_count":{"type":"integer"},"annotations_url":{"type":"string","format":"uri"},"summary":{"type":["string","null"]},"text":{"type":["string","null"]},"title":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = 'CheckRunWithSimpleCheckSuite\\Output';
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
