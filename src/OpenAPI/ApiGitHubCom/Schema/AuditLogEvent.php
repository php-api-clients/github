<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema;

final class AuditLogEvent
{
    public const SCHEMA_TITLE = 'audit-log-event';
    public const SCHEMA_DESCRIPTION = '';
    /**The time the audit log event occurred, given as a [Unix timestamp](http://en.wikipedia.org/wiki/Unix_time).**/
    private int $@timestamp;
    /**The name of the action that was performed, for example `user.login` or `repo.create`.**/
    private string $action;
    private boolean $active;
    private boolean $active_was;
    /**The actor who performed the action.**/
    private string $actor;
    /**The username of the account being blocked.**/
    private string $blocked_user;
    private string $business;
    private array $config;
    private array $config_was;
    private string $content_type;
    /**The time the audit log event was recorded, given as a [Unix timestamp](http://en.wikipedia.org/wiki/Unix_time).**/
    private int $created_at;
    private string $deploy_key_fingerprint;
    private string $emoji;
    private array $events;
    private array $events_were;
    private string $explanation;
    private string $fingerprint;
    private int $hook_id;
    private boolean $limited_availability;
    private string $message;
    private string $name;
    private string $old_user;
    private string $openssh_public_key;
    private string $org;
    private string $previous_visibility;
    private boolean $read_only;
    /**The name of the repository.**/
    private string $repo;
    /**The name of the repository.**/
    private string $repository;
    private boolean $repository_public;
    private string $target_login;
    private string $team;
    /**The type of protocol (for example, HTTP or SSH) used to transfer Git data.**/
    private int $transport_protocol;
    /**A human readable name for the protocol (for example, HTTP or SSH) used to transfer Git data.**/
    private string $transport_protocol_name;
    /**The user that was affected by the action performed (if available).**/
    private string $user;
    /**The repository visibility, for example `public` or `private`.**/
    private string $visibility;
    public function @timestamp() : int
    {
        return $this->@timestamp;
    }
    public function action() : string
    {
        return $this->action;
    }
    public function active() : boolean
    {
        return $this->active;
    }
    public function active_was() : boolean
    {
        return $this->active_was;
    }
    public function actor() : string
    {
        return $this->actor;
    }
    public function blocked_user() : string
    {
        return $this->blocked_user;
    }
    public function business() : string
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
    public function content_type() : string
    {
        return $this->content_type;
    }
    public function created_at() : int
    {
        return $this->created_at;
    }
    public function deploy_key_fingerprint() : string
    {
        return $this->deploy_key_fingerprint;
    }
    public function emoji() : string
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
    public function explanation() : string
    {
        return $this->explanation;
    }
    public function fingerprint() : string
    {
        return $this->fingerprint;
    }
    public function hook_id() : int
    {
        return $this->hook_id;
    }
    public function limited_availability() : boolean
    {
        return $this->limited_availability;
    }
    public function message() : string
    {
        return $this->message;
    }
    public function name() : string
    {
        return $this->name;
    }
    public function old_user() : string
    {
        return $this->old_user;
    }
    public function openssh_public_key() : string
    {
        return $this->openssh_public_key;
    }
    public function org() : string
    {
        return $this->org;
    }
    public function previous_visibility() : string
    {
        return $this->previous_visibility;
    }
    public function read_only() : boolean
    {
        return $this->read_only;
    }
    public function repo() : string
    {
        return $this->repo;
    }
    public function repository() : string
    {
        return $this->repository;
    }
    public function repository_public() : boolean
    {
        return $this->repository_public;
    }
    public function target_login() : string
    {
        return $this->target_login;
    }
    public function team() : string
    {
        return $this->team;
    }
    public function transport_protocol() : int
    {
        return $this->transport_protocol;
    }
    public function transport_protocol_name() : string
    {
        return $this->transport_protocol_name;
    }
    public function user() : string
    {
        return $this->user;
    }
    public function visibility() : string
    {
        return $this->visibility;
    }
}
