<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Orgs\CbOrgRcb\Actions\Runners;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Downloads implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\RunnerApplication' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RunnerApplication($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RunnerApplication(array $payload): \ApiClients\Client\GitHub\Schema\RunnerApplication
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['os'] ?? null;

            if ($value === null) {
                $missingFields[] = 'os';
                goto after_os;
            }

            $properties['os'] = $value;

            after_os:

            $value = $payload['architecture'] ?? null;

            if ($value === null) {
                $missingFields[] = 'architecture';
                goto after_architecture;
            }

            $properties['architecture'] = $value;

            after_architecture:

            $value = $payload['download_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'download_url';
                goto after_downloadUrl;
            }

            $properties['downloadUrl'] = $value;

            after_downloadUrl:

            $value = $payload['filename'] ?? null;

            if ($value === null) {
                $missingFields[] = 'filename';
                goto after_filename;
            }

            $properties['filename'] = $value;

            after_filename:

            $value = $payload['temp_download_token'] ?? null;

            if ($value === null) {
                $properties['tempDownloadToken'] = null;
                goto after_tempDownloadToken;
            }

            $properties['tempDownloadToken'] = $value;

            after_tempDownloadToken:

            $value = $payload['sha256_checksum'] ?? null;

            if ($value === null) {
                $properties['sha256Checksum'] = null;
                goto after_sha256Checksum;
            }

            $properties['sha256Checksum'] = $value;

            after_sha256Checksum:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RunnerApplication', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\RunnerApplication::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\RunnerApplication(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\RunnerApplication', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\RunnerApplication' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RunnerApplication($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️RunnerApplication(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\RunnerApplication);
        $result = [];

        $os = $object->os;
        after_os:        $result['os'] = $os;

        
        $architecture = $object->architecture;
        after_architecture:        $result['architecture'] = $architecture;

        
        $downloadUrl = $object->downloadUrl;
        after_downloadUrl:        $result['download_url'] = $downloadUrl;

        
        $filename = $object->filename;
        after_filename:        $result['filename'] = $filename;

        
        $tempDownloadToken = $object->tempDownloadToken;

        if ($tempDownloadToken === null) {
            goto after_tempDownloadToken;
        }
        after_tempDownloadToken:        $result['temp_download_token'] = $tempDownloadToken;

        
        $sha256Checksum = $object->sha256Checksum;

        if ($sha256Checksum === null) {
            goto after_sha256Checksum;
        }
        after_sha256Checksum:        $result['sha256_checksum'] = $sha256Checksum;


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
