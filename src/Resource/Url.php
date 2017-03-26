<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Hydrator\Annotations\EmptyResource;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @EmptyResource("EmptyUrl")
 */
abstract class Url extends AbstractResource implements UrlInterface
{
    /**
     * @var string
     */
    protected $url;

    /**
     * @var string
     */
    protected $html_url;

    /**
     * @return string
     */
    public function url() : string
    {
        return $this->url;
    }

    /**
     * @return string
     */
    public function htmlUrl() : string
    {
        return $this->html_url;
    }
}
