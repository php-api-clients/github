<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\Release;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;
use DateTimeInterface;

/**
 * @Nested(
 *     uploader="User"
 * )
 * @EmptyResource("Repository\Release\EmptyAsset")
 */
abstract class Asset extends AbstractResource implements AssetInterface
{
    /**
     * @var string
     */
    protected $url;

    /**
     * @var string
     */
    protected $browser_download_url;

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $label;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var string
     */
    protected $content_type;

    /**
     * @var int
     */
    protected $size;

    /**
     * @var int
     */
    protected $download_count;

    /**
     * @var DateTimeInterface
     */
    protected $created_at;

    /**
     * @var DateTimeInterface
     */
    protected $updated_at;

    /**
     * @var User
     */
    protected $uploader;

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
    public function browserDownloadUrl(): string
    {
        return $this->browser_download_url;
    }

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
    public function name(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function label(): string
    {
        return $this->label;
    }

    /**
     * @return string
     */
    public function state(): string
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function contentType(): string
    {
        return $this->content_type;
    }

    /**
     * @return int
     */
    public function size(): int
    {
        return $this->size;
    }

    /**
     * @return int
     */
    public function downloadCount(): int
    {
        return $this->download_count;
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

    /**
     * @return User
     */
    public function uploader(): User
    {
        return $this->uploader;
    }
}
