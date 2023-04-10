<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\SecretDashScanning\Alerts;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CbAlertNumberRcb implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\Github\Schema\SecretScanningAlert' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SecretScanningAlert($payload),
                'ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SecretScanningAlert(array $payload): \ApiClients\Client\Github\Schema\SecretScanningAlert
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['number'] ?? null;

            if ($value === null) {
                $properties['number'] = null;
                goto after_number;
            }

            $properties['number'] = $value;

            after_number:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['createdAt'] = null;
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updatedAt'] = null;
                goto after_updatedAt;
            }

            $properties['updatedAt'] = $value;

            after_updatedAt:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['locations_url'] ?? null;

            if ($value === null) {
                $properties['locationsUrl'] = null;
                goto after_locationsUrl;
            }

            $properties['locationsUrl'] = $value;

            after_locationsUrl:

            $value = $payload['state'] ?? null;

            if ($value === null) {
                $properties['state'] = null;
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['resolution'] ?? null;

            if ($value === null) {
                $properties['resolution'] = null;
                goto after_resolution;
            }

            $properties['resolution'] = $value;

            after_resolution:

            $value = $payload['resolved_at'] ?? null;

            if ($value === null) {
                $properties['resolvedAt'] = null;
                goto after_resolvedAt;
            }

            $properties['resolvedAt'] = $value;

            after_resolvedAt:

            $value = $payload['resolved_by'] ?? null;

            if ($value === null) {
                $properties['resolvedBy'] = null;
                goto after_resolvedBy;
            }

            $properties['resolvedBy'] = $value;

            after_resolvedBy:

            $value = $payload['resolution_comment'] ?? null;

            if ($value === null) {
                $properties['resolutionComment'] = null;
                goto after_resolutionComment;
            }

            $properties['resolutionComment'] = $value;

            after_resolutionComment:

            $value = $payload['secret_type'] ?? null;

            if ($value === null) {
                $properties['secretType'] = null;
                goto after_secretType;
            }

            $properties['secretType'] = $value;

            after_secretType:

            $value = $payload['secret_type_display_name'] ?? null;

            if ($value === null) {
                $properties['secretTypeDisplayName'] = null;
                goto after_secretTypeDisplayName;
            }

            $properties['secretTypeDisplayName'] = $value;

            after_secretTypeDisplayName:

            $value = $payload['secret'] ?? null;

            if ($value === null) {
                $properties['secret'] = null;
                goto after_secret;
            }

            $properties['secret'] = $value;

            after_secret:

            $value = $payload['push_protection_bypassed'] ?? null;

            if ($value === null) {
                $properties['pushProtectionBypassed'] = null;
                goto after_pushProtectionBypassed;
            }

            $properties['pushProtectionBypassed'] = $value;

            after_pushProtectionBypassed:

            $value = $payload['push_protection_bypassed_by'] ?? null;

            if ($value === null) {
                $properties['pushProtectionBypassedBy'] = null;
                goto after_pushProtectionBypassedBy;
            }

            $properties['pushProtectionBypassedBy'] = $value;

            after_pushProtectionBypassedBy:

            $value = $payload['push_protection_bypassed_at'] ?? null;

            if ($value === null) {
                $properties['pushProtectionBypassedAt'] = null;
                goto after_pushProtectionBypassedAt;
            }

            $properties['pushProtectionBypassedAt'] = $value;

            after_pushProtectionBypassedAt:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\SecretScanningAlert', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\SecretScanningAlert::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\SecretScanningAlert(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\SecretScanningAlert', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503(array $payload): \ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['code'] ?? null;

            if ($value === null) {
                $properties['code'] = null;
                goto after_code;
            }

            $properties['code'] = $value;

            after_code:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503', $exception, stack: $this->hydrationStack);
        }
    }
    
    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new \LogicException('No type mapped for object of class: ' . get_class($object));
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, get_class($object));
    }

    /**
     * @template T
     *
     * @param T               $object
     * @param class-string<T> $className
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match($className) {
                'array' => $this->serializeValuearray($object),
            'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
            'DateTime' => $this->serializeValueDateTime($object),
            'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
            'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
            'ApiClients\Client\Github\Schema\SecretScanningAlert' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SecretScanningAlert($object),
            'ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503($object),
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SecretScanningAlert(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\SecretScanningAlert);
        $result = [];

        $number = $object->number;

        if ($number === null) {
            goto after_number;
        }
        after_number:        $result['number'] = $number;

        
        $createdAt = $object->createdAt;

        if ($createdAt === null) {
            goto after_createdAt;
        }
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $updatedAt = $object->updatedAt;

        if ($updatedAt === null) {
            goto after_updatedAt;
        }
        after_updatedAt:        $result['updated_at'] = $updatedAt;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $locationsUrl = $object->locationsUrl;

        if ($locationsUrl === null) {
            goto after_locationsUrl;
        }
        after_locationsUrl:        $result['locations_url'] = $locationsUrl;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $resolution = $object->resolution;

        if ($resolution === null) {
            goto after_resolution;
        }
        after_resolution:        $result['resolution'] = $resolution;

        
        $resolvedAt = $object->resolvedAt;

        if ($resolvedAt === null) {
            goto after_resolvedAt;
        }
        after_resolvedAt:        $result['resolved_at'] = $resolvedAt;

        
        $resolvedBy = $object->resolvedBy;

        if ($resolvedBy === null) {
            goto after_resolvedBy;
        }
        after_resolvedBy:        $result['resolved_by'] = $resolvedBy;

        
        $resolutionComment = $object->resolutionComment;

        if ($resolutionComment === null) {
            goto after_resolutionComment;
        }
        after_resolutionComment:        $result['resolution_comment'] = $resolutionComment;

        
        $secretType = $object->secretType;

        if ($secretType === null) {
            goto after_secretType;
        }
        after_secretType:        $result['secret_type'] = $secretType;

        
        $secretTypeDisplayName = $object->secretTypeDisplayName;

        if ($secretTypeDisplayName === null) {
            goto after_secretTypeDisplayName;
        }
        after_secretTypeDisplayName:        $result['secret_type_display_name'] = $secretTypeDisplayName;

        
        $secret = $object->secret;

        if ($secret === null) {
            goto after_secret;
        }
        after_secret:        $result['secret'] = $secret;

        
        $pushProtectionBypassed = $object->pushProtectionBypassed;

        if ($pushProtectionBypassed === null) {
            goto after_pushProtectionBypassed;
        }
        after_pushProtectionBypassed:        $result['push_protection_bypassed'] = $pushProtectionBypassed;

        
        $pushProtectionBypassedBy = $object->pushProtectionBypassedBy;

        if ($pushProtectionBypassedBy === null) {
            goto after_pushProtectionBypassedBy;
        }
        after_pushProtectionBypassedBy:        $result['push_protection_bypassed_by'] = $pushProtectionBypassedBy;

        
        $pushProtectionBypassedAt = $object->pushProtectionBypassedAt;

        if ($pushProtectionBypassedAt === null) {
            goto after_pushProtectionBypassedAt;
        }
        after_pushProtectionBypassedAt:        $result['push_protection_bypassed_at'] = $pushProtectionBypassedAt;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Operation⚡️SecretScanning⚡️ListAlertsForEnterprise⚡️Response⚡️Applicationjson⚡️H503(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Operation\SecretScanning\ListAlertsForEnterprise\Response\Applicationjson\H503);
        $result = [];

        $code = $object->code;

        if ($code === null) {
            goto after_code;
        }
        after_code:        $result['code'] = $code;

        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;


        return $result;
    }
    
    

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
