// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: payment_model.proto

// This CPP symbol can be defined to use imports that match up to the framework
// imports needed when using CocoaPods.
#if !defined(GPB_USE_PROTOBUF_FRAMEWORK_IMPORTS)
 #define GPB_USE_PROTOBUF_FRAMEWORK_IMPORTS 0
#endif

#if GPB_USE_PROTOBUF_FRAMEWORK_IMPORTS
 #import <Protobuf/GPBProtocolBuffers_RuntimeSupport.h>
#else
 #import "GPBProtocolBuffers_RuntimeSupport.h"
#endif

#import <stdatomic.h>

#import "PaymentModel.pbobjc.h"
#import "CommonModel.pbobjc.h"
// @@protoc_insertion_point(imports)

#pragma clang diagnostic push
#pragma clang diagnostic ignored "-Wdeprecated-declarations"
#pragma clang diagnostic ignored "-Wdirect-ivar-access"
#pragma clang diagnostic ignored "-Wdollar-in-identifier-extension"

#pragma mark - Objective C Class declarations
// Forward declarations of Objective C classes that we can use as
// static values in struct initializers.
// We don't use [Foo class] because it is not a static value.
GPBObjCClassDeclaration(Cash);
GPBObjCClassDeclaration(CustomerNumber);
GPBObjCClassDeclaration(GPBStringValue);
GPBObjCClassDeclaration(GPBTimestamp);
GPBObjCClassDeclaration(PaymentBalance);
GPBObjCClassDeclaration(PaymentChannelCounterParty);
GPBObjCClassDeclaration(PaymentChannelNumber);
GPBObjCClassDeclaration(PaymentCounterParty);
GPBObjCClassDeclaration(PaymentCustomerCounterParty);
GPBObjCClassDeclaration(PaymentPurseCounterParty);
GPBObjCClassDeclaration(PaymentWalletCounterParty);
GPBObjCClassDeclaration(PendingPaymentTransaction);

#pragma mark - PaymentModelRoot

@implementation PaymentModelRoot

// No extensions in the file and none of the imports (direct or indirect)
// defined extensions, so no need to generate +extensionRegistry.

@end

#pragma mark - PaymentModelRoot_FileDescriptor

static GPBFileDescriptor *PaymentModelRoot_FileDescriptor(void) {
  // This is called by +initialize so there is no need to worry
  // about thread safety of the singleton.
  static GPBFileDescriptor *descriptor = NULL;
  if (!descriptor) {
    GPB_DEBUG_CHECK_RUNTIME_VERSIONS();
    descriptor = [[GPBFileDescriptor alloc] initWithPackage:@"com.elarian.hera.proto"
                                                     syntax:GPBFileSyntaxProto3];
  }
  return descriptor;
}

#pragma mark - Enum PaymentChannel

GPBEnumDescriptor *PaymentChannel_EnumDescriptor(void) {
  static _Atomic(GPBEnumDescriptor*) descriptor = nil;
  if (!descriptor) {
    static const char *valueNames =
        "PaymentChannelUnspecified\000PaymentChannel"
        "Cellular\000PaymentChannelAirtime\000";
    static const int32_t values[] = {
        PaymentChannel_PaymentChannelUnspecified,
        PaymentChannel_PaymentChannelCellular,
        PaymentChannel_PaymentChannelAirtime,
    };
    GPBEnumDescriptor *worker =
        [GPBEnumDescriptor allocDescriptorForName:GPBNSStringifySymbol(PaymentChannel)
                                       valueNames:valueNames
                                           values:values
                                            count:(uint32_t)(sizeof(values) / sizeof(int32_t))
                                     enumVerifier:PaymentChannel_IsValidValue];
    GPBEnumDescriptor *expected = nil;
    if (!atomic_compare_exchange_strong(&descriptor, &expected, worker)) {
      [worker release];
    }
  }
  return descriptor;
}

BOOL PaymentChannel_IsValidValue(int32_t value__) {
  switch (value__) {
    case PaymentChannel_PaymentChannelUnspecified:
    case PaymentChannel_PaymentChannelCellular:
    case PaymentChannel_PaymentChannelAirtime:
      return YES;
    default:
      return NO;
  }
}

#pragma mark - Enum PaymentStatus

