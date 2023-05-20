<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Schema;
use EventSauce\ObjectHydrator\MapFrom;

final readonly class Tag
{
    public const SCHEMA_JSON         = '{"title":"Tag","required":["name","node_id","commit","zipball_url","tarball_url"],"type":"object","properties":{"name":{"type":"string","examples":["v0.1"]},"commit":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}},"zipball_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/zipball\\/v0.1"]},"tarball_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/tarball\\/v0.1"]},"node_id":{"type":"string"}},"description":"Tag"}';
    public const SCHEMA_TITLE        = 'Tag';
    public const SCHEMA_DESCRIPTION  = 'Tag';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"v0.1","commit":{"sha":"generated","url":"https:\\/\\/example.com\\/"},"zipball_url":"https:\\/\\/github.com\\/octocat\\/Hello-World\\/zipball\\/v0.1","tarball_url":"https:\\/\\/github.com\\/octocat\\/Hello-World\\/tarball\\/v0.1","node_id":"generated"}';

    public function __construct(public string $name, public Schema\ShortBranch\Commit $commit, #[MapFrom('zipball_url')] public string $zipballUrl, #[MapFrom('tarball_url')] public string $tarballUrl, #[MapFrom('node_id')] public string $nodeId)
    {
    }
}
