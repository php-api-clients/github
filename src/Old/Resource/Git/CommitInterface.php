<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Git;

use ApiClients\Client\Github\Resource\TreeInterface;
use ApiClients\Foundation\Resource\ResourceInterface;

interface CommitInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Git\\Commit';

    public function sha(): string;

    public function url(): string;

    public function author(): User;

    public function comitter(): User;

    public function message(): string;

    public function tree(): TreeInterface;

    public function commentCount(): int;

    public function protectionUrl(): string;
}
