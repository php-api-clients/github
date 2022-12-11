<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CheckAnnotation
{
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
