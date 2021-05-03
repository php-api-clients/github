<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class GitRef
{
    public const SCHEMA_TITLE = 'Git Reference';
    public const SPL_HASH = '00000000577b2cb60000000061bd81a4';
    public const SCHEMA_DESCRIPTION = 'Git references within a repository';
    private ?string $ref = null;
    private ?string $node_id = null;
    private ?string $url = null;
    private ?object $object = null;
    public function ref() : ?string
    {
        return $this->ref;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function object() : ?object
    {
        return $this->object;
    }
}
