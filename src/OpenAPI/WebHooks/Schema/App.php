<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class App
{
    public const SCHEMA_TITLE       = 'App';
    public const SCHEMA_DESCRIPTION = 'GitHub apps are a new way to extend GitHub. They can be installed directly on organizations and user accounts and granted access to specific repositories. They come with granular permissions and built-in webhooks. GitHub apps are first class actors within GitHub.';
    /**
     * Unique identifier of the GitHub app
     */
    private ?int $id = null;
    /**
     * The slug name of the GitHub app
     */
    private ?string $slug    = null;
    private ?string $node_id = null;
    private array $owner     = [];
    /**
     * The name of the GitHub app
     */
    private ?string $name = null;
    private $description;
    private ?string $external_url = null;
    private ?string $html_url     = null;
    private ?string $created_at   = null;
    private ?string $updated_at   = null;
    /**
     * The set of permissions for the GitHub app
     */
    private array $permissions = [];
    /**
     * The list of events for the GitHub app
     */
    private array $events = [];

    public function id(): ?int
    {
        return $this->id;
    }

    public function slug(): ?string
    {
        return $this->slug;
    }

    public function node_id(): ?string
    {
        return $this->node_id;
    }

    public function owner(): array
    {
        return $this->owner;
    }

    public function name(): ?string
    {
        return $this->name;
    }

    public function description()
    {
        return $this->description;
    }

    public function external_url(): ?string
    {
        return $this->external_url;
    }

    public function html_url(): ?string
    {
        return $this->html_url;
    }

    public function created_at(): ?string
    {
        return $this->created_at;
    }

    public function updated_at(): ?string
    {
        return $this->updated_at;
    }

    public function permissions(): array
    {
        return $this->permissions;
    }

    public function events(): array
    {
        return $this->events;
    }
}
