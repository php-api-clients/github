<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\UpdateReleaseAsset\Request\Application;

final class Json
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The file name of the asset."},"label":{"type":"string","description":"An alternate short description of the asset. Used in place of the filename."},"state":{"type":"string","examples":["\\"uploaded\\""]}}}';
    public const SCHEMA_TITLE = 'UpdateReleaseAsset\\Request\\Application\\Json';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The file name of the asset.
     */
    public readonly string $name;
    /**
     * An alternate short description of the asset. Used in place of the filename.
     */
    public readonly string $label;
    public readonly string $state;
    public function __construct(string $name, string $label, string $state)
    {
        $this->name = $name;
        $this->label = $label;
        $this->state = $state;
    }
}
