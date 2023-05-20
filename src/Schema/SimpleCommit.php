<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class SimpleCommit
{
    public const SCHEMA_JSON         = '{"title":"Simple Commit","required":["id","tree_id","message","timestamp","author","committer"],"type":"object","properties":{"id":{"type":"string"},"tree_id":{"type":"string"},"message":{"type":"string"},"timestamp":{"type":"string","format":"date-time"},"author":{"required":["name","email"],"type":["object","null"],"properties":{"name":{"type":"string"},"email":{"type":"string"}}},"committer":{"required":["name","email"],"type":["object","null"],"properties":{"name":{"type":"string"},"email":{"type":"string"}}}},"description":"A commit."}';
    public const SCHEMA_TITLE        = 'Simple Commit';
    public const SCHEMA_DESCRIPTION  = 'A commit.';
    public const SCHEMA_EXAMPLE_DATA = '{"id":"generated","tree_id":"generated","message":"generated","timestamp":"1970-01-01T00:00:00+00:00","author":{"name":"generated","email":"generated"},"committer":{"name":"generated","email":"generated"}}';

    public function __construct(public string $id, #[MapFrom('tree_id')] public string $treeId, public string $message, public string $timestamp, public ?Schema\SimpleCommit\Author $author, public ?Schema\SimpleCommit\Author $committer)
    {
    }
}
