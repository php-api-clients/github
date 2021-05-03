<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class CodeOfConduct
{
    public const SCHEMA_TITLE = 'Code Of Conduct';
    public const SPL_HASH = '0000000045a0e87d0000000057b08344';
    public const SCHEMA_DESCRIPTION = 'Code Of Conduct';
    private ?string $key = null;
    private ?string $name = null;
    private ?string $url = null;
    private ?string $body = null;
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
    public function body() : ?string
    {
        return $this->body;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
}
