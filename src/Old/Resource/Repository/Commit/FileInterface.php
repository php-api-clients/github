<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Commit;

use ApiClients\Foundation\Resource\ResourceInterface;

interface FileInterface extends ResourceInterface
{
    public const HYDRATE_CLASS = 'Repository\\Commit\\File';

    public function filename(): string;

    public function additions(): int;

    public function deletions(): int;

    public function changes(): int;

    public function status(): string;

    public function rawUrl(): string;

    public function blobUrl(): string;

    public function patch(): string;
}
