<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class GitRef
{
    public const SCHEMA_TITLE = 'Git Reference';
    public const SPL_HASH = '0000000015935ae5000000001856c88e';
    public const SCHEMA_DESCRIPTION = 'Git references within a repository';
    private string $ref;
    private string $node_id;
    private string $url;
    private object $object;
    public function ref() : string
    {
        return $this->ref;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function url() : string
    {
        return $this->url;
    }
    public function object() : object
    {
        return $this->object;
    }
}
