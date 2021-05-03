<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema;

final class InstallationGhes2
{
    public const SCHEMA_TITLE = 'Installation';
    public const SPL_HASH = '0000000037ddb02e0000000010a967e8';
    public const SCHEMA_DESCRIPTION = 'Installation';
    /**
     * The ID of the installation.
     */
    private int $id;
    private \ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Schema\SimpleUser $account;
    /**
     * Describe whether all repositories have been selected or there's a selection involved
     */
    private string $repository_selection;
    private string $access_tokens_url;
    private string $repositories_url;
    private string $html_url;
    private int $app_id;
    /**
     * The ID of the user or organization this token is being scoped to.
     */
    private int $target_id;
    private string $target_type;
    private object $permissions;
    private array $events;
    private string $created_at;
    private string $updated_at;
    private string $single_file_name;
    private string $app_slug;
    private $suspended_by;
    private string $suspended_at;
    private string $contact_email;
    public function id() : int
    {
        return $this->id;
    }
    public function account()
    {
        return $this->account;
    }
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
    public function target_id() : int
    {
        return $this->target_id;
    }
    public function target_type() : string
    {
        return $this->target_type;
    }
    public function permissions() : object
    {
        return $this->permissions;
    }
    public function events() : array
    {
        return $this->events;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    public function single_file_name() : string
    {
        return $this->single_file_name;
    }
    public function app_slug() : string
    {
        return $this->app_slug;
    }
    public function suspended_by()
    {
        return $this->suspended_by;
    }
    public function suspended_at() : string
    {
        return $this->suspended_at;
    }
    public function contact_email() : string
    {
        return $this->contact_email;
    }
}
