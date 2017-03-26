<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\EmptyResourceInterface;
use DateTimeInterface;

abstract class EmptyRepository implements RepositoryInterface, EmptyResourceInterface
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
    public function name() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function fullName() : string
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
    public function description() : string
    {
        return null;
    }

    /**
     * @return bool
     */
    public function private() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function fork() : bool
    {
        return null;
    }

    /**
     * @return string
     */
    public function homepage() : string
    {
        return null;
    }

    /**
     * @return string
     */
    public function language() : string
    {
        return null;
    }

    /**
     * @return int
     */
    public function forksCount() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function stargazersCount() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function watchersCount() : int
    {
        return null;
    }

    /**
     * @return int
     */
    public function size() : int
    {
        return null;
    }

    /**
     * @return string
     */
    public function defaultBranch() : string
    {
        return null;
    }

    /**
     * @return int
     */
    public function openIssuesCount() : int
    {
        return null;
    }

    /**
     * @return bool
     */
    public function hasIssues() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function hasWiki() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function hasPages() : bool
    {
        return null;
    }

    /**
     * @return bool
     */
    public function hasDownloads() : bool
    {
        return null;
    }

    /**
     * @return DateTimeInterface
     */
    public function pushedAt() : DateTimeInterface
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

    /**
     * @return array
     */
    public function permissions() : array
    {
        return null;
    }

    /**
     * @return string
     */
    public function htmlUrl() : string
    {
        return null;
    }

    /**
     * @return User
     */
    public function owner() : User
    {
        return null;
    }

    /**
     * @return License
     */
    public function license() : License
    {
        return null;
    }

    /**
     * @return array
     */
    public function topics() : array
    {
        return null;
    }
}
