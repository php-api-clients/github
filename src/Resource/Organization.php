<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyOrganization")
 */
abstract class Organization extends AbstractResource implements OrganizationInterface
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $login;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var string
     */
    protected $repos_url;

    /**
     * @var string
     */
    protected $events_url;

    /**
     * @var string
     */
    protected $hooks_url;

    /**
     * @var string
     */
    protected $issues_url;

    /**
     * @var string
     */
    protected $members_url;

    /**
     * @var string
     */
    protected $public_members_url;

    /**
     * @var string
     */
    protected $avatar_url;

    /**
     * @var string
     */
    protected $description;

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
    public function login() : string
    {
        return $this->login;
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
    public function reposUrl() : string
    {
        return $this->repos_url;
    }

    /**
     * @return string
     */
    public function eventsUrl() : string
    {
        return $this->events_url;
    }

    /**
     * @return string
     */
    public function hooksUrl() : string
    {
        return $this->hooks_url;
    }

    /**
     * @return string
     */
    public function issuesUrl() : string
    {
        return $this->issues_url;
    }

    /**
     * @return string
     */
    public function membersUrl() : string
    {
        return $this->members_url;
    }

    /**
     * @return string
     */
    public function publicMembersUrl() : string
    {
        return $this->public_members_url;
    }

    /**
     * @return string
     */
    public function avatarUrl() : string
    {
        return $this->avatar_url;
    }

    /**
     * @return string
     */
    public function description() : string
    {
        return $this->description;
    }
}
