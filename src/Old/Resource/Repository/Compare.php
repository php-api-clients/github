<?php declare(strict_types=1);

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
    /**
     * @var string
     */
    protected $url;

    /**
     * @var Repository\Commit
     */
    protected $base_commit;

    /**
     * @var Repository\Commit
     */
    protected $merge_base_commit;

    /**
     * @var string
     */
    protected $status;

    /**
     * @var int
     */
    protected $ahead_by;

    /**
     * @var int
     */
    protected $behind_by;

    /**
     * @var int
     */
    protected $total_commits;

    /**
     * @var Repository\Commit
     */
    protected $commits;

    /**
     * @var Commit\File[]
     */
    protected $files;

    /**
     * @return string
     */
    public function url(): string
    {
        return $this->url;
    }

    /**
     * @return Repository\Commit
     */
    public function baseCommit(): Repository\Commit
    {
        return $this->base_commit;
    }

    /**
     * @return Repository\Commit
     */
    public function mergeBaseCommit(): Repository\Commit
    {
        return $this->merge_base_commit;
    }

    /**
     * @return string
     */
    public function status(): string
    {
        return $this->status;
    }

    /**
     * @return int
     */
    public function aheadBy(): int
    {
        return $this->ahead_by;
    }

    /**
     * @return int
     */
    public function behindBy(): int
    {
        return $this->behind_by;
    }

    /**
     * @return int
     */
    public function totalCommits(): int
    {
        return $this->total_commits;
    }

    /**
     * @return Repository\Commit
     */
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
