<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyUser implements UserInterface, EmptyResourceInterface
{
    /**
     * @return int
     */
    public function id() : int
    {
        return null;
    }

    /**
     * @return string
     */
    public function login() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function avatarUrl() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function type() : string
    {
        return null;
    }

    /**
     * @return bool
     */
    public function siteAdmin() : bool
    {
        return null;
    }

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
    public function company() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function blog() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function location() : string
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
     * @return bool
     */
    public function hireable() : bool
    {
        return null;
    }

    /**
     * @return string
     */
    public function bio() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function publicRepos() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function publicGists() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function followers() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function following() : string
    {
        return null;
    }

    /**
     * @return DateTimeInterface
     */
    public function createdAt() : DateTimeInterface
    {
        return null;
    }

    /**
     * @return DateTimeInterface
     */
    public function updatedAt() : DateTimeInterface
    {
        return null;
    }

    public function repository(string $repository)
    {
        return null;
    }
}
