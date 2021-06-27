<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Client\Github\Resource\TreeInterface;
use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     author="User",
 *     comitter="User",
 *     tree="Tree"
 * )
 * @EmptyResource("Git\EmptyCommit")
 */
abstract class Commit extends AbstractResource implements CommitInterface
{
    protected string $sha;

    protected string $url;

    protected User $author;

    protected User $comitter;

    protected string $message;

    protected Tree $tree;

    protected int $comment_count;

    protected string $protection_url;

    public function sha(): string
    {
        return $this->sha;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function author(): User
    {
        return $this->author;
    }

    public function comitter(): User
    {
        return $this->comitter;
    }

    public function message(): string
    {
        return $this->message;
    }

    public function tree(): TreeInterface
    {
        return $this->tree;
    }

    public function commentCount(): int
    {
        return $this->comment_count;
    }

    public function protectionUrl(): string
    {
        return $this->protection_url;
    }
}
