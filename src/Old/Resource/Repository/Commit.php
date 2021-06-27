<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Client\Github\Resource\Git\CommitInterface as GitCommitInterface;
use ApiClients\Client\Github\Resource\TreeInterface;
use ApiClients\Client\Github\Resource\UserInterface;
use ApiClients\Foundation\Hydrator\Annotation\Collection;
use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Collection(
 *     parents="Tree",
 *     files="Repository\Commit\File"
 * )
 * @Nested(
 *     commit="Git\Commit",
 *     author="User",
 *     comitter="User"
 * )
 * @EmptyResource("Repository\EmptyCommit")
 */
abstract class Commit extends AbstractResource implements CommitInterface
{
    protected string $url;

    protected string $sha;

    protected string $html_url;

    protected GitCommitInterface $commit;

    protected UserInterface $author;

    protected UserInterface $comitter;

    protected TreeInterface $parents;

    /** @var Commit\File[] */
    protected array $files;

    public function url(): string
    {
        return $this->url;
    }

    public function sha(): string
    {
        return $this->sha;
    }

    public function htmlUrl(): string
    {
        return $this->html_url;
    }

    public function commit(): GitCommitInterface
    {
        return $this->commit;
    }

    public function author(): UserInterface
    {
        return $this->author;
    }

    public function comitter(): UserInterface
    {
        return $this->comitter;
    }

    /**
     * @return TreeInterface[]
     */
    public function parents(): array
    {
        return $this->parents;
    }

    /**
     * @return Commit\File[]
     */
    public function files(): array
    {
        return $this->files;
    }
}
