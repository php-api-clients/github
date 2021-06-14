<?php

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Installation
{
    public const SCHEMA_TITLE = 'Installation';
    public const SCHEMA_DESCRIPTION = 'The GitHub App installation.';
    /**
     * The ID of the installation.
     */
    private int $id;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class)
     */
    private \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User $account;
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     */
    private string $repository_selection;
    private string $access_tokens_url;
    private string $repositories_url;
    private string $html_url;
    private int $app_id;
    private ?string $app_slug = null;
    /**
     * The ID of the user or organization this token is being scoped to.
     */
    private int $target_id;
    private string $target_type;
    private array $permissions = array();
    private array $events = array();
    private $created_at;
    private $updated_at;
    private $single_file_name;
    private ?bool $has_multiple_single_files = null;
    private array $single_file_paths = array();
    private $suspended_by;
    private $suspended_at;
    /**
     * The ID of the installation.
     */
    public function id() : int
    {
        return $this->id;
    }
    public function account() : \ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User
    {
        return $this->account;
    }
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     */
    public function repository_selection() : string
    {
        return $this->repository_selection;
    }
    public function access_tokens_url() : string
    {
        return $this->access_tokens_url;
    }
    public function repositories_url() : string
    {
        return $this->repositories_url;
    }
    public function html_url() : string
    {
        return $this->html_url;
    }
    public function app_id() : int
    {
        return $this->app_id;
    }
    public function app_slug() : ?string
    {
        return $this->app_slug;
    }
    /**
     * The ID of the user or organization this token is being scoped to.
     */
    public function target_id() : int
    {
        return $this->target_id;
    }
    public function target_type() : string
    {
        return $this->target_type;
    }
    public function permissions() : array
    {
        return $this->permissions;
    }
    public function events() : array
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
    public function has_multiple_single_files() : ?bool
    {
        return $this->has_multiple_single_files;
    }
    public function single_file_paths() : array
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
