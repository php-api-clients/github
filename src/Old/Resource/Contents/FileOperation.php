<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Contents;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     content="Contents\File",
 *     commit="Git\Commit"
 * )
 * @EmptyResource("Contents\EmptyFileOperation")
 */
abstract class FileOperation extends AbstractResource implements FileOperationInterface
{
    protected Contents\File $content;

    protected Git\Commit $commit;

    public function content(): Contents\File
    {
        return $this->content;
    }

    public function commit(): Git\Commit
    {
        return $this->commit;
    }
}