GPBEnumDescriptor *PaymentStatus_EnumDescriptor(void) {
  static _Atomic(GPBEnumDescriptor*) descriptor = nil;
  if (!descriptor) {
    static const char *valueNames =
        "PaymentStatusUnspecified\000PaymentStatusQu"
        "eued\000PaymentStatusPendingConfirmation\000Pa"
        "ymentStatusPendingValidation\000PaymentStat"
        "usValidated\000PaymentStatusInvalidRequest\000"
        "PaymentStatusNotSupported\000PaymentStatusI"
        "nsufficientFunds\000PaymentStatusApplicatio"
        "nError\000PaymentStatusNotAllowed\000PaymentSt"
        "atusDuplicateRequest\000PaymentStatusInvali"
        "dPurse\000PaymentStatusInvalidCounterParty\000"
        "PaymentStatusInvalidChannelNumber\000Paymen"
        "tStatusGatewayError\000PaymentStatusDecommi"
        "ssionedCustomerId\000PaymentStatusSuccess\000P"
        "aymentStatusFailed\000PaymentStatusThrottle"
        "d\000PaymentStatusExpired\000PaymentStatusReje"
        "cted\000PaymentStatusReversed\000";
    static const int32_t values[] = {
        PaymentStatus_PaymentStatusUnspecified,
        PaymentStatus_PaymentStatusQueued,
        PaymentStatus_PaymentStatusPendingConfirmation,
        PaymentStatus_PaymentStatusPendingValidation,
        PaymentStatus_PaymentStatusValidated,
        PaymentStatus_PaymentStatusInvalidRequest,
        PaymentStatus_PaymentStatusNotSupported,
        PaymentStatus_PaymentStatusInsufficientFunds,
        PaymentStatus_PaymentStatusApplicationError,
        PaymentStatus_PaymentStatusNotAllowed,
        PaymentStatus_PaymentStatusDuplicateRequest,
        PaymentStatus_PaymentStatusInvalidPurse,
        PaymentStatus_PaymentStatusInvalidCounterParty,
        PaymentStatus_PaymentStatusInvalidChannelNumber,
        PaymentStatus_PaymentStatusGatewayError,
        PaymentStatus_PaymentStatusDecommissionedCustomerId,
        PaymentStatus_PaymentStatusSuccess,
        PaymentStatus_PaymentStatusFailed,
        PaymentStatus_PaymentStatusThrottled,
        PaymentStatus_PaymentStatusExpired,
        PaymentStatus_PaymentStatusRejected,
        PaymentStatus_PaymentStatusReversed,
    };
    GPBEnumDescriptor *worker =
        [GPBEnumDescriptor allocDescriptorForName:GPBNSStringifySymbol(PaymentStatus)
                                       valueNames:valueNames
                                           values:values
                                            count:(uint32_t)(sizeof(values) / sizeof(int32_t))
                                     enumVerifier:PaymentStatus_IsValidValue];
    GPBEnumDescriptor *expected = nil;
    if (!atomic_compare_exchange_strong(&descriptor, &expected, worker)) {
      [worker release];
    }
  }
  return descriptor;
}

BOOL PaymentStatus_IsValidValue(int32_t value__) {
  switch (value__) {
    case PaymentStatus_PaymentStatusUnspecified:
    case PaymentStatus_PaymentStatusQueued:
    case PaymentStatus_PaymentStatusPendingConfirmation:
    case PaymentStatus_PaymentStatusPendingValidation:
    case PaymentStatus_PaymentStatusValidated:
    case PaymentStatus_PaymentStatusInvalidRequest:
    case PaymentStatus_PaymentStatusNotSupported:
    case PaymentStatus_PaymentStatusInsufficientFunds:
    case PaymentStatus_PaymentStatusApplicationError:
    case PaymentStatus_PaymentStatusNotAllowed:
    case PaymentStatus_PaymentStatusDuplicateRequest:
    case PaymentStatus_PaymentStatusInvalidPurse:
    case PaymentStatus_PaymentStatusInvalidCounterParty:
    case PaymentStatus_PaymentStatusInvalidChannelNumber:
    case PaymentStatus_PaymentStatusGatewayError:
    case PaymentStatus_PaymentStatusDecommissionedCustomerId:
    case PaymentStatus_PaymentStatusSuccess:
    case PaymentStatus_PaymentStatusFailed:
    case PaymentStatus_PaymentStatusThrottled:
    case PaymentStatus_PaymentStatusExpired:
    case PaymentStatus_PaymentStatusRejected:
    case PaymentStatus_PaymentStatusReversed:
      return YES;
    default:
      return NO;
  }
}

#pragma mark - PaymentChannelNumber

@implementation PaymentChannelNumber

@dynamic channel;
@dynamic number;

typedef struct PaymentChannelNumber__storage_ {
  uint32_t _has_storage_[1];
  PaymentChannel channel;
  NSString *number;
} PaymentChannelNumber__storage_;

