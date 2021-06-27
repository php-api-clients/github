<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class License
{
    public const SCHEMA_TITLE = 'License';
    public const SCHEMA_DESCRIPTION = '';
    private string $key;
    private string $name;
    private string $spdx_id;
    private $url;
    private string $node_id;
    public function key() : string
    {
        return $this->key;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function spdx_id() : string
    {
        return $this->spdx_id;
    }
    public function url()
    {
        return $this->url;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
}
