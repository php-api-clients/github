<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Client\Github\Resource\Git\CommitInterface as GitCommitInterface;
use ApiClients\Client\Github\Resource\TreeInterface;
use ApiClients\Client\Github\Resource\UserInterface;
use ApiClients\Foundation\Hydrator\Annotation\Collection;
use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;
use Rx\Observable;
use function ApiClients\Tools\Rx\observableFromArray;

/**
 * @Collection(
 *     parents="Tree"
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
    /**
     * @var string
     */
    protected $url;

    /**
     * @var string
     */
    protected $sha;

    /**
     * @var string
     */
    protected $html_url;

    /**
     * @var GitCommitInterface
     */
    protected $commit;

    /**
     * @var UserInterface
     */
    protected $author;

    /**
     * @var UserInterface
     */
    protected $comitter;

    /**
     * @var TreeInterface
     */
    protected $parents;

    /**
     * @return string
     */
    public function url(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function sha(): string
    {
        return $this->sha;
    }

    /**
     * @return string
     */
    public function htmlUrl(): string
    {
        return $this->html_url;
    }

    /**
     * @return GitCommitInterface
     */
    public function commit(): GitCommitInterface
    {
        return $this->commit;
    }

    /**
     * @return UserInterface
     */
    public function author(): UserInterface
    {
        return $this->author;
    }

    /**
     * @return UserInterface
     */
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
}
