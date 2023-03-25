<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class SimpleCommitStatus
{
    public const SCHEMA_JSON = '{"title":"Simple Commit Status","required":["description","id","node_id","state","context","target_url","avatar_url","url","created_at","updated_at"],"type":"object","properties":{"description":{"type":["string","null"]},"id":{"type":"integer"},"node_id":{"type":"string"},"state":{"type":"string"},"context":{"type":"string"},"target_url":{"type":["string","null"],"format":"uri"},"required":{"type":["boolean","null"]},"avatar_url":{"type":["string","null"],"format":"uri"},"url":{"type":"string","format":"uri"},"created_at":{"type":"string","format":"date-time"},"updated_at":{"type":"string","format":"date-time"}}}';
    public const SCHEMA_TITLE = 'Simple Commit Status';
    public const SCHEMA_DESCRIPTION = '';
    public const SCHEMA_EXAMPLE_DATA = '{"description":"generated_description_null","id":13,"nodeId":"generated_node_id_null","state":"generated_state_null","context":"generated_context_null","targetUrl":"https:\\/\\/example.com\\/","required":false,"avatarUrl":"https:\\/\\/example.com\\/","url":"https:\\/\\/example.com\\/","createdAt":"1970-01-01T00:00:00+00:00","updatedAt":"1970-01-01T00:00:00+00:00"}';
    public function __construct(public ?string $description, public int $id, #[\EventSauce\ObjectHydrator\MapFrom('node_id')] public string $nodeId, public string $state, public string $context, #[\EventSauce\ObjectHydrator\MapFrom('target_url')] public ?string $targetUrl, public ?bool $required, #[\EventSauce\ObjectHydrator\MapFrom('avatar_url')] public ?string $avatarUrl, public string $url, #[\EventSauce\ObjectHydrator\MapFrom('created_at')] public string $createdAt, #[\EventSauce\ObjectHydrator\MapFrom('updated_at')] public string $updatedAt)
    {
    }
}
