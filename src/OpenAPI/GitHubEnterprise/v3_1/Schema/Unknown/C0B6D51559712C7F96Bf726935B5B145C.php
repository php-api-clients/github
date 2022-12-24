<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class C0B6D51559712C7F96Bf726935B5B145C
{
    public const SCHEMA_JSON = '{"required":["diff_url","html_url","patch_url","url"],"type":"object","properties":{"merged_at":{"type":["string","null"],"format":"date-time"},"diff_url":{"type":["string","null"],"format":"uri"},"html_url":{"type":["string","null"],"format":"uri"},"patch_url":{"type":["string","null"],"format":"uri"},"url":{"type":["string","null"],"format":"uri"}}}';
    public const SCHEMA_TITLE = 'c_0b6d51559712c7f96bf726935b5b145c';
    public const SCHEMA_DESCRIPTION = '';
    private $merged_at;
    private $diff_url;
    private $html_url;
    private $patch_url;
    private $url;
    public function merged_at()
    {
        return $this->merged_at;
    }
    public function diff_url()
    {
        return $this->diff_url;
    }
    public function html_url()
    {
        return $this->html_url;
    }
    public function patch_url()
    {
        return $this->patch_url;
    }
    public function url()
    {
        return $this->url;
    }
}
