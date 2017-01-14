<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface UserInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'User';

    /**
     * @return int
     */
    public function id() : int;

    /**
     * @return string
     */
    public function login() : string;

    /**
     * @return string
     */
    public function avatarUrl() : string;

    /**
     * @return string
     */
    public function type() : string;

    /**
     * @return bool
     */
    public function siteAdmin() : bool;

    /**
     * @return string
     */
    public function name() : string;

    /**
     * @return string
     */
    public function company() : string;

    /**
     * @return string
     */
    public function blog() : string;

    /**
     * @return string
     */
    public function location() : string;

    /**
     * @return string
     */
    public function email() : string;

    /**
     * @return bool
     */
    public function hireable() : bool;

    /**
     * @return string
     */
    public function bio() : string;

    /**
     * @return string
     */
    public function publicRepos() : string;

    /**
     * @return string
     */
    public function publicGists() : string;

    /**
     * @return string
     */
    public function followers() : string;

    /**
     * @return string
     */
    public function following() : string;

    /**
     * @return DateTimeInterface
     */
    public function createdAt() : DateTimeInterface;

    /**
     * @return DateTimeInterface
     */
    public function updatedAt() : DateTimeInterface;
}
