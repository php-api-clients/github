<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface OrganizationInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Organization';

    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return string
     */
    public function login(): string;

    /**
     * @return string
     */
    public function url(): string;

    /**
     * @return string
     */
    public function reposUrl(): string;

    /**
     * @return string
     */
    public function eventsUrl(): string;

    /**
     * @return string
     */
    public function hooksUrl(): string;

    /**
     * @return string
     */
    public function issuesUrl(): string;

    /**
     * @return string
     */
    public function membersUrl(): string;

    /**
     * @return string
     */
    public function publicMembersUrl(): string;

    /**
     * @return string
     */
    public function avatarUrl(): string;

    /**
     * @return string
     */
    public function description(): string;
}
