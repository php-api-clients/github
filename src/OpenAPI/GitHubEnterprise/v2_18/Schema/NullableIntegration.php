<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema;

final class NullableIntegration
{
    public const SCHEMA_TITLE = 'GitHub app';
    public const SCHEMA_DESCRIPTION = 'GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.';
    /**
     * Unique identifier of the GitHub app
     */
    private int $id;
    private string $node_id;
    /**
     * Simple User
     * @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser::class)
     */
    private ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser $owner = null;
    /**
     * The name of the GitHub app
     */
    private string $name;
    private ?string $description = null;
    private string $external_url;
    private string $html_url;
    private string $created_at;
    private string $updated_at;
    /**
     * The set of permissions for the GitHub app
     */
    private array $permissions = array();
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
    /**
     * Unique identifier of the GitHub app
     */
    public function id() : int
    {
        return $this->id;
    }
    public function node_id() : string
    {
        return $this->node_id;
    }
    /**
     * Simple User
     */
    public function owner() : ?\ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Schema\NullableSimpleUser
    {
        return $this->owner;
    }
    /**
     * The name of the GitHub app
     */
    public function name() : string
    {
        return $this->name;
    }
    public function description() : ?string
    {
        return $this->description;
    }
    public function external_url() : string
    {
        return $this->external_url;
    }
    public function html_url() : string
    {
        return $this->html_url;
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
     * The set of permissions for the GitHub app
     */
    public function permissions() : array
    {
        return $this->permissions;
    }
    /**
     * The list of events for the GitHub app
     */
    public function events() : array
    {
        return $this->events;
    }
    /**
     * The number of installations associated with the GitHub app
     */
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