// This method is threadsafe because it is initially called
// in +initialize for each subclass.
+ (GPBDescriptor *)descriptor {
  static GPBDescriptor *descriptor = nil;
  if (!descriptor) {
    static GPBMessageFieldDescription fields[] = {
      {
        .name = "channel",
        .dataTypeSpecific.enumDescFunc = PaymentChannel_EnumDescriptor,
        .number = PaymentChannelNumber_FieldNumber_Channel,
        .hasIndex = 0,
        .offset = (uint32_t)offsetof(PaymentChannelNumber__storage_, channel),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldHasEnumDescriptor | GPBFieldClearHasIvarOnZero),
        .dataType = GPBDataTypeEnum,
      },
      {
        .name = "number",
        .dataTypeSpecific.clazz = Nil,
        .number = PaymentChannelNumber_FieldNumber_Number,
        .hasIndex = 1,
        .offset = (uint32_t)offsetof(PaymentChannelNumber__storage_, number),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldClearHasIvarOnZero),
        .dataType = GPBDataTypeString,
      },
    };
    GPBDescriptor *localDescriptor =
        [GPBDescriptor allocDescriptorForClass:[PaymentChannelNumber class]
                                     rootClass:[PaymentModelRoot class]
                                          file:PaymentModelRoot_FileDescriptor()
                                        fields:fields
                                    fieldCount:(uint32_t)(sizeof(fields) / sizeof(GPBMessageFieldDescription))
                                   storageSize:sizeof(PaymentChannelNumber__storage_)
                                         flags:(GPBDescriptorInitializationFlags)(GPBDescriptorInitializationFlag_UsesClassRefs | GPBDescriptorInitializationFlag_Proto3OptionalKnown)];
    #if defined(DEBUG) && DEBUG
      NSAssert(descriptor == nil, @"Startup recursed!");
    #endif  // DEBUG
    descriptor = localDescriptor;
  }
  return descriptor;
}

@end

int32_t PaymentChannelNumber_Channel_RawValue(PaymentChannelNumber *message) {
  GPBDescriptor *descriptor = [PaymentChannelNumber descriptor];
  GPBFieldDescriptor *field = [descriptor fieldWithNumber:PaymentChannelNumber_FieldNumber_Channel];
  return GPBGetMessageRawEnumField(message, field);
}

void SetPaymentChannelNumber_Channel_RawValue(PaymentChannelNumber *message, int32_t value) {
  GPBDescriptor *descriptor = [PaymentChannelNumber descriptor];
  GPBFieldDescriptor *field = [descriptor fieldWithNumber:PaymentChannelNumber_FieldNumber_Channel];
  GPBSetMessageRawEnumField(message, field, value);
}

#pragma mark - PendingPaymentTransaction

@implementation PendingPaymentTransaction

@dynamic hasCreatedAt, createdAt;
@dynamic hasValue, value;
@dynamic hasConverted, converted;

typedef struct PendingPaymentTransaction__storage_ {
  uint32_t _has_storage_[1];
  GPBTimestamp *createdAt;
  Cash *value;
  Cash *converted;
} PendingPaymentTransaction__storage_;

// This method is threadsafe because it is initially called
// in +initialize for each subclass.
+ (GPBDescriptor *)descriptor {
  static GPBDescriptor *descriptor = nil;
  if (!descriptor) {
    static GPBMessageFieldDescription fields[] = {
      {
        .name = "createdAt",
        .dataTypeSpecific.clazz = GPBObjCClass(GPBTimestamp),
        .number = PendingPaymentTransaction_FieldNumber_CreatedAt,
        .hasIndex = 0,
        .offset = (uint32_t)offsetof(PendingPaymentTransaction__storage_, createdAt),
        .flags = GPBFieldOptional,
        .dataType = GPBDataTypeMessage,
      },
      {
        .name = "value",
        .dataTypeSpecific.clazz = GPBObjCClass(Cash),
        .number = PendingPaymentTransaction_FieldNumber_Value,
        .hasIndex = 1,
        .offset = (uint32_t)offsetof(PendingPaymentTransaction__storage_, value),
        .flags = GPBFieldOptional,
        .dataType = GPBDataTypeMessage,
      },
      {
        .name = "converted",
        .dataTypeSpecific.clazz = GPBObjCClass(Cash),
        .number = PendingPaymentTransaction_FieldNumber_Converted,
        .hasIndex = 2,
        .offset = (uint32_t)offsetof(PendingPaymentTransaction__storage_, converted),
        .flags = GPBFieldOptional,
        .dataType = GPBDataTypeMessage,
      },
    };
    GPBDescriptor *localDescriptor =
        [GPBDescriptor allocDescriptorForClass:[PendingPaymentTransaction class]
                                     rootClass:[PaymentModelRoot class]
                                          file:PaymentModelRoot_FileDescriptor()
                                        fields:fields
                                    fieldCount:(uint32_t)(sizeof(fields) / sizeof(GPBMessageFieldDescription))
                                   storageSize:sizeof(PendingPaymentTransaction__storage_)
                                         flags:(GPBDescriptorInitializationFlags)(GPBDescriptorInitializationFlag_UsesClassRefs | GPBDescriptorInitializationFlag_Proto3OptionalKnown)];
    #if defined(DEBUG) && DEBUG
      NSAssert(descriptor == nil, @"Startup recursed!");
    #endif  // DEBUG
    descriptor = localDescriptor;
  }
  return descriptor;
}

@end

#pragma mark - PaymentBalance

@implementation PaymentBalance

@dynamic currencyCode;
@dynamic hasAvailable, available;
@dynamic hasActual, actual;
@dynamic pending, pending_Count;
@dynamic sequenceNr;

typedef struct PaymentBalance__storage_ {
  uint32_t _has_storage_[1];
  NSString *currencyCode;
  Cash *available;
  Cash *actual;
  NSMutableDictionary *pending;
  int64_t sequenceNr;
} PaymentBalance__storage_;

