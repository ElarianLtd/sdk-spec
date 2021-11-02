// Code generated by protoc-gen-go. DO NOT EDIT.
// versions:
// 	protoc-gen-go v1.23.0
// 	protoc        v3.14.0
// source: common_model.proto

package com_elarian_hera_proto

import (
	proto "github.com/golang/protobuf/proto"
	protoreflect "google.golang.org/protobuf/reflect/protoreflect"
	protoimpl "google.golang.org/protobuf/runtime/protoimpl"
	timestamppb "google.golang.org/protobuf/types/known/timestamppb"
	wrapperspb "google.golang.org/protobuf/types/known/wrapperspb"
	reflect "reflect"
	sync "sync"
)

const (
	// Verify that this generated code is sufficiently up-to-date.
	_ = protoimpl.EnforceVersion(20 - protoimpl.MinVersion)
	// Verify that runtime/protoimpl is sufficiently up-to-date.
	_ = protoimpl.EnforceVersion(protoimpl.MaxVersion - 20)
)

// This is a compile-time assertion that a sufficiently up-to-date version
// of the legacy proto package is being used.
const _ = proto.ProtoPackageIsVersion4

type CustomerNumberProvider int32

const (
	CustomerNumberProvider_CUSTOMER_NUMBER_PROVIDER_UNSPECIFIED CustomerNumberProvider = 0
	CustomerNumberProvider_CUSTOMER_NUMBER_PROVIDER_FACEBOOK    CustomerNumberProvider = 1
	CustomerNumberProvider_CUSTOMER_NUMBER_PROVIDER_CELLULAR    CustomerNumberProvider = 2
	CustomerNumberProvider_CUSTOMER_NUMBER_PROVIDER_TELEGRAM    CustomerNumberProvider = 3
	CustomerNumberProvider_CUSTOMER_NUMBER_PROVIDER_APP         CustomerNumberProvider = 4
	CustomerNumberProvider_CUSTOMER_NUMBER_PROVIDER_EMAIL       CustomerNumberProvider = 5
)

// Enum value maps for CustomerNumberProvider.
var (
	CustomerNumberProvider_name = map[int32]string{
		0: "CUSTOMER_NUMBER_PROVIDER_UNSPECIFIED",
		1: "CUSTOMER_NUMBER_PROVIDER_FACEBOOK",
		2: "CUSTOMER_NUMBER_PROVIDER_CELLULAR",
		3: "CUSTOMER_NUMBER_PROVIDER_TELEGRAM",
		4: "CUSTOMER_NUMBER_PROVIDER_APP",
		5: "CUSTOMER_NUMBER_PROVIDER_EMAIL",
	}
	CustomerNumberProvider_value = map[string]int32{
		"CUSTOMER_NUMBER_PROVIDER_UNSPECIFIED": 0,
		"CUSTOMER_NUMBER_PROVIDER_FACEBOOK":    1,
		"CUSTOMER_NUMBER_PROVIDER_CELLULAR":    2,
		"CUSTOMER_NUMBER_PROVIDER_TELEGRAM":    3,
		"CUSTOMER_NUMBER_PROVIDER_APP":         4,
		"CUSTOMER_NUMBER_PROVIDER_EMAIL":       5,
	}
)

func (x CustomerNumberProvider) Enum() *CustomerNumberProvider {
	p := new(CustomerNumberProvider)
	*p = x
	return p
}

func (x CustomerNumberProvider) String() string {
	return protoimpl.X.EnumStringOf(x.Descriptor(), protoreflect.EnumNumber(x))
}

func (CustomerNumberProvider) Descriptor() protoreflect.EnumDescriptor {
	return file_common_model_proto_enumTypes[0].Descriptor()
}

func (CustomerNumberProvider) Type() protoreflect.EnumType {
	return &file_common_model_proto_enumTypes[0]
}

func (x CustomerNumberProvider) Number() protoreflect.EnumNumber {
	return protoreflect.EnumNumber(x)
}

// Deprecated: Use CustomerNumberProvider.Descriptor instead.
func (CustomerNumberProvider) EnumDescriptor() ([]byte, []int) {
	return file_common_model_proto_rawDescGZIP(), []int{0}
}

type ChannelNumberProvider int32

const (
	ChannelNumberProvider_CHANNEL_NUMBER_PROVIDER_UNSPECIFIED ChannelNumberProvider = 0
	ChannelNumberProvider_CHANNEL_NUMBER_PROVIDER_AT          ChannelNumberProvider = 1
	ChannelNumberProvider_CHANNEL_NUMBER_PROVIDER_TWILIO      ChannelNumberProvider = 2
	ChannelNumberProvider_CHANNEL_NUMBER_PROVIDER_MAILGUN     ChannelNumberProvider = 3
	ChannelNumberProvider_CHANNEL_NUMBER_PROVIDER_FACEBOOK    ChannelNumberProvider = 4
	ChannelNumberProvider_CHANNEL_NUMBER_PROVIDER_TELEGRAM    ChannelNumberProvider = 5
)

// Enum value maps for ChannelNumberProvider.
var (
	ChannelNumberProvider_name = map[int32]string{
		0: "CHANNEL_NUMBER_PROVIDER_UNSPECIFIED",
		1: "CHANNEL_NUMBER_PROVIDER_AT",
		2: "CHANNEL_NUMBER_PROVIDER_TWILIO",
		3: "CHANNEL_NUMBER_PROVIDER_MAILGUN",
		4: "CHANNEL_NUMBER_PROVIDER_FACEBOOK",
		5: "CHANNEL_NUMBER_PROVIDER_TELEGRAM",
	}
	ChannelNumberProvider_value = map[string]int32{
		"CHANNEL_NUMBER_PROVIDER_UNSPECIFIED": 0,
		"CHANNEL_NUMBER_PROVIDER_AT":          1,
		"CHANNEL_NUMBER_PROVIDER_TWILIO":      2,
		"CHANNEL_NUMBER_PROVIDER_MAILGUN":     3,
		"CHANNEL_NUMBER_PROVIDER_FACEBOOK":    4,
		"CHANNEL_NUMBER_PROVIDER_TELEGRAM":    5,
	}
)

func (x ChannelNumberProvider) Enum() *ChannelNumberProvider {
	p := new(ChannelNumberProvider)
	*p = x
	return p
}

func (x ChannelNumberProvider) String() string {
	return protoimpl.X.EnumStringOf(x.Descriptor(), protoreflect.EnumNumber(x))
}

func (ChannelNumberProvider) Descriptor() protoreflect.EnumDescriptor {
	return file_common_model_proto_enumTypes[1].Descriptor()
}

func (ChannelNumberProvider) Type() protoreflect.EnumType {
	return &file_common_model_proto_enumTypes[1]
}

func (x ChannelNumberProvider) Number() protoreflect.EnumNumber {
	return protoreflect.EnumNumber(x)
}

// Deprecated: Use ChannelNumberProvider.Descriptor instead.
func (ChannelNumberProvider) EnumDescriptor() ([]byte, []int) {
	return file_common_model_proto_rawDescGZIP(), []int{1}
}

