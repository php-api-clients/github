<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookInstallationRepositoriesAdded;

final class RepositoriesRemoved
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"full_name":{"type":"string"},"id":{"type":"integer","description":"Unique identifier of the repository"},"name":{"type":"string","description":"The name of the repository."},"node_id":{"type":"string"},"private":{"type":"boolean","description":"Whether the repository is private or public."}}}';
    public const SCHEMA_EXAMPLE = '[]';
    public const SCHEMA_TITLE = 'WebhookInstallationRepositoriesAdded\\RepositoriesRemoved';
    public const SCHEMA_DESCRIPTION = '';
    public readonly string $full_name;
    /**
     * Unique identifier of the repository
     */
    public readonly int $id;
    /**
     * The name of the repository.
     */
    public readonly string $name;
    public readonly string $node_id;
    /**
     * Whether the repository is private or public.
     */
    public readonly bool $private;
    public function __construct(string $full_name, int $id, string $name, string $node_id, bool $private)
    {
        $this->full_name = $full_name;
        $this->id = $id;
        $this->name = $name;
        $this->node_id = $node_id;
        $this->private = $private;
    }
}