// This method is threadsafe because it is initially called
// in +initialize for each subclass.
+ (GPBDescriptor *)descriptor {
  static GPBDescriptor *descriptor = nil;
  if (!descriptor) {
    static GPBMessageFieldDescription fields[] = {
      {
        .name = "currencyCode",
        .dataTypeSpecific.clazz = Nil,
        .number = PaymentBalance_FieldNumber_CurrencyCode,
        .hasIndex = 0,
        .offset = (uint32_t)offsetof(PaymentBalance__storage_, currencyCode),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldClearHasIvarOnZero),
        .dataType = GPBDataTypeString,
      },
      {
        .name = "available",
        .dataTypeSpecific.clazz = GPBObjCClass(Cash),
        .number = PaymentBalance_FieldNumber_Available,
        .hasIndex = 1,
        .offset = (uint32_t)offsetof(PaymentBalance__storage_, available),
        .flags = GPBFieldOptional,
        .dataType = GPBDataTypeMessage,
      },
      {
        .name = "actual",
        .dataTypeSpecific.clazz = GPBObjCClass(Cash),
        .number = PaymentBalance_FieldNumber_Actual,
        .hasIndex = 2,
        .offset = (uint32_t)offsetof(PaymentBalance__storage_, actual),
        .flags = GPBFieldOptional,
        .dataType = GPBDataTypeMessage,
      },
      {
        .name = "pending",
        .dataTypeSpecific.clazz = GPBObjCClass(PendingPaymentTransaction),
        .number = PaymentBalance_FieldNumber_Pending,
        .hasIndex = GPBNoHasBit,
        .offset = (uint32_t)offsetof(PaymentBalance__storage_, pending),
        .flags = GPBFieldMapKeyString,
        .dataType = GPBDataTypeMessage,
      },
      {
        .name = "sequenceNr",
        .dataTypeSpecific.clazz = Nil,
        .number = PaymentBalance_FieldNumber_SequenceNr,
        .hasIndex = 3,
        .offset = (uint32_t)offsetof(PaymentBalance__storage_, sequenceNr),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldClearHasIvarOnZero),
        .dataType = GPBDataTypeInt64,
      },
    };
    GPBDescriptor *localDescriptor =
        [GPBDescriptor allocDescriptorForClass:[PaymentBalance class]
                                     rootClass:[PaymentModelRoot class]
                                          file:PaymentModelRoot_FileDescriptor()
                                        fields:fields
                                    fieldCount:(uint32_t)(sizeof(fields) / sizeof(GPBMessageFieldDescription))
                                   storageSize:sizeof(PaymentBalance__storage_)
                                         flags:(GPBDescriptorInitializationFlags)(GPBDescriptorInitializationFlag_UsesClassRefs | GPBDescriptorInitializationFlag_Proto3OptionalKnown)];
    #if defined(DEBUG) && DEBUG
      NSAssert(descriptor == nil, @"Startup recursed!");
    #endif  // DEBUG
    descriptor = localDescriptor;
  }
  return descriptor;
}

@end

#pragma mark - PaymentPurseCounterParty

@implementation PaymentPurseCounterParty

@dynamic purseId;

typedef struct PaymentPurseCounterParty__storage_ {
  uint32_t _has_storage_[1];
  NSString *purseId;
} PaymentPurseCounterParty__storage_;

// This method is threadsafe because it is initially called
// in +initialize for each subclass.
+ (GPBDescriptor *)descriptor {
  static GPBDescriptor *descriptor = nil;
  if (!descriptor) {
    static GPBMessageFieldDescription fields[] = {
      {
        .name = "purseId",
        .dataTypeSpecific.clazz = Nil,
        .number = PaymentPurseCounterParty_FieldNumber_PurseId,
        .hasIndex = 0,
        .offset = (uint32_t)offsetof(PaymentPurseCounterParty__storage_, purseId),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldClearHasIvarOnZero),
        .dataType = GPBDataTypeString,
      },
    };
    GPBDescriptor *localDescriptor =
        [GPBDescriptor allocDescriptorForClass:[PaymentPurseCounterParty class]
                                     rootClass:[PaymentModelRoot class]
                                          file:PaymentModelRoot_FileDescriptor()
                                        fields:fields
                                    fieldCount:(uint32_t)(sizeof(fields) / sizeof(GPBMessageFieldDescription))
                                   storageSize:sizeof(PaymentPurseCounterParty__storage_)
                                         flags:(GPBDescriptorInitializationFlags)(GPBDescriptorInitializationFlag_UsesClassRefs | GPBDescriptorInitializationFlag_Proto3OptionalKnown)];
    #if defined(DEBUG) && DEBUG
      NSAssert(descriptor == nil, @"Startup recursed!");
    #endif  // DEBUG
    descriptor = localDescriptor;
  }
  return descriptor;
}

@end

#pragma mark - PaymentWalletCounterParty

@implementation PaymentWalletCounterParty

@dynamic customerId;
@dynamic walletId;

