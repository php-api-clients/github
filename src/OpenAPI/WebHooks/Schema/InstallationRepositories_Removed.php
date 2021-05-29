<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class InstallationRepositories_Removed
{
    public const SCHEMA_TITLE       = 'installation_repositories removed event';
    public const SCHEMA_DESCRIPTION = '';
    private ?string $action         = null;
    /**
     * The GitHub App installation.
     */
    private array $installation = [];
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     */
    private ?string $repository_selection = null;
    /**
     * An array of repository objects, which were added to the installation.
     */
    private array $repositories_added = [];
    /**
     * An array of repository objects, which were removed from the installation.
     */
    private array $repositories_removed = [];
    private $requester;
    private array $sender = [];

    public function action(): ?string
    {
        return $this->action;
    }

    public function installation(): array
    {
        return $this->installation;
    }

    public function repository_selection(): ?string
    {
        return $this->repository_selection;
    }

    public function repositories_added(): array
    {
        return $this->repositories_added;
    }

    public function repositories_removed(): array
    {
        return $this->repositories_removed;
    }

    public function requester()
    {
        return $this->requester;
    }

    public function sender(): array
    {
        return $this->sender;
    }
}
