<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Tag
{
    public const SCHEMA_JSON = '{"title":"Tag","required":["name","node_id","commit","zipball_url","tarball_url"],"type":"object","properties":{"name":{"type":"string","examples":["v0.1"]},"commit":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}},"zipball_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/zipball\\/v0.1"]},"tarball_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/tarball\\/v0.1"]},"node_id":{"type":"string"}},"description":"Tag"}';
    public const SCHEMA_TITLE = 'Tag';
    public const SCHEMA_DESCRIPTION = 'Tag';
    public readonly string $name;
    public readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Tag\Commit $commit;
    public readonly string $zipball_url;
    public readonly string $tarball_url;
    public readonly string $node_id;
    public function __construct(string $name, object $commit, string $zipball_url, string $tarball_url, string $node_id)
    {
        $this->name = $name;
        $this->commit = $commit;
        $this->zipball_url = $zipball_url;
        $this->tarball_url = $tarball_url;
        $this->node_id = $node_id;
    }
}
