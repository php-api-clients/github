<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Schema;

final class AuditLogEvent
{
    public const SCHEMA_JSON = '{"type":"object","properties":{"@timestamp":{"type":"integer","description":"The time the audit log event occurred, given as a [Unix timestamp](http:\\/\\/en.wikipedia.org\\/wiki\\/Unix_time)."},"action":{"type":"string","description":"The name of the action that was performed, for example `user.login` or `repo.create`."},"active":{"type":"boolean"},"active_was":{"type":"boolean"},"actor":{"type":"string","description":"The actor who performed the action."},"actor_id":{"type":"integer","description":"The id of the actor who performed the action."},"actor_location":{"type":"object","properties":{"country_name":{"type":"string"}}},"data":{"type":"object","additionalProperties":true},"org_id":{"type":"integer"},"user_id":{"type":"integer"},"business_id":{"type":"integer"},"blocked_user":{"type":"string","description":"The username of the account being blocked."},"business":{"type":"string"},"config":{"type":"array","items":{"type":"object"}},"config_was":{"type":"array","items":{"type":"object"}},"content_type":{"type":"string"},"operation_type":{"type":"string"},"created_at":{"type":"integer","description":"The time the audit log event was recorded, given as a [Unix timestamp](http:\\/\\/en.wikipedia.org\\/wiki\\/Unix_time)."},"deploy_key_fingerprint":{"type":"string"},"_document_id":{"type":"string","description":"A unique identifier for an audit event."},"emoji":{"type":"string"},"events":{"type":"array","items":{"type":"object"}},"events_were":{"type":"array","items":{"type":"object"}},"explanation":{"type":"string"},"fingerprint":{"type":"string"},"hook_id":{"type":"integer"},"limited_availability":{"type":"boolean"},"message":{"type":"string"},"name":{"type":"string"},"old_user":{"type":"string"},"openssh_public_key":{"type":"string"},"org":{"type":"string"},"previous_visibility":{"type":"string"},"read_only":{"type":"boolean"},"repo":{"type":"string","description":"The name of the repository."},"repository":{"type":"string","description":"The name of the repository."},"repository_public":{"type":"boolean"},"target_login":{"type":"string"},"team":{"type":"string"},"transport_protocol":{"type":"integer","description":"The type of protocol (for example, HTTP or SSH) used to transfer Git data."},"transport_protocol_name":{"type":"string","description":"A human readable name for the protocol (for example, HTTP or SSH) used to transfer Git data."},"user":{"type":"string","description":"The user that was affected by the action performed (if available)."},"visibility":{"type":"string","description":"The repository visibility, for example `public` or `private`."}}}';
    public const SCHEMA_TITLE = 'audit-log-event';
    public const SCHEMA_DESCRIPTION = '';
    /**
     * The time the audit log event occurred, given as a [Unix timestamp](http://en.wikipedia.org/wiki/Unix_time).
     */
    private int $_AT_timestamp;
    /**
     * The name of the action that was performed, for example `user.login` or `repo.create`.
     */
    private string $action;
    private bool $active;
    private bool $active_was;
    /**
     * The actor who performed the action.
     */
    private string $actor;
    /**
     * The id of the actor who performed the action.
     */
    private int $actor_id;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C47Dddb1F2Febc3Aaa7B811Efb70B408F::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C47Dddb1F2Febc3Aaa7B811Efb70B408F $actor_location;
    /**
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2F9C313De3F7Bfd4586Bcc096B11A634::class)
     */
    private \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2F9C313De3F7Bfd4586Bcc096B11A634 $data;
    private int $org_id;
    private int $user_id;
    private int $business_id;
    /**
     * The username of the account being blocked.
     */
    private string $blocked_user;
    private string $business;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7::class)
     */
    private array $config = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7::class)
     */
    private array $config_was = array();
    private string $content_type;
    private string $operation_type;
    /**
     * The time the audit log event was recorded, given as a [Unix timestamp](http://en.wikipedia.org/wiki/Unix_time).
     */
    private int $created_at;
    private string $deploy_key_fingerprint;
    /**
     * A unique identifier for an audit event.
     */
    private string $_document_id;
    private string $emoji;
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7::class)
     */
    private array $events = array();
    /**
     * @var array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7>
     * @\WyriHaximus\Hydrator\Attribute\HydrateArray(\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7::class)
     */
    private array $events_were = array();
    private string $explanation;
    private string $fingerprint;
    private int $hook_id;
    private bool $limited_availability;
    private string $message;
    private string $name;
    private string $old_user;
    private string $openssh_public_key;
    private string $org;
    private string $previous_visibility;
    private bool $read_only;
    /**
     * The name of the repository.
     */
    private string $repo;
    /**
     * The name of the repository.
     */
    private string $repository;
    private bool $repository_public;
    private string $target_login;
    private string $team;
    /**
     * The type of protocol (for example, HTTP or SSH) used to transfer Git data.
     */
    private int $transport_protocol;
    /**
     * A human readable name for the protocol (for example, HTTP or SSH) used to transfer Git data.
     */
    private string $transport_protocol_name;
    /**
     * The user that was affected by the action performed (if available).
     */
    private string $user;
    /**
     * The repository visibility, for example `public` or `private`.
     */
    private string $visibility;
    /**
     * The time the audit log event occurred, given as a [Unix timestamp](http://en.wikipedia.org/wiki/Unix_time).
     */
    public function _AT_timestamp() : int
    {
        return $this->_AT_timestamp;
    }
    /**
     * The name of the action that was performed, for example `user.login` or `repo.create`.
     */
    public function action() : string
    {
        return $this->action;
    }
    public function active() : bool
    {
        return $this->active;
    }
    public function active_was() : bool
    {
        return $this->active_was;
    }
    /**
     * The actor who performed the action.
     */
    public function actor() : string
    {
        return $this->actor;
    }
    /**
     * The id of the actor who performed the action.
     */
    public function actor_id() : int
    {
        return $this->actor_id;
    }
    public function actor_location() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C47Dddb1F2Febc3Aaa7B811Efb70B408F
    {
        return $this->actor_location;
    }
    public function data() : \ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C2F9C313De3F7Bfd4586Bcc096B11A634
    {
        return $this->data;
    }
    public function org_id() : int
    {
        return $this->org_id;
    }
    public function user_id() : int
    {
        return $this->user_id;
    }
    public function business_id() : int
    {
        return $this->business_id;
    }
    /**
     * The username of the account being blocked.
     */
    public function blocked_user() : string
    {
        return $this->blocked_user;
    }
    public function business() : string
    {
        return $this->business;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7>
     */
    public function config() : array
    {
        return $this->config;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7>
     */
    public function config_was() : array
    {
        return $this->config_was;
    }
    public function content_type() : string
    {
        return $this->content_type;
    }
    public function operation_type() : string
    {
        return $this->operation_type;
    }
    /**
     * The time the audit log event was recorded, given as a [Unix timestamp](http://en.wikipedia.org/wiki/Unix_time).
     */
    public function created_at() : int
    {
        return $this->created_at;
    }
    public function deploy_key_fingerprint() : string
    {
        return $this->deploy_key_fingerprint;
    }
    /**
     * A unique identifier for an audit event.
     */
    public function _document_id() : string
    {
        return $this->_document_id;
    }
    public function emoji() : string
    {
        return $this->emoji;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7>
     */
    public function events() : array
    {
        return $this->events;
    }
    /**
     * @return array<\ApiClients\Client\Github\OpenAPI\GitHubAE\Schema\Unknown\C01Fc056Eed58C88Fe1C507Fcd84Dd4B7>
     */
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
    public function limited_availability() : bool
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
    public function read_only() : bool
    {
        return $this->read_only;
    }
    /**
     * The name of the repository.
     */
    public function repo() : string
    {
        return $this->repo;
    }
    /**
     * The name of the repository.
     */
    public function repository() : string
    {
        return $this->repository;
    }
    public function repository_public() : bool
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
    /**
     * The type of protocol (for example, HTTP or SSH) used to transfer Git data.
     */
    public function transport_protocol() : int
    {
        return $this->transport_protocol;
    }
    /**
     * A human readable name for the protocol (for example, HTTP or SSH) used to transfer Git data.
     */
    public function transport_protocol_name() : string
    {
        return $this->transport_protocol_name;
    }
    /**
     * The user that was affected by the action performed (if available).
     */
    public function user() : string
    {
        return $this->user;
    }
    /**
     * The repository visibility, for example `public` or `private`.
     */
    public function visibility() : string
    {
        return $this->visibility;
    }
}