type MediaType int32

const (
	MediaType_MEDIA_TYPE_UNSPECIFIED MediaType = 0
	MediaType_MEDIA_TYPE_IMAGE       MediaType = 1
	MediaType_MEDIA_TYPE_AUDIO       MediaType = 2
	MediaType_MEDIA_TYPE_VIDEO       MediaType = 3
	MediaType_MEDIA_TYPE_DOCUMENT    MediaType = 4
	MediaType_MEDIA_TYPE_VOICE       MediaType = 5
	MediaType_MEDIA_TYPE_STICKER     MediaType = 6
	MediaType_MEDIA_TYPE_CONTACT     MediaType = 7
)

// Enum value maps for MediaType.
var (
	MediaType_name = map[int32]string{
		0: "MEDIA_TYPE_UNSPECIFIED",
		1: "MEDIA_TYPE_IMAGE",
		2: "MEDIA_TYPE_AUDIO",
		3: "MEDIA_TYPE_VIDEO",
		4: "MEDIA_TYPE_DOCUMENT",
		5: "MEDIA_TYPE_VOICE",
		6: "MEDIA_TYPE_STICKER",
		7: "MEDIA_TYPE_CONTACT",
	}
	MediaType_value = map[string]int32{
		"MEDIA_TYPE_UNSPECIFIED": 0,
		"MEDIA_TYPE_IMAGE":       1,
		"MEDIA_TYPE_AUDIO":       2,
		"MEDIA_TYPE_VIDEO":       3,
		"MEDIA_TYPE_DOCUMENT":    4,
		"MEDIA_TYPE_VOICE":       5,
		"MEDIA_TYPE_STICKER":     6,
		"MEDIA_TYPE_CONTACT":     7,
	}
)

func (x MediaType) Enum() *MediaType {
	p := new(MediaType)
	*p = x
	return p
}

func (x MediaType) String() string {
	return protoimpl.X.EnumStringOf(x.Descriptor(), protoreflect.EnumNumber(x))
}

func (MediaType) Descriptor() protoreflect.EnumDescriptor {
	return file_common_model_proto_enumTypes[2].Descriptor()
}

func (MediaType) Type() protoreflect.EnumType {
	return &file_common_model_proto_enumTypes[2]
}

func (x MediaType) Number() protoreflect.EnumNumber {
	return protoreflect.EnumNumber(x)
}

// Deprecated: Use MediaType.Descriptor instead.
func (MediaType) EnumDescriptor() ([]byte, []int) {
	return file_common_model_proto_rawDescGZIP(), []int{2}
}

type CustomerEventDirection int32

const (
	CustomerEventDirection_CUSTOMER_EVENT_DIRECTION_UNSPECIFIED CustomerEventDirection = 0
	CustomerEventDirection_CUSTOMER_EVENT_DIRECTION_INBOUND     CustomerEventDirection = 1
	CustomerEventDirection_CUSTOMER_EVENT_DIRECTION_OUTBOUND    CustomerEventDirection = 2
)

// Enum value maps for CustomerEventDirection.
var (
	CustomerEventDirection_name = map[int32]string{
		0: "CUSTOMER_EVENT_DIRECTION_UNSPECIFIED",
		1: "CUSTOMER_EVENT_DIRECTION_INBOUND",
		2: "CUSTOMER_EVENT_DIRECTION_OUTBOUND",
	}
	CustomerEventDirection_value = map[string]int32{
		"CUSTOMER_EVENT_DIRECTION_UNSPECIFIED": 0,
		"CUSTOMER_EVENT_DIRECTION_INBOUND":     1,
		"CUSTOMER_EVENT_DIRECTION_OUTBOUND":    2,
	}
)

func (x CustomerEventDirection) Enum() *CustomerEventDirection {
	p := new(CustomerEventDirection)
	*p = x
	return p
}

func (x CustomerEventDirection) String() string {
	return protoimpl.X.EnumStringOf(x.Descriptor(), protoreflect.EnumNumber(x))
}

func (CustomerEventDirection) Descriptor() protoreflect.EnumDescriptor {
	return file_common_model_proto_enumTypes[3].Descriptor()
}

func (CustomerEventDirection) Type() protoreflect.EnumType {
	return &file_common_model_proto_enumTypes[3]
}

func (x CustomerEventDirection) Number() protoreflect.EnumNumber {
	return protoreflect.EnumNumber(x)
}

// Deprecated: Use CustomerEventDirection.Descriptor instead.
func (CustomerEventDirection) EnumDescriptor() ([]byte, []int) {
	return file_common_model_proto_rawDescGZIP(), []int{3}
}

type CustomerRequestOrigin int32

const (
	CustomerRequestOrigin_CUSTOMER_REQUEST_ORIGIN_UNSPECIFIED  CustomerRequestOrigin = 0
	CustomerRequestOrigin_CUSTOMER_REQUEST_ORIGIN_API_REQUEST  CustomerRequestOrigin = 1
	CustomerRequestOrigin_CUSTOMER_REQUEST_ORIGIN_CUSTOMER_TAG CustomerRequestOrigin = 2
)

// Enum value maps for CustomerRequestOrigin.
var (
	CustomerRequestOrigin_name = map[int32]string{
		0: "CUSTOMER_REQUEST_ORIGIN_UNSPECIFIED",
		1: "CUSTOMER_REQUEST_ORIGIN_API_REQUEST",
		2: "CUSTOMER_REQUEST_ORIGIN_CUSTOMER_TAG",
	}
	CustomerRequestOrigin_value = map[string]int32{
		"CUSTOMER_REQUEST_ORIGIN_UNSPECIFIED":  0,
		"CUSTOMER_REQUEST_ORIGIN_API_REQUEST":  1,
		"CUSTOMER_REQUEST_ORIGIN_CUSTOMER_TAG": 2,
	}
)

func (x CustomerRequestOrigin) Enum() *CustomerRequestOrigin {
	p := new(CustomerRequestOrigin)
	*p = x
	return p
}

func (x CustomerRequestOrigin) String() string {
	return protoimpl.X.EnumStringOf(x.Descriptor(), protoreflect.EnumNumber(x))
}

func (CustomerRequestOrigin) Descriptor() protoreflect.EnumDescriptor {
	return file_common_model_proto_enumTypes[4].Descriptor()
}

func (CustomerRequestOrigin) Type() protoreflect.EnumType {
	return &file_common_model_proto_enumTypes[4]
}

func (x CustomerRequestOrigin) Number() protoreflect.EnumNumber {
	return protoreflect.EnumNumber(x)
}

// Deprecated: Use CustomerRequestOrigin.Descriptor instead.
func (CustomerRequestOrigin) EnumDescriptor() ([]byte, []int) {
	return file_common_model_proto_rawDescGZIP(), []int{4}
}

type DataMapValue struct {
	state         protoimpl.MessageState
	sizeCache     protoimpl.SizeCache
	unknownFields protoimpl.UnknownFields

	// Types that are assignable to Value:
	//	*DataMapValue_StringVal
	//	*DataMapValue_BytesVal
	Value isDataMapValue_Value `protobuf_oneof:"value"`
}

