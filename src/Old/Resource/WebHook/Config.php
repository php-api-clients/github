<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\WebHook;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("WebHook\EmptyConfig")
 */
abstract class Config extends AbstractResource implements ConfigInterface
{
    protected string $url;

    protected string $content_type;

    public function url(): string
    {
        return $this->url;
    }

    public function contentType(): string
    {
        return $this->content_type;
    }
}
