<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Resource\ResourceInterface;

interface CompareInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Repository\\Compare';

    /**
     * @return string
     */
    public function url(): string;

    /**
     * @return Repository\Commit
     */
    public function baseCommit(): Repository\Commit;

    /**
     * @return Repository\Commit
     */
    public function mergeBaseCommit(): Repository\Commit;

    /**
     * @return string
     */
    public function status(): string;

    /**
     * @return int
     */
    public function aheadBy(): int;

    /**
     * @return int
     */
    public function behindBy(): int;

    /**
     * @return int
     */
    public function totalCommits(): int;

    /**
     * @return Repository\Commit
     */
    public function commits(): Repository\Commit;

    /**
     * @return Repository\Commit\File
     */
    public function files(): Repository\Commit\File;
}
