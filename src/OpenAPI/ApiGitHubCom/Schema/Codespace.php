<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class Codespace
{
    public const SCHEMA_TITLE = 'Codespace';
    public const SCHEMA_DESCRIPTION = 'A codespace.';
    private int $id;
    /**
     * Automatically generated name of this codespace.
     */
    private string $name;
    /**
     * Display name for this codespace.
     */
    private ?string $display_name = null;
    /**
     * UUID identifying this codespace's environment.
     */
    private ?string $environment_id = null;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $owner;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser $billable_owner;
    /**
     * Minimal Repository
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository::class)
     */
    private \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository $repository;
    /**
     * A description of the machine powering a codespace.
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NullableCodespaceMachine::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NullableCodespaceMachine $machine = null;
    /**
     * Path to devcontainer.json from repo root used to create Codespace.
     */
    private ?string $devcontainer_path = null;
    /**
     * Whether the codespace was created from a prebuild.
     */
    private ?bool $prebuild = null;
    private string $created_at;
    private string $updated_at;
    /**
     * Last known time this codespace was started.
     */
    private string $last_used_at;
    /**
     * State of this codespace.
     */
    private string $state;
    /**
     * API URL for this codespace.
     */
    private string $url;
    /**
     * Details about the codespace's git repository.
     */
    private array $git_status = array();
    /**
     * The Azure region where this codespace is located.
     */
    private string $location;
    /**
     * The number of minutes of inactivity after which this codespace will be automatically stopped.
     */
    private ?int $idle_timeout_minutes = null;
    /**
     * URL to access this codespace on the web.
     */
    private string $web_url;
    /**
     * API URL to access available alternate machine types for this codespace.
     */
    private string $machines_url;
    /**
     * API URL to start this codespace.
     */
    private string $start_url;
    /**
     * API URL to stop this codespace.
     */
    private string $stop_url;
    /**
     * API URL for the Pull Request associated with this codespace, if any.
     */
    private ?string $pulls_url = null;
    private array $recent_folders = array();
    private array $runtime_constraints = array();
    /**
     * Whether or not a codespace has a pending async operation. This would mean that the codespace is temporarily unavailable. The only thing that you can do with a codespace in this state is delete it.
     */
    private ?bool $pending_operation = null;
    /**
     * Text to show user when codespace is disabled by a pending operation
     */
    private ?string $pending_operation_disabled_reason = null;
    /**
     * Text to show user when codespace idle timeout minutes has been overriden by an organization policy
     */
    private ?string $idle_timeout_notice = null;
    public function id() : int
    {
        return $this->id;
    }
    /**
     * Automatically generated name of this codespace.
     */
    public function name() : string
    {
        return $this->name;
    }
    /**
     * Display name for this codespace.
     */
    public function display_name() : ?string
    {
        return $this->display_name;
    }
    /**
     * UUID identifying this codespace's environment.
     */
    public function environment_id() : ?string
    {
        return $this->environment_id;
    }
    /**
     * Simple User
     */
    public function owner() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
    {
        return $this->owner;
    }
    /**
     * Simple User
     */
    public function billable_owner() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\SimpleUser
    {
        return $this->billable_owner;
    }
    /**
     * Minimal Repository
     */
    public function repository() : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\MinimalRepository
    {
        return $this->repository;
    }
    /**
     * A description of the machine powering a codespace.
     */
    public function machine() : ?\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\NullableCodespaceMachine
    {
        return $this->machine;
    }
    /**
     * Path to devcontainer.json from repo root used to create Codespace.
     */
    public function devcontainer_path() : ?string
    {
        return $this->devcontainer_path;
    }
    /**
     * Whether the codespace was created from a prebuild.
     */
    public function prebuild() : ?bool
    {
        return $this->prebuild;
    }
    public function created_at() : string
    {
        return $this->created_at;
    }
    public function updated_at() : string
    {
        return $this->updated_at;
    }
    /**
     * Last known time this codespace was started.
     */
    public function last_used_at() : string
    {
        return $this->last_used_at;
    }
    /**
     * State of this codespace.
     */
    public function state() : string
    {
        return $this->state;
    }
    /**
     * API URL for this codespace.
     */
    public function url() : string
    {
        return $this->url;
    }
    /**
     * Details about the codespace's git repository.
     */
    public function git_status() : array
    {
        return $this->git_status;
    }
    /**
     * The Azure region where this codespace is located.
     */
    public function location() : string
    {
        return $this->location;
    }
    /**
     * The number of minutes of inactivity after which this codespace will be automatically stopped.
     */
    public function idle_timeout_minutes() : ?int
    {
        return $this->idle_timeout_minutes;
    }
    /**
     * URL to access this codespace on the web.
     */
    public function web_url() : string
    {
        return $this->web_url;
    }
    /**
     * API URL to access available alternate machine types for this codespace.
     */
    public function machines_url() : string
    {
        return $this->machines_url;
    }
    /**
     * API URL to start this codespace.
     */
    public function start_url() : string
    {
        return $this->start_url;
    }
    /**
     * API URL to stop this codespace.
     */
    public function stop_url() : string
    {
        return $this->stop_url;
    }
    /**
     * API URL for the Pull Request associated with this codespace, if any.
     */
    public function pulls_url() : ?string
    {
        return $this->pulls_url;
    }
    public function recent_folders() : array
    {
        return $this->recent_folders;
    }
    public function runtime_constraints() : array
    {
        return $this->runtime_constraints;
    }
    /**
     * Whether or not a codespace has a pending async operation. This would mean that the codespace is temporarily unavailable. The only thing that you can do with a codespace in this state is delete it.
     */
    public function pending_operation() : ?bool
    {
        return $this->pending_operation;
    }
    /**
     * Text to show user when codespace is disabled by a pending operation
     */
    public function pending_operation_disabled_reason() : ?string
    {
        return $this->pending_operation_disabled_reason;
    }
    /**
     * Text to show user when codespace idle timeout minutes has been overriden by an organization policy
     */
    public function idle_timeout_notice() : ?string
    {
        return $this->idle_timeout_notice;
    }
}