typedef struct PaymentWalletCounterParty__storage_ {
  uint32_t _has_storage_[1];
  NSString *customerId;
  NSString *walletId;
} PaymentWalletCounterParty__storage_;

// This method is threadsafe because it is initially called
// in +initialize for each subclass.
+ (GPBDescriptor *)descriptor {
  static GPBDescriptor *descriptor = nil;
  if (!descriptor) {
    static GPBMessageFieldDescription fields[] = {
      {
        .name = "customerId",
        .dataTypeSpecific.clazz = Nil,
        .number = PaymentWalletCounterParty_FieldNumber_CustomerId,
        .hasIndex = 0,
        .offset = (uint32_t)offsetof(PaymentWalletCounterParty__storage_, customerId),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldClearHasIvarOnZero),
        .dataType = GPBDataTypeString,
      },
      {
        .name = "walletId",
        .dataTypeSpecific.clazz = Nil,
        .number = PaymentWalletCounterParty_FieldNumber_WalletId,
        .hasIndex = 1,
        .offset = (uint32_t)offsetof(PaymentWalletCounterParty__storage_, walletId),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldClearHasIvarOnZero),
        .dataType = GPBDataTypeString,
      },
    };
    GPBDescriptor *localDescriptor =
        [GPBDescriptor allocDescriptorForClass:[PaymentWalletCounterParty class]
                                     rootClass:[PaymentModelRoot class]
                                          file:PaymentModelRoot_FileDescriptor()
                                        fields:fields
                                    fieldCount:(uint32_t)(sizeof(fields) / sizeof(GPBMessageFieldDescription))
                                   storageSize:sizeof(PaymentWalletCounterParty__storage_)
                                         flags:(GPBDescriptorInitializationFlags)(GPBDescriptorInitializationFlag_UsesClassRefs | GPBDescriptorInitializationFlag_Proto3OptionalKnown)];
    #if defined(DEBUG) && DEBUG
      NSAssert(descriptor == nil, @"Startup recursed!");
    #endif  // DEBUG
    descriptor = localDescriptor;
  }
  return descriptor;
}

@end

#pragma mark - PaymentCustomerCounterParty

@implementation PaymentCustomerCounterParty

@dynamic hasCustomerNumber, customerNumber;
@dynamic hasChannelNumber, channelNumber;

typedef struct PaymentCustomerCounterParty__storage_ {
  uint32_t _has_storage_[1];
  CustomerNumber *customerNumber;
  PaymentChannelNumber *channelNumber;
} PaymentCustomerCounterParty__storage_;

// This method is threadsafe because it is initially called
// in +initialize for each subclass.
+ (GPBDescriptor *)descriptor {
  static GPBDescriptor *descriptor = nil;
  if (!descriptor) {
    static GPBMessageFieldDescription fields[] = {
      {
        .name = "customerNumber",
        .dataTypeSpecific.clazz = GPBObjCClass(CustomerNumber),
        .number = PaymentCustomerCounterParty_FieldNumber_CustomerNumber,
        .hasIndex = 0,
        .offset = (uint32_t)offsetof(PaymentCustomerCounterParty__storage_, customerNumber),
        .flags = GPBFieldOptional,
        .dataType = GPBDataTypeMessage,
      },
      {
        .name = "channelNumber",
        .dataTypeSpecific.clazz = GPBObjCClass(PaymentChannelNumber),
        .number = PaymentCustomerCounterParty_FieldNumber_ChannelNumber,
        .hasIndex = 1,
        .offset = (uint32_t)offsetof(PaymentCustomerCounterParty__storage_, channelNumber),
        .flags = GPBFieldOptional,
        .dataType = GPBDataTypeMessage,
      },
    };
    GPBDescriptor *localDescriptor =
        [GPBDescriptor allocDescriptorForClass:[PaymentCustomerCounterParty class]
                                     rootClass:[PaymentModelRoot class]
                                          file:PaymentModelRoot_FileDescriptor()
                                        fields:fields
                                    fieldCount:(uint32_t)(sizeof(fields) / sizeof(GPBMessageFieldDescription))
                                   storageSize:sizeof(PaymentCustomerCounterParty__storage_)
                                         flags:(GPBDescriptorInitializationFlags)(GPBDescriptorInitializationFlag_UsesClassRefs | GPBDescriptorInitializationFlag_Proto3OptionalKnown)];
    #if defined(DEBUG) && DEBUG
      NSAssert(descriptor == nil, @"Startup recursed!");
    #endif  // DEBUG
    descriptor = localDescriptor;
  }
  return descriptor;
}

@end

#pragma mark - PaymentChannelCounterParty

@implementation PaymentChannelCounterParty

@dynamic channel;
@dynamic channelCode;
@dynamic source;
@dynamic destination;
@dynamic hasAccount, account;

typedef struct PaymentChannelCounterParty__storage_ {
  uint32_t _has_storage_[1];
  PaymentChannel channel;
  int32_t channelCode;
  NSString *source;
  NSString *destination;
  GPBStringValue *account;
} PaymentChannelCounterParty__storage_;

