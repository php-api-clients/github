<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema;

final class InstallationGhes2
{
    public const SCHEMA_TITLE = 'Installation';
    public const SCHEMA_DESCRIPTION = 'Installation';
    /**
     * The ID of the installation.
     */
    private ?int $id = null;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\SimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\SimpleUser $account = null;
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     */
    private ?string $repository_selection = null;
    private ?string $access_tokens_url = null;
    private ?string $repositories_url = null;
    private ?string $html_url = null;
    private ?int $app_id = null;
    /**
     * The ID of the user or organization this token is being scoped to.
     */
    private ?int $target_id = null;
    private ?string $target_type = null;
    private ?object $permissions = null;
    private array $events = array();
    private ?string $created_at = null;
    private ?string $updated_at = null;
    private ?string $single_file_name = null;
    private ?string $app_slug = null;
    private $suspended_by;
    private ?string $suspended_at = null;
    private ?string $contact_email = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function account() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Schema\SimpleUser
    {
        return $this->account;
    }
    public function repository_selection() : ?string
    {
        return $this->repository_selection;
    }
    public function access_tokens_url() : ?string
    {
        return $this->access_tokens_url;
    }
    public function repositories_url() : ?string
    {
        return $this->repositories_url;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function app_id() : ?int
    {
        return $this->app_id;
    }
    public function target_id() : ?int
    {
        return $this->target_id;
    }
    public function target_type() : ?string
    {
        return $this->target_type;
    }
    public function permissions() : ?object
    {
        return $this->permissions;
    }
    public function events() : array
    {
        return $this->events;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function single_file_name() : ?string
    {
        return $this->single_file_name;
    }
    public function app_slug() : ?string
    {
        return $this->app_slug;
    }
    public function suspended_by()
    {
        return $this->suspended_by;
    }
    public function suspended_at() : ?string
    {
        return $this->suspended_at;
    }
    public function contact_email() : ?string
    {
        return $this->contact_email;
    }
}
