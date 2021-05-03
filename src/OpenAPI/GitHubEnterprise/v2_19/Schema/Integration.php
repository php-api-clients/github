<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Schema;

final class Integration
{
    public const SCHEMA_TITLE = 'GitHub app';
    public const SPL_HASH = '00000000567e23f600000000401184f6';
    public const SCHEMA_DESCRIPTION = 'GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.';
    /**
     * Unique identifier of the GitHub app
     */
    private ?int $id = null;
    /**
     * The slug name of the GitHub app
     */
    private ?string $slug = null;
    private ?string $node_id = null;
    private $owner;
    /**
     * The name of the GitHub app
     */
    private ?string $name = null;
    private ?string $description = null;
    private ?string $external_url = null;
    private ?string $html_url = null;
    private ?string $created_at = null;
    private ?string $updated_at = null;
    /**
     * The set of permissions for the GitHub app
     */
    private ?object $permissions = null;
    /**
     * The list of events for the GitHub app
     */
    private array $events = array();
    /**
     * The number of installations associated with the GitHub app
     */
    private ?int $installations_count = null;
    private ?string $client_id = null;
    private ?string $client_secret = null;
    private ?string $webhook_secret = null;
    private ?string $pem = null;
    public function id() : ?int
    {
        return $this->id;
    }
    public function slug() : ?string
    {
        return $this->slug;
    }
    public function node_id() : ?string
    {
        return $this->node_id;
    }
    public function owner()
    {
        return $this->owner;
    }
    public function name() : ?string
    {
        return $this->name;
    }
    public function description() : ?string
    {
        return $this->description;
    }
    public function external_url() : ?string
    {
        return $this->external_url;
    }
    public function html_url() : ?string
    {
        return $this->html_url;
    }
    public function created_at() : ?string
    {
        return $this->created_at;
    }
    public function updated_at() : ?string
    {
        return $this->updated_at;
    }
    public function permissions() : ?object
    {
        return $this->permissions;
    }
    public function events() : array
    {
        return $this->events;
    }
    public function installations_count() : ?int
    {
        return $this->installations_count;
    }
    public function client_id() : ?string
    {
        return $this->client_id;
    }
    public function client_secret() : ?string
    {
        return $this->client_secret;
    }
    public function webhook_secret() : ?string
    {
        return $this->webhook_secret;
    }
    public function pem() : ?string
    {
        return $this->pem;
    }
}