// This method is threadsafe because it is initially called
// in +initialize for each subclass.
+ (GPBDescriptor *)descriptor {
  static GPBDescriptor *descriptor = nil;
  if (!descriptor) {
    static GPBMessageFieldDescription fields[] = {
      {
        .name = "channel",
        .dataTypeSpecific.enumDescFunc = PaymentChannel_EnumDescriptor,
        .number = PaymentChannelCounterParty_FieldNumber_Channel,
        .hasIndex = 0,
        .offset = (uint32_t)offsetof(PaymentChannelCounterParty__storage_, channel),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldHasEnumDescriptor | GPBFieldClearHasIvarOnZero),
        .dataType = GPBDataTypeEnum,
      },
      {
        .name = "channelCode",
        .dataTypeSpecific.clazz = Nil,
        .number = PaymentChannelCounterParty_FieldNumber_ChannelCode,
        .hasIndex = 1,
        .offset = (uint32_t)offsetof(PaymentChannelCounterParty__storage_, channelCode),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldClearHasIvarOnZero),
        .dataType = GPBDataTypeInt32,
      },
      {
        .name = "source",
        .dataTypeSpecific.clazz = Nil,
        .number = PaymentChannelCounterParty_FieldNumber_Source,
        .hasIndex = 2,
        .offset = (uint32_t)offsetof(PaymentChannelCounterParty__storage_, source),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldClearHasIvarOnZero),
        .dataType = GPBDataTypeString,
      },
      {
        .name = "destination",
        .dataTypeSpecific.clazz = Nil,
        .number = PaymentChannelCounterParty_FieldNumber_Destination,
        .hasIndex = 3,
        .offset = (uint32_t)offsetof(PaymentChannelCounterParty__storage_, destination),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldClearHasIvarOnZero),
        .dataType = GPBDataTypeString,
      },
      {
        .name = "account",
        .dataTypeSpecific.clazz = GPBObjCClass(GPBStringValue),
        .number = PaymentChannelCounterParty_FieldNumber_Account,
        .hasIndex = 4,
        .offset = (uint32_t)offsetof(PaymentChannelCounterParty__storage_, account),
        .flags = GPBFieldOptional,
        .dataType = GPBDataTypeMessage,
      },
    };
    GPBDescriptor *localDescriptor =
        [GPBDescriptor allocDescriptorForClass:[PaymentChannelCounterParty class]
                                     rootClass:[PaymentModelRoot class]
                                          file:PaymentModelRoot_FileDescriptor()
                                        fields:fields
                                    fieldCount:(uint32_t)(sizeof(fields) / sizeof(GPBMessageFieldDescription))
                                   storageSize:sizeof(PaymentChannelCounterParty__storage_)
                                         flags:(GPBDescriptorInitializationFlags)(GPBDescriptorInitializationFlag_UsesClassRefs | GPBDescriptorInitializationFlag_Proto3OptionalKnown)];
    #if defined(DEBUG) && DEBUG
      NSAssert(descriptor == nil, @"Startup recursed!");
    #endif  // DEBUG
    descriptor = localDescriptor;
  }
  return descriptor;
}

@end

int32_t PaymentChannelCounterParty_Channel_RawValue(PaymentChannelCounterParty *message) {
  GPBDescriptor *descriptor = [PaymentChannelCounterParty descriptor];
  GPBFieldDescriptor *field = [descriptor fieldWithNumber:PaymentChannelCounterParty_FieldNumber_Channel];
  return GPBGetMessageRawEnumField(message, field);
}

void SetPaymentChannelCounterParty_Channel_RawValue(PaymentChannelCounterParty *message, int32_t value) {
  GPBDescriptor *descriptor = [PaymentChannelCounterParty descriptor];
  GPBFieldDescriptor *field = [descriptor fieldWithNumber:PaymentChannelCounterParty_FieldNumber_Channel];
  GPBSetMessageRawEnumField(message, field, value);
}

#pragma mark - PaymentCounterParty

@implementation PaymentCounterParty

@dynamic partyOneOfCase;
@dynamic purse;
@dynamic wallet;
@dynamic customer;
@dynamic channel;

typedef struct PaymentCounterParty__storage_ {
  uint32_t _has_storage_[2];
  PaymentPurseCounterParty *purse;
  PaymentWalletCounterParty *wallet;
  PaymentCustomerCounterParty *customer;
  PaymentChannelCounterParty *channel;
} PaymentCounterParty__storage_;

