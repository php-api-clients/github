<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\CheckRun;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Output
{
    public const SCHEMA_JSON = '{"required":["title","summary","text","annotations_count","annotations_url"],"type":"object","properties":{"title":{"type":["string","null"]},"summary":{"type":["string","null"]},"text":{"type":["string","null"]},"annotations_count":{"type":"integer"},"annotations_url":{"type":"string","format":"uri"}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"title":"generated_title","summary":"generated_summary","text":"generated_text","annotations_count":13,"annotations_url":"generated_annotations_url"}';
    public function __construct(public ?string $title, public ?string $summary, public ?string $text, public ?int $annotations_count, public ?string $annotations_url)
    {
    }
}
