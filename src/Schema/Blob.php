<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Blob
{
    public const SCHEMA_JSON = '{"title":"Blob","required":["sha","url","node_id","size","content","encoding"],"type":"object","properties":{"content":{"type":"string"},"encoding":{"type":"string"},"url":{"type":"string","format":"uri"},"sha":{"type":"string"},"size":{"type":["integer","null"]},"node_id":{"type":"string"},"highlighted_content":{"type":"string"}},"description":"Blob"}';
    public const SCHEMA_TITLE = 'Blob';
    public const SCHEMA_DESCRIPTION = 'Blob';
    public const SCHEMA_EXAMPLE_DATA = '{"content":"generated_content","encoding":"generated_encoding","url":"generated_url","sha":"generated_sha","size":13,"node_id":"generated_node_id","highlighted_content":"generated_highlighted_content"}';
    public function __construct(public ?string $content, public ?string $encoding, public ?string $url, public ?string $sha, public ?int $size, public ?string $node_id, public string $highlighted_content)
    {
    }
}
