<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Schema;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final readonly class CheckAnnotation
{
    public const SCHEMA_JSON = '{"title":"Check Annotation","required":["path","blob_href","start_line","end_line","start_column","end_column","annotation_level","title","message","raw_details"],"type":"object","properties":{"path":{"type":"string","examples":["README.md"]},"start_line":{"type":"integer","examples":[2]},"end_line":{"type":"integer","examples":[2]},"start_column":{"type":["integer","null"],"examples":[5]},"end_column":{"type":["integer","null"],"examples":[10]},"annotation_level":{"type":["string","null"],"examples":["warning"]},"title":{"type":["string","null"],"examples":["Spell Checker"]},"message":{"type":["string","null"],"examples":["Check your spelling for \'banaas\'."]},"raw_details":{"type":["string","null"],"examples":["Do you mean \'bananas\' or \'banana\'?"]},"blob_href":{"type":"string"}},"description":"Check Annotation"}';
    public const SCHEMA_TITLE = 'Check Annotation';
    public const SCHEMA_DESCRIPTION = 'Check Annotation';
    public const SCHEMA_EXAMPLE_DATA = '{"path":"README.md","start_line":2,"end_line":2,"start_column":5,"end_column":10,"annotation_level":"warning","title":"Spell Checker","message":"Check your spelling for \'banaas\'.","raw_details":"Do you mean \'bananas\' or \'banana\'?","blob_href":"generated_blob_href_null"}';
    public function __construct(public string $path, #[\EventSauce\ObjectHydrator\MapFrom('start_line')] public int $startLine, #[\EventSauce\ObjectHydrator\MapFrom('end_line')] public int $endLine, #[\EventSauce\ObjectHydrator\MapFrom('start_column')] public ?int $startColumn, #[\EventSauce\ObjectHydrator\MapFrom('end_column')] public ?int $endColumn, #[\EventSauce\ObjectHydrator\MapFrom('annotation_level')] public ?string $annotationLevel, public ?string $title, public ?string $message, #[\EventSauce\ObjectHydrator\MapFrom('raw_details')] public ?string $rawDetails, #[\EventSauce\ObjectHydrator\MapFrom('blob_href')] public string $blobHref)
    {
    }
}
