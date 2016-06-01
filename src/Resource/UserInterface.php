<?php

namespace WyriHaximus\Github\Resource;

use DateTimeInterface;
use WyriHaximus\ApiClient\Resource\ResourceInterface;

interface UserInterface extends ResourceInterface
{
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
    public function avatar() : string;
    /**
     * @return string
     */
    public function type() : string;
    /**
     * @return bool
     */
    public function isSiteAdmin() : bool;
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
    public function isHireable() : bool;
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
