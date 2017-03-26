<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource;

use ApiClients\Foundation\Resource\ResourceInterface;

interface LicenseInterface extends ResourceInterface
{
    const HYDRATE_CLASS = 'License';

    /**
     * @return string
     */
    public function key() : string;

    /**
     * @return string
     */
    public function name() : string;

    /**
     * @return string
     */
    public function spdxId() : string;

    /**
     * @return string
     */
    public function url() : string;
}
