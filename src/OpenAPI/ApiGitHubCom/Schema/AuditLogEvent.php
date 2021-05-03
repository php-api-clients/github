<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class AuditLogEvent
{
    public const SCHEMA_TITLE = 'audit-log-event';
    public const SPL_HASH = '00000000252f5d480000000029de5079';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The time the audit log event occurred, given as a [Unix timestamp](http://en.wikipedia.org/wiki/Unix_time).
     */
    private ?int $@timestamp = null;
    /**
     * The name of the action that was performed, for example `user.login` or `repo.create`.
     */
    private ?string $action = null;
    private ?bool $active = null;
    private ?bool $active_was = null;
    /**
     * The actor who performed the action.
     */
    private ?string $actor = null;
    /**
     * The username of the account being blocked.
     */
    private ?string $blocked_user = null;
    private ?string $business = null;
    private array $config = array();
    private array $config_was = array();
    private ?string $content_type = null;
    /**
     * The time the audit log event was recorded, given as a [Unix timestamp](http://en.wikipedia.org/wiki/Unix_time).
     */
    private ?int $created_at = null;
    private ?string $deploy_key_fingerprint = null;
    private ?string $emoji = null;
    private array $events = array();
    private array $events_were = array();
    private ?string $explanation = null;
    private ?string $fingerprint = null;
    private ?int $hook_id = null;
    private ?bool $limited_availability = null;
    private ?string $message = null;
    private ?string $name = null;
    private ?string $old_user = null;
    private ?string $openssh_public_key = null;
    private ?string $org = null;
    private ?string $previous_visibility = null;
    private ?bool $read_only = null;
    /**
     * The name of the repository.
     */
    private ?string $repo = null;
    /**
     * The name of the repository.
     */
    private ?string $repository = null;
    private ?bool $repository_public = null;
    private ?string $target_login = null;
    private ?string $team = null;
    /**
     * The type of protocol (for example, HTTP or SSH) used to transfer Git data.
     */
    private ?int $transport_protocol = null;
    /**
     * A human readable name for the protocol (for example, HTTP or SSH) used to transfer Git data.
     */
    private ?string $transport_protocol_name = null;
    /**
     * The user that was affected by the action performed (if available).
     */
    private ?string $user = null;
    /**
     * The repository visibility, for example `public` or `private`.
     */
    private ?string $visibility = null;
    public function @timestamp() : ?int
    {
        return $this->@timestamp;
    }
    public function action() : ?string
    {
        return $this->action;
    }
    public function active() : ?bool
    {
        return $this->active;
    }
    public function active_was() : ?bool
    {
        return $this->active_was;
    }
    public function actor() : ?string
    {
        return $this->actor;
    }
    public function blocked_user() : ?string
    {
        return $this->blocked_user;
    }
    public function business() : ?string
    {
        return $this->business;
    }
    public function config() : array
    {
        return $this->config;
    }
    public function config_was() : array
    {
        return $this->config_was;
    }
    public function content_type() : ?string
    {
        return $this->content_type;
    }
    public function created_at() : ?int
    {
        return $this->created_at;
    }
    public function deploy_key_fingerprint() : ?string
    {
        return $this->deploy_key_fingerprint;
    }
    public function emoji() : ?string
    {
        return $this->emoji;
    }
    public function events() : array
    {
        return $this->events;
    }
    public function events_were() : array
    {
        return $this->events_were;
    }
    public function explanation() : ?string
    {
        return $this->explanation;
    }
    public function fingerprint() : ?string
    {
        return $this->fingerprint;
    }
    public function hook_id() : ?int
    {
        return $this->hook_id;
    }
    public function limited_availability() : ?bool
    {
        return $this->limited_availability;
    }
    public function message() : ?string
    {
        return $this->message;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function old_user() : ?string
    {
        return $this->old_user;
    }
    public function openssh_public_key() : ?string
    {
        return $this->openssh_public_key;
    }
    public function org() : ?string
    {
        return $this->org;
    }
    public function previous_visibility() : ?string
    {
        return $this->previous_visibility;
    }
    public function read_only() : ?bool
    {
        return $this->read_only;
    }
    public function repo() : ?string
    {
        return $this->repo;
    }
    public function repository() : ?string
    {
        return $this->repository;
    }
    public function repository_public() : ?bool
    {
        return $this->repository_public;
    }
    public function target_login() : ?string
    {
        return $this->target_login;
    }
    public function team() : ?string
    {
        return $this->team;
    }
    public function transport_protocol() : ?int
    {
        return $this->transport_protocol;
    }
    public function transport_protocol_name() : ?string
    {
        return $this->transport_protocol_name;
    }
    public function user() : ?string
    {
        return $this->user;
    }
    public function visibility() : ?string
    {
        return $this->visibility;
    }
}
