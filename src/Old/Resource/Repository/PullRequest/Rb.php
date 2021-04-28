<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\PullRequest;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     user="User",
 *     repo="Repository"
 * )
 * @EmptyResource("Repository\PullRequest\EmptyRb")
 */
abstract class Rb extends AbstractResource implements RbInterface
{
    /**
     * @var string
     */
    protected $label;

    /**
     * @var string
     */
    protected $ref;

    /**
     * @var string
     */
    protected $sha;

    /**
     * @var User
     */
    protected $user;

    /**
     * @var Repository
     */
    protected $repo;

    /**
     * @return string
     */
    public function label(): string
    {
        return $this->label;
    }

    /**
     * @return string
     */
    public function ref(): string
    {
        return $this->ref;
    }

    /**
     * @return string
     */
    public function sha(): string
    {
        return $this->sha;
    }

    /**
     * @return User
     */
    public function user(): User
    {
        return $this->user;
    }

    /**
     * @return Repository
     */
    public function repo(): Repository
    {
        return $this->repo;
    }
}
