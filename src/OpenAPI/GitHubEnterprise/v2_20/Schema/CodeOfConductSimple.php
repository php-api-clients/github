<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class CodeOfConductSimple
{
    public const SCHEMA_TITLE = 'Code Of Conduct Simple';
    public const SPL_HASH = '000000005d4c9f1c000000005494ca51';
    public const SCHEMA_DESCRIPTION = 'Code of Conduct Simple';
    private ?string $url = null;
    private ?string $key = null;
    private ?string $name = null;
    private ?string $html_url = null;
    public function url() : ?string
    {
        return $this->url;
    }
    public function key() : ?string
    {
        return $this->key;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
}
