<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class LicenseSimple
{
    public const SCHEMA_TITLE = 'License Simple';
    public const SCHEMA_DESCRIPTION = 'License Simple';
    private string $key;
    private string $name;
    private $url;
    private $spdx_id;
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
    public function url()
    {
        return $this->url;
    }
    public function spdx_id()
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
