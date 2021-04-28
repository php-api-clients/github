<?php declare(strict_types=1);

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
    /**
     * @var string
     */
    protected $name;

    /**
     * @var Tree
     */
    protected $commit;

    /**
     * @var string
     */
    protected $zipball_url;

    /**
     * @var string
     */
    protected $tarball_url;

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return Tree
     */
    public function commit(): Tree
    {
        return $this->commit;
    }

    /**
     * @return string
     */
    public function zipballUrl(): string
    {
        return $this->zipball_url;
    }

    /**
     * @return string
     */
    public function tarballUrl(): string
    {
        return $this->tarball_url;
    }
}
