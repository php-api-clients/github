<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Schema\Unknown;

final class CA145A4Ec5E869E4D119B433648C3Ba75
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"path":{"type":"string","examples":["test\\/file.rb"]},"mode":{"type":"string","examples":["040000"]},"type":{"type":"string","examples":["tree"]},"sha":{"type":"string","examples":["23f6827669e43831def8a7ad935069c8bd418261"]},"size":{"type":"integer","examples":[12]},"url":{"type":"string","examples":["https:\\/\\/api.github.com\\/repos\\/owner-482f3203ecf01f67e9deb18e\\/BBB_Private_Repo\\/git\\/blobs\\/23f6827669e43831def8a7ad935069c8bd418261"]}}}';
    public const SCHEMA_TITLE = 'c_a145a4ec5e869e4d119b433648c3ba75';
    public const SCHEMA_DESCRIPTION = '';
    private string $path;
    private string $mode;
    private string $type;
    private string $sha;
    private int $size;
    private string $url;
    public function path() : string
    {
        return $this->path;
    }
    public function mode() : string
    {
        return $this->mode;
    }
    public function type() : string
    {
        return $this->type;
    }
    public function sha() : string
    {
        return $this->sha;
    }
    public function size() : int
    {
        return $this->size;
    }
    public function url() : string
    {
        return $this->url;
    }
}