func (x *DataMapValue) Reset() {
	*x = DataMapValue{}
	if protoimpl.UnsafeEnabled {
		mi := &file_common_model_proto_msgTypes[0]
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		ms.StoreMessageInfo(mi)
	}
}

func (x *DataMapValue) String() string {
	return protoimpl.X.MessageStringOf(x)
}

func (*DataMapValue) ProtoMessage() {}

func (x *DataMapValue) ProtoReflect() protoreflect.Message {
	mi := &file_common_model_proto_msgTypes[0]
	if protoimpl.UnsafeEnabled && x != nil {
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		if ms.LoadMessageInfo() == nil {
			ms.StoreMessageInfo(mi)
		}
		return ms
	}
	return mi.MessageOf(x)
}

// Deprecated: Use DataMapValue.ProtoReflect.Descriptor instead.
func (*DataMapValue) Descriptor() ([]byte, []int) {
	return file_common_model_proto_rawDescGZIP(), []int{0}
}

func (m *DataMapValue) GetValue() isDataMapValue_Value {
	if m != nil {
		return m.Value
	}
	return nil
}

func (x *DataMapValue) GetStringVal() string {
	if x, ok := x.GetValue().(*DataMapValue_StringVal); ok {
		return x.StringVal
	}
	return ""
}

func (x *DataMapValue) GetBytesVal() []byte {
	if x, ok := x.GetValue().(*DataMapValue_BytesVal); ok {
		return x.BytesVal
	}
	return nil
}

type isDataMapValue_Value interface {
	isDataMapValue_Value()
}

type DataMapValue_StringVal struct {
	StringVal string `protobuf:"bytes,2,opt,name=string_val,json=stringVal,proto3,oneof"`
}

type DataMapValue_BytesVal struct {
	BytesVal []byte `protobuf:"bytes,3,opt,name=bytes_val,json=bytesVal,proto3,oneof"`
}

func (*DataMapValue_StringVal) isDataMapValue_Value() {}

func (*DataMapValue_BytesVal) isDataMapValue_Value() {}

type Cash struct {
	state         protoimpl.MessageState
	sizeCache     protoimpl.SizeCache
	unknownFields protoimpl.UnknownFields

	CurrencyCode string  `protobuf:"bytes,1,opt,name=currency_code,json=currencyCode,proto3" json:"currency_code,omitempty"`
	Amount       float64 `protobuf:"fixed64,2,opt,name=amount,proto3" json:"amount,omitempty"`
}

func (x *Cash) Reset() {
	*x = Cash{}
	if protoimpl.UnsafeEnabled {
		mi := &file_common_model_proto_msgTypes[1]
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		ms.StoreMessageInfo(mi)
	}
}

func (x *Cash) String() string {
	return protoimpl.X.MessageStringOf(x)
}

func (*Cash) ProtoMessage() {}

func (x *Cash) ProtoReflect() protoreflect.Message {
	mi := &file_common_model_proto_msgTypes[1]
	if protoimpl.UnsafeEnabled && x != nil {
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		if ms.LoadMessageInfo() == nil {
			ms.StoreMessageInfo(mi)
		}
		return ms
	}
	return mi.MessageOf(x)
}

// Deprecated: Use Cash.ProtoReflect.Descriptor instead.
func (*Cash) Descriptor() ([]byte, []int) {
	return file_common_model_proto_rawDescGZIP(), []int{1}
}

func (x *Cash) GetCurrencyCode() string {
	if x != nil {
		return x.CurrencyCode
	}
	return ""
}

func (x *Cash) GetAmount() float64 {
	if x != nil {
		return x.Amount
	}
	return 0
}

type IndexMapping struct {
	state         protoimpl.MessageState
	sizeCache     protoimpl.SizeCache
	unknownFields protoimpl.UnknownFields

	Key   string                  `protobuf:"bytes,1,opt,name=key,proto3" json:"key,omitempty"`
	Value *wrapperspb.StringValue `protobuf:"bytes,2,opt,name=value,proto3" json:"value,omitempty"`
}

func (x *IndexMapping) Reset() {
	*x = IndexMapping{}
	if protoimpl.UnsafeEnabled {
		mi := &file_common_model_proto_msgTypes[2]
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		ms.StoreMessageInfo(mi)
	}
}

func (x *IndexMapping) String() string {
	return protoimpl.X.MessageStringOf(x)
}

func (*IndexMapping) ProtoMessage() {}

func (x *IndexMapping) ProtoReflect() protoreflect.Message {
	mi := &file_common_model_proto_msgTypes[2]
	if protoimpl.UnsafeEnabled && x != nil {
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		if ms.LoadMessageInfo() == nil {
			ms.StoreMessageInfo(mi)
		}
		return ms
	}
	return mi.MessageOf(x)
}

// Deprecated: Use IndexMapping.ProtoReflect.Descriptor instead.
func (*IndexMapping) Descriptor() ([]byte, []int) {
	return file_common_model_proto_rawDescGZIP(), []int{2}
}

func (x *IndexMapping) GetKey() string {
	if x != nil {
		return x.Key
	}
	return ""
}

func (x *IndexMapping) GetValue() *wrapperspb.StringValue {
	if x != nil {
		return x.Value
	}
	return nil
}

type CustomerIndex struct {
	state         protoimpl.MessageState
	sizeCache     protoimpl.SizeCache
	unknownFields protoimpl.UnknownFields

	Mapping   *IndexMapping          `protobuf:"bytes,1,opt,name=mapping,proto3" json:"mapping,omitempty"`
	ExpiresAt *timestamppb.Timestamp `protobuf:"bytes,2,opt,name=expires_at,json=expiresAt,proto3" json:"expires_at,omitempty"`
}

func (x *CustomerIndex) Reset() {
	*x = CustomerIndex{}
	if protoimpl.UnsafeEnabled {
		mi := &file_common_model_proto_msgTypes[3]
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		ms.StoreMessageInfo(mi)
	}
}

func (x *CustomerIndex) String() string {
	return protoimpl.X.MessageStringOf(x)
}

func (*CustomerIndex) ProtoMessage() {}

func (x *CustomerIndex) ProtoReflect() protoreflect.Message {
	mi := &file_common_model_proto_msgTypes[3]
	if protoimpl.UnsafeEnabled && x != nil {
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		if ms.LoadMessageInfo() == nil {
			ms.StoreMessageInfo(mi)
		}
		return ms
	}
	return mi.MessageOf(x)
}

// Deprecated: Use CustomerIndex.ProtoReflect.Descriptor instead.
func (*CustomerIndex) Descriptor() ([]byte, []int) {
	return file_common_model_proto_rawDescGZIP(), []int{3}
}

func (x *CustomerIndex) GetMapping() *IndexMapping {
	if x != nil {
		return x.Mapping
	}
	return nil
}

func (x *CustomerIndex) GetExpiresAt() *timestamppb.Timestamp {
	if x != nil {
		return x.ExpiresAt
	}
	return nil
}