// This method is threadsafe because it is initially called
// in +initialize for each subclass.
+ (GPBDescriptor *)descriptor {
  static GPBDescriptor *descriptor = nil;
  if (!descriptor) {
    static GPBMessageFieldDescription fields[] = {
      {
        .name = "purse",
        .dataTypeSpecific.clazz = GPBObjCClass(PaymentPurseCounterParty),
        .number = PaymentCounterParty_FieldNumber_Purse,
        .hasIndex = -1,
        .offset = (uint32_t)offsetof(PaymentCounterParty__storage_, purse),
        .flags = GPBFieldOptional,
        .dataType = GPBDataTypeMessage,
      },
      {
        .name = "wallet",
        .dataTypeSpecific.clazz = GPBObjCClass(PaymentWalletCounterParty),
        .number = PaymentCounterParty_FieldNumber_Wallet,
        .hasIndex = -1,
        .offset = (uint32_t)offsetof(PaymentCounterParty__storage_, wallet),
        .flags = GPBFieldOptional,
        .dataType = GPBDataTypeMessage,
      },
      {
        .name = "customer",
        .dataTypeSpecific.clazz = GPBObjCClass(PaymentCustomerCounterParty),
        .number = PaymentCounterParty_FieldNumber_Customer,
        .hasIndex = -1,
        .offset = (uint32_t)offsetof(PaymentCounterParty__storage_, customer),
        .flags = GPBFieldOptional,
        .dataType = GPBDataTypeMessage,
      },
      {
        .name = "channel",
        .dataTypeSpecific.clazz = GPBObjCClass(PaymentChannelCounterParty),
        .number = PaymentCounterParty_FieldNumber_Channel,
        .hasIndex = -1,
        .offset = (uint32_t)offsetof(PaymentCounterParty__storage_, channel),
        .flags = GPBFieldOptional,
        .dataType = GPBDataTypeMessage,
      },
    };
    GPBDescriptor *localDescriptor =
        [GPBDescriptor allocDescriptorForClass:[PaymentCounterParty class]
                                     rootClass:[PaymentModelRoot class]
                                          file:PaymentModelRoot_FileDescriptor()
                                        fields:fields
                                    fieldCount:(uint32_t)(sizeof(fields) / sizeof(GPBMessageFieldDescription))
                                   storageSize:sizeof(PaymentCounterParty__storage_)
                                         flags:(GPBDescriptorInitializationFlags)(GPBDescriptorInitializationFlag_UsesClassRefs | GPBDescriptorInitializationFlag_Proto3OptionalKnown)];
    static const char *oneofs[] = {
      "party",
    };
    [localDescriptor setupOneofs:oneofs
                           count:(uint32_t)(sizeof(oneofs) / sizeof(char*))
                   firstHasIndex:-1];
    #if defined(DEBUG) && DEBUG
      NSAssert(descriptor == nil, @"Startup recursed!");
    #endif  // DEBUG
    descriptor = localDescriptor;
  }
  return descriptor;
}

@end

void PaymentCounterParty_ClearPartyOneOfCase(PaymentCounterParty *message) {
  GPBDescriptor *descriptor = [PaymentCounterParty descriptor];
  GPBOneofDescriptor *oneof = [descriptor.oneofs objectAtIndex:0];
  GPBClearOneof(message, oneof);
}
#pragma mark - PaymentTransaction

@implementation PaymentTransaction

@dynamic transactionId;
@dynamic hasAppId, appId;
@dynamic hasDebitParty, debitParty;
@dynamic hasCreditParty, creditParty;
@dynamic hasValue, value;
@dynamic status;
@dynamic hasCreatedAt, createdAt;
@dynamic hasUpdatedAt, updatedAt;
@dynamic hasProviderTransactionId, providerTransactionId;
@dynamic hasNarration, narration;
@dynamic hasDescription_p, description_p;

typedef struct PaymentTransaction__storage_ {
  uint32_t _has_storage_[1];
  PaymentStatus status;
  NSString *transactionId;
  GPBStringValue *appId;
  PaymentCounterParty *debitParty;
  PaymentCounterParty *creditParty;
  Cash *value;
  GPBTimestamp *createdAt;
  GPBTimestamp *updatedAt;
  GPBStringValue *providerTransactionId;
  GPBStringValue *narration;
  GPBStringValue *description_p;
} PaymentTransaction__storage_;

