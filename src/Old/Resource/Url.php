<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyUrl")
 */
abstract class Url extends AbstractResource implements UrlInterface
{
    protected string $url;

    protected string $html_url;

    public function url(): string
    {
        return $this->url;
    }

    public function htmlUrl(): string
    {
        return $this->html_url;
    }
}
