<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Schema;

final class LicenseSimple
{
    public const SCHEMA_TITLE = 'License Simple';
    public const SPL_HASH = '000000000b4c07680000000005634a32';
    public const SCHEMA_DESCRIPTION = 'License Simple';
    private ?string $key = null;
    private ?string $name = null;
    private ?string $url = null;
    private ?string $spdx_id = null;
    private ?string $node_id = null;
    private ?string $html_url = null;
    public function key() : ?string
    {
        return $this->key;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function url() : ?string
    {
        return $this->url;
    }
    public function spdx_id() : ?string
    {
        return $this->spdx_id;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
}
