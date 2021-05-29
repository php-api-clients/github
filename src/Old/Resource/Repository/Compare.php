<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Hydrator\Annotation\Collection;
use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Collection(
 *     commits="Repository\Commit",
 *     files="Repository\Commit\File"
 * )
 * @Nested(
 *     base_commit="Repository\Commit",
 *     merge_base_commit="Repository\Commit"
 * )
 * @EmptyResource("Repository\EmptyCompare")
 */
abstract class Compare extends AbstractResource implements CompareInterface
{
    protected string $url;

    protected Repository\Commit $base_commit;

    protected Repository\Commit $merge_base_commit;

    protected string $status;

    protected int $ahead_by;

    protected int $behind_by;

    protected int $total_commits;

    protected Repository\Commit $commits;

    /** @var Commit\File[] */
    protected array $files;

    public function url(): string
    {
        return $this->url;
    }

    public function baseCommit(): Repository\Commit
    {
        return $this->base_commit;
    }

    public function mergeBaseCommit(): Repository\Commit
    {
        return $this->merge_base_commit;
    }

    public function status(): string
    {
        return $this->status;
    }

    public function aheadBy(): int
    {
        return $this->ahead_by;
    }

    public function behindBy(): int
    {
        return $this->behind_by;
    }

    public function totalCommits(): int
    {
        return $this->total_commits;
    }

    public function commits(): Repository\Commit
    {
        return $this->commits;
    }

    /**
     * @return Commit\File[]
     */
    public function files(): array
    {
        return $this->files;
    }
}
