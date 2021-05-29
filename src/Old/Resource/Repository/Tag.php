<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     commit="Tree"
 * )
 * @EmptyResource("Repository\EmptyTag")
 */
abstract class Tag extends AbstractResource implements TagInterface
{
    protected string $name;

    protected Tree $commit;

    protected string $zipball_url;

    protected string $tarball_url;

    public function name(): string
    {
        return $this->name;
    }

    public function commit(): Tree
    {
        return $this->commit;
    }

    public function zipballUrl(): string
    {
        return $this->zipball_url;
    }

    public function tarballUrl(): string
    {
        return $this->tarball_url;
    }
}
