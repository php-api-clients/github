<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeInterface;

/**
 * @Nested(
 *     config="WebHook\Config"
 * )
 * @EmptyResource("EmptyWebHook")
 */
abstract class WebHook extends AbstractResource implements WebHookInterface
{
    protected int $id;

    protected string $url;

    protected string $test_url;

    protected string $ping_url;

    protected string $name;

    /** @var array */
    protected array $events;

    protected bool $active;

    protected WebHook\Config $config;

    protected DateTimeInterface $created_at;

    protected DateTimeInterface $updated_at;

    public function id(): int
    {
        return $this->id;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function testUrl(): string
    {
        return $this->test_url;
    }

    public function pingUrl(): string
    {
        return $this->ping_url;
    }

    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function events(): array
    {
        return $this->events;
    }

    public function active(): bool
    {
        return $this->active;
    }

    public function config(): WebHook\Config
    {
        return $this->config;
    }

    public function createdAt(): DateTimeInterface
    {
        return $this->created_at;
    }

    public function updatedAt(): DateTimeInterface
    {
        return $this->updated_at;
    }
}
