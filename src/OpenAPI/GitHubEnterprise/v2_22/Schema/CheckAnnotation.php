<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class CheckAnnotation
{
    public const SCHEMA_TITLE = 'Check Annotation';
    public const SPL_HASH = '00000000269f2dbe00000000005e85e5';
    public const SCHEMA_DESCRIPTION = 'Check Annotation';
    private ?string $path = null;
    private ?int $start_line = null;
    private ?int $end_line = null;
    private ?int $start_column = null;
    private ?int $end_column = null;
    private ?string $annotation_level = null;
    private ?string $title = null;
    private ?string $message = null;
    private ?string $raw_details = null;
    private ?string $blob_href = null;
    public function path() : ?string
    {
        return $this->path;
    }
    public function start_line() : ?int
    {
        return $this->start_line;
    }
    public function end_line() : ?int
    {
        return $this->end_line;
    }
    public function start_column() : ?int
    {
        return $this->start_column;
    }
    public function end_column() : ?int
    {
        return $this->end_column;
    }
    public function annotation_level() : ?string
    {
        return $this->annotation_level;
    }
    public function title() : ?string
    {
        return $this->title;
    }
    public function message() : ?string
    {
        return $this->message;
    }
    public function raw_details() : ?string
    {
        return $this->raw_details;
    }
    public function blob_href() : ?string
    {
        return $this->blob_href;
    }
}