type AppConnectionProps struct {
	state         protoimpl.MessageState
	sizeCache     protoimpl.SizeCache
	unknownFields protoimpl.UnknownFields

	ConnectionId   string                  `protobuf:"bytes,1,opt,name=connection_id,json=connectionId,proto3" json:"connection_id,omitempty"`
	ConnectionTime *timestamppb.Timestamp  `protobuf:"bytes,2,opt,name=connection_time,json=connectionTime,proto3" json:"connection_time,omitempty"`
	IpAddress      *wrapperspb.StringValue `protobuf:"bytes,3,opt,name=ip_address,json=ipAddress,proto3" json:"ip_address,omitempty"`
	SimplexMode    bool                    `protobuf:"varint,4,opt,name=simplex_mode,json=simplexMode,proto3" json:"simplex_mode,omitempty"`
}

func (x *AppConnectionProps) Reset() {
	*x = AppConnectionProps{}
	if protoimpl.UnsafeEnabled {
		mi := &file_common_model_proto_msgTypes[4]
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		ms.StoreMessageInfo(mi)
	}
}

func (x *AppConnectionProps) String() string {
	return protoimpl.X.MessageStringOf(x)
}

func (*AppConnectionProps) ProtoMessage() {}

func (x *AppConnectionProps) ProtoReflect() protoreflect.Message {
	mi := &file_common_model_proto_msgTypes[4]
	if protoimpl.UnsafeEnabled && x != nil {
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		if ms.LoadMessageInfo() == nil {
			ms.StoreMessageInfo(mi)
		}
		return ms
	}
	return mi.MessageOf(x)
}

// Deprecated: Use AppConnectionProps.ProtoReflect.Descriptor instead.
func (*AppConnectionProps) Descriptor() ([]byte, []int) {
	return file_common_model_proto_rawDescGZIP(), []int{4}
}

func (x *AppConnectionProps) GetConnectionId() string {
	if x != nil {
		return x.ConnectionId
	}
	return ""
}

func (x *AppConnectionProps) GetConnectionTime() *timestamppb.Timestamp {
	if x != nil {
		return x.ConnectionTime
	}
	return nil
}

func (x *AppConnectionProps) GetIpAddress() *wrapperspb.StringValue {
	if x != nil {
		return x.IpAddress
	}
	return nil
}

func (x *AppConnectionProps) GetSimplexMode() bool {
	if x != nil {
		return x.SimplexMode
	}
	return false
}

type CustomerNumber struct {
	state         protoimpl.MessageState
	sizeCache     protoimpl.SizeCache
	unknownFields protoimpl.UnknownFields

	Provider  CustomerNumberProvider  `protobuf:"varint,1,opt,name=provider,proto3,enum=com.elarian.hera.proto.CustomerNumberProvider" json:"provider,omitempty"`
	Number    string                  `protobuf:"bytes,2,opt,name=number,proto3" json:"number,omitempty"`
	Partition *wrapperspb.StringValue `protobuf:"bytes,3,opt,name=partition,proto3" json:"partition,omitempty"`
}

func (x *CustomerNumber) Reset() {
	*x = CustomerNumber{}
	if protoimpl.UnsafeEnabled {
		mi := &file_common_model_proto_msgTypes[5]
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		ms.StoreMessageInfo(mi)
	}
}

func (x *CustomerNumber) String() string {
	return protoimpl.X.MessageStringOf(x)
}

func (*CustomerNumber) ProtoMessage() {}

func (x *CustomerNumber) ProtoReflect() protoreflect.Message {
	mi := &file_common_model_proto_msgTypes[5]
	if protoimpl.UnsafeEnabled && x != nil {
		ms := protoimpl.X.MessageStateOf(protoimpl.Pointer(x))
		if ms.LoadMessageInfo() == nil {
			ms.StoreMessageInfo(mi)
		}
		return ms
	}
	return mi.MessageOf(x)
}

// Deprecated: Use CustomerNumber.ProtoReflect.Descriptor instead.
func (*CustomerNumber) Descriptor() ([]byte, []int) {
	return file_common_model_proto_rawDescGZIP(), []int{5}
}

func (x *CustomerNumber) GetProvider() CustomerNumberProvider {
	if x != nil {
		return x.Provider
	}
	return CustomerNumberProvider_CUSTOMER_NUMBER_PROVIDER_UNSPECIFIED
}

func (x *CustomerNumber) GetNumber() string {
	if x != nil {
		return x.Number
	}
	return ""
}

func (x *CustomerNumber) GetPartition() *wrapperspb.StringValue {
	if x != nil {
		return x.Partition
	}
	return nil
}

var File_common_model_proto protoreflect.FileDescriptor

