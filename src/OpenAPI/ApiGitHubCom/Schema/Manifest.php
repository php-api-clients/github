<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Manifest
{
    public const SCHEMA_TITLE = 'manifest';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The name of the manifest.
     */
    private string $name;
    private array $file = array();
    /**
     * User-defined metadata to store domain-specific information limited to 8 keys with scalar values.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Metadata::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Metadata $metadata = null;
    /**
     * A collection of resolved package dependencies.
     */
    private array $resolved = array();
    /**
     * The name of the manifest.
     */
    public function name() : string
    {
        return $this->name;
    }
    public function file() : array
    {
        return $this->file;
    }
    /**
     * User-defined metadata to store domain-specific information limited to 8 keys with scalar values.
     */
    public function metadata() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Metadata
    {
        return $this->metadata;
    }
    /**
     * A collection of resolved package dependencies.
     */
    public function resolved() : array
    {
        return $this->resolved;
    }
}
