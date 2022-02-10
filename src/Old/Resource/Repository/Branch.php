<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Client\Github\Resource\TreeInterface;
use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     commit="Tree"
 * )
 * @EmptyResource("Repository\EmptyBranch")
 */
abstract class Branch extends AbstractResource implements BranchInterface
{
    protected string $name;

    protected TreeInterface $commit;

    protected bool $protected;

    protected string $protection_url;

    public function name(): string
    {
        return $this->name;
    }

    public function commit(): TreeInterface
    {
        return $this->commit;
    }

    public function protected(): bool
    {
        return $this->protected;
    }

    public function protectionUrl(): string
    {
        return $this->protection_url;
    }
}
