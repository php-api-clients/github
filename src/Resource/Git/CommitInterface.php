<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Client\Github\Resource\Tree;
use ApiClients\Foundation\Resource\ResourceInterface;

interface CommitInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Git\\Commit';

    /**
     * @return string
     */
    public function url() : string;

    /**
     * @return User
     */
    public function author() : User;

    /**
     * @return User
     */
    public function comitter() : User;

    /**
     * @return string
     */
    public function message() : string;

    /**
     * @return Tree
     */
    public function tree() : Tree;

    /**
     * @return int
     */
    public function commentCount() : int;

    /**
     * @return string
     */
    public function protectionUrl() : string;
}