var file_common_model_proto_rawDesc = []byte{
	0x0a, 0x12, 0x63, 0x6f, 0x6d, 0x6d, 0x6f, 0x6e, 0x5f, 0x6d, 0x6f, 0x64, 0x65, 0x6c, 0x2e, 0x70,
	0x72, 0x6f, 0x74, 0x6f, 0x12, 0x16, 0x63, 0x6f, 0x6d, 0x2e, 0x65, 0x6c, 0x61, 0x72, 0x69, 0x61,
	0x6e, 0x2e, 0x68, 0x65, 0x72, 0x61, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x1a, 0x1e, 0x67, 0x6f,
	0x6f, 0x67, 0x6c, 0x65, 0x2f, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x62, 0x75, 0x66, 0x2f, 0x77, 0x72,
	0x61, 0x70, 0x70, 0x65, 0x72, 0x73, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x1a, 0x1f, 0x67, 0x6f,
	0x6f, 0x67, 0x6c, 0x65, 0x2f, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x62, 0x75, 0x66, 0x2f, 0x74, 0x69,
	0x6d, 0x65, 0x73, 0x74, 0x61, 0x6d, 0x70, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x22, 0x57, 0x0a,
	0x0c, 0x44, 0x61, 0x74, 0x61, 0x4d, 0x61, 0x70, 0x56, 0x61, 0x6c, 0x75, 0x65, 0x12, 0x1f, 0x0a,
	0x0a, 0x73, 0x74, 0x72, 0x69, 0x6e, 0x67, 0x5f, 0x76, 0x61, 0x6c, 0x18, 0x02, 0x20, 0x01, 0x28,
	0x09, 0x48, 0x00, 0x52, 0x09, 0x73, 0x74, 0x72, 0x69, 0x6e, 0x67, 0x56, 0x61, 0x6c, 0x12, 0x1d,
	0x0a, 0x09, 0x62, 0x79, 0x74, 0x65, 0x73, 0x5f, 0x76, 0x61, 0x6c, 0x18, 0x03, 0x20, 0x01, 0x28,
	0x0c, 0x48, 0x00, 0x52, 0x08, 0x62, 0x79, 0x74, 0x65, 0x73, 0x56, 0x61, 0x6c, 0x42, 0x07, 0x0a,
	0x05, 0x76, 0x61, 0x6c, 0x75, 0x65, 0x22, 0x43, 0x0a, 0x04, 0x43, 0x61, 0x73, 0x68, 0x12, 0x23,
	0x0a, 0x0d, 0x63, 0x75, 0x72, 0x72, 0x65, 0x6e, 0x63, 0x79, 0x5f, 0x63, 0x6f, 0x64, 0x65, 0x18,
	0x01, 0x20, 0x01, 0x28, 0x09, 0x52, 0x0c, 0x63, 0x75, 0x72, 0x72, 0x65, 0x6e, 0x63, 0x79, 0x43,
	0x6f, 0x64, 0x65, 0x12, 0x16, 0x0a, 0x06, 0x61, 0x6d, 0x6f, 0x75, 0x6e, 0x74, 0x18, 0x02, 0x20,
	0x01, 0x28, 0x01, 0x52, 0x06, 0x61, 0x6d, 0x6f, 0x75, 0x6e, 0x74, 0x22, 0x54, 0x0a, 0x0c, 0x49,
	0x6e, 0x64, 0x65, 0x78, 0x4d, 0x61, 0x70, 0x70, 0x69, 0x6e, 0x67, 0x12, 0x10, 0x0a, 0x03, 0x6b,
	0x65, 0x79, 0x18, 0x01, 0x20, 0x01, 0x28, 0x09, 0x52, 0x03, 0x6b, 0x65, 0x79, 0x12, 0x32, 0x0a,
	0x05, 0x76, 0x61, 0x6c, 0x75, 0x65, 0x18, 0x02, 0x20, 0x01, 0x28, 0x0b, 0x32, 0x1c, 0x2e, 0x67,
	0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x62, 0x75, 0x66, 0x2e, 0x53,
	0x74, 0x72, 0x69, 0x6e, 0x67, 0x56, 0x61, 0x6c, 0x75, 0x65, 0x52, 0x05, 0x76, 0x61, 0x6c, 0x75,
	0x65, 0x22, 0x8a, 0x01, 0x0a, 0x0d, 0x43, 0x75, 0x73, 0x74, 0x6f, 0x6d, 0x65, 0x72, 0x49, 0x6e,
	0x64, 0x65, 0x78, 0x12, 0x3e, 0x0a, 0x07, 0x6d, 0x61, 0x70, 0x70, 0x69, 0x6e, 0x67, 0x18, 0x01,
	0x20, 0x01, 0x28, 0x0b, 0x32, 0x24, 0x2e, 0x63, 0x6f, 0x6d, 0x2e, 0x65, 0x6c, 0x61, 0x72, 0x69,
	0x61, 0x6e, 0x2e, 0x68, 0x65, 0x72, 0x61, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x2e, 0x49, 0x6e,
	0x64, 0x65, 0x78, 0x4d, 0x61, 0x70, 0x70, 0x69, 0x6e, 0x67, 0x52, 0x07, 0x6d, 0x61, 0x70, 0x70,
	0x69, 0x6e, 0x67, 0x12, 0x39, 0x0a, 0x0a, 0x65, 0x78, 0x70, 0x69, 0x72, 0x65, 0x73, 0x5f, 0x61,
	0x74, 0x18, 0x02, 0x20, 0x01, 0x28, 0x0b, 0x32, 0x1a, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65,
	0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x62, 0x75, 0x66, 0x2e, 0x54, 0x69, 0x6d, 0x65, 0x73, 0x74,
	0x61, 0x6d, 0x70, 0x52, 0x09, 0x65, 0x78, 0x70, 0x69, 0x72, 0x65, 0x73, 0x41, 0x74, 0x22, 0xde,
	0x01, 0x0a, 0x12, 0x41, 0x70, 0x70, 0x43, 0x6f, 0x6e, 0x6e, 0x65, 0x63, 0x74, 0x69, 0x6f, 0x6e,
	0x50, 0x72, 0x6f, 0x70, 0x73, 0x12, 0x23, 0x0a, 0x0d, 0x63, 0x6f, 0x6e, 0x6e, 0x65, 0x63, 0x74,
	0x69, 0x6f, 0x6e, 0x5f, 0x69, 0x64, 0x18, 0x01, 0x20, 0x01, 0x28, 0x09, 0x52, 0x0c, 0x63, 0x6f,
	0x6e, 0x6e, 0x65, 0x63, 0x74, 0x69, 0x6f, 0x6e, 0x49, 0x64, 0x12, 0x43, 0x0a, 0x0f, 0x63, 0x6f,
	0x6e, 0x6e, 0x65, 0x63, 0x74, 0x69, 0x6f, 0x6e, 0x5f, 0x74, 0x69, 0x6d, 0x65, 0x18, 0x02, 0x20,
	0x01, 0x28, 0x0b, 0x32, 0x1a, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x70, 0x72, 0x6f,
	0x74, 0x6f, 0x62, 0x75, 0x66, 0x2e, 0x54, 0x69, 0x6d, 0x65, 0x73, 0x74, 0x61, 0x6d, 0x70, 0x52,
	0x0e, 0x63, 0x6f, 0x6e, 0x6e, 0x65, 0x63, 0x74, 0x69, 0x6f, 0x6e, 0x54, 0x69, 0x6d, 0x65, 0x12,
	0x3b, 0x0a, 0x0a, 0x69, 0x70, 0x5f, 0x61, 0x64, 0x64, 0x72, 0x65, 0x73, 0x73, 0x18, 0x03, 0x20,
	0x01, 0x28, 0x0b, 0x32, 0x1c, 0x2e, 0x67, 0x6f, 0x6f, 0x67, 0x6c, 0x65, 0x2e, 0x70, 0x72, 0x6f,
	0x74, 0x6f, 0x62, 0x75, 0x66, 0x2e, 0x53, 0x74, 0x72, 0x69, 0x6e, 0x67, 0x56, 0x61, 0x6c, 0x75,
	0x65, 0x52, 0x09, 0x69, 0x70, 0x41, 0x64, 0x64, 0x72, 0x65, 0x73, 0x73, 0x12, 0x21, 0x0a, 0x0c,
	0x73, 0x69, 0x6d, 0x70, 0x6c, 0x65, 0x78, 0x5f, 0x6d, 0x6f, 0x64, 0x65, 0x18, 0x04, 0x20, 0x01,
	0x28, 0x08, 0x52, 0x0b, 0x73, 0x69, 0x6d, 0x70, 0x6c, 0x65, 0x78, 0x4d, 0x6f, 0x64, 0x65, 0x22,
	0xb0, 0x01, 0x0a, 0x0e, 0x43, 0x75, 0x73, 0x74, 0x6f, 0x6d, 0x65, 0x72, 0x4e, 0x75, 0x6d, 0x62,
	0x65, 0x72, 0x12, 0x4a, 0x0a, 0x08, 0x70, 0x72, 0x6f, 0x76, 0x69, 0x64, 0x65, 0x72, 0x18, 0x01,
	0x20, 0x01, 0x28, 0x0e, 0x32, 0x2e, 0x2e, 0x63, 0x6f, 0x6d, 0x2e, 0x65, 0x6c, 0x61, 0x72, 0x69,
	0x61, 0x6e, 0x2e, 0x68, 0x65, 0x72, 0x61, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x2e, 0x43, 0x75,
	0x73, 0x74, 0x6f, 0x6d, 0x65, 0x72, 0x4e, 0x75, 0x6d, 0x62, 0x65, 0x72, 0x50, 0x72, 0x6f, 0x76,
	0x69, 0x64, 0x65, 0x72, 0x52, 0x08, 0x70, 0x72, 0x6f, 0x76, 0x69, 0x64, 0x65, 0x72, 0x12, 0x16,
	0x0a, 0x06, 0x6e, 0x75, 0x6d, 0x62, 0x65, 0x72, 0x18, 0x02, 0x20, 0x01, 0x28, 0x09, 0x52, 0x06,
	0x6e, 0x75, 0x6d, 0x62, 0x65, 0x72, 0x12, 0x3a, 0x0a, 0x09, 0x70, 0x61, 0x72, 0x74, 0x69, 0x74,
	0x69, 0x6f, 0x6e, 0x18, 0x03, 0x20, 0x01, 0x28, 0x0b, 0x32, 0x1c, 0x2e, 0x67, 0x6f, 0x6f, 0x67,
	0x6c, 0x65, 0x2e, 0x70, 0x72, 0x6f, 0x74, 0x6f, 0x62, 0x75, 0x66, 0x2e, 0x53, 0x74, 0x72, 0x69,
	0x6e, 0x67, 0x56, 0x61, 0x6c, 0x75, 0x65, 0x52, 0x09, 0x70, 0x61, 0x72, 0x74, 0x69, 0x74, 0x69,
	0x6f, 0x6e, 0x2a, 0xfd, 0x01, 0x0a, 0x16, 0x43, 0x75, 0x73, 0x74, 0x6f, 0x6d, 0x65, 0x72, 0x4e,
	0x75, 0x6d, 0x62, 0x65, 0x72, 0x50, 0x72, 0x6f, 0x76, 0x69, 0x64, 0x65, 0x72, 0x12, 0x28, 0x0a,
	0x24, 0x43, 0x55, 0x53, 0x54, 0x4f, 0x4d, 0x45, 0x52, 0x5f, 0x4e, 0x55, 0x4d, 0x42, 0x45, 0x52,
	0x5f, 0x50, 0x52, 0x4f, 0x56, 0x49, 0x44, 0x45, 0x52, 0x5f, 0x55, 0x4e, 0x53, 0x50, 0x45, 0x43,
	0x49, 0x46, 0x49, 0x45, 0x44, 0x10, 0x00, 0x12, 0x25, 0x0a, 0x21, 0x43, 0x55, 0x53, 0x54, 0x4f,
	0x4d, 0x45, 0x52, 0x5f, 0x4e, 0x55, 0x4d, 0x42, 0x45, 0x52, 0x5f, 0x50, 0x52, 0x4f, 0x56, 0x49,
	0x44, 0x45, 0x52, 0x5f, 0x46, 0x41, 0x43, 0x45, 0x42, 0x4f, 0x4f, 0x4b, 0x10, 0x01, 0x12, 0x25,
	0x0a, 0x21, 0x43, 0x55, 0x53, 0x54, 0x4f, 0x4d, 0x45, 0x52, 0x5f, 0x4e, 0x55, 0x4d, 0x42, 0x45,
	0x52, 0x5f, 0x50, 0x52, 0x4f, 0x56, 0x49, 0x44, 0x45, 0x52, 0x5f, 0x43, 0x45, 0x4c, 0x4c, 0x55,
	0x4c, 0x41, 0x52, 0x10, 0x02, 0x12, 0x25, 0x0a, 0x21, 0x43, 0x55, 0x53, 0x54, 0x4f, 0x4d, 0x45,
	0x52, 0x5f, 0x4e, 0x55, 0x4d, 0x42, 0x45, 0x52, 0x5f, 0x50, 0x52, 0x4f, 0x56, 0x49, 0x44, 0x45,
	0x52, 0x5f, 0x54, 0x45, 0x4c, 0x45, 0x47, 0x52, 0x41, 0x4d, 0x10, 0x03, 0x12, 0x20, 0x0a, 0x1c,
	0x43, 0x55, 0x53, 0x54, 0x4f, 0x4d, 0x45, 0x52, 0x5f, 0x4e, 0x55, 0x4d, 0x42, 0x45, 0x52, 0x5f,
	0x50, 0x52, 0x4f, 0x56, 0x49, 0x44, 0x45, 0x52, 0x5f, 0x41, 0x50, 0x50, 0x10, 0x04, 0x12, 0x22,
	0x0a, 0x1e, 0x43, 0x55, 0x53, 0x54, 0x4f, 0x4d, 0x45, 0x52, 0x5f, 0x4e, 0x55, 0x4d, 0x42, 0x45,
	0x52, 0x5f, 0x50, 0x52, 0x4f, 0x56, 0x49, 0x44, 0x45, 0x52, 0x5f, 0x45, 0x4d, 0x41, 0x49, 0x4c,
	0x10, 0x05, 0x2a, 0xf5, 0x01, 0x0a, 0x15, 0x43, 0x68, 0x61, 0x6e, 0x6e, 0x65, 0x6c, 0x4e, 0x75,
	0x6d, 0x62, 0x65, 0x72, 0x50, 0x72, 0x6f, 0x76, 0x69, 0x64, 0x65, 0x72, 0x12, 0x27, 0x0a, 0x23,
	0x43, 0x48, 0x41, 0x4e, 0x4e, 0x45, 0x4c, 0x5f, 0x4e, 0x55, 0x4d, 0x42, 0x45, 0x52, 0x5f, 0x50,
	0x52, 0x4f, 0x56, 0x49, 0x44, 0x45, 0x52, 0x5f, 0x55, 0x4e, 0x53, 0x50, 0x45, 0x43, 0x49, 0x46,
	0x49, 0x45, 0x44, 0x10, 0x00, 0x12, 0x1e, 0x0a, 0x1a, 0x43, 0x48, 0x41, 0x4e, 0x4e, 0x45, 0x4c,
	0x5f, 0x4e, 0x55, 0x4d, 0x42, 0x45, 0x52, 0x5f, 0x50, 0x52, 0x4f, 0x56, 0x49, 0x44, 0x45, 0x52,
	0x5f, 0x41, 0x54, 0x10, 0x01, 0x12, 0x22, 0x0a, 0x1e, 0x43, 0x48, 0x41, 0x4e, 0x4e, 0x45, 0x4c,
	0x5f, 0x4e, 0x55, 0x4d, 0x42, 0x45, 0x52, 0x5f, 0x50, 0x52, 0x4f, 0x56, 0x49, 0x44, 0x45, 0x52,
	0x5f, 0x54, 0x57, 0x49, 0x4c, 0x49, 0x4f, 0x10, 0x02, 0x12, 0x23, 0x0a, 0x1f, 0x43, 0x48, 0x41,
	0x4e, 0x4e, 0x45, 0x4c, 0x5f, 0x4e, 0x55, 0x4d, 0x42, 0x45, 0x52, 0x5f, 0x50, 0x52, 0x4f, 0x56,
	0x49, 0x44, 0x45, 0x52, 0x5f, 0x4d, 0x41, 0x49, 0x4c, 0x47, 0x55, 0x4e, 0x10, 0x03, 0x12, 0x24,
	0x0a, 0x20, 0x43, 0x48, 0x41, 0x4e, 0x4e, 0x45, 0x4c, 0x5f, 0x4e, 0x55, 0x4d, 0x42, 0x45, 0x52,
	0x5f, 0x50, 0x52, 0x4f, 0x56, 0x49, 0x44, 0x45, 0x52, 0x5f, 0x46, 0x41, 0x43, 0x45, 0x42, 0x4f,
	0x4f, 0x4b, 0x10, 0x04, 0x12, 0x24, 0x0a, 0x20, 0x43, 0x48, 0x41, 0x4e, 0x4e, 0x45, 0x4c, 0x5f,
	0x4e, 0x55, 0x4d, 0x42, 0x45, 0x52, 0x5f, 0x50, 0x52, 0x4f, 0x56, 0x49, 0x44, 0x45, 0x52, 0x5f,
	0x54, 0x45, 0x4c, 0x45, 0x47, 0x52, 0x41, 0x4d, 0x10, 0x05, 0x2a, 0xc8, 0x01, 0x0a, 0x09, 0x4d,
	0x65, 0x64, 0x69, 0x61, 0x54, 0x79, 0x70, 0x65, 0x12, 0x1a, 0x0a, 0x16, 0x4d, 0x45, 0x44, 0x49,
	0x41, 0x5f, 0x54, 0x59, 0x50, 0x45, 0x5f, 0x55, 0x4e, 0x53, 0x50, 0x45, 0x43, 0x49, 0x46, 0x49,
	0x45, 0x44, 0x10, 0x00, 0x12, 0x14, 0x0a, 0x10, 0x4d, 0x45, 0x44, 0x49, 0x41, 0x5f, 0x54, 0x59,
	0x50, 0x45, 0x5f, 0x49, 0x4d, 0x41, 0x47, 0x45, 0x10, 0x01, 0x12, 0x14, 0x0a, 0x10, 0x4d, 0x45,
	0x44, 0x49, 0x41, 0x5f, 0x54, 0x59, 0x50, 0x45, 0x5f, 0x41, 0x55, 0x44, 0x49, 0x4f, 0x10, 0x02,
	0x12, 0x14, 0x0a, 0x10, 0x4d, 0x45, 0x44, 0x49, 0x41, 0x5f, 0x54, 0x59, 0x50, 0x45, 0x5f, 0x56,
	0x49, 0x44, 0x45, 0x4f, 0x10, 0x03, 0x12, 0x17, 0x0a, 0x13, 0x4d, 0x45, 0x44, 0x49, 0x41, 0x5f,
	0x54, 0x59, 0x50, 0x45, 0x5f, 0x44, 0x4f, 0x43, 0x55, 0x4d, 0x45, 0x4e, 0x54, 0x10, 0x04, 0x12,
	0x14, 0x0a, 0x10, 0x4d, 0x45, 0x44, 0x49, 0x41, 0x5f, 0x54, 0x59, 0x50, 0x45, 0x5f, 0x56, 0x4f,
	0x49, 0x43, 0x45, 0x10, 0x05, 0x12, 0x16, 0x0a, 0x12, 0x4d, 0x45, 0x44, 0x49, 0x41, 0x5f, 0x54,
	0x59, 0x50, 0x45, 0x5f, 0x53, 0x54, 0x49, 0x43, 0x4b, 0x45, 0x52, 0x10, 0x06, 0x12, 0x16, 0x0a,
	0x12, 0x4d, 0x45, 0x44, 0x49, 0x41, 0x5f, 0x54, 0x59, 0x50, 0x45, 0x5f, 0x43, 0x4f, 0x4e, 0x54,
	0x41, 0x43, 0x54, 0x10, 0x07, 0x2a, 0x8f, 0x01, 0x0a, 0x16, 0x43, 0x75, 0x73, 0x74, 0x6f, 0x6d,
	0x65, 0x72, 0x45, 0x76, 0x65, 0x6e, 0x74, 0x44, 0x69, 0x72, 0x65, 0x63, 0x74, 0x69, 0x6f, 0x6e,
	0x12, 0x28, 0x0a, 0x24, 0x43, 0x55, 0x53, 0x54, 0x4f, 0x4d, 0x45, 0x52, 0x5f, 0x45, 0x56, 0x45,
	0x4e, 0x54, 0x5f, 0x44, 0x49, 0x52, 0x45, 0x43, 0x54, 0x49, 0x4f, 0x4e, 0x5f, 0x55, 0x4e, 0x53,
	0x50, 0x45, 0x43, 0x49, 0x46, 0x49, 0x45, 0x44, 0x10, 0x00, 0x12, 0x24, 0x0a, 0x20, 0x43, 0x55,
	0x53, 0x54, 0x4f, 0x4d, 0x45, 0x52, 0x5f, 0x45, 0x56, 0x45, 0x4e, 0x54, 0x5f, 0x44, 0x49, 0x52,
	0x45, 0x43, 0x54, 0x49, 0x4f, 0x4e, 0x5f, 0x49, 0x4e, 0x42, 0x4f, 0x55, 0x4e, 0x44, 0x10, 0x01,
	0x12, 0x25, 0x0a, 0x21, 0x43, 0x55, 0x53, 0x54, 0x4f, 0x4d, 0x45, 0x52, 0x5f, 0x45, 0x56, 0x45,
	0x4e, 0x54, 0x5f, 0x44, 0x49, 0x52, 0x45, 0x43, 0x54, 0x49, 0x4f, 0x4e, 0x5f, 0x4f, 0x55, 0x54,
	0x42, 0x4f, 0x55, 0x4e, 0x44, 0x10, 0x02, 0x2a, 0x93, 0x01, 0x0a, 0x15, 0x43, 0x75, 0x73, 0x74,
	0x6f, 0x6d, 0x65, 0x72, 0x52, 0x65, 0x71, 0x75, 0x65, 0x73, 0x74, 0x4f, 0x72, 0x69, 0x67, 0x69,
	0x6e, 0x12, 0x27, 0x0a, 0x23, 0x43, 0x55, 0x53, 0x54, 0x4f, 0x4d, 0x45, 0x52, 0x5f, 0x52, 0x45,
	0x51, 0x55, 0x45, 0x53, 0x54, 0x5f, 0x4f, 0x52, 0x49, 0x47, 0x49, 0x4e, 0x5f, 0x55, 0x4e, 0x53,
	0x50, 0x45, 0x43, 0x49, 0x46, 0x49, 0x45, 0x44, 0x10, 0x00, 0x12, 0x27, 0x0a, 0x23, 0x43, 0x55,
	0x53, 0x54, 0x4f, 0x4d, 0x45, 0x52, 0x5f, 0x52, 0x45, 0x51, 0x55, 0x45, 0x53, 0x54, 0x5f, 0x4f,
	0x52, 0x49, 0x47, 0x49, 0x4e, 0x5f, 0x41, 0x50, 0x49, 0x5f, 0x52, 0x45, 0x51, 0x55, 0x45, 0x53,
	0x54, 0x10, 0x01, 0x12, 0x28, 0x0a, 0x24, 0x43, 0x55, 0x53, 0x54, 0x4f, 0x4d, 0x45, 0x52, 0x5f,
	0x52, 0x45, 0x51, 0x55, 0x45, 0x53, 0x54, 0x5f, 0x4f, 0x52, 0x49, 0x47, 0x49, 0x4e, 0x5f, 0x43,
	0x55, 0x53, 0x54, 0x4f, 0x4d, 0x45, 0x52, 0x5f, 0x54, 0x41, 0x47, 0x10, 0x02, 0x62, 0x06, 0x70,
	0x72, 0x6f, 0x74, 0x6f, 0x33,
}

