<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Unknown;

final class CBe4D0B6586B750D77474C82D9388814F
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"name":{"type":"string","description":"The file name of the asset."},"label":{"type":"string","description":"An alternate short description of the asset. Used in place of the filename."},"state":{"type":"string","examples":["\\"uploaded\\""]}}}';
    public const SCHEMA_TITLE = 'c_be4d0b6586b750d77474c82d9388814f';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The file name of the asset.
     */
    private string $name;
    /**
     * An alternate short description of the asset. Used in place of the filename.
     */
    private string $label;
    private string $state;
    /**
     * The file name of the asset.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * An alternate short description of the asset. Used in place of the filename.
     */
    public function label() : string
    {
        return $this->label;
    }
    public function state() : string
    {
        return $this->state;
    }
}
