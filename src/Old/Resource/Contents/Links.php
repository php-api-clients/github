<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Contents;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("Contents\EmptyLinks")
 */
abstract class Links extends AbstractResource implements LinksInterface
{
    protected string $git;

    protected string $self;

    protected string $html;

    public function git(): string
    {
        return $this->git;
    }

    public function self(): string
    {
        return $this->self;
    }

    public function html(): string
    {
        return $this->html;
    }
}
