<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeInterface;

/**
 * @EmptyResource("Git\EmptyUser")
 */
abstract class User extends AbstractResource implements UserInterface
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var DateTimeInterface
     */
    protected $date;

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
    public function email(): string
    {
        return $this->email;
    }

    /**
     * @return DateTimeInterface
     */
    public function date(): DateTimeInterface
    {
        return $this->date;
    }
}
