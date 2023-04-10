<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema\AliasAbstract;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
abstract readonly class Abstract6af2b3ae1426be2429564a001f9716f8
{
    public const SCHEMA_JSON = '{"required":["path","start_line","end_line","annotation_level","message"],"type":"object","properties":{"path":{"type":"string","description":"The path of the file to add an annotation to. For example, `assets\\/css\\/main.css`."},"start_line":{"type":"integer","description":"The start line of the annotation. Line numbers start at 1."},"end_line":{"type":"integer","description":"The end line of the annotation."},"start_column":{"type":"integer","description":"The start column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values. Column numbers start at 1."},"end_column":{"type":"integer","description":"The end column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values."},"annotation_level":{"enum":["notice","warning","failure"],"type":"string","description":"The level of the annotation."},"message":{"type":"string","description":"A short description of the feedback for these lines of code. The maximum size is 64 KB."},"title":{"type":"string","description":"The title that represents the annotation. The maximum size is 255 characters."},"raw_details":{"type":"string","description":"Details about this annotation. The maximum size is 64 KB."}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"path":"generated_path_null","start_line":13,"end_line":13,"start_column":13,"end_column":13,"annotation_level":"notice","message":"generated_message_null","title":"generated_title_null","raw_details":"generated_raw_details_null"}';
    /**
     * path: The path of the file to add an annotation to. For example, `assets/css/main.css`.
     * startLine: The start line of the annotation. Line numbers start at 1.
     * endLine: The end line of the annotation.
     * startColumn: The start column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values. Column numbers start at 1.
     * endColumn: The end column of the annotation. Annotations only support `start_column` and `end_column` on the same line. Omit this parameter if `start_line` and `end_line` have different values.
     * annotationLevel: The level of the annotation.
     * message: A short description of the feedback for these lines of code. The maximum size is 64 KB.
     * title: The title that represents the annotation. The maximum size is 255 characters.
     * rawDetails: Details about this annotation. The maximum size is 64 KB.
     */
    public function __construct(public string $path, #[\EventSauce\ObjectHydrator\MapFrom('start_line')] public int $startLine, #[\EventSauce\ObjectHydrator\MapFrom('end_line')] public int $endLine, #[\EventSauce\ObjectHydrator\MapFrom('start_column')] public ?int $startColumn, #[\EventSauce\ObjectHydrator\MapFrom('end_column')] public ?int $endColumn, #[\EventSauce\ObjectHydrator\MapFrom('annotation_level')] public string $annotationLevel, public string $message, public ?string $title, #[\EventSauce\ObjectHydrator\MapFrom('raw_details')] public ?string $rawDetails)
    {
    }
}
