// Generated by the protocol buffer compiler.  DO NOT EDIT!
// source: payment_state.proto

#ifndef GOOGLE_PROTOBUF_INCLUDED_payment_5fstate_2eproto
#define GOOGLE_PROTOBUF_INCLUDED_payment_5fstate_2eproto

#include <limits>
#include <string>

#include <google/protobuf/port_def.inc>
#if PROTOBUF_VERSION < 3014000
#error This file was generated by a newer version of protoc which is
#error incompatible with your Protocol Buffer headers. Please update
#error your headers.
#endif
#if 3014000 < PROTOBUF_MIN_PROTOC_VERSION
#error This file was generated by an older version of protoc which is
#error incompatible with your Protocol Buffer headers. Please
#error regenerate this file with a newer version of protoc.
#endif

#include <google/protobuf/port_undef.inc>
#include <google/protobuf/io/coded_stream.h>
#include <google/protobuf/arena.h>
#include <google/protobuf/arenastring.h>
#include <google/protobuf/generated_message_table_driven.h>
#include <google/protobuf/generated_message_util.h>
#include <google/protobuf/metadata_lite.h>
#include <google/protobuf/generated_message_reflection.h>
#include <google/protobuf/message.h>
#include <google/protobuf/repeated_field.h>  // IWYU pragma: export
#include <google/protobuf/extension_set.h>  // IWYU pragma: export
#include <google/protobuf/map.h>  // IWYU pragma: export
#include <google/protobuf/map_entry.h>
#include <google/protobuf/map_field_inl.h>
#include <google/protobuf/unknown_field_set.h>
#include "common_model.pb.h"
#include "payment_model.pb.h"
// @@protoc_insertion_point(includes)
#include <google/protobuf/port_def.inc>
#define PROTOBUF_INTERNAL_EXPORT_payment_5fstate_2eproto
PROTOBUF_NAMESPACE_OPEN
namespace internal {
class AnyMetadata;
}  // namespace internal
PROTOBUF_NAMESPACE_CLOSE

