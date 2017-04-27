<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyLicense")
 */
abstract class License extends AbstractResource implements LicenseInterface
{
    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $spdx_id;

    /**
     * @var string
     */
    protected $url;

    /**
     * @return string
     */
    public function key() : string
    {
        return $this->key;
    }

    /**
     * @return string
     */
    public function name() : string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function spdxId() : string
    {
        return $this->spdx_id;
    }

    /**
     * @return string
     */
    public function url() : string
    {
        return $this->url;
    }
}
