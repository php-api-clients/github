<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Milestone
{
    public const SCHEMA_TITLE       = 'Milestone';
    public const SCHEMA_DESCRIPTION = 'A collection of related issues and pull requests.';
    private string $url;
    private string $html_url;
    private string $labels_url;
    private int $id;
    private string $node_id;
    /**
     * The number of the milestone.
     */
    private int $number;
    /**
     * The title of the milestone.
     */
    private string $title;
    private $description;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private User $creator;
    private int $open_issues;
    private int $closed_issues;
    /**
     * The state of the milestone.
     */
    private string $state;
    private string $created_at;
    private string $updated_at;
    private $due_on;
    private $closed_at;

    public function url(): string
    {
        return $this->url;
    }

    public function html_url(): string
    {
        return $this->html_url;
    }

    public function labels_url(): string
    {
        return $this->labels_url;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function node_id(): string
    {
        return $this->node_id;
    }

    /**
     * The number of the milestone.
     */
    public function number(): int
    {
        return $this->number;
    }

    /**
     * The title of the milestone.
     */
    public function title(): string
    {
        return $this->title;
    }

    public function description()
    {
        return $this->description;
    }

    public function creator(): User
    {
        return $this->creator;
    }

    public function open_issues(): int
    {
        return $this->open_issues;
    }

    public function closed_issues(): int
    {
        return $this->closed_issues;
    }

    /**
     * The state of the milestone.
     */
    public function state(): string
    {
        return $this->state;
    }

    public function created_at(): string
    {
        return $this->created_at;
    }

    public function updated_at(): string
    {
        return $this->updated_at;
    }

    public function due_on()
    {
        return $this->due_on;
    }

    public function closed_at()
    {
        return $this->closed_at;
    }
}
