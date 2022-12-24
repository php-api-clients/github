<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown;

final class C8D1A5Fd2710955682C6F56923C5487E2
{
    public const SCHEMA_JSON = '{"required":["group_id"],"type":"object","properties":{"group_id":{"type":"integer","description":"External Group Id","examples":[1]}}}';
    public const SCHEMA_TITLE = 'c_8d1a5fd2710955682c6f56923c5487e2';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * External Group Id
     */
    private int $group_id;
    /**
     * External Group Id
     */
    public function group_id() : int
    {
        return $this->group_id;
    }
}
