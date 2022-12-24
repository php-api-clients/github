<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CFf499Dd1Ba32Dd2Ed40F8Eabd519A0Ba
{
    public const SCHEMA_JSON = '{"required":["name","image_url"],"type":"object","properties":{"name":{"type":"string","description":"The new pre-receive environment\'s name."},"image_url":{"type":"string","description":"URL from which to download a tarball of this environment."}}}';
    public const SCHEMA_TITLE = 'c_ff499dd1ba32dd2ed40f8eabd519a0ba';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The new pre-receive environment's name.
     */
    private string $name;
    /**
     * URL from which to download a tarball of this environment.
     */
    private string $image_url;
    /**
     * The new pre-receive environment's name.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * URL from which to download a tarball of this environment.
     */
    public function image_url() : string
    {
        return $this->image_url;
    }
}
