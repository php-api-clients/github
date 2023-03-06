<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class SimpleCommitStatus
{
    public const SCHEMA_JSON = '{"title":"Simple Commit Status","required":["description","id","node_id","state","context","target_url","avatar_url","url","created_at","updated_at"],"type":"object","properties":{"description":{"type":["string","null"]},"id":{"type":"integer"},"node_id":{"type":"string"},"state":{"type":"string"},"context":{"type":"string"},"target_url":{"type":["string","null"],"format":"uri"},"required":{"type":["boolean","null"]},"avatar_url":{"type":["string","null"],"format":"uri"},"url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"}}}';
    public const SCHEMA_TITLE = 'Simple Commit Status';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"description":"generated_description","id":13,"node_id":"generated_node_id","state":"generated_state","context":"generated_context","target_url":"generated_target_url","required":false,"avatar_url":"generated_avatar_url","url":"generated_url","created_at":"generated_created_at","updated_at":"generated_updated_at"}';
    public function __construct(public ?string $description, public ?int $id, public ?string $node_id, public ?string $state, public ?string $context, public ?string $target_url, public ?bool $required, public ?string $avatar_url, public ?string $url, public ?string $created_at, public ?string $updated_at)
    {
    }
}
