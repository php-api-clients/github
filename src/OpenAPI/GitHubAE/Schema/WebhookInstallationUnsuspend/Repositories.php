<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\WebhookInstallationUnsuspend;

final class Repositories
{
    public const SCHEMA_TITLE = 'webhook-installation-unsuspend::repositories';
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
