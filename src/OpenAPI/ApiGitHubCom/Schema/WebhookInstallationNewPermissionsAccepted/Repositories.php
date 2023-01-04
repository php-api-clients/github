<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\WebhookInstallationNewPermissionsAccepted;

final class Repositories
{
    public const SCHEMA_JSON = '{"required":["id","node_id","name","full_name","private"],"type":"object","properties":{"full_name":{"type":"string"},"id":{"type":"integer","description":"Unique identifier of the repository"},"name":{"type":"string","description":"The name of the repository."},"node_id":{"type":"string"},"private":{"type":"boolean","description":"Whether the repository is private or public."}}}';
    public const SCHEMA_TITLE = 'WebhookInstallationNewPermissionsAccepted\\Repositories';
    public const SCHEMA_DESCRIPTION = '';
    private string $full_name;
    /**
     * Unique identifier of the repository
     */
    private int $id;
    /**
     * The name of the repository.
     */
    private string $name;
    private string $node_id;
    /**
     * Whether the repository is private or public.
     */
    private bool $private;
    public function full_name() : string
    {
        return $this->full_name;
    }
    /**
     * Unique identifier of the repository
     */
    public function id() : int
    {
        return $this->id;
    }
    /**
     * The name of the repository.
     */
    public function name() : string
    {
        return $this->name;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * Whether the repository is private or public.
     */
    public function private() : bool
    {
        return $this->private;
    }
}
