<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Tag
{
    public const SCHEMA_JSON = '{"title":"Tag","required":["name","node_id","commit","zipball_url","tarball_url"],"type":"object","properties":{"name":{"type":"string","examples":["v0.1"]},"commit":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}},"zipball_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/zipball\\/v0.1"]},"tarball_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/tarball\\/v0.1"]},"node_id":{"type":"string"}},"description":"Tag"}';
    public const SCHEMA_TITLE = 'Tag';
    public const SCHEMA_DESCRIPTION = 'Tag';
    private string $name;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Tag\Commit::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Tag\Commit $commit;
    private string $zipball_url;
    private string $tarball_url;
    private string $node_id;
    public function name() : string
    {
        return $this->name;
    }
    public function commit() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Tag\Commit
    {
        return $this->commit;
    }
    public function zipball_url() : string
    {
        return $this->zipball_url;
    }
    public function tarball_url() : string
    {
        return $this->tarball_url;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
}
