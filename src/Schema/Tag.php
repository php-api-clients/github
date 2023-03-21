<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Schema;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final readonly class Tag
{
    public const SCHEMA_JSON = '{"title":"Tag","required":["name","node_id","commit","zipball_url","tarball_url"],"type":"object","properties":{"name":{"type":"string","examples":["v0.1"]},"commit":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}},"zipball_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/zipball\\/v0.1"]},"tarball_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/tarball\\/v0.1"]},"node_id":{"type":"string"}},"description":"Tag"}';
    public const SCHEMA_TITLE = 'Tag';
    public const SCHEMA_DESCRIPTION = 'Tag';
    public const SCHEMA_EXAMPLE_DATA = '{"name":"v0.1","commit":{"sha":"generated_sha_null","url":"https:\\/\\/example.com\\/"},"zipball_url":"https:\\/\\/github.com\\/octocat\\/Hello-World\\/zipball\\/v0.1","tarball_url":"https:\\/\\/github.com\\/octocat\\/Hello-World\\/tarball\\/v0.1","node_id":"generated_node_id_null"}';
    public function __construct(public string $name, public Schema\ShortBranch\Commit $commit, public string $zipball_url, public string $tarball_url, public string $node_id)
    {
    }
}
