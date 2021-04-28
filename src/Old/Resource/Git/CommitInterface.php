<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Client\Github\Resource\TreeInterface;
use ApiClients\Foundation\Resource\ResourceInterface;

interface CommitInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Git\\Commit';

    /**
     * @return string
     */
    public function sha(): string;

    /**
     * @return string
     */
    public function url(): string;

    /**
     * @return User
     */
    public function author(): User;

    /**
     * @return User
     */
    public function comitter(): User;

    /**
     * @return string
     */
    public function message(): string;

    /**
     * @return TreeInterface
     */
    public function tree(): TreeInterface;

    /**
     * @return int
     */
    public function commentCount(): int;

    /**
     * @return string
     */
    public function protectionUrl(): string;
}
