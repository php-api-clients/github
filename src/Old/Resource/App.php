<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeInterface;

/**
 * @Nested(
 *     owner="User"
 * )
 * @EmptyResource("EmptyApp")
 */
abstract class App extends AbstractResource implements AppInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $slug;

    /**
     * @var User
     */
    protected $owner;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $external_url;

    /**
     * @var string
     */
    protected $html_url;

    /**
     * @var DateTimeInterface
     */
    protected $created_at;

    /**
     * @var DateTimeInterface
     */
    protected $updated_at;

    /**
     * @var array
     */
    protected $permissions;

    /**
     * @var array
     */
    protected $events;

    /**
     * @var int
     */
    protected $installations_count;

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
    public function slug(): string
    {
        return $this->slug;
    }

    /**
     * @return User
     */
    public function owner(): User
    {
        return $this->owner;
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
    public function description(): string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function externalUrl(): string
    {
        return $this->external_url;
    }

    /**
     * @return string
     */
    public function htmlUrl(): string
    {
        return $this->html_url;
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
     * @return array
     */
    public function permissions(): array
    {
        return $this->permissions;
    }

    /**
     * @return array
     */
    public function events(): array
    {
        return $this->events;
    }

    /**
     * @return int
     */
    public function installationsCount(): int
    {
        return $this->installations_count;
    }
}
