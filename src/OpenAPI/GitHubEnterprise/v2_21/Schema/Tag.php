<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class Tag
{
    public const SCHEMA_TITLE = 'Tag';
    public const SPL_HASH = '00000000181427a0000000005f691719';
    public const SCHEMA_DESCRIPTION = 'Tag';
    private string $name;
    private object $commit;
    private string $zipball_url;
    private string $tarball_url;
    private string $node_id;
    public function name() : string
    {
        return $this->name;
    }
    public function commit() : object
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
