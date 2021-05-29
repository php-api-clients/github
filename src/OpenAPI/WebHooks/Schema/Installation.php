<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Installation
{
    public const SCHEMA_TITLE       = 'Installation';
    public const SCHEMA_DESCRIPTION = 'The GitHub App installation.';
    /**
     * The ID of the installation.
     */
    private ?int $id = null;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private ?User $account = null;
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     */
    private ?string $repository_selection = null;
    private ?string $access_tokens_url    = null;
    private ?string $repositories_url     = null;
    private ?string $html_url             = null;
    private ?int $app_id                  = null;
    private ?string $app_slug             = null;
    /**
     * The ID of the user or organization this token is being scoped to.
     */
    private ?int $target_id      = null;
    private ?string $target_type = null;
    private array $permissions   = [];
    private array $events        = [];
    private $created_at;
    private $updated_at;
    private $single_file_name;
    private ?bool $has_multiple_single_files = null;
    private array $single_file_paths         = [];
    private $suspended_by;
    private $suspended_at;

    /**
     * The ID of the installation.
     */
    public function id(): ?int
    {
        return $this->id;
    }

    public function account(): ?User
    {
        return $this->account;
    }

    /**
     * Describe whether all repositories have been selected or there's a selection involved
     */
    public function repository_selection(): ?string
    {
        return $this->repository_selection;
    }

    public function access_tokens_url(): ?string
    {
        return $this->access_tokens_url;
    }

    public function repositories_url(): ?string
    {
        return $this->repositories_url;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function app_id(): ?int
    {
        return $this->app_id;
    }

    public function app_slug(): ?string
    {
        return $this->app_slug;
    }

    /**
     * The ID of the user or organization this token is being scoped to.
     */
    public function target_id(): ?int
    {
        return $this->target_id;
    }

    public function target_type(): ?string
    {
        return $this->target_type;
    }

    public function permissions(): array
    {
        return $this->permissions;
    }

    public function events(): array
    {
        return $this->events;
    }

    public function created_at()
    {
        return $this->created_at;
    }

    public function updated_at()
    {
        return $this->updated_at;
    }

    public function single_file_name()
    {
        return $this->single_file_name;
    }

    public function has_multiple_single_files(): ?bool
    {
        return $this->has_multiple_single_files;
    }

    public function single_file_paths(): array
    {
        return $this->single_file_paths;
    }

    public function suspended_by()
    {
        return $this->suspended_by;
    }

    public function suspended_at()
    {
        return $this->suspended_at;
    }
}
