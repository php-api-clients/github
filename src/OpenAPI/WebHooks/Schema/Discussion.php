<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\WebHooks\Schema;

final class Discussion
{
    public const SCHEMA_TITLE       = 'Discussion';
    public const SCHEMA_DESCRIPTION = '';
    private string $repository_url;
    private array $category = [];
    private $answer_html_url;
    private $answer_chosen_at;
    private $answer_chosen_by;
    private string $html_url;
    private int $id;
    private string $node_id;
    private int $number;
    private string $title;
    /** @\WyriHaximus\Hydrator\Attribute\Hydrate(\ApiClients\Client\Github\OpenAPI\WebHooks\Schema\User::class) */
    private User $user;
    private string $state;
    private bool $locked;
    private int $comments;
    private string $created_at;
    private string $updated_at;
    /**
     * How the author is associated with the repository.
     */
    private string $author_association;
    private $active_lock_reason;
    private string $body;

    public function repository_url(): string
    {
        return $this->repository_url;
    }

    public function category(): array
    {
        return $this->category;
    }

    public function answer_html_url()
    {
        return $this->answer_html_url;
    }

    public function answer_chosen_at()
    {
        return $this->answer_chosen_at;
    }

    public function answer_chosen_by()
    {
        return $this->answer_chosen_by;
    }

    public function html_url(): string
    {
        return $this->html_url;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function node_id(): string
    {
        return $this->node_id;
    }

    public function number(): int
    {
        return $this->number;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function user(): User
    {
        return $this->user;
    }

    public function state(): string
    {
        return $this->state;
    }

    public function locked(): bool
    {
        return $this->locked;
    }

    public function comments(): int
    {
        return $this->comments;
    }

    public function created_at(): string
    {
        return $this->created_at;
    }

    public function updated_at(): string
    {
        return $this->updated_at;
    }

    /**
     * How the author is associated with the repository.
     */
    public function author_association(): string
    {
        return $this->author_association;
    }

    public function active_lock_reason()
    {
        return $this->active_lock_reason;
    }

    public function body(): string
    {
        return $this->body;
    }
}
