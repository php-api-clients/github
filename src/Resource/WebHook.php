<?php declare(strict_types=1);

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
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var string
     */
    protected $test_url;

    /**
     * @var string
     */
    protected $ping_url;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $events;

    /**
     * @var bool
     */
    protected $active;

    /**
     * @var WebHook\Config
     */
    protected $config;

    /**
     * @var DateTimeInterface
     */
    protected $created_at;

    /**
     * @var DateTimeInterface
     */
    protected $updated_at;

    /**
     * @return int
     */
    public function id(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function url(): string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function testUrl(): string
    {
        return $this->test_url;
    }

    /**
     * @return string
     */
    public function pingUrl(): string
    {
        return $this->ping_url;
    }

    /**
     * @return string
     */
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

    /**
     * @return bool
     */
    public function active(): bool
    {
        return $this->active;
    }

    /**
     * @return WebHook\Config
     */
    public function config(): WebHook\Config
    {
        return $this->config;
    }

    /**
     * @return DateTimeInterface
     */
    public function createdAt(): DateTimeInterface
    {
        return $this->created_at;
    }

    /**
     * @return DateTimeInterface
     */
    public function updatedAt(): DateTimeInterface
    {
        return $this->updated_at;
    }
}
