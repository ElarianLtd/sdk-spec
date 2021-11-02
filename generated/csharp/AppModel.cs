// <auto-generated>
//     Generated by the protocol buffer compiler.  DO NOT EDIT!
//     source: app_model.proto
// </auto-generated>
#pragma warning disable 1591, 0612, 3021
#region Designer generated code

using pb = global::Google.Protobuf;
using pbc = global::Google.Protobuf.Collections;
using pbr = global::Google.Protobuf.Reflection;
using scg = global::System.Collections.Generic;
namespace Com.Elarian.Hera.Proto {

  /// <summary>Holder for reflection information generated from app_model.proto</summary>
  public static partial class AppModelReflection {

    #region Descriptor
    /// <summary>File descriptor for app_model.proto</summary>
    public static pbr::FileDescriptor Descriptor {
      get { return descriptor; }
    }
    private static pbr::FileDescriptor descriptor;

    static AppModelReflection() {
      byte[] descriptorData = global::System.Convert.FromBase64String(
          string.Concat(
            "Cg9hcHBfbW9kZWwucHJvdG8SFmNvbS5lbGFyaWFuLmhlcmEucHJvdG8aHmdv",
            "b2dsZS9wcm90b2J1Zi93cmFwcGVycy5wcm90bxoeZ29vZ2xlL3Byb3RvYnVm",
            "L2R1cmF0aW9uLnByb3RvGh9nb29nbGUvcHJvdG9idWYvdGltZXN0YW1wLnBy",
            "b3RvIqoBChBDdXN0b21lclJlbWluZGVyEgsKA2tleRgBIAEoCRItCglyZW1p",
            "bmRfYXQYAiABKAsyGi5nb29nbGUucHJvdG9idWYuVGltZXN0YW1wEisKCGlu",
            "dGVydmFsGAMgASgLMhkuZ29vZ2xlLnByb3RvYnVmLkR1cmF0aW9uEi0KB3Bh",
            "eWxvYWQYBCABKAsyHC5nb29nbGUucHJvdG9idWYuU3RyaW5nVmFsdWViBnBy",
            "b3RvMw=="));
      descriptor = pbr::FileDescriptor.FromGeneratedCode(descriptorData,
          new pbr::FileDescriptor[] { global::Google.Protobuf.WellKnownTypes.WrappersReflection.Descriptor, global::Google.Protobuf.WellKnownTypes.DurationReflection.Descriptor, global::Google.Protobuf.WellKnownTypes.TimestampReflection.Descriptor, },
          new pbr::GeneratedClrTypeInfo(null, null, new pbr::GeneratedClrTypeInfo[] {
            new pbr::GeneratedClrTypeInfo(typeof(global::Com.Elarian.Hera.Proto.CustomerReminder), global::Com.Elarian.Hera.Proto.CustomerReminder.Parser, new[]{ "Key", "RemindAt", "Interval", "Payload" }, null, null, null, null)
          }));
    }
    #endregion

  }
  #region Messages
  public sealed partial class CustomerReminder : pb::IMessage<CustomerReminder>
  #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
      , pb::IBufferMessage
  #endif
  {
    private static readonly pb::MessageParser<CustomerReminder> _parser = new pb::MessageParser<CustomerReminder>(() => new CustomerReminder());
    private pb::UnknownFieldSet _unknownFields;
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public static pb::MessageParser<CustomerReminder> Parser { get { return _parser; } }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public static pbr::MessageDescriptor Descriptor {
      get { return global::Com.Elarian.Hera.Proto.AppModelReflection.Descriptor.MessageTypes[0]; }
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    pbr::MessageDescriptor pb::IMessage.Descriptor {
      get { return Descriptor; }
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public CustomerReminder() {
      OnConstruction();
    }

    partial void OnConstruction();

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public CustomerReminder(CustomerReminder other) : this() {
      key_ = other.key_;
      remindAt_ = other.remindAt_ != null ? other.remindAt_.Clone() : null;
      interval_ = other.interval_ != null ? other.interval_.Clone() : null;
      Payload = other.Payload;
      _unknownFields = pb::UnknownFieldSet.Clone(other._unknownFields);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public CustomerReminder Clone() {
      return new CustomerReminder(this);
    }

    /// <summary>Field number for the "key" field.</summary>
    public const int KeyFieldNumber = 1;
    private string key_ = "";
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public string Key {
      get { return key_; }
      set {
        key_ = pb::ProtoPreconditions.CheckNotNull(value, "value");
      }
    }

    /// <summary>Field number for the "remind_at" field.</summary>
    public const int RemindAtFieldNumber = 2;
    private global::Google.Protobuf.WellKnownTypes.Timestamp remindAt_;
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public global::Google.Protobuf.WellKnownTypes.Timestamp RemindAt {
      get { return remindAt_; }
      set {
        remindAt_ = value;
      }
    }

    /// <summary>Field number for the "interval" field.</summary>
    public const int IntervalFieldNumber = 3;
    private global::Google.Protobuf.WellKnownTypes.Duration interval_;
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public global::Google.Protobuf.WellKnownTypes.Duration Interval {
      get { return interval_; }
      set {
        interval_ = value;
      }
    }

    /// <summary>Field number for the "payload" field.</summary>
    public const int PayloadFieldNumber = 4;
    private static readonly pb::FieldCodec<string> _single_payload_codec = pb::FieldCodec.ForClassWrapper<string>(34);
    private string payload_;
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public string Payload {
      get { return payload_; }
      set {
        payload_ = value;
      }
    }


    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public override bool Equals(object other) {
      return Equals(other as CustomerReminder);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public bool Equals(CustomerReminder other) {
      if (ReferenceEquals(other, null)) {
        return false;
      }
      if (ReferenceEquals(other, this)) {
        return true;
      }
      if (Key != other.Key) return false;
      if (!object.Equals(RemindAt, other.RemindAt)) return false;
      if (!object.Equals(Interval, other.Interval)) return false;
      if (Payload != other.Payload) return false;
      return Equals(_unknownFields, other._unknownFields);
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public override int GetHashCode() {
      int hash = 1;
      if (Key.Length != 0) hash ^= Key.GetHashCode();
      if (remindAt_ != null) hash ^= RemindAt.GetHashCode();
      if (interval_ != null) hash ^= Interval.GetHashCode();
      if (payload_ != null) hash ^= Payload.GetHashCode();
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
      if (Key.Length != 0) {
        output.WriteRawTag(10);
        output.WriteString(Key);
      }
      if (remindAt_ != null) {
        output.WriteRawTag(18);
        output.WriteMessage(RemindAt);
      }
      if (interval_ != null) {
        output.WriteRawTag(26);
        output.WriteMessage(Interval);
      }
      if (payload_ != null) {
        _single_payload_codec.WriteTagAndValue(output, Payload);
      }
      if (_unknownFields != null) {
        _unknownFields.WriteTo(output);
      }
    #endif
    }

    #if !GOOGLE_PROTOBUF_REFSTRUCT_COMPATIBILITY_MODE
    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    void pb::IBufferMessage.InternalWriteTo(ref pb::WriteContext output) {
      if (Key.Length != 0) {
        output.WriteRawTag(10);
        output.WriteString(Key);
      }
      if (remindAt_ != null) {
        output.WriteRawTag(18);
        output.WriteMessage(RemindAt);
      }
      if (interval_ != null) {
        output.WriteRawTag(26);
        output.WriteMessage(Interval);
      }
      if (payload_ != null) {
        _single_payload_codec.WriteTagAndValue(ref output, Payload);
      }
      if (_unknownFields != null) {
        _unknownFields.WriteTo(ref output);
      }
    }
    #endif

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public int CalculateSize() {
      int size = 0;
      if (Key.Length != 0) {
        size += 1 + pb::CodedOutputStream.ComputeStringSize(Key);
      }
      if (remindAt_ != null) {
        size += 1 + pb::CodedOutputStream.ComputeMessageSize(RemindAt);
      }
      if (interval_ != null) {
        size += 1 + pb::CodedOutputStream.ComputeMessageSize(Interval);
      }
      if (payload_ != null) {
        size += _single_payload_codec.CalculateSizeWithTag(Payload);
      }
      if (_unknownFields != null) {
        size += _unknownFields.CalculateSize();
      }
      return size;
    }

    [global::System.Diagnostics.DebuggerNonUserCodeAttribute]
    public void MergeFrom(CustomerReminder other) {
      if (other == null) {
        return;
      }
      if (other.Key.Length != 0) {
        Key = other.Key;
      }
      if (other.remindAt_ != null) {
        if (remindAt_ == null) {
          RemindAt = new global::Google.Protobuf.WellKnownTypes.Timestamp();
        }
        RemindAt.MergeFrom(other.RemindAt);
      }
      if (other.interval_ != null) {
        if (interval_ == null) {
          Interval = new global::Google.Protobuf.WellKnownTypes.Duration();
        }
        Interval.MergeFrom(other.Interval);
      }
      if (other.payload_ != null) {
        if (payload_ == null || other.Payload != "") {
          Payload = other.Payload;
        }
      }
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
            Key = input.ReadString();
            break;
          }
          case 18: {
            if (remindAt_ == null) {
              RemindAt = new global::Google.Protobuf.WellKnownTypes.Timestamp();
            }
            input.ReadMessage(RemindAt);
            break;
          }
          case 26: {
            if (interval_ == null) {
              Interval = new global::Google.Protobuf.WellKnownTypes.Duration();
            }
            input.ReadMessage(Interval);
            break;
          }
          case 34: {
            string value = _single_payload_codec.Read(input);
            if (payload_ == null || value != "") {
              Payload = value;
            }
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
            Key = input.ReadString();
            break;
          }
          case 18: {
            if (remindAt_ == null) {
              RemindAt = new global::Google.Protobuf.WellKnownTypes.Timestamp();
            }
            input.ReadMessage(RemindAt);
            break;
          }
          case 26: {
            if (interval_ == null) {
              Interval = new global::Google.Protobuf.WellKnownTypes.Duration();
            }
            input.ReadMessage(Interval);
            break;
          }
          case 34: {
            string value = _single_payload_codec.Read(ref input);
            if (payload_ == null || value != "") {
              Payload = value;
            }
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
