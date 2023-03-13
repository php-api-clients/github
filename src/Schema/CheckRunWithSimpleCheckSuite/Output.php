<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\CheckRunWithSimpleCheckSuite;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Output
{
    public const SCHEMA_JSON = '{"required":["title","summary","text","annotations_count","annotations_url"],"type":"object","properties":{"annotations_count":{"type":"integer"},"annotations_url":{"type":"string","format":"uri"},"summary":{"type":["string","null"]},"text":{"type":["string","null"]},"title":{"type":["string","null"]}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"annotations_count":13,"annotations_url":"generated_annotations_url","summary":"generated_summary","text":"generated_text","title":"generated_title"}';
    public function __construct(public int $annotations_count, public string $annotations_url, public ?string $summary, public ?string $text, public ?string $title)
    {
    }
}