// This method is threadsafe because it is initially called
// in +initialize for each subclass.
+ (GPBDescriptor *)descriptor {
  static GPBDescriptor *descriptor = nil;
  if (!descriptor) {
    static GPBMessageFieldDescription fields[] = {
      {
        .name = "transactionId",
        .dataTypeSpecific.clazz = Nil,
        .number = PaymentTransaction_FieldNumber_TransactionId,
        .hasIndex = 0,
        .offset = (uint32_t)offsetof(PaymentTransaction__storage_, transactionId),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldClearHasIvarOnZero),
        .dataType = GPBDataTypeString,
      },
      {
        .name = "appId",
        .dataTypeSpecific.clazz = GPBObjCClass(GPBStringValue),
        .number = PaymentTransaction_FieldNumber_AppId,
        .hasIndex = 1,
        .offset = (uint32_t)offsetof(PaymentTransaction__storage_, appId),
        .flags = GPBFieldOptional,
        .dataType = GPBDataTypeMessage,
      },
      {
        .name = "debitParty",
        .dataTypeSpecific.clazz = GPBObjCClass(PaymentCounterParty),
        .number = PaymentTransaction_FieldNumber_DebitParty,
        .hasIndex = 2,
        .offset = (uint32_t)offsetof(PaymentTransaction__storage_, debitParty),
        .flags = GPBFieldOptional,
        .dataType = GPBDataTypeMessage,
      },
      {
        .name = "creditParty",
        .dataTypeSpecific.clazz = GPBObjCClass(PaymentCounterParty),
        .number = PaymentTransaction_FieldNumber_CreditParty,
        .hasIndex = 3,
        .offset = (uint32_t)offsetof(PaymentTransaction__storage_, creditParty),
        .flags = GPBFieldOptional,
        .dataType = GPBDataTypeMessage,
      },
      {
        .name = "value",
        .dataTypeSpecific.clazz = GPBObjCClass(Cash),
        .number = PaymentTransaction_FieldNumber_Value,
        .hasIndex = 4,
        .offset = (uint32_t)offsetof(PaymentTransaction__storage_, value),
        .flags = GPBFieldOptional,
        .dataType = GPBDataTypeMessage,
      },
      {
        .name = "status",
        .dataTypeSpecific.enumDescFunc = PaymentStatus_EnumDescriptor,
        .number = PaymentTransaction_FieldNumber_Status,
        .hasIndex = 5,
        .offset = (uint32_t)offsetof(PaymentTransaction__storage_, status),
        .flags = (GPBFieldFlags)(GPBFieldOptional | GPBFieldHasEnumDescriptor | GPBFieldClearHasIvarOnZero),
        .dataType = GPBDataTypeEnum,
      },
      {
        .name = "createdAt",
        .dataTypeSpecific.clazz = GPBObjCClass(GPBTimestamp),
        .number = PaymentTransaction_FieldNumber_CreatedAt,
        .hasIndex = 6,
        .offset = (uint32_t)offsetof(PaymentTransaction__storage_, createdAt),
        .flags = GPBFieldOptional,
        .dataType = GPBDataTypeMessage,
      },
      {
        .name = "updatedAt",
        .dataTypeSpecific.clazz = GPBObjCClass(GPBTimestamp),
        .number = PaymentTransaction_FieldNumber_UpdatedAt,
        .hasIndex = 7,
        .offset = (uint32_t)offsetof(PaymentTransaction__storage_, updatedAt),
        .flags = GPBFieldOptional,
        .dataType = GPBDataTypeMessage,
      },
      {
        .name = "providerTransactionId",
        .dataTypeSpecific.clazz = GPBObjCClass(GPBStringValue),
        .number = PaymentTransaction_FieldNumber_ProviderTransactionId,
        .hasIndex = 8,
        .offset = (uint32_t)offsetof(PaymentTransaction__storage_, providerTransactionId),
        .flags = GPBFieldOptional,
        .dataType = GPBDataTypeMessage,
      },
      {
        .name = "narration",
        .dataTypeSpecific.clazz = GPBObjCClass(GPBStringValue),
        .number = PaymentTransaction_FieldNumber_Narration,
        .hasIndex = 9,
        .offset = (uint32_t)offsetof(PaymentTransaction__storage_, narration),
        .flags = GPBFieldOptional,
        .dataType = GPBDataTypeMessage,
      },
      {
        .name = "description_p",
        .dataTypeSpecific.clazz = GPBObjCClass(GPBStringValue),
        .number = PaymentTransaction_FieldNumber_Description_p,
        .hasIndex = 10,
        .offset = (uint32_t)offsetof(PaymentTransaction__storage_, description_p),
        .flags = GPBFieldOptional,
        .dataType = GPBDataTypeMessage,
      },
    };
    GPBDescriptor *localDescriptor =
        [GPBDescriptor allocDescriptorForClass:[PaymentTransaction class]
                                     rootClass:[PaymentModelRoot class]
                                          file:PaymentModelRoot_FileDescriptor()
                                        fields:fields
                                    fieldCount:(uint32_t)(sizeof(fields) / sizeof(GPBMessageFieldDescription))
                                   storageSize:sizeof(PaymentTransaction__storage_)
                                         flags:(GPBDescriptorInitializationFlags)(GPBDescriptorInitializationFlag_UsesClassRefs | GPBDescriptorInitializationFlag_Proto3OptionalKnown)];
    #if defined(DEBUG) && DEBUG
      NSAssert(descriptor == nil, @"Startup recursed!");
    #endif  // DEBUG
    descriptor = localDescriptor;
  }
  return descriptor;
}

@end

int32_t PaymentTransaction_Status_RawValue(PaymentTransaction *message) {
  GPBDescriptor *descriptor = [PaymentTransaction descriptor];
  GPBFieldDescriptor *field = [descriptor fieldWithNumber:PaymentTransaction_FieldNumber_Status];
  return GPBGetMessageRawEnumField(message, field);
}

void SetPaymentTransaction_Status_RawValue(PaymentTransaction *message, int32_t value) {
  GPBDescriptor *descriptor = [PaymentTransaction descriptor];
  GPBFieldDescriptor *field = [descriptor fieldWithNumber:PaymentTransaction_FieldNumber_Status];
  GPBSetMessageRawEnumField(message, field, value);
}


#pragma clang diagnostic pop

// @@protoc_insertion_point(global_scope)
