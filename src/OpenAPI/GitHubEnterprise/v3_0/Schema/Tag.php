<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Schema;

final class Tag
{
    public const SCHEMA_TITLE = 'Tag';
    public const SCHEMA_DESCRIPTION = 'Tag';
    private ?string $name = null;
    private ?object $commit = null;
    private ?string $zipball_url = null;
    private ?string $tarball_url = null;
    private ?string $node_id = null;
    public function name() : ?string
    {
        return $this->name;
    }
    public function commit() : ?object
    {
        return $this->commit;
    }
    public function zipball_url() : ?string
    {
        return $this->zipball_url;
    }
    public function tarball_url() : ?string
    {
        return $this->tarball_url;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
}
