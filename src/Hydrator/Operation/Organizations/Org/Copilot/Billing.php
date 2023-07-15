<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Organizations\Org\Copilot;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Billing implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\CopilotOrganizationDetails' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CopilotOrganizationDetails($payload),
                'ApiClients\Client\GitHub\Schema\CopilotSeatBreakdown' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CopilotSeatBreakdown($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CopilotOrganizationDetails(array $payload): \ApiClients\Client\GitHub\Schema\CopilotOrganizationDetails
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['seat_breakdown'] ?? null;

            if ($value === null) {
                $missingFields[] = 'seat_breakdown';
                goto after_seatBreakdown;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'seatBreakdown';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CopilotSeatBreakdown($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['seatBreakdown'] = $value;

            after_seatBreakdown:

            $value = $payload['public_code_suggestions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'public_code_suggestions';
                goto after_publicCodeSuggestions;
            }

            $properties['publicCodeSuggestions'] = $value;

            after_publicCodeSuggestions:

            $value = $payload['seat_management_setting'] ?? null;

            if ($value === null) {
                $missingFields[] = 'seat_management_setting';
                goto after_seatManagementSetting;
            }

            $properties['seatManagementSetting'] = $value;

            after_seatManagementSetting:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CopilotOrganizationDetails', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\CopilotOrganizationDetails::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\CopilotOrganizationDetails(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CopilotOrganizationDetails', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CopilotSeatBreakdown(array $payload): \ApiClients\Client\GitHub\Schema\CopilotSeatBreakdown
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['total'] ?? null;

            if ($value === null) {
                $properties['total'] = null;
                goto after_total;
            }

            $properties['total'] = $value;

            after_total:

            $value = $payload['added_this_cycle'] ?? null;

            if ($value === null) {
                $properties['addedThisCycle'] = null;
                goto after_addedThisCycle;
            }

            $properties['addedThisCycle'] = $value;

            after_addedThisCycle:

            $value = $payload['pending_cancellation'] ?? null;

            if ($value === null) {
                $properties['pendingCancellation'] = null;
                goto after_pendingCancellation;
            }

            $properties['pendingCancellation'] = $value;

            after_pendingCancellation:

            $value = $payload['pending_invitation'] ?? null;

            if ($value === null) {
                $properties['pendingInvitation'] = null;
                goto after_pendingInvitation;
            }

            $properties['pendingInvitation'] = $value;

            after_pendingInvitation:

            $value = $payload['active_this_cycle'] ?? null;

            if ($value === null) {
                $properties['activeThisCycle'] = null;
                goto after_activeThisCycle;
            }

            $properties['activeThisCycle'] = $value;

            after_activeThisCycle:

            $value = $payload['inactive_this_cycle'] ?? null;

            if ($value === null) {
                $properties['inactiveThisCycle'] = null;
                goto after_inactiveThisCycle;
            }

            $properties['inactiveThisCycle'] = $value;

            after_inactiveThisCycle:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CopilotSeatBreakdown', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\CopilotSeatBreakdown::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\CopilotSeatBreakdown(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\CopilotSeatBreakdown', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\CopilotOrganizationDetails' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CopilotOrganizationDetails($object),
            'ApiClients\Client\GitHub\Schema\CopilotSeatBreakdown' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CopilotSeatBreakdown($object),
            'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CopilotOrganizationDetails(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\CopilotOrganizationDetails);
        $result = [];

        $seatBreakdown = $object->seatBreakdown;
        $seatBreakdown = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CopilotSeatBreakdown($seatBreakdown);
        after_seatBreakdown:        $result['seat_breakdown'] = $seatBreakdown;

        
        $publicCodeSuggestions = $object->publicCodeSuggestions;
        after_publicCodeSuggestions:        $result['public_code_suggestions'] = $publicCodeSuggestions;

        
        $seatManagementSetting = $object->seatManagementSetting;
        after_seatManagementSetting:        $result['seat_management_setting'] = $seatManagementSetting;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️CopilotSeatBreakdown(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\CopilotSeatBreakdown);
        $result = [];

        $total = $object->total;

        if ($total === null) {
            goto after_total;
        }
        after_total:        $result['total'] = $total;

        
        $addedThisCycle = $object->addedThisCycle;

        if ($addedThisCycle === null) {
            goto after_addedThisCycle;
        }
        after_addedThisCycle:        $result['added_this_cycle'] = $addedThisCycle;

        
        $pendingCancellation = $object->pendingCancellation;

        if ($pendingCancellation === null) {
            goto after_pendingCancellation;
        }
        after_pendingCancellation:        $result['pending_cancellation'] = $pendingCancellation;

        
        $pendingInvitation = $object->pendingInvitation;

        if ($pendingInvitation === null) {
            goto after_pendingInvitation;
        }
        after_pendingInvitation:        $result['pending_invitation'] = $pendingInvitation;

        
        $activeThisCycle = $object->activeThisCycle;

        if ($activeThisCycle === null) {
            goto after_activeThisCycle;
        }
        after_activeThisCycle:        $result['active_this_cycle'] = $activeThisCycle;

        
        $inactiveThisCycle = $object->inactiveThisCycle;

        if ($inactiveThisCycle === null) {
            goto after_inactiveThisCycle;
        }
        after_inactiveThisCycle:        $result['inactive_this_cycle'] = $inactiveThisCycle;


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
