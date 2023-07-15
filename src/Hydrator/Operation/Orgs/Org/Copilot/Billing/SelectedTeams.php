<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Orgs\Org\Copilot\Billing;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class SelectedTeams implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotForBusinessSeatsForTeams\Response\ApplicationJson\Created' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operations⚡️Copilot⚡️AddCopilotForBusinessSeatsForTeams⚡️Response⚡️ApplicationJson⚡️Created($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operations⚡️Copilot⚡️CancelCopilotSeatAssignmentForTeams⚡️Response⚡️ApplicationJson⚡️Ok($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operations⚡️Copilot⚡️AddCopilotForBusinessSeatsForTeams⚡️Response⚡️ApplicationJson⚡️Created(array $payload): \ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotForBusinessSeatsForTeams\Response\ApplicationJson\Created
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['seats_created'] ?? null;

            if ($value === null) {
                $missingFields[] = 'seats_created';
                goto after_seatsCreated;
            }

            $properties['seatsCreated'] = $value;

            after_seatsCreated:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotForBusinessSeatsForTeams\Response\ApplicationJson\Created', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotForBusinessSeatsForTeams\Response\ApplicationJson\Created::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotForBusinessSeatsForTeams\Response\ApplicationJson\Created(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotForBusinessSeatsForTeams\Response\ApplicationJson\Created', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\GitHub\Schema\BasicError
    {
        $properties = []; 
        $missingFields = [];
        try {
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

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\BasicError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operations⚡️Copilot⚡️CancelCopilotSeatAssignmentForTeams⚡️Response⚡️ApplicationJson⚡️Ok(array $payload): \ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['seats_cancelled'] ?? null;

            if ($value === null) {
                $missingFields[] = 'seats_cancelled';
                goto after_seatsCancelled;
            }

            $properties['seatsCancelled'] = $value;

            after_seatsCancelled:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotForBusinessSeatsForTeams\Response\ApplicationJson\Created' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operations⚡️Copilot⚡️AddCopilotForBusinessSeatsForTeams⚡️Response⚡️ApplicationJson⚡️Created($object),
            'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
            'ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operations⚡️Copilot⚡️CancelCopilotSeatAssignmentForTeams⚡️Response⚡️ApplicationJson⚡️Ok($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operations⚡️Copilot⚡️AddCopilotForBusinessSeatsForTeams⚡️Response⚡️ApplicationJson⚡️Created(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Operations\Copilot\AddCopilotForBusinessSeatsForTeams\Response\ApplicationJson\Created);
        $result = [];

        $seatsCreated = $object->seatsCreated;
        after_seatsCreated:        $result['seats_created'] = $seatsCreated;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BasicError);
        $result = [];

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

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Operations⚡️Copilot⚡️CancelCopilotSeatAssignmentForTeams⚡️Response⚡️ApplicationJson⚡️Ok(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Operations\Copilot\CancelCopilotSeatAssignmentForTeams\Response\ApplicationJson\Ok);
        $result = [];

        $seatsCancelled = $object->seatsCancelled;
        after_seatsCancelled:        $result['seats_cancelled'] = $seatsCancelled;


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
