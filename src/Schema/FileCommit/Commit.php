<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\FileCommit;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Commit
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"sha":{"type":"string"},"node_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"author":{"type":"object","properties":{"date":{"type":"string"},"name":{"type":"string"},"email":{"type":"string"}}},"committer":{"type":"object","properties":{"date":{"type":"string"},"name":{"type":"string"},"email":{"type":"string"}}},"message":{"type":"string"},"tree":{"type":"object","properties":{"url":{"type":"string"},"sha":{"type":"string"}}},"parents":{"type":"array","items":{"type":"object","properties":{"url":{"type":"string"},"html_url":{"type":"string"},"sha":{"type":"string"}}}},"verification":{"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"signature":{"type":["string","null"]},"payload":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"sha":"generated_sha","node_id":"generated_node_id","url":"generated_url","html_url":"generated_html_url","author":{"date":"generated_date","name":"generated_name","email":"generated_email"},"committer":{"date":"generated_date","name":"generated_name","email":"generated_email"},"message":"generated_message","tree":{"url":"generated_url","sha":"generated_sha"},"parents":[{"url":"generated_url","html_url":"generated_html_url","sha":"generated_sha"}],"verification":{"verified":false,"reason":"generated_reason","signature":"generated_signature","payload":"generated_payload"}}';
    /**
     * @param ?array<\ApiClients\Client\GitHub\Schema\FileCommit\Commit\Parents> $parents
     */
    public function __construct(public ?string $sha, public ?string $node_id, public ?string $url, public ?string $html_url, public ?Schema\FileCommit\Commit\Author $author, public ?Schema\FileCommit\Commit\Author $committer, public ?string $message, public ?Schema\FileCommit\Commit\Tree $tree, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\FileCommit\Commit\Parents::class)] public ?array $parents, public ?Schema\FileCommit\Commit\Verification $verification)
    {
    }
}
