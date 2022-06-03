<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class NullableLicenseSimple
{
    public const SCHEMA_TITLE = 'License Simple';
    public const SCHEMA_DESCRIPTION = 'License Simple';
    private string $key;
    private string $name;
    private ?string $url = null;
    private ?string $spdx_id = null;
    private string $node_id;
    private ?string $html_url = null;
    public function key() : string
    {
        return $this->key;
    }
    public function name() : string
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
    public function node_id() : string
    {
        return $this->node_id;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
}
