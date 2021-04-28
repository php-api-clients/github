<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Release;

use ApiClients\Foundation\Resource\ResourceInterface;
use DateTimeInterface;

interface AssetInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Repository\\Release\\Asset';

    /**
     * @return string
     */
    public function url(): string;

    /**
     * @return string
     */
    public function browserDownloadUrl(): string;

    /**
     * @return int
     */
    public function id(): int;

    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return string
     */
    public function label(): string;

    /**
     * @return string
     */
    public function state(): string;

    /**
     * @return string
     */
    public function contentType(): string;

    /**
     * @return int
     */
    public function size(): int;

    /**
     * @return int
     */
    public function downloadCount(): int;

    /**
     * @return DateTimeInterface
     */
    public function createdAt(): DateTimeInterface;

    /**
     * @return DateTimeInterface
     */
    public function updatedAt(): DateTimeInterface;

    /**
     * @return User
     */
    public function uploader(): User;
}
