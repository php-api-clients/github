<?php declare(strict_types=1);

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
    /**
     * @var string
     */
    protected $sha;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var User
     */
    protected $author;

    /**
     * @var User
     */
    protected $comitter;

    /**
     * @var string
     */
    protected $message;

    /**
     * @var Tree
     */
    protected $tree;

    /**
     * @var int
     */
    protected $comment_count;

    /**
     * @var string
     */
    protected $protection_url;

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
    public function url(): string
    {
        return $this->url;
    }

    /**
     * @return User
     */
    public function author(): User
    {
        return $this->author;
    }

    /**
     * @return User
     */
    public function comitter(): User
    {
        return $this->comitter;
    }

    /**
     * @return string
     */
    public function message(): string
    {
        return $this->message;
    }

    /**
     * @return TreeInterface
     */
    public function tree(): TreeInterface
    {
        return $this->tree;
    }

    /**
     * @return int
     */
    public function commentCount(): int
    {
        return $this->comment_count;
    }

    /**
     * @return string
     */
    public function protectionUrl(): string
    {
        return $this->protection_url;
    }
}
