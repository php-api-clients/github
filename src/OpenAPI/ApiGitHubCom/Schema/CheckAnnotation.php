<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final readonly class CheckAnnotation
{
    public const SCHEMA_JSON        = '{"title":"Check Annotation","required":["path","blob_href","start_line","end_line","start_column","end_column","annotation_level","title","message","raw_details"],"type":"object","properties":{"path":{"type":"string","examples":["README.md"]},"start_line":{"type":"integer","examples":[2]},"end_line":{"type":"integer","examples":[2]},"start_column":{"type":["integer","null"],"examples":[5]},"end_column":{"type":["integer","null"],"examples":[10]},"annotation_level":{"type":["string","null"],"examples":["warning"]},"title":{"type":["string","null"],"examples":["Spell Checker"]},"message":{"type":["string","null"],"examples":["Check your spelling for \'banaas\'."]},"raw_details":{"type":["string","null"],"examples":["Do you mean \'bananas\' or \'banana\'?"]},"blob_href":{"type":"string"}},"description":"Check Annotation"}';
    public const SCHEMA_TITLE       = 'Check Annotation';
    public const SCHEMA_DESCRIPTION = 'Check Annotation';
    public ?string $path;
    public ?int $start_line;
    public ?int $end_line;
    public ?int $start_column;
    public ?int $end_column;
    public ?string $annotation_level;
    public ?string $title;
    public ?string $message;
    public ?string $raw_details;
    public ?string $blob_href;

    public function __construct(string $path, int $start_line, int $end_line, int $start_column, int $end_column, string $annotation_level, string $title, string $message, string $raw_details, string $blob_href)
    {
        $this->path             = $path;
        $this->start_line       = $start_line;
        $this->end_line         = $end_line;
        $this->start_column     = $start_column;
        $this->end_column       = $end_column;
        $this->annotation_level = $annotation_level;
        $this->title            = $title;
        $this->message          = $message;
        $this->raw_details      = $raw_details;
        $this->blob_href        = $blob_href;
    }
}
