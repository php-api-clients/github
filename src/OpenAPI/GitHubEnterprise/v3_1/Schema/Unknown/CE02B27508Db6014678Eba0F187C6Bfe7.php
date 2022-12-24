<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CE02B27508Db6014678Eba0F187C6Bfe7
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"ignored":{"type":"boolean","description":"Whether to block all notifications from a thread.","default":false}}}';
    public const SCHEMA_TITLE = 'c_e02b27508db6014678eba0f187c6bfe7';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Whether to block all notifications from a thread.
     */
    private bool $ignored;
    /**
     * Whether to block all notifications from a thread.
     */
    public function ignored() : bool
    {
        return $this->ignored;
    }
}
