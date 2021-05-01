<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class CheckAnnotation
{
    public const SCHEMA_TITLE = 'Check Annotation';
    public const SCHEMA_DESCRIPTION = 'Check Annotation';
    private string $path;
    private int $start_line;
    private int $end_line;
    private int $start_column;
    private int $end_column;
    private string $annotation_level;
    private string $title;
    private string $message;
    private string $raw_details;
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
    public function start_column() : int
    {
        return $this->start_column;
    }
    public function end_column() : int
    {
        return $this->end_column;
    }
    public function annotation_level() : string
    {
        return $this->annotation_level;
    }
    public function title() : string
    {
        return $this->title;
    }
    public function message() : string
    {
        return $this->message;
    }
    public function raw_details() : string
    {
        return $this->raw_details;
    }
    public function blob_href() : string
    {
        return $this->blob_href;
    }
}
