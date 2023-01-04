<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Output;

final class Annotations
{
    public const SCHEMA_JSON = '{"required":["path","start_line","end_line","annotation_level","message"],"type":"object","properties":{"path":{"type":"string","description":"The path of the file to add an annotation to. For example, `assets\\/css\\/main.css`."},"start_line":{"type":"integer","description":"The start line of the annotation. Line numbers start at 1."},"end_line":{"type":"integer","description":"The end line of the annotation."},"start_column":{"type":"integer","description":"The start column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values. Column numbers start at 1."},"end_column":{"type":"integer","description":"The end column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values."},"annotation_level":{"enum":["notice","warning","failure"],"type":"string","description":"The level of the annotation."},"message":{"type":"string","description":"A short description of the feedback for these lines of code. The maximum size is 64 KB."},"title":{"type":"string","description":"The title that represents the annotation. The maximum size is 255 characters."},"raw_details":{"type":"string","description":"Details about this annotation. The maximum size is 64 KB."}}}';
    public const SCHEMA_TITLE = 'Output\\Annotations';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The path of the file to add an annotation to. For example, `assets/css/main.css`.
     */
    private string $path;
    /**
     * The start line of the annotation. Line numbers start at 1.
     */
    private int $start_line;
    /**
     * The end line of the annotation.
     */
    private int $end_line;
    /**
     * The start column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values. Column numbers start at 1.
     */
    private ?int $start_column = null;
    /**
     * The end column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values.
     */
    private ?int $end_column = null;
    /**
     * The level of the annotation.
     */
    private string $annotation_level;
    /**
     * A short description of the feedback for these lines of code. The maximum size is 64 KB.
     */
    private string $message;
    /**
     * The title that represents the annotation. The maximum size is 255 characters.
     */
    private ?string $title = null;
    /**
     * Details about this annotation. The maximum size is 64 KB.
     */
    private ?string $raw_details = null;
    /**
     * The path of the file to add an annotation to. For example, `assets/css/main.css`.
     */
    public function path() : string
    {
        return $this->path;
    }
    /**
     * The start line of the annotation. Line numbers start at 1.
     */
    public function start_line() : int
    {
        return $this->start_line;
    }
    /**
     * The end line of the annotation.
     */
    public function end_line() : int
    {
        return $this->end_line;
    }
    /**
     * The start column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values. Column numbers start at 1.
     */
    public function start_column() : ?int
    {
        return $this->start_column;
    }
    /**
     * The end column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values.
     */
    public function end_column() : ?int
    {
        return $this->end_column;
    }
    /**
     * The level of the annotation.
     */
    public function annotation_level() : string
    {
        return $this->annotation_level;
    }
    /**
     * A short description of the feedback for these lines of code. The maximum size is 64 KB.
     */
    public function message() : string
    {
        return $this->message;
    }
    /**
     * The title that represents the annotation. The maximum size is 255 characters.
     */
    public function title() : ?string
    {
        return $this->title;
    }
    /**
     * Details about this annotation. The maximum size is 64 KB.
     */
    public function raw_details() : ?string
    {
        return $this->raw_details;
    }
}
