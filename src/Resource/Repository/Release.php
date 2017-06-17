<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeInterface;

/**
 * @Nested(
 *     author="User"
 * )
 * @EmptyResource("Repository\EmptyRelease")
 */
abstract class Release extends AbstractResource implements ReleaseInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $tag_name;

    /**
     * @var string
     */
    protected $target_commitish;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $body;

    /**
     * @var bool
     */
    protected $draft;

    /**
     * @var bool
     */
    protected $prerelease;

    /**
     * @var DateTimeInterface
     */
    protected $created_at;

    /**
     * @var DateTimeInterface
     */
    protected $updated_at;

    /**
     * @var User
     */
    protected $author;

    /**
     * @var array
     */
    protected $assets;

    /**
     * @return int
     */
    public function id(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function tagName(): string
    {
        return $this->tag_name;
    }

    /**
     * @return string
     */
    public function targetCommitish(): string
    {
        return $this->target_commitish;
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function body(): string
    {
        return $this->body;
    }

    /**
     * @return bool
     */
    public function draft(): bool
    {
        return $this->draft;
    }

    /**
     * @return bool
     */
    public function prerelease(): bool
    {
        return $this->prerelease;
    }

    /**
     * @return DateTimeInterface
     */
    public function createdAt(): DateTimeInterface
    {
        return $this->created_at;
    }

    /**
     * @return DateTimeInterface
     */
    public function updatedAt(): DateTimeInterface
    {
        return $this->updated_at;
    }

    /**
     * @return User
     */
    public function author(): User
    {
        return $this->author;
    }

    /**
     * @return array
     */
    public function assets(): array
    {
        return $this->assets;
    }
}
