<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Contents;

use ApiClients\Foundation\Resource\ResourceInterface;

interface FileOperationInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'Contents\\FileOperation';

    /**
     * @return Contents\File
     */
    public function content(): Contents\File;

    /**
     * @return Git\Commit
     */
    public function commit(): Git\Commit;
}
