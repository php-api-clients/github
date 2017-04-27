<?php declare(strict_types=1);

namespace ApiClients\Client\Github\Resource\Repository\CommunityHealth;

use ApiClients\Foundation\Hydrator\Annotation\EmptyResource;
use ApiClients\Foundation\Hydrator\Annotation\Nested;
use ApiClients\Foundation\Resource\AbstractResource;

/**
 * @Nested(
 *     code_of_conduct="CodeOfConduct",
 *     contributing="Url",
 *     license="License",
 *     readme="Url"
 * )
 * @EmptyResource("Repository\CommunityHealth\EmptyFiles")
 */
abstract class Files extends AbstractResource implements FilesInterface
{
    /**
     * @var CodeOfConduct
     */
    protected $code_of_conduct;

    /**
     * @var Url
     */
    protected $contributing;

    /**
     * @var License
     */
    protected $license;

    /**
     * @var Url
     */
    protected $readme;

    /**
     * @return CodeOfConduct
     */
    public function codeOfConduct() : CodeOfConduct
    {
        return $this->code_of_conduct;
    }

    /**
     * @return Url
     */
    public function contributing() : Url
    {
        return $this->contributing;
    }

    /**
     * @return License
     */
    public function license() : License
    {
        return $this->license;
    }

    /**
     * @return Url
     */
    public function readme() : Url
    {
        return $this->readme;
    }
}