var (
	file_common_model_proto_rawDescOnce sync.Once
	file_common_model_proto_rawDescData = file_common_model_proto_rawDesc
)

func file_common_model_proto_rawDescGZIP() []byte {
	file_common_model_proto_rawDescOnce.Do(func() {
		file_common_model_proto_rawDescData = protoimpl.X.CompressGZIP(file_common_model_proto_rawDescData)
	})
	return file_common_model_proto_rawDescData
}

var file_common_model_proto_enumTypes = make([]protoimpl.EnumInfo, 5)
var file_common_model_proto_msgTypes = make([]protoimpl.MessageInfo, 6)
var file_common_model_proto_goTypes = []interface{}{
	(CustomerNumberProvider)(0),    // 0: com.elarian.hera.proto.CustomerNumberProvider
	(ChannelNumberProvider)(0),     // 1: com.elarian.hera.proto.ChannelNumberProvider
	(MediaType)(0),                 // 2: com.elarian.hera.proto.MediaType
	(CustomerEventDirection)(0),    // 3: com.elarian.hera.proto.CustomerEventDirection
	(CustomerRequestOrigin)(0),     // 4: com.elarian.hera.proto.CustomerRequestOrigin
	(*DataMapValue)(nil),           // 5: com.elarian.hera.proto.DataMapValue
	(*Cash)(nil),                   // 6: com.elarian.hera.proto.Cash
	(*IndexMapping)(nil),           // 7: com.elarian.hera.proto.IndexMapping
	(*CustomerIndex)(nil),          // 8: com.elarian.hera.proto.CustomerIndex
	(*AppConnectionProps)(nil),     // 9: com.elarian.hera.proto.AppConnectionProps
	(*CustomerNumber)(nil),         // 10: com.elarian.hera.proto.CustomerNumber
	(*wrapperspb.StringValue)(nil), // 11: google.protobuf.StringValue
	(*timestamppb.Timestamp)(nil),  // 12: google.protobuf.Timestamp
}
var file_common_model_proto_depIdxs = []int32{
	11, // 0: com.elarian.hera.proto.IndexMapping.value:type_name -> google.protobuf.StringValue
	7,  // 1: com.elarian.hera.proto.CustomerIndex.mapping:type_name -> com.elarian.hera.proto.IndexMapping
	12, // 2: com.elarian.hera.proto.CustomerIndex.expires_at:type_name -> google.protobuf.Timestamp
	12, // 3: com.elarian.hera.proto.AppConnectionProps.connection_time:type_name -> google.protobuf.Timestamp
	11, // 4: com.elarian.hera.proto.AppConnectionProps.ip_address:type_name -> google.protobuf.StringValue
	0,  // 5: com.elarian.hera.proto.CustomerNumber.provider:type_name -> com.elarian.hera.proto.CustomerNumberProvider
	11, // 6: com.elarian.hera.proto.CustomerNumber.partition:type_name -> google.protobuf.StringValue
	7,  // [7:7] is the sub-list for method output_type
	7,  // [7:7] is the sub-list for method input_type
	7,  // [7:7] is the sub-list for extension type_name
	7,  // [7:7] is the sub-list for extension extendee
	0,  // [0:7] is the sub-list for field type_name
}

