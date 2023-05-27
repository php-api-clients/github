<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Attribute\CastUnionToType\Schema\Repos\UpdateInformationAboutPagesSite\Request\ApplicationJson;

use ApiClients\Client\GitHub\Schema;
use Attribute;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\PropertyCaster;
use Throwable;

use function array_keys;
use function array_unique;
use function implode;
use function is_array;
use function sort;

#[Attribute(Attribute::TARGET_PARAMETER)]
final class Source implements PropertyCaster
{
    public function cast(mixed $value, ObjectMapper $hydrator): mixed
    {
        if (is_array($value)) {
            $signatureChunks = array_unique(array_keys($value));
            sort($signatureChunks);
            $signature = implode('|', $signatureChunks);
            if ($signature === 'branch|path' && ($value['path'] === '/' || $value['path'] === '/docs')) {
                try {
                    return $hydrator->hydrateObject(Schema\Repos\UpdateInformationAboutPagesSite\Request\ApplicationJson\Source\One::class, $value);
                } catch (Throwable) {
                }
            }
        }

        return $value;
    }
}
