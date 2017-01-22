<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;

abstract class EmptyOrganization implements OrganizationInterface, EmptyResourceInterface
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
    public function url() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function reposUrl() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function eventsUrl() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function hooksUrl() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function issuesUrl() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function membersUrl() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function publicMembersUrl() : string
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
    public function description() : string
    {
        return null;
    }
}
