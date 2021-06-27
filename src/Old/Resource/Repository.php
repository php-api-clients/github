<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeInterface;

/**
 * @Nested(
 *     owner="User",
 *     license="License"
 * )
 * @EmptyResource("EmptyRepository")
 */
abstract class Repository extends AbstractResource implements RepositoryInterface
{
    protected int $id;

    protected string $name;

    protected string $full_name;

    protected string $url;

    protected string $description;

    protected bool $private;

    protected bool $fork;

    protected string $homepage;

    protected string $language;

    protected int $forks_count;

    protected int $stargazers_count;

    protected int $watchers_count;

    protected int $size;

    protected string $default_branch;

    protected int $open_issues_count;

    protected bool $has_issues;

    protected bool $has_wiki;

    protected bool $has_pages;

    protected bool $has_downloads;

    protected DateTimeInterface $pushed_at;

    protected DateTimeInterface $created_at;

    protected DateTimeInterface $updated_at;

    /** @var array */
    protected array $permissions;

    protected string $html_url;

    protected User $owner;

    protected License $license;

    /** @var array */
    protected array $topics;

    public function id(): int
    {
        return $this->id;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function fullName(): string
    {
        return $this->full_name;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function description(): string
    {
        return (string) $this->description;
    }

    public function private(): bool
    {
        return $this->private;
    }

    public function fork(): bool
    {
        return $this->fork;
    }

    public function homepage(): string
    {
        return $this->homepage;
    }

    public function language(): string
    {
        return $this->language;
    }

    public function forksCount(): int
    {
        return $this->forks_count;
    }

    public function stargazersCount(): int
    {
        return $this->stargazers_count;
    }

    public function watchersCount(): int
    {
        return $this->watchers_count;
    }

    public function size(): int
    {
        return $this->size;
    }

    public function defaultBranch(): string
    {
        return $this->default_branch;
    }

    public function openIssuesCount(): int
    {
        return $this->open_issues_count;
    }

    public function hasIssues(): bool
    {
        return $this->has_issues;
    }

    public function hasWiki(): bool
    {
        return $this->has_wiki;
    }

    public function hasPages(): bool
    {
        return $this->has_pages;
    }

    public function hasDownloads(): bool
    {
        return $this->has_downloads;
    }

    public function pushedAt(): DateTimeInterface
    {
        return $this->pushed_at;
    }

    public function createdAt(): DateTimeInterface
    {
        return $this->created_at;
    }

    public function updatedAt(): DateTimeInterface
    {
        return $this->updated_at;
    }

    /**
     * @return array
     */
    public function permissions(): array
    {
        return $this->permissions;
    }

    public function htmlUrl(): string
    {
        return $this->html_url;
    }

    public function owner(): User
    {
        return $this->owner;
    }

    public function license(): License
    {
        return $this->license;
    }

    /**
     * @return array
     */
    public function topics(): array
    {
        return $this->topics;
    }
}
