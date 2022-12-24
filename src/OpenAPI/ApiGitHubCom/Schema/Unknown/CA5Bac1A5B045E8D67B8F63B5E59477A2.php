<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CA5Bac1A5B045E8D67B8F63B5E59477A2
{
    public const SCHEMA_JSON = '{"required":["name","version","url"],"type":"object","properties":{"name":{"type":"string","description":"The name of the detector used.","examples":["docker buildtime detector"]},"version":{"type":"string","description":"The version of the detector used.","examples":["1.0.0"]},"url":{"type":"string","description":"The url of the detector used.","examples":["http:\\/\\/example.com\\/docker-buildtimer-detector"]}},"description":"A description of the detector used.","additionalProperties":false}';
    public const SCHEMA_TITLE = 'c_a5bac1a5b045e8d67b8f63b5e59477a2';
    public const SCHEMA_DESCRIPTION = 'A description of the detector used.';
    /**
     * The name of the detector used.
     */
    private string $name;
    /**
     * The version of the detector used.
     */
    private string $version;
    /**
     * The url of the detector used.
     */
    private string $url;
    /**
     * The name of the detector used.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * The version of the detector used.
     */
    public function version() : string
    {
        return $this->version;
    }
    /**
     * The url of the detector used.
     */
    public function url() : string
    {
        return $this->url;
    }
}
