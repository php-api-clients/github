<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Contents;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("Contents\EmptyLinks")
 */
abstract class Links extends AbstractResource implements LinksInterface
{
    /**
     * @var string
     */
    protected $git;

    /**
     * @var string
     */
    protected $self;

    /**
     * @var string
     */
    protected $html;

    /**
     * @return string
     */
    public function git() : string
    {
        return $this->git;
    }

    /**
     * @return string
     */
    public function self() : string
    {
        return $this->self;
    }

    /**
     * @return string
     */
    public function html() : string
    {
        return $this->html;
    }
}
