<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyUser implements UserInterface, EmptyResourceInterface
{
    /**
     * @return string
     */
    public function name() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function email() : string
    {
        return null;
    }

    /**
     * @return DateTimeInterface
     */
    public function date() : DateTimeInterface
    {
        return null;
    }
}
