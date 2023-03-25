<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema\FileCommit;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Commit
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"sha":{"type":"string"},"node_id":{"type":"string"},"url":{"type":"string"},"html_url":{"type":"string"},"author":{"type":"object","properties":{"date":{"type":"string"},"name":{"type":"string"},"email":{"type":"string"}}},"committer":{"type":"object","properties":{"date":{"type":"string"},"name":{"type":"string"},"email":{"type":"string"}}},"message":{"type":"string"},"tree":{"type":"object","properties":{"url":{"type":"string"},"sha":{"type":"string"}}},"parents":{"type":"array","items":{"type":"object","properties":{"url":{"type":"string"},"html_url":{"type":"string"},"sha":{"type":"string"}}}},"verification":{"type":"object","properties":{"verified":{"type":"boolean"},"reason":{"type":"string"},"signature":{"type":["string","null"]},"payload":{"type":["string","null"]}}}}}';
    public const SCHEMA_TITLE = '';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"sha":"generated_sha_null","nodeId":"generated_node_id_null","url":"generated_url_null","htmlUrl":"generated_html_url_null","author":{"date":"generated_date_null","name":"generated_name_null","email":"generated_email_null"},"committer":{"date":"generated_date_null","name":"generated_name_null","email":"generated_email_null"},"message":"generated_message_null","tree":{"url":"generated_url_null","sha":"generated_sha_null"},"parents":[{"url":"generated_url_null","htmlUrl":"generated_html_url_null","sha":"generated_sha_null"}],"verification":{"verified":false,"reason":"generated_reason_null","signature":"generated_signature_null","payload":"generated_payload_null"}}';
    /**
     * @param ?array<\ApiClients\Client\GitHub\Schema\FileCommit\Commit\Parents> $parents
     */
    public function __construct(public ?string $sha, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public ?string $nodeId, public ?string $url, #[\EventSauce\ObjectHydrator\MapFrom('html_url')] public ?string $htmlUrl, public ?Schema\FileCommit\Commit\Author $author, public ?Schema\FileCommit\Commit\Author $committer, public ?string $message, public ?Schema\FileCommit\Commit\Tree $tree, #[\EventSauce\ObjectHydrator\PropertyCasters\CastListToType(Schema\FileCommit\Commit\Parents::class)] public ?array $parents, public ?Schema\FileCommit\Commit\Verification $verification)
    {
    }
}