// Internal implementation detail -- do not use these members.
struct TableStruct_payment_5fstate_2eproto {
  static const ::PROTOBUF_NAMESPACE_ID::internal::ParseTableField entries[]
    PROTOBUF_SECTION_VARIABLE(protodesc_cold);
  static const ::PROTOBUF_NAMESPACE_ID::internal::AuxiliaryParseTableField aux[]
    PROTOBUF_SECTION_VARIABLE(protodesc_cold);
  static const ::PROTOBUF_NAMESPACE_ID::internal::ParseTable schema[2]
    PROTOBUF_SECTION_VARIABLE(protodesc_cold);
  static const ::PROTOBUF_NAMESPACE_ID::internal::FieldMetadata field_metadata[];
  static const ::PROTOBUF_NAMESPACE_ID::internal::SerializationTable serialization_table[];
  static const ::PROTOBUF_NAMESPACE_ID::uint32 offsets[];
};
extern const ::PROTOBUF_NAMESPACE_ID::internal::DescriptorTable descriptor_table_payment_5fstate_2eproto;
namespace com {
namespace elarian {
namespace hera {
namespace proto {
class PaymentState;
class PaymentStateDefaultTypeInternal;
extern PaymentStateDefaultTypeInternal _PaymentState_default_instance_;
class PaymentState_WalletsEntry_DoNotUse;
class PaymentState_WalletsEntry_DoNotUseDefaultTypeInternal;
extern PaymentState_WalletsEntry_DoNotUseDefaultTypeInternal _PaymentState_WalletsEntry_DoNotUse_default_instance_;
}  // namespace proto
}  // namespace hera
}  // namespace elarian
}  // namespace com
PROTOBUF_NAMESPACE_OPEN
template<> ::com::elarian::hera::proto::PaymentState* Arena::CreateMaybeMessage<::com::elarian::hera::proto::PaymentState>(Arena*);
template<> ::com::elarian::hera::proto::PaymentState_WalletsEntry_DoNotUse* Arena::CreateMaybeMessage<::com::elarian::hera::proto::PaymentState_WalletsEntry_DoNotUse>(Arena*);
PROTOBUF_NAMESPACE_CLOSE
namespace com {
namespace elarian {
namespace hera {
namespace proto {

// ===================================================================

class PaymentState_WalletsEntry_DoNotUse : public ::PROTOBUF_NAMESPACE_ID::internal::MapEntry<PaymentState_WalletsEntry_DoNotUse, 
    std::string, ::com::elarian::hera::proto::PaymentBalance,
    ::PROTOBUF_NAMESPACE_ID::internal::WireFormatLite::TYPE_STRING,
    ::PROTOBUF_NAMESPACE_ID::internal::WireFormatLite::TYPE_MESSAGE> {
public:
  typedef ::PROTOBUF_NAMESPACE_ID::internal::MapEntry<PaymentState_WalletsEntry_DoNotUse, 
    std::string, ::com::elarian::hera::proto::PaymentBalance,
    ::PROTOBUF_NAMESPACE_ID::internal::WireFormatLite::TYPE_STRING,
    ::PROTOBUF_NAMESPACE_ID::internal::WireFormatLite::TYPE_MESSAGE> SuperType;
  PaymentState_WalletsEntry_DoNotUse();
  explicit PaymentState_WalletsEntry_DoNotUse(::PROTOBUF_NAMESPACE_ID::Arena* arena);
  void MergeFrom(const PaymentState_WalletsEntry_DoNotUse& other);
  static const PaymentState_WalletsEntry_DoNotUse* internal_default_instance() { return reinterpret_cast<const PaymentState_WalletsEntry_DoNotUse*>(&_PaymentState_WalletsEntry_DoNotUse_default_instance_); }
  static bool ValidateKey(std::string* s) {
    return ::PROTOBUF_NAMESPACE_ID::internal::WireFormatLite::VerifyUtf8String(s->data(), static_cast<int>(s->size()), ::PROTOBUF_NAMESPACE_ID::internal::WireFormatLite::PARSE, "com.elarian.hera.proto.PaymentState.WalletsEntry.key");
 }
  static bool ValidateValue(void*) { return true; }
  void MergeFrom(const ::PROTOBUF_NAMESPACE_ID::Message& other) final;
  ::PROTOBUF_NAMESPACE_ID::Metadata GetMetadata() const final;
  private:
  static ::PROTOBUF_NAMESPACE_ID::Metadata GetMetadataStatic() {
    ::PROTOBUF_NAMESPACE_ID::internal::AssignDescriptors(&::descriptor_table_payment_5fstate_2eproto);
    return ::descriptor_table_payment_5fstate_2eproto.file_level_metadata[0];
  }

  public:
};

// -------------------------------------------------------------------

class PaymentState PROTOBUF_FINAL :
    public ::PROTOBUF_NAMESPACE_ID::Message /* @@protoc_insertion_point(class_definition:com.elarian.hera.proto.PaymentState) */ {
 public:
  inline PaymentState() : PaymentState(nullptr) {}
  virtual ~PaymentState();

  PaymentState(const PaymentState& from);
  PaymentState(PaymentState&& from) noexcept
    : PaymentState() {
    *this = ::std::move(from);
  }

  inline PaymentState& operator=(const PaymentState& from) {
    CopyFrom(from);
    return *this;
  }
  inline PaymentState& operator=(PaymentState&& from) noexcept {
    if (GetArena() == from.GetArena()) {
      if (this != &from) InternalSwap(&from);
    } else {
      CopyFrom(from);
    }
    return *this;
  }

  static const ::PROTOBUF_NAMESPACE_ID::Descriptor* descriptor() {
    return GetDescriptor();
  }
  static const ::PROTOBUF_NAMESPACE_ID::Descriptor* GetDescriptor() {
    return GetMetadataStatic().descriptor;
  }
  static const ::PROTOBUF_NAMESPACE_ID::Reflection* GetReflection() {
    return GetMetadataStatic().reflection;
  }
  static const PaymentState& default_instance();

  static inline const PaymentState* internal_default_instance() {
    return reinterpret_cast<const PaymentState*>(
               &_PaymentState_default_instance_);
  }
  static constexpr int kIndexInFileMessages =
    1;

  friend void swap(PaymentState& a, PaymentState& b) {
    a.Swap(&b);
  }
  inline void Swap(PaymentState* other) {
    if (other == this) return;
    if (GetArena() == other->GetArena()) {
      InternalSwap(other);
    } else {
      ::PROTOBUF_NAMESPACE_ID::internal::GenericSwap(this, other);
    }
  }
  void UnsafeArenaSwap(PaymentState* other) {
    if (other == this) return;
    GOOGLE_DCHECK(GetArena() == other->GetArena());
    InternalSwap(other);
  }

  // implements Message ----------------------------------------------

  inline PaymentState* New() const final {
    return CreateMaybeMessage<PaymentState>(nullptr);
  }

  PaymentState* New(::PROTOBUF_NAMESPACE_ID::Arena* arena) const final {
    return CreateMaybeMessage<PaymentState>(arena);
  }
  void CopyFrom(const ::PROTOBUF_NAMESPACE_ID::Message& from) final;
  void MergeFrom(const ::PROTOBUF_NAMESPACE_ID::Message& from) final;
  void CopyFrom(const PaymentState& from);
  void MergeFrom(const PaymentState& from);
  PROTOBUF_ATTRIBUTE_REINITIALIZES void Clear() final;
  bool IsInitialized() const final;

  size_t ByteSizeLong() const final;
  const char* _InternalParse(const char* ptr, ::PROTOBUF_NAMESPACE_ID::internal::ParseContext* ctx) final;
  ::PROTOBUF_NAMESPACE_ID::uint8* _InternalSerialize(
      ::PROTOBUF_NAMESPACE_ID::uint8* target, ::PROTOBUF_NAMESPACE_ID::io::EpsCopyOutputStream* stream) const final;
  int GetCachedSize() const final { return _cached_size_.Get(); }

  private:
  inline void SharedCtor();
  inline void SharedDtor();
  void SetCachedSize(int size) const final;
  void InternalSwap(PaymentState* other);
  friend class ::PROTOBUF_NAMESPACE_ID::internal::AnyMetadata;
  static ::PROTOBUF_NAMESPACE_ID::StringPiece FullMessageName() {
    return "com.elarian.hera.proto.PaymentState";
  }
  protected:
  explicit PaymentState(::PROTOBUF_NAMESPACE_ID::Arena* arena);
  private:
  static void ArenaDtor(void* object);
  inline void RegisterArenaDtor(::PROTOBUF_NAMESPACE_ID::Arena* arena);
  public:

  ::PROTOBUF_NAMESPACE_ID::Metadata GetMetadata() const final;
  private:
  static ::PROTOBUF_NAMESPACE_ID::Metadata GetMetadataStatic() {
    ::PROTOBUF_NAMESPACE_ID::internal::AssignDescriptors(&::descriptor_table_payment_5fstate_2eproto);
    return ::descriptor_table_payment_5fstate_2eproto.file_level_metadata[kIndexInFileMessages];
  }

  public:

  // nested types ----------------------------------------------------


  // accessors -------------------------------------------------------

  enum : int {
    kCustomerNumbersFieldNumber = 1,
    kChannelNumbersFieldNumber = 2,
    kTransactionLogFieldNumber = 3,
    kPendingTransactionsFieldNumber = 4,
    kWalletsFieldNumber = 5,
  };
  // repeated .com.elarian.hera.proto.CustomerNumber customer_numbers = 1;
  int customer_numbers_size() const;
  private:
  int _internal_customer_numbers_size() const;
  public:
  void clear_customer_numbers();
  ::com::elarian::hera::proto::CustomerNumber* mutable_customer_numbers(int index);
  ::PROTOBUF_NAMESPACE_ID::RepeatedPtrField< ::com::elarian::hera::proto::CustomerNumber >*
      mutable_customer_numbers();
  private:
  const ::com::elarian::hera::proto::CustomerNumber& _internal_customer_numbers(int index) const;
  ::com::elarian::hera::proto::CustomerNumber* _internal_add_customer_numbers();
  public:
  const ::com::elarian::hera::proto::CustomerNumber& customer_numbers(int index) const;
  ::com::elarian::hera::proto::CustomerNumber* add_customer_numbers();
  const ::PROTOBUF_NAMESPACE_ID::RepeatedPtrField< ::com::elarian::hera::proto::CustomerNumber >&
      customer_numbers() const;

  // repeated .com.elarian.hera.proto.PaymentChannelNumber channel_numbers = 2;
  int channel_numbers_size() const;
  private:
  int _internal_channel_numbers_size() const;
  public:
  void clear_channel_numbers();
  ::com::elarian::hera::proto::PaymentChannelNumber* mutable_channel_numbers(int index);
  ::PROTOBUF_NAMESPACE_ID::RepeatedPtrField< ::com::elarian::hera::proto::PaymentChannelNumber >*
      mutable_channel_numbers();
  private:
  const ::com::elarian::hera::proto::PaymentChannelNumber& _internal_channel_numbers(int index) const;
  ::com::elarian::hera::proto::PaymentChannelNumber* _internal_add_channel_numbers();
  public:
  const ::com::elarian::hera::proto::PaymentChannelNumber& channel_numbers(int index) const;
  ::com::elarian::hera::proto::PaymentChannelNumber* add_channel_numbers();
  const ::PROTOBUF_NAMESPACE_ID::RepeatedPtrField< ::com::elarian::hera::proto::PaymentChannelNumber >&
      channel_numbers() const;

  // repeated .com.elarian.hera.proto.PaymentTransaction transaction_log = 3;
  int transaction_log_size() const;
  private:
  int _internal_transaction_log_size() const;
  public:
  void clear_transaction_log();
  ::com::elarian::hera::proto::PaymentTransaction* mutable_transaction_log(int index);
  ::PROTOBUF_NAMESPACE_ID::RepeatedPtrField< ::com::elarian::hera::proto::PaymentTransaction >*
      mutable_transaction_log();
  private:
  const ::com::elarian::hera::proto::PaymentTransaction& _internal_transaction_log(int index) const;
  ::com::elarian::hera::proto::PaymentTransaction* _internal_add_transaction_log();
  public:
  const ::com::elarian::hera::proto::PaymentTransaction& transaction_log(int index) const;
  ::com::elarian::hera::proto::PaymentTransaction* add_transaction_log();
  const ::PROTOBUF_NAMESPACE_ID::RepeatedPtrField< ::com::elarian::hera::proto::PaymentTransaction >&
      transaction_log() const;

  // repeated .com.elarian.hera.proto.PaymentTransaction pending_transactions = 4;
  int pending_transactions_size() const;
  private:
  int _internal_pending_transactions_size() const;
  public:
  void clear_pending_transactions();
  ::com::elarian::hera::proto::PaymentTransaction* mutable_pending_transactions(int index);
  ::PROTOBUF_NAMESPACE_ID::RepeatedPtrField< ::com::elarian::hera::proto::PaymentTransaction >*
      mutable_pending_transactions();
  private:
  const ::com::elarian::hera::proto::PaymentTransaction& _internal_pending_transactions(int index) const;
  ::com::elarian::hera::proto::PaymentTransaction* _internal_add_pending_transactions();
  public:
  const ::com::elarian::hera::proto::PaymentTransaction& pending_transactions(int index) const;
  ::com::elarian::hera::proto::PaymentTransaction* add_pending_transactions();
  const ::PROTOBUF_NAMESPACE_ID::RepeatedPtrField< ::com::elarian::hera::proto::PaymentTransaction >&
      pending_transactions() const;

  // map<string, .com.elarian.hera.proto.PaymentBalance> wallets = 5;
  int wallets_size() const;
  private:
  int _internal_wallets_size() const;
  public:
  void clear_wallets();
  private:
  const ::PROTOBUF_NAMESPACE_ID::Map< std::string, ::com::elarian::hera::proto::PaymentBalance >&
      _internal_wallets() const;
  ::PROTOBUF_NAMESPACE_ID::Map< std::string, ::com::elarian::hera::proto::PaymentBalance >*
      _internal_mutable_wallets();
  public:
  const ::PROTOBUF_NAMESPACE_ID::Map< std::string, ::com::elarian::hera::proto::PaymentBalance >&
      wallets() const;
  ::PROTOBUF_NAMESPACE_ID::Map< std::string, ::com::elarian::hera::proto::PaymentBalance >*
      mutable_wallets();

  // @@protoc_insertion_point(class_scope:com.elarian.hera.proto.PaymentState)
 private:
  class _Internal;

  template <typename T> friend class ::PROTOBUF_NAMESPACE_ID::Arena::InternalHelper;
  typedef void InternalArenaConstructable_;
  typedef void DestructorSkippable_;
  ::PROTOBUF_NAMESPACE_ID::RepeatedPtrField< ::com::elarian::hera::proto::CustomerNumber > customer_numbers_;
  ::PROTOBUF_NAMESPACE_ID::RepeatedPtrField< ::com::elarian::hera::proto::PaymentChannelNumber > channel_numbers_;
  ::PROTOBUF_NAMESPACE_ID::RepeatedPtrField< ::com::elarian::hera::proto::PaymentTransaction > transaction_log_;
  ::PROTOBUF_NAMESPACE_ID::RepeatedPtrField< ::com::elarian::hera::proto::PaymentTransaction > pending_transactions_;
  ::PROTOBUF_NAMESPACE_ID::internal::MapField<
      PaymentState_WalletsEntry_DoNotUse,
      std::string, ::com::elarian::hera::proto::PaymentBalance,
      ::PROTOBUF_NAMESPACE_ID::internal::WireFormatLite::TYPE_STRING,
      ::PROTOBUF_NAMESPACE_ID::internal::WireFormatLite::TYPE_MESSAGE> wallets_;
  mutable ::PROTOBUF_NAMESPACE_ID::internal::CachedSize _cached_size_;
  friend struct ::TableStruct_payment_5fstate_2eproto;
};
// ===================================================================


// ===================================================================

#ifdef __GNUC__
  #pragma GCC diagnostic push
  #pragma GCC diagnostic ignored "-Wstrict-aliasing"
#endif  // __GNUC__
// -------------------------------------------------------------------

// PaymentState

// repeated .com.elarian.hera.proto.CustomerNumber customer_numbers = 1;
inline int PaymentState::_internal_customer_numbers_size() const {
  return customer_numbers_.size();
}
inline int PaymentState::customer_numbers_size() const {
  return _internal_customer_numbers_size();
}
inline ::com::elarian::hera::proto::CustomerNumber* PaymentState::mutable_customer_numbers(int index) {
  // @@protoc_insertion_point(field_mutable:com.elarian.hera.proto.PaymentState.customer_numbers)
  return customer_numbers_.Mutable(index);
}
inline ::PROTOBUF_NAMESPACE_ID::RepeatedPtrField< ::com::elarian::hera::proto::CustomerNumber >*
PaymentState::mutable_customer_numbers() {
  // @@protoc_insertion_point(field_mutable_list:com.elarian.hera.proto.PaymentState.customer_numbers)
  return &customer_numbers_;
}
inline const ::com::elarian::hera::proto::CustomerNumber& PaymentState::_internal_customer_numbers(int index) const {
  return customer_numbers_.Get(index);
}
inline const ::com::elarian::hera::proto::CustomerNumber& PaymentState::customer_numbers(int index) const {
  // @@protoc_insertion_point(field_get:com.elarian.hera.proto.PaymentState.customer_numbers)
  return _internal_customer_numbers(index);
}
inline ::com::elarian::hera::proto::CustomerNumber* PaymentState::_internal_add_customer_numbers() {
  return customer_numbers_.Add();
}
inline ::com::elarian::hera::proto::CustomerNumber* PaymentState::add_customer_numbers() {
  // @@protoc_insertion_point(field_add:com.elarian.hera.proto.PaymentState.customer_numbers)
  return _internal_add_customer_numbers();
}
inline const ::PROTOBUF_NAMESPACE_ID::RepeatedPtrField< ::com::elarian::hera::proto::CustomerNumber >&
PaymentState::customer_numbers() const {
  // @@protoc_insertion_point(field_list:com.elarian.hera.proto.PaymentState.customer_numbers)
  return customer_numbers_;
}

// repeated .com.elarian.hera.proto.PaymentChannelNumber channel_numbers = 2;
inline int PaymentState::_internal_channel_numbers_size() const {
  return channel_numbers_.size();
}
inline int PaymentState::channel_numbers_size() const {
  return _internal_channel_numbers_size();
}
inline ::com::elarian::hera::proto::PaymentChannelNumber* PaymentState::mutable_channel_numbers(int index) {
  // @@protoc_insertion_point(field_mutable:com.elarian.hera.proto.PaymentState.channel_numbers)
  return channel_numbers_.Mutable(index);
}
inline ::PROTOBUF_NAMESPACE_ID::RepeatedPtrField< ::com::elarian::hera::proto::PaymentChannelNumber >*
PaymentState::mutable_channel_numbers() {
  // @@protoc_insertion_point(field_mutable_list:com.elarian.hera.proto.PaymentState.channel_numbers)
  return &channel_numbers_;
}
inline const ::com::elarian::hera::proto::PaymentChannelNumber& PaymentState::_internal_channel_numbers(int index) const {
  return channel_numbers_.Get(index);
}
inline const ::com::elarian::hera::proto::PaymentChannelNumber& PaymentState::channel_numbers(int index) const {
  // @@protoc_insertion_point(field_get:com.elarian.hera.proto.PaymentState.channel_numbers)
  return _internal_channel_numbers(index);
}
inline ::com::elarian::hera::proto::PaymentChannelNumber* PaymentState::_internal_add_channel_numbers() {
  return channel_numbers_.Add();
}
inline ::com::elarian::hera::proto::PaymentChannelNumber* PaymentState::add_channel_numbers() {
  // @@protoc_insertion_point(field_add:com.elarian.hera.proto.PaymentState.channel_numbers)
  return _internal_add_channel_numbers();
}
inline const ::PROTOBUF_NAMESPACE_ID::RepeatedPtrField< ::com::elarian::hera::proto::PaymentChannelNumber >&
PaymentState::channel_numbers() const {
  // @@protoc_insertion_point(field_list:com.elarian.hera.proto.PaymentState.channel_numbers)
  return channel_numbers_;
}

// repeated .com.elarian.hera.proto.PaymentTransaction transaction_log = 3;
inline int PaymentState::_internal_transaction_log_size() const {
  return transaction_log_.size();
}
inline int PaymentState::transaction_log_size() const {
  return _internal_transaction_log_size();
}
inline ::com::elarian::hera::proto::PaymentTransaction* PaymentState::mutable_transaction_log(int index) {
  // @@protoc_insertion_point(field_mutable:com.elarian.hera.proto.PaymentState.transaction_log)
  return transaction_log_.Mutable(index);
}
inline ::PROTOBUF_NAMESPACE_ID::RepeatedPtrField< ::com::elarian::hera::proto::PaymentTransaction >*
PaymentState::mutable_transaction_log() {
  // @@protoc_insertion_point(field_mutable_list:com.elarian.hera.proto.PaymentState.transaction_log)
  return &transaction_log_;
}
inline const ::com::elarian::hera::proto::PaymentTransaction& PaymentState::_internal_transaction_log(int index) const {
  return transaction_log_.Get(index);
}
inline const ::com::elarian::hera::proto::PaymentTransaction& PaymentState::transaction_log(int index) const {
  // @@protoc_insertion_point(field_get:com.elarian.hera.proto.PaymentState.transaction_log)
  return _internal_transaction_log(index);
}
inline ::com::elarian::hera::proto::PaymentTransaction* PaymentState::_internal_add_transaction_log() {
  return transaction_log_.Add();
}
inline ::com::elarian::hera::proto::PaymentTransaction* PaymentState::add_transaction_log() {
  // @@protoc_insertion_point(field_add:com.elarian.hera.proto.PaymentState.transaction_log)
  return _internal_add_transaction_log();
}
inline const ::PROTOBUF_NAMESPACE_ID::RepeatedPtrField< ::com::elarian::hera::proto::PaymentTransaction >&
PaymentState::transaction_log() const {
  // @@protoc_insertion_point(field_list:com.elarian.hera.proto.PaymentState.transaction_log)
  return transaction_log_;
}

// repeated .com.elarian.hera.proto.PaymentTransaction pending_transactions = 4;
inline int PaymentState::_internal_pending_transactions_size() const {
  return pending_transactions_.size();
}
inline int PaymentState::pending_transactions_size() const {
  return _internal_pending_transactions_size();
}
inline ::com::elarian::hera::proto::PaymentTransaction* PaymentState::mutable_pending_transactions(int index) {
  // @@protoc_insertion_point(field_mutable:com.elarian.hera.proto.PaymentState.pending_transactions)
  return pending_transactions_.Mutable(index);
}
inline ::PROTOBUF_NAMESPACE_ID::RepeatedPtrField< ::com::elarian::hera::proto::PaymentTransaction >*
PaymentState::mutable_pending_transactions() {
  // @@protoc_insertion_point(field_mutable_list:com.elarian.hera.proto.PaymentState.pending_transactions)
  return &pending_transactions_;
}
inline const ::com::elarian::hera::proto::PaymentTransaction& PaymentState::_internal_pending_transactions(int index) const {
  return pending_transactions_.Get(index);
}
inline const ::com::elarian::hera::proto::PaymentTransaction& PaymentState::pending_transactions(int index) const {
  // @@protoc_insertion_point(field_get:com.elarian.hera.proto.PaymentState.pending_transactions)
  return _internal_pending_transactions(index);
}
inline ::com::elarian::hera::proto::PaymentTransaction* PaymentState::_internal_add_pending_transactions() {
  return pending_transactions_.Add();
}
inline ::com::elarian::hera::proto::PaymentTransaction* PaymentState::add_pending_transactions() {
  // @@protoc_insertion_point(field_add:com.elarian.hera.proto.PaymentState.pending_transactions)
  return _internal_add_pending_transactions();
}
inline const ::PROTOBUF_NAMESPACE_ID::RepeatedPtrField< ::com::elarian::hera::proto::PaymentTransaction >&
PaymentState::pending_transactions() const {
  // @@protoc_insertion_point(field_list:com.elarian.hera.proto.PaymentState.pending_transactions)
  return pending_transactions_;
}

// map<string, .com.elarian.hera.proto.PaymentBalance> wallets = 5;
inline int PaymentState::_internal_wallets_size() const {
  return wallets_.size();
}
inline int PaymentState::wallets_size() const {
  return _internal_wallets_size();
}
inline const ::PROTOBUF_NAMESPACE_ID::Map< std::string, ::com::elarian::hera::proto::PaymentBalance >&
PaymentState::_internal_wallets() const {
  return wallets_.GetMap();
}
inline const ::PROTOBUF_NAMESPACE_ID::Map< std::string, ::com::elarian::hera::proto::PaymentBalance >&
PaymentState::wallets() const {
  // @@protoc_insertion_point(field_map:com.elarian.hera.proto.PaymentState.wallets)
  return _internal_wallets();
}
inline ::PROTOBUF_NAMESPACE_ID::Map< std::string, ::com::elarian::hera::proto::PaymentBalance >*
PaymentState::_internal_mutable_wallets() {
  return wallets_.MutableMap();
}
inline ::PROTOBUF_NAMESPACE_ID::Map< std::string, ::com::elarian::hera::proto::PaymentBalance >*
PaymentState::mutable_wallets() {
  // @@protoc_insertion_point(field_mutable_map:com.elarian.hera.proto.PaymentState.wallets)
  return _internal_mutable_wallets();
}

#ifdef __GNUC__
  #pragma GCC diagnostic pop
#endif  // __GNUC__
// -------------------------------------------------------------------


// @@protoc_insertion_point(namespace_scope)

}  // namespace proto
}  // namespace hera
}  // namespace elarian
}  // namespace com

// @@protoc_insertion_point(global_scope)

#include <google/protobuf/port_undef.inc>
#endif  // GOOGLE_PROTOBUF_INCLUDED_GOOGLE_PROTOBUF_INCLUDED_payment_5fstate_2eproto
