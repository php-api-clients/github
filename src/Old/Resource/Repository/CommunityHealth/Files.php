<?php

declare(strict_types=1);

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
    protected CodeOfConduct $code_of_conduct;

    protected Url $contributing;

    protected License $license;

    protected Url $readme;

    public function codeOfConduct(): CodeOfConduct
    {
        return $this->code_of_conduct;
    }

    public function contributing(): Url
    {
        return $this->contributing;
    }

    public function license(): License
    {
        return $this->license;
    }

    public function readme(): Url
    {
        return $this->readme;
    }
}
