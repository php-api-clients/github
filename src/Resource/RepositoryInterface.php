<?php

namespace WyriHaximus\Github\Resource;

use DateTimeInterface;
use WyriHaximus\ApiClient\Resource\ResourceInterface;
interface RepositoryInterface extends ResourceInterface
{
    /**
     * @return int
     */
    public function id() : int;
    /**
     * @return string
     */
    public function name() : string;
    /**
     * @return string
     */
    public function fullName() : string;
    /**
     * @return string
     */
    public function description() : string;
    /**
     * @return bool
     */
    public function private() : bool;
    /**
     * @return bool
     */
    public function fork() : bool;
    /**
     * @return string
     */
    public function homepage() : string;
    /**
     * @return string
     */
    public function language() : string;
    /**
     * @return int
     */
    public function forksCount() : int;
    /**
     * @return int
     */
    public function stargazersCount() : int;
    /**
     * @return int
     */
    public function watchersCount() : int;
    /**
     * @return int
     */
    public function size() : int;
    /**
     * @return string
     */
    public function defaultBranch() : string;
    /**
     * @return int
     */
    public function openIssuesCount() : int;
    /**
     * @return bool
     */
    public function hasIssues() : bool;
    /**
     * @return bool
     */
    public function hasWiki() : bool;
    /**
     * @return bool
     */
    public function hasPages() : bool;
    /**
     * @return bool
     */
    public function hasDownloads() : bool;
    /**
     * @return DateTimeInterface
     */
    public function pushedAt() : DateTimeInterface;
    /**
     * @return DateTimeInterface
     */
    public function createdAt() : DateTimeInterface;
    /**
     * @return DateTimeInterface
     */
    public function updatedAt() : DateTimeInterface;
}
