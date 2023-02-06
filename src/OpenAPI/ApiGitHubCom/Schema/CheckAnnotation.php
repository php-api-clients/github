<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class CheckAnnotation
{
    public const SCHEMA_JSON = '{"title":"Check Annotation","required":["path","blob_href","start_line","end_line","start_column","end_column","annotation_level","title","message","raw_details"],"type":"object","properties":{"path":{"type":"string","examples":["README.md"]},"start_line":{"type":"integer","examples":[2]},"end_line":{"type":"integer","examples":[2]},"start_column":{"type":["integer","null"],"examples":[5]},"end_column":{"type":["integer","null"],"examples":[10]},"annotation_level":{"type":["string","null"],"examples":["warning"]},"title":{"type":["string","null"],"examples":["Spell Checker"]},"message":{"type":["string","null"],"examples":["Check your spelling for \'banaas\'."]},"raw_details":{"type":["string","null"],"examples":["Do you mean \'bananas\' or \'banana\'?"]},"blob_href":{"type":"string"}},"description":"Check Annotation"}';
    public const SCHEMA_EXAMPLE = '{"path":"README.md","start_line":2,"end_line":2,"start_column":5,"end_column":10,"annotation_level":"warning","title":"Spell Checker","message":"Check your spelling for \'banaas\'.","raw_details":"Do you mean \'bananas\' or \'banana\'?"}';
    public const SCHEMA_TITLE = 'Check Annotation';
    public const SCHEMA_DESCRIPTION = 'Check Annotation';
    public readonly string $path;
    public readonly int $start_line;
    public readonly int $end_line;
    public readonly ?int $start_column;
    public readonly ?int $end_column;
    public readonly ?string $annotation_level;
    public readonly ?string $title;
    public readonly ?string $message;
    public readonly ?string $raw_details;
    public readonly string $blob_href;
    public function __construct(string $path, int $start_line, int $end_line, int $start_column, int $end_column, string $annotation_level, string $title, string $message, string $raw_details, string $blob_href)
    {
        $this->path = $path;
        $this->start_line = $start_line;
        $this->end_line = $end_line;
        $this->start_column = $start_column;
        $this->end_column = $end_column;
        $this->annotation_level = $annotation_level;
        $this->title = $title;
        $this->message = $message;
        $this->raw_details = $raw_details;
        $this->blob_href = $blob_href;
    }
}
