<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

use ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\ShortBranch\Commit;

final readonly class Tag
{
    public const SCHEMA_JSON        = '{"title":"Tag","required":["name","node_id","commit","zipball_url","tarball_url"],"type":"object","properties":{"name":{"type":"string","examples":["v0.1"]},"commit":{"required":["sha","url"],"type":"object","properties":{"sha":{"type":"string"},"url":{"type":"string","format":"uri"}}},"zipball_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/zipball\\/v0.1"]},"tarball_url":{"type":"string","format":"uri","examples":["https:\\/\\/github.com\\/octocat\\/Hello-World\\/tarball\\/v0.1"]},"node_id":{"type":"string"}},"description":"Tag"}';
    public const SCHEMA_TITLE       = 'Tag';
    public const SCHEMA_DESCRIPTION = 'Tag';
    public ?string $name;
    public ?Commit $commit;
    public ?string $zipball_url;
    public ?string $tarball_url;
    public ?string $node_id;

    public function __construct(string $name, Commit $commit, string $zipball_url, string $tarball_url, string $node_id)
    {
        $this->name        = $name;
        $this->commit      = $commit;
        $this->zipball_url = $zipball_url;
        $this->tarball_url = $tarball_url;
        $this->node_id     = $node_id;
    }
}
