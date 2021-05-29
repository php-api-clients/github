<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema\InstallationRepositories\Removed;

final class RepositoriesRemoved
{
    public const SCHEMA_TITLE       = 'installation_repositories$removed::repositories_removed';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * Unique identifier of the repository
     */
    private ?int $id         = null;
    private ?string $node_id = null;
    /**
     * The name of the repository.
     */
    private ?string $name      = null;
    private ?string $full_name = null;
    /**
     * Whether the repository is private or public.
     */
    private ?bool $private = null;

    /**
     * Unique identifier of the repository
     */
    public function id(): ?int
    {
        return $this->id;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    /**
     * The name of the repository.
     */
    public function name(): ?string
    {
        return $this->name;
    }

    public function full_name(): ?string
    {
        return $this->full_name;
    }

    /**
     * Whether the repository is private or public.
     */
    public function private(): ?bool
    {
        return $this->private;
    }
}