func init() { file_common_model_proto_init() }
func file_common_model_proto_init() {
	if File_common_model_proto != nil {
		return
	}
	if !protoimpl.UnsafeEnabled {
		file_common_model_proto_msgTypes[0].Exporter = func(v interface{}, i int) interface{} {
			switch v := v.(*DataMapValue); i {
			case 0:
				return &v.state
			case 1:
				return &v.sizeCache
			case 2:
				return &v.unknownFields
			default:
				return nil
			}
		}
		file_common_model_proto_msgTypes[1].Exporter = func(v interface{}, i int) interface{} {
			switch v := v.(*Cash); i {
			case 0:
				return &v.state
			case 1:
				return &v.sizeCache
			case 2:
				return &v.unknownFields
			default:
				return nil
			}
		}
		file_common_model_proto_msgTypes[2].Exporter = func(v interface{}, i int) interface{} {
			switch v := v.(*IndexMapping); i {
			case 0:
				return &v.state
			case 1:
				return &v.sizeCache
			case 2:
				return &v.unknownFields
			default:
				return nil
			}
		}
		file_common_model_proto_msgTypes[3].Exporter = func(v interface{}, i int) interface{} {
			switch v := v.(*CustomerIndex); i {
			case 0:
				return &v.state
			case 1:
				return &v.sizeCache
			case 2:
				return &v.unknownFields
			default:
				return nil
			}
		}
		file_common_model_proto_msgTypes[4].Exporter = func(v interface{}, i int) interface{} {
			switch v := v.(*AppConnectionProps); i {
			case 0:
				return &v.state
			case 1:
				return &v.sizeCache
			case 2:
				return &v.unknownFields
			default:
				return nil
			}
		}
		file_common_model_proto_msgTypes[5].Exporter = func(v interface{}, i int) interface{} {
			switch v := v.(*CustomerNumber); i {
			case 0:
				return &v.state
			case 1:
				return &v.sizeCache
			case 2:
				return &v.unknownFields
			default:
				return nil
			}
		}
	}
	file_common_model_proto_msgTypes[0].OneofWrappers = []interface{}{
		(*DataMapValue_StringVal)(nil),
		(*DataMapValue_BytesVal)(nil),
	}
	type x struct{}
	out := protoimpl.TypeBuilder{
		File: protoimpl.DescBuilder{
			GoPackagePath: reflect.TypeOf(x{}).PkgPath(),
			RawDescriptor: file_common_model_proto_rawDesc,
			NumEnums:      5,
			NumMessages:   6,
			NumExtensions: 0,
			NumServices:   0,
		},
		GoTypes:           file_common_model_proto_goTypes,
		DependencyIndexes: file_common_model_proto_depIdxs,
		EnumInfos:         file_common_model_proto_enumTypes,
		MessageInfos:      file_common_model_proto_msgTypes,
	}.Build()
	File_common_model_proto = out.File
	file_common_model_proto_rawDesc = nil
	file_common_model_proto_goTypes = nil
	file_common_model_proto_depIdxs = nil
}
