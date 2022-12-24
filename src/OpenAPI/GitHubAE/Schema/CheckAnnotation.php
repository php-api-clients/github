<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CheckAnnotation
{
    public const SCHEMA_JSON = '{"title":"Check Annotation","required":["path","blob_href","start_line","end_line","start_column","end_column","annotation_level","title","message","raw_details"],"type":"object","properties":{"path":{"type":"string","examples":["README.md"]},"start_line":{"type":"integer","examples":[2]},"end_line":{"type":"integer","examples":[2]},"start_column":{"type":["integer","null"],"examples":[5]},"end_column":{"type":["integer","null"],"examples":[10]},"annotation_level":{"type":["string","null"],"examples":["warning"]},"title":{"type":["string","null"],"examples":["Spell Checker"]},"message":{"type":["string","null"],"examples":["Check your spelling for \'banaas\'."]},"raw_details":{"type":["string","null"],"examples":["Do you mean \'bananas\' or \'banana\'?"]},"blob_href":{"type":"string"}},"description":"Check Annotation"}';
    public const SCHEMA_TITLE = 'Check Annotation';
    public const SCHEMA_DESCRIPTION = 'Check Annotation';
    private string $path;
    private int $start_line;
    private int $end_line;
    private $start_column;
    private $end_column;
    private $annotation_level;
    private $title;
    private $message;
    private $raw_details;
    private string $blob_href;
    public function path() : string
    {
        return $this->path;
    }
    public function start_line() : int
    {
        return $this->start_line;
    }
    public function end_line() : int
    {
        return $this->end_line;
    }
    public function start_column()
    {
        return $this->start_column;
    }
    public function end_column()
    {
        return $this->end_column;
    }
    public function annotation_level()
    {
        return $this->annotation_level;
    }
    public function title()
    {
        return $this->title;
    }
    public function message()
    {
        return $this->message;
    }
    public function raw_details()
    {
        return $this->raw_details;
    }
    public function blob_href() : string
    {
        return $this->blob_href;
    }
}
