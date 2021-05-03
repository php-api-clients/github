<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class CodeOfConductSimple
{
    public const SCHEMA_TITLE = 'Code Of Conduct Simple';
    public const SPL_HASH = '000000007ee6eecd0000000021479ea3';
    public const SCHEMA_DESCRIPTION = 'Code of Conduct Simple';
    private string $url;
    private string $key;
    private string $name;
    private string $html_url;
    public function url() : string
    {
        return $this->url;
    }
    public function key() : string
    {
        return $this->key;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
}
