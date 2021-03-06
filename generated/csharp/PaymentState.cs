// <auto-generated>
//     Generated by the protocol buffer compiler.  DO NOT EDIT!
//     source: payment_state.proto
// </auto-generated>
#pragma warning disable 1591, 0612, 3021
#region Designer generated code

using pb = global::Google.Protobuf;
using pbc = global::Google.Protobuf.Collections;
using pbr = global::Google.Protobuf.Reflection;
using scg = global::System.Collections.Generic;
namespace Com.Elarian.Hera.Proto {

  /// <summary>Holder for reflection information generated from payment_state.proto</summary>
  public static partial class PaymentStateReflection {

    #region Descriptor
    /// <summary>File descriptor for payment_state.proto</summary>
    public static pbr::FileDescriptor Descriptor {
      get { return descriptor; }
    }
    private static pbr::FileDescriptor descriptor;

    static PaymentStateReflection() {
      byte[] descriptorData = global::System.Convert.FromBase64String(
          string.Concat(
            "ChNwYXltZW50X3N0YXRlLnByb3RvEhZjb20uZWxhcmlhbi5oZXJhLnByb3Rv",
            "GhJjb21tb25fbW9kZWwucHJvdG8aE3BheW1lbnRfbW9kZWwucHJvdG8iwgMK",
            "DFBheW1lbnRTdGF0ZRJAChBjdXN0b21lcl9udW1iZXJzGAEgAygLMiYuY29t",
            "LmVsYXJpYW4uaGVyYS5wcm90by5DdXN0b21lck51bWJlchJFCg9jaGFubmVs",
            "X251bWJlcnMYAiADKAsyLC5jb20uZWxhcmlhbi5oZXJhLnByb3RvLlBheW1l",
            "bnRDaGFubmVsTnVtYmVyEkMKD3RyYW5zYWN0aW9uX2xvZxgDIAMoCzIqLmNv",
            "bS5lbGFyaWFuLmhlcmEucHJvdG8uUGF5bWVudFRyYW5zYWN0aW9uEkgKFHBl",
            "bmRpbmdfdHJhbnNhY3Rpb25zGAQgAygLMiouY29tLmVsYXJpYW4uaGVyYS5w",
            "cm90by5QYXltZW50VHJhbnNhY3Rpb24SQgoHd2FsbGV0cxgFIAMoCzIxLmNv",
            "bS5lbGFyaWFuLmhlcmEucHJvdG8uUGF5bWVudFN0YXRlLldhbGxldHNFbnRy",
            "eRpWCgxXYWxsZXRzRW50cnkSCwoDa2V5GAEgASgJEjUKBXZhbHVlGAIgASgL",
            "MiYuY29tLmVsYXJpYW4uaGVyYS5wcm90by5QYXltZW50QmFsYW5jZToCOAFi",
            "BnByb3RvMw=="));
      descriptor = pbr::FileDescriptor.FromGeneratedCode(descriptorData,
          new pbr::FileDescriptor[] { global::Com.Elarian.Hera.Proto.CommonModelReflection.Descriptor, global::Com.Elarian.Hera.Proto.PaymentModelReflection.Descriptor, },
          new pbr::GeneratedClrTypeInfo(null, null, new pbr::GeneratedClrTypeInfo[] {
            new pbr::GeneratedClrTypeInfo(typeof(global::Com.Elarian.Hera.Proto.PaymentState), global::Com.Elarian.Hera.Proto.PaymentState.Parser, new[]{ "CustomerNumbers", "ChannelNumbers", "TransactionLog", "PendingTransactions", "Wallets" }, null, null, null, new pbr::GeneratedClrTypeInfo[] { null, })
          }));
    }
    #endregion

  }
  #region Messages
  public sealed partial class PaymentState : pb::IMessage<PaymentState>
  #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
      , pb::IBufferMessage
  #endif
  {
    private static readonly pb::MessageParser<PaymentState> _parser = new pb::MessageParser<PaymentState>(() => new PaymentState());
    private pb::UnknownFieldSet _unknownFields;
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public static pb::MessageParser<PaymentState> Parser { get { return _parser; } }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public static pbr::MessageDescriptor Descriptor {
      get { return global::Com.Elarian.Hera.Proto.PaymentStateReflection.Descriptor.MessageTypes[0]; }
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    pbr::MessageDescriptor pb::IMessage.Descriptor {
      get { return Descriptor; }
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public PaymentState() {
      OnConstruction();
    }

    partial void OnConstruction();

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public PaymentState(PaymentState other) : this() {
      customerNumbers_ = other.customerNumbers_.Clone();
      channelNumbers_ = other.channelNumbers_.Clone();
      transactionLog_ = other.transactionLog_.Clone();
      pendingTransactions_ = other.pendingTransactions_.Clone();
      wallets_ = other.wallets_.Clone();
      _unknownFields = pb::UnknownFieldSet.Clone(other._unknownFields);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public PaymentState Clone() {
      return new PaymentState(this);
    }

    /// <summary>Field number for the "customer_numbers" field.</summary>
    public const int CustomerNumbersFieldNumber = 1;
    private static readonly pb::FieldCodec<global::Com.Elarian.Hera.Proto.CustomerNumber> _repeated_customerNumbers_codec
        = pb::FieldCodec.ForMessage(10, global::Com.Elarian.Hera.Proto.CustomerNumber.Parser);
    private readonly pbc::RepeatedField<global::Com.Elarian.Hera.Proto.CustomerNumber> customerNumbers_ = new pbc::RepeatedField<global::Com.Elarian.Hera.Proto.CustomerNumber>();
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public pbc::RepeatedField<global::Com.Elarian.Hera.Proto.CustomerNumber> CustomerNumbers {
      get { return customerNumbers_; }
    }

    /// <summary>Field number for the "channel_numbers" field.</summary>
    public const int ChannelNumbersFieldNumber = 2;
    private static readonly pb::FieldCodec<global::Com.Elarian.Hera.Proto.PaymentChannelNumber> _repeated_channelNumbers_codec
        = pb::FieldCodec.ForMessage(18, global::Com.Elarian.Hera.Proto.PaymentChannelNumber.Parser);
    private readonly pbc::RepeatedField<global::Com.Elarian.Hera.Proto.PaymentChannelNumber> channelNumbers_ = new pbc::RepeatedField<global::Com.Elarian.Hera.Proto.PaymentChannelNumber>();
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public pbc::RepeatedField<global::Com.Elarian.Hera.Proto.PaymentChannelNumber> ChannelNumbers {
      get { return channelNumbers_; }
    }

    /// <summary>Field number for the "transaction_log" field.</summary>
    public const int TransactionLogFieldNumber = 3;
    private static readonly pb::FieldCodec<global::Com.Elarian.Hera.Proto.PaymentTransaction> _repeated_transactionLog_codec
        = pb::FieldCodec.ForMessage(26, global::Com.Elarian.Hera.Proto.PaymentTransaction.Parser);
    private readonly pbc::RepeatedField<global::Com.Elarian.Hera.Proto.PaymentTransaction> transactionLog_ = new pbc::RepeatedField<global::Com.Elarian.Hera.Proto.PaymentTransaction>();
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public pbc::RepeatedField<global::Com.Elarian.Hera.Proto.PaymentTransaction> TransactionLog {
      get { return transactionLog_; }
    }

    /// <summary>Field number for the "pending_transactions" field.</summary>
    public const int PendingTransactionsFieldNumber = 4;
    private static readonly pb::FieldCodec<global::Com.Elarian.Hera.Proto.PaymentTransaction> _repeated_pendingTransactions_codec
        = pb::FieldCodec.ForMessage(34, global::Com.Elarian.Hera.Proto.PaymentTransaction.Parser);
    private readonly pbc::RepeatedField<global::Com.Elarian.Hera.Proto.PaymentTransaction> pendingTransactions_ = new pbc::RepeatedField<global::Com.Elarian.Hera.Proto.PaymentTransaction>();
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public pbc::RepeatedField<global::Com.Elarian.Hera.Proto.PaymentTransaction> PendingTransactions {
      get { return pendingTransactions_; }
    }

    /// <summary>Field number for the "wallets" field.</summary>
    public const int WalletsFieldNumber = 5;
    private static readonly pbc::MapField<string, global::Com.Elarian.Hera.Proto.PaymentBalance>.Codec _map_wallets_codec
        = new pbc::MapField<string, global::Com.Elarian.Hera.Proto.PaymentBalance>.Codec(pb::FieldCodec.ForString(10, ""), pb::FieldCodec.ForMessage(18, global::Com.Elarian.Hera.Proto.PaymentBalance.Parser), 42);
    private readonly pbc::MapField<string, global::Com.Elarian.Hera.Proto.PaymentBalance> wallets_ = new pbc::MapField<string, global::Com.Elarian.Hera.Proto.PaymentBalance>();
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public pbc::MapField<string, global::Com.Elarian.Hera.Proto.PaymentBalance> Wallets {
      get { return wallets_; }
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public override bool Equals(object other) {
      return Equals(other as PaymentState);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public bool Equals(PaymentState other) {
      if (ReferenceEquals(other, null)) {
        return false;
      }
      if (ReferenceEquals(other, this)) {
        return true;
      }
      if(!customerNumbers_.Equals(other.customerNumbers_)) return false;
      if(!channelNumbers_.Equals(other.channelNumbers_)) return false;
      if(!transactionLog_.Equals(other.transactionLog_)) return false;
      if(!pendingTransactions_.Equals(other.pendingTransactions_)) return false;
      if (!Wallets.Equals(other.Wallets)) return false;
      return Equals(_unknownFields, other._unknownFields);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public override int GetHashCode() {
      int hash = 1;
      hash ^= customerNumbers_.GetHashCode();
      hash ^= channelNumbers_.GetHashCode();
      hash ^= transactionLog_.GetHashCode();
      hash ^= pendingTransactions_.GetHashCode();
      hash ^= Wallets.GetHashCode();
      if (_unknownFields != null) {
        hash ^= _unknownFields.GetHashCode();
      }
      return hash;
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public override string ToString() {
      return pb::JsonFormatter.ToDiagnosticString(this);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public void WriteTo(pb::CodedOutputStream output) {
    #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
      output.WriteRawMessage(this);
    #else
      customerNumbers_.WriteTo(output, _repeated_customerNumbers_codec);
      channelNumbers_.WriteTo(output, _repeated_channelNumbers_codec);
      transactionLog_.WriteTo(output, _repeated_transactionLog_codec);
      pendingTransactions_.WriteTo(output, _repeated_pendingTransactions_codec);
      wallets_.WriteTo(output, _map_wallets_codec);
      if (_unknownFields != null) {
        _unknownFields.WriteTo(output);
      }
    #endif
    }

    #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    void pb::IBufferMessage.InternalWriteTo(ref pb::WriteContext output) {
      customerNumbers_.WriteTo(ref output, _repeated_customerNumbers_codec);
      channelNumbers_.WriteTo(ref output, _repeated_channelNumbers_codec);
      transactionLog_.WriteTo(ref output, _repeated_transactionLog_codec);
      pendingTransactions_.WriteTo(ref output, _repeated_pendingTransactions_codec);
      wallets_.WriteTo(ref output, _map_wallets_codec);
      if (_unknownFields != null) {
        _unknownFields.WriteTo(ref output);
      }
    }
    #endif

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public int CalculateSize() {
      int size = 0;
      size += customerNumbers_.CalculateSize(_repeated_customerNumbers_codec);
      size += channelNumbers_.CalculateSize(_repeated_channelNumbers_codec);
      size += transactionLog_.CalculateSize(_repeated_transactionLog_codec);
      size += pendingTransactions_.CalculateSize(_repeated_pendingTransactions_codec);
      size += wallets_.CalculateSize(_map_wallets_codec);
      if (_unknownFields != null) {
        size += _unknownFields.CalculateSize();
      }
      return size;
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public void MergeFrom(PaymentState other) {
      if (other == null) {
        return;
      }
      customerNumbers_.Add(other.customerNumbers_);
      channelNumbers_.Add(other.channelNumbers_);
      transactionLog_.Add(other.transactionLog_);
      pendingTransactions_.Add(other.pendingTransactions_);
      wallets_.Add(other.wallets_);
      _unknownFields = pb::UnknownFieldSet.MergeFrom(_unknownFields, other._unknownFields);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public void MergeFrom(pb::CodedInputStream input) {
    #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
      input.ReadRawMessage(this);
    #else
      uint tag;
      while ((tag = input.ReadTag()) != 0) {
        switch(tag) {
          default:
            _unknownFields = pb::UnknownFieldSet.MergeFieldFrom(_unknownFields, input);
            break;
          case 10: {
            customerNumbers_.AddEntriesFrom(input, _repeated_customerNumbers_codec);
            break;
          }
          case 18: {
            channelNumbers_.AddEntriesFrom(input, _repeated_channelNumbers_codec);
            break;
          }
          case 26: {
            transactionLog_.AddEntriesFrom(input, _repeated_transactionLog_codec);
            break;
          }
          case 34: {
            pendingTransactions_.AddEntriesFrom(input, _repeated_pendingTransactions_codec);
            break;
          }
          case 42: {
            wallets_.AddEntriesFrom(input, _map_wallets_codec);
            break;
          }
        }
      }
    #endif
    }

    #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    void pb::IBufferMessage.InternalMergeFrom(ref pb::ParseContext input) {
      uint tag;
      while ((tag = input.ReadTag()) != 0) {
        switch(tag) {
          default:
            _unknownFields = pb::UnknownFieldSet.MergeFieldFrom(_unknownFields, ref input);
            break;
          case 10: {
            customerNumbers_.AddEntriesFrom(ref input, _repeated_customerNumbers_codec);
            break;
          }
          case 18: {
            channelNumbers_.AddEntriesFrom(ref input, _repeated_channelNumbers_codec);
            break;
          }
          case 26: {
            transactionLog_.AddEntriesFrom(ref input, _repeated_transactionLog_codec);
            break;
          }
          case 34: {
            pendingTransactions_.AddEntriesFrom(ref input, _repeated_pendingTransactions_codec);
            break;
          }
          case 42: {
            wallets_.AddEntriesFrom(ref input, _map_wallets_codec);
            break;
          }
        }
      }
    }
    #endif

  }

  #endregion

}

#endregion Designer generated code
