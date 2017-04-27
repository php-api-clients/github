<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository;

use ApiClients\Client\Github\Resource\Tree;
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
    /**
     * @var string
     */
    protected $name;

    /**
     * @var TreeInterface
     */
    protected $commit;

    /**
     * @var bool
     */
    protected $protected;

    /**
     * @var string
     */
    protected $protection_url;

    /**
     * @return string
     */
    public function name() : string
    {
        return $this->name;
    }

    /**
     * @return TreeInterface
     */
    public function commit() : TreeInterface
    {
        return $this->commit;
    }

    /**
     * @return bool
     */
    public function protected() : bool
    {
        return $this->protected;
    }

    /**
     * @return string
     */
    public function protectionUrl() : string
    {
        return $this->protection_url;
    }
}
