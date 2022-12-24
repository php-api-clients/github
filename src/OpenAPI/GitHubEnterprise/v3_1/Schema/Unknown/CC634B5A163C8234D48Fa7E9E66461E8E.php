<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CC634B5A163C8234D48Fa7E9E66461E8E
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"This pre-receive environment\'s new name."},"image_url":{"type":"string","description":"URL from which to download a tarball of this environment."}}}';
    public const SCHEMA_TITLE = 'c_c634b5a163c8234d48fa7e9e66461e8e';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * This pre-receive environment's new name.
     */
    private string $name;
    /**
     * URL from which to download a tarball of this environment.
     */
    private string $image_url;
    /**
     * This pre-receive environment's new name.
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
