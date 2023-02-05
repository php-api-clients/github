<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Snapshot;

final class Detector
{
    public const SCHEMA_JSON = '{"required":["name","version","url"],"type":"object","properties":{"name":{"type":"string","description":"The name of the detector used.","examples":["docker buildtime detector"]},"version":{"type":"string","description":"The version of the detector used.","examples":["1.0.0"]},"url":{"type":"string","description":"The url of the detector used.","examples":["http:\\/\\/example.com\\/docker-buildtimer-detector"]}},"description":"A description of the detector used.","additionalProperties":false}';
    public const SCHEMA_TITLE = 'Snapshot\\Detector';
    public const SCHEMA_DESCRIPTION = 'A description of the detector used.';
    /**
     * The name of the detector used.
     */
    public readonly string $name;
    /**
     * The version of the detector used.
     */
    public readonly string $version;
    /**
     * The url of the detector used.
     */
    public readonly string $url;
    public function __construct(string $name, string $version, string $url)
    {
        $this->name = $name;
        $this->version = $version;
        $this->url = $url;
    }
}
