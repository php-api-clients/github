<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class GitRef
{
    public const SCHEMA_TITLE = 'Git Reference';
    public const SPL_HASH = '000000001c23f017000000003890ca58';
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
