<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class License
{
    public const SCHEMA_TITLE = 'License';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $key = null;
    private ?string $name = null;
    private ?string $spdx_id = null;
    private $url;
    private ?string $node_id = null;
    public function key() : ?string
    {
        return $this->key;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function spdx_id() : ?string
    {
        return $this->spdx_id;
    }
    public function url()
    {
        return $this->url;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
}
