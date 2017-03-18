<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Commit;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotations\Nested;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeInterface;

/**
 * @Nested(
 *     creator="User"
 * )
 * @EmptyResource("Repository\Commit\EmptyStatus")
 */
abstract class Status extends AbstractResource implements StatusInterface
{
    /**
     * @var DateTimeInterface
     */
    protected $created_at;

    /**
     * @var DateTimeInterface
     */
    protected $updated_at;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var string
     */
    protected $target_url;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var string
     */
    protected $context;

    /**
     * @var User
     */
    protected $creator;

    /**
     * @return DateTimeInterface
     */
    public function createdAt() : DateTimeInterface
    {
        return $this->created_at;
    }

    /**
     * @return DateTimeInterface
     */
    public function updatedAt() : DateTimeInterface
    {
        return $this->updated_at;
    }

    /**
     * @return string
     */
    public function state() : string
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function targetUrl() : string
    {
        return $this->target_url;
    }

    /**
     * @return string
     */
    public function description() : string
    {
        return $this->description;
    }

    /**
     * @return int
     */
    public function id() : int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function url() : string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function context() : string
    {
        return $this->context;
    }

    /**
     * @return User
     */
    public function creator() : User
    {
        return $this->creator;
    }
}
