# -*- coding: utf-8 -*-
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common_model.proto
"""Generated protocol buffer code."""
from google.protobuf.internal import enum_type_wrapper
from google.protobuf import descriptor as _descriptor
from google.protobuf import message as _message
from google.protobuf import reflection as _reflection
from google.protobuf import symbol_database as _symbol_database
# @@protoc_insertion_point(imports)

_sym_db = _symbol_database.Default()


from google.protobuf import wrappers_pb2 as google_dot_protobuf_dot_wrappers__pb2
from google.protobuf import timestamp_pb2 as google_dot_protobuf_dot_timestamp__pb2


DESCRIPTOR = _descriptor.FileDescriptor(
  name='common_model.proto',
  package='com.elarian.hera.proto',
  syntax='proto3',
  serialized_options=None,
  create_key=_descriptor._internal_create_key,
  serialized_pb=b'\n\x12\x63ommon_model.proto\x12\x16\x63om.elarian.hera.proto\x1a\x1egoogle/protobuf/wrappers.proto\x1a\x1fgoogle/protobuf/timestamp.proto\"B\n\x0c\x44\x61taMapValue\x12\x14\n\nstring_val\x18\x02 \x01(\tH\x00\x12\x13\n\tbytes_val\x18\x03 \x01(\x0cH\x00\x42\x07\n\x05value\"-\n\x04\x43\x61sh\x12\x15\n\rcurrency_code\x18\x01 \x01(\t\x12\x0e\n\x06\x61mount\x18\x02 \x01(\x01\"H\n\x0cIndexMapping\x12\x0b\n\x03key\x18\x01 \x01(\t\x12+\n\x05value\x18\x02 \x01(\x0b\x32\x1c.google.protobuf.StringValue\"v\n\rCustomerIndex\x12\x35\n\x07mapping\x18\x01 \x01(\x0b\x32$.com.elarian.hera.proto.IndexMapping\x12.\n\nexpires_at\x18\x02 \x01(\x0b\x32\x1a.google.protobuf.Timestamp\"\xa8\x01\n\x12\x41ppConnectionProps\x12\x15\n\rconnection_id\x18\x01 \x01(\t\x12\x33\n\x0f\x63onnection_time\x18\x02 \x01(\x0b\x32\x1a.google.protobuf.Timestamp\x12\x30\n\nip_address\x18\x03 \x01(\x0b\x32\x1c.google.protobuf.StringValue\x12\x14\n\x0csimplex_mode\x18\x04 \x01(\x08\"\x93\x01\n\x0e\x43ustomerNumber\x12@\n\x08provider\x18\x01 \x01(\x0e\x32..com.elarian.hera.proto.CustomerNumberProvider\x12\x0e\n\x06number\x18\x02 \x01(\t\x12/\n\tpartition\x18\x03 \x01(\x0b\x32\x1c.google.protobuf.StringValue*\xfd\x01\n\x16\x43ustomerNumberProvider\x12(\n$CUSTOMER_NUMBER_PROVIDER_UNSPECIFIED\x10\x00\x12%\n!CUSTOMER_NUMBER_PROVIDER_FACEBOOK\x10\x01\x12%\n!CUSTOMER_NUMBER_PROVIDER_CELLULAR\x10\x02\x12%\n!CUSTOMER_NUMBER_PROVIDER_TELEGRAM\x10\x03\x12 \n\x1c\x43USTOMER_NUMBER_PROVIDER_APP\x10\x04\x12\"\n\x1e\x43USTOMER_NUMBER_PROVIDER_EMAIL\x10\x05*\xf5\x01\n\x15\x43hannelNumberProvider\x12\'\n#CHANNEL_NUMBER_PROVIDER_UNSPECIFIED\x10\x00\x12\x1e\n\x1a\x43HANNEL_NUMBER_PROVIDER_AT\x10\x01\x12\"\n\x1e\x43HANNEL_NUMBER_PROVIDER_TWILIO\x10\x02\x12#\n\x1f\x43HANNEL_NUMBER_PROVIDER_MAILGUN\x10\x03\x12$\n CHANNEL_NUMBER_PROVIDER_FACEBOOK\x10\x04\x12$\n CHANNEL_NUMBER_PROVIDER_TELEGRAM\x10\x05*\xc8\x01\n\tMediaType\x12\x1a\n\x16MEDIA_TYPE_UNSPECIFIED\x10\x00\x12\x14\n\x10MEDIA_TYPE_IMAGE\x10\x01\x12\x14\n\x10MEDIA_TYPE_AUDIO\x10\x02\x12\x14\n\x10MEDIA_TYPE_VIDEO\x10\x03\x12\x17\n\x13MEDIA_TYPE_DOCUMENT\x10\x04\x12\x14\n\x10MEDIA_TYPE_VOICE\x10\x05\x12\x16\n\x12MEDIA_TYPE_STICKER\x10\x06\x12\x16\n\x12MEDIA_TYPE_CONTACT\x10\x07*\x8f\x01\n\x16\x43ustomerEventDirection\x12(\n$CUSTOMER_EVENT_DIRECTION_UNSPECIFIED\x10\x00\x12$\n CUSTOMER_EVENT_DIRECTION_INBOUND\x10\x01\x12%\n!CUSTOMER_EVENT_DIRECTION_OUTBOUND\x10\x02*\x93\x01\n\x15\x43ustomerRequestOrigin\x12\'\n#CUSTOMER_REQUEST_ORIGIN_UNSPECIFIED\x10\x00\x12\'\n#CUSTOMER_REQUEST_ORIGIN_API_REQUEST\x10\x01\x12(\n$CUSTOMER_REQUEST_ORIGIN_CUSTOMER_TAG\x10\x02\x62\x06proto3'
  ,
  dependencies=[google_dot_protobuf_dot_wrappers__pb2.DESCRIPTOR,google_dot_protobuf_dot_timestamp__pb2.DESCRIPTOR,])

_CUSTOMERNUMBERPROVIDER = _descriptor.EnumDescriptor(
  name='CustomerNumberProvider',
  full_name='com.elarian.hera.proto.CustomerNumberProvider',
  filename=None,
  file=DESCRIPTOR,
  create_key=_descriptor._internal_create_key,
  values=[
    _descriptor.EnumValueDescriptor(
      name='CUSTOMER_NUMBER_PROVIDER_UNSPECIFIED', index=0, number=0,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='CUSTOMER_NUMBER_PROVIDER_FACEBOOK', index=1, number=1,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='CUSTOMER_NUMBER_PROVIDER_CELLULAR', index=2, number=2,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='CUSTOMER_NUMBER_PROVIDER_TELEGRAM', index=3, number=3,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='CUSTOMER_NUMBER_PROVIDER_APP', index=4, number=4,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='CUSTOMER_NUMBER_PROVIDER_EMAIL', index=5, number=5,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
  ],
  containing_type=None,
  serialized_options=None,
  serialized_start=742,
  serialized_end=995,
)
_sym_db.RegisterEnumDescriptor(_CUSTOMERNUMBERPROVIDER)

CustomerNumberProvider = enum_type_wrapper.EnumTypeWrapper(_CUSTOMERNUMBERPROVIDER)
_CHANNELNUMBERPROVIDER = _descriptor.EnumDescriptor(
  name='ChannelNumberProvider',
  full_name='com.elarian.hera.proto.ChannelNumberProvider',
  filename=None,
  file=DESCRIPTOR,
  create_key=_descriptor._internal_create_key,
  values=[
    _descriptor.EnumValueDescriptor(
      name='CHANNEL_NUMBER_PROVIDER_UNSPECIFIED', index=0, number=0,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='CHANNEL_NUMBER_PROVIDER_AT', index=1, number=1,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='CHANNEL_NUMBER_PROVIDER_TWILIO', index=2, number=2,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='CHANNEL_NUMBER_PROVIDER_MAILGUN', index=3, number=3,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='CHANNEL_NUMBER_PROVIDER_FACEBOOK', index=4, number=4,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='CHANNEL_NUMBER_PROVIDER_TELEGRAM', index=5, number=5,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
  ],
  containing_type=None,
  serialized_options=None,
  serialized_start=998,
  serialized_end=1243,
)
_sym_db.RegisterEnumDescriptor(_CHANNELNUMBERPROVIDER)

ChannelNumberProvider = enum_type_wrapper.EnumTypeWrapper(_CHANNELNUMBERPROVIDER)
_MEDIATYPE = _descriptor.EnumDescriptor(
  name='MediaType',
  full_name='com.elarian.hera.proto.MediaType',
  filename=None,
  file=DESCRIPTOR,
  create_key=_descriptor._internal_create_key,
  values=[
    _descriptor.EnumValueDescriptor(
      name='MEDIA_TYPE_UNSPECIFIED', index=0, number=0,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='MEDIA_TYPE_IMAGE', index=1, number=1,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='MEDIA_TYPE_AUDIO', index=2, number=2,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='MEDIA_TYPE_VIDEO', index=3, number=3,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='MEDIA_TYPE_DOCUMENT', index=4, number=4,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='MEDIA_TYPE_VOICE', index=5, number=5,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='MEDIA_TYPE_STICKER', index=6, number=6,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='MEDIA_TYPE_CONTACT', index=7, number=7,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
  ],
  containing_type=None,
  serialized_options=None,
  serialized_start=1246,
  serialized_end=1446,
)
_sym_db.RegisterEnumDescriptor(_MEDIATYPE)

MediaType = enum_type_wrapper.EnumTypeWrapper(_MEDIATYPE)
_CUSTOMEREVENTDIRECTION = _descriptor.EnumDescriptor(
  name='CustomerEventDirection',
  full_name='com.elarian.hera.proto.CustomerEventDirection',
  filename=None,
  file=DESCRIPTOR,
  create_key=_descriptor._internal_create_key,
  values=[
    _descriptor.EnumValueDescriptor(
      name='CUSTOMER_EVENT_DIRECTION_UNSPECIFIED', index=0, number=0,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='CUSTOMER_EVENT_DIRECTION_INBOUND', index=1, number=1,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='CUSTOMER_EVENT_DIRECTION_OUTBOUND', index=2, number=2,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
  ],
  containing_type=None,
  serialized_options=None,
  serialized_start=1449,
  serialized_end=1592,
)
_sym_db.RegisterEnumDescriptor(_CUSTOMEREVENTDIRECTION)

CustomerEventDirection = enum_type_wrapper.EnumTypeWrapper(_CUSTOMEREVENTDIRECTION)
_CUSTOMERREQUESTORIGIN = _descriptor.EnumDescriptor(
  name='CustomerRequestOrigin',
  full_name='com.elarian.hera.proto.CustomerRequestOrigin',
  filename=None,
  file=DESCRIPTOR,
  create_key=_descriptor._internal_create_key,
  values=[
    _descriptor.EnumValueDescriptor(
      name='CUSTOMER_REQUEST_ORIGIN_UNSPECIFIED', index=0, number=0,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='CUSTOMER_REQUEST_ORIGIN_API_REQUEST', index=1, number=1,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
    _descriptor.EnumValueDescriptor(
      name='CUSTOMER_REQUEST_ORIGIN_CUSTOMER_TAG', index=2, number=2,
      serialized_options=None,
      type=None,
      create_key=_descriptor._internal_create_key),
  ],
  containing_type=None,
  serialized_options=None,
  serialized_start=1595,
  serialized_end=1742,
)
_sym_db.RegisterEnumDescriptor(_CUSTOMERREQUESTORIGIN)

CustomerRequestOrigin = enum_type_wrapper.EnumTypeWrapper(_CUSTOMERREQUESTORIGIN)
CUSTOMER_NUMBER_PROVIDER_UNSPECIFIED = 0
CUSTOMER_NUMBER_PROVIDER_FACEBOOK = 1
CUSTOMER_NUMBER_PROVIDER_CELLULAR = 2
CUSTOMER_NUMBER_PROVIDER_TELEGRAM = 3
CUSTOMER_NUMBER_PROVIDER_APP = 4
CUSTOMER_NUMBER_PROVIDER_EMAIL = 5
CHANNEL_NUMBER_PROVIDER_UNSPECIFIED = 0
CHANNEL_NUMBER_PROVIDER_AT = 1
CHANNEL_NUMBER_PROVIDER_TWILIO = 2
CHANNEL_NUMBER_PROVIDER_MAILGUN = 3
CHANNEL_NUMBER_PROVIDER_FACEBOOK = 4
CHANNEL_NUMBER_PROVIDER_TELEGRAM = 5
MEDIA_TYPE_UNSPECIFIED = 0
MEDIA_TYPE_IMAGE = 1
MEDIA_TYPE_AUDIO = 2
MEDIA_TYPE_VIDEO = 3
MEDIA_TYPE_DOCUMENT = 4
MEDIA_TYPE_VOICE = 5
MEDIA_TYPE_STICKER = 6
MEDIA_TYPE_CONTACT = 7
CUSTOMER_EVENT_DIRECTION_UNSPECIFIED = 0
CUSTOMER_EVENT_DIRECTION_INBOUND = 1
CUSTOMER_EVENT_DIRECTION_OUTBOUND = 2
CUSTOMER_REQUEST_ORIGIN_UNSPECIFIED = 0
CUSTOMER_REQUEST_ORIGIN_API_REQUEST = 1
CUSTOMER_REQUEST_ORIGIN_CUSTOMER_TAG = 2



_DATAMAPVALUE = _descriptor.Descriptor(
  name='DataMapValue',
  full_name='com.elarian.hera.proto.DataMapValue',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  create_key=_descriptor._internal_create_key,
  fields=[
    _descriptor.FieldDescriptor(
      name='string_val', full_name='com.elarian.hera.proto.DataMapValue.string_val', index=0,
      number=2, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=b"".decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='bytes_val', full_name='com.elarian.hera.proto.DataMapValue.bytes_val', index=1,
      number=3, type=12, cpp_type=9, label=1,
      has_default_value=False, default_value=b"",
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
  ],
  extensions=[
  ],
  nested_types=[],
  enum_types=[
  ],
  serialized_options=None,
  is_extendable=False,
  syntax='proto3',
  extension_ranges=[],
  oneofs=[
    _descriptor.OneofDescriptor(
      name='value', full_name='com.elarian.hera.proto.DataMapValue.value',
      index=0, containing_type=None,
      create_key=_descriptor._internal_create_key,
    fields=[]),
  ],
  serialized_start=111,
  serialized_end=177,
)


_CASH = _descriptor.Descriptor(
  name='Cash',
  full_name='com.elarian.hera.proto.Cash',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  create_key=_descriptor._internal_create_key,
  fields=[
    _descriptor.FieldDescriptor(
      name='currency_code', full_name='com.elarian.hera.proto.Cash.currency_code', index=0,
      number=1, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=b"".decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='amount', full_name='com.elarian.hera.proto.Cash.amount', index=1,
      number=2, type=1, cpp_type=5, label=1,
      has_default_value=False, default_value=float(0),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
  ],
  extensions=[
  ],
  nested_types=[],
  enum_types=[
  ],
  serialized_options=None,
  is_extendable=False,
  syntax='proto3',
  extension_ranges=[],
  oneofs=[
  ],
  serialized_start=179,
  serialized_end=224,
)


_INDEXMAPPING = _descriptor.Descriptor(
  name='IndexMapping',
  full_name='com.elarian.hera.proto.IndexMapping',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  create_key=_descriptor._internal_create_key,
  fields=[
    _descriptor.FieldDescriptor(
      name='key', full_name='com.elarian.hera.proto.IndexMapping.key', index=0,
      number=1, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=b"".decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='value', full_name='com.elarian.hera.proto.IndexMapping.value', index=1,
      number=2, type=11, cpp_type=10, label=1,
      has_default_value=False, default_value=None,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
  ],
  extensions=[
  ],
  nested_types=[],
  enum_types=[
  ],
  serialized_options=None,
  is_extendable=False,
  syntax='proto3',
  extension_ranges=[],
  oneofs=[
  ],
  serialized_start=226,
  serialized_end=298,
)


_CUSTOMERINDEX = _descriptor.Descriptor(
  name='CustomerIndex',
  full_name='com.elarian.hera.proto.CustomerIndex',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  create_key=_descriptor._internal_create_key,
  fields=[
    _descriptor.FieldDescriptor(
      name='mapping', full_name='com.elarian.hera.proto.CustomerIndex.mapping', index=0,
      number=1, type=11, cpp_type=10, label=1,
      has_default_value=False, default_value=None,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='expires_at', full_name='com.elarian.hera.proto.CustomerIndex.expires_at', index=1,
      number=2, type=11, cpp_type=10, label=1,
      has_default_value=False, default_value=None,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
  ],
  extensions=[
  ],
  nested_types=[],
  enum_types=[
  ],
  serialized_options=None,
  is_extendable=False,
  syntax='proto3',
  extension_ranges=[],
  oneofs=[
  ],
  serialized_start=300,
  serialized_end=418,
)


_APPCONNECTIONPROPS = _descriptor.Descriptor(
  name='AppConnectionProps',
  full_name='com.elarian.hera.proto.AppConnectionProps',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  create_key=_descriptor._internal_create_key,
  fields=[
    _descriptor.FieldDescriptor(
      name='connection_id', full_name='com.elarian.hera.proto.AppConnectionProps.connection_id', index=0,
      number=1, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=b"".decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='connection_time', full_name='com.elarian.hera.proto.AppConnectionProps.connection_time', index=1,
      number=2, type=11, cpp_type=10, label=1,
      has_default_value=False, default_value=None,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='ip_address', full_name='com.elarian.hera.proto.AppConnectionProps.ip_address', index=2,
      number=3, type=11, cpp_type=10, label=1,
      has_default_value=False, default_value=None,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='simplex_mode', full_name='com.elarian.hera.proto.AppConnectionProps.simplex_mode', index=3,
      number=4, type=8, cpp_type=7, label=1,
      has_default_value=False, default_value=False,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
  ],
  extensions=[
  ],
  nested_types=[],
  enum_types=[
  ],
  serialized_options=None,
  is_extendable=False,
  syntax='proto3',
  extension_ranges=[],
  oneofs=[
  ],
  serialized_start=421,
  serialized_end=589,
)


_CUSTOMERNUMBER = _descriptor.Descriptor(
  name='CustomerNumber',
  full_name='com.elarian.hera.proto.CustomerNumber',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  create_key=_descriptor._internal_create_key,
  fields=[
    _descriptor.FieldDescriptor(
      name='provider', full_name='com.elarian.hera.proto.CustomerNumber.provider', index=0,
      number=1, type=14, cpp_type=8, label=1,
      has_default_value=False, default_value=0,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='number', full_name='com.elarian.hera.proto.CustomerNumber.number', index=1,
      number=2, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=b"".decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='partition', full_name='com.elarian.hera.proto.CustomerNumber.partition', index=2,
      number=3, type=11, cpp_type=10, label=1,
      has_default_value=False, default_value=None,
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
  ],
  extensions=[
  ],
  nested_types=[],
  enum_types=[
  ],
  serialized_options=None,
  is_extendable=False,
  syntax='proto3',
  extension_ranges=[],
  oneofs=[
  ],
  serialized_start=592,
  serialized_end=739,
)

_DATAMAPVALUE.oneofs_by_name['value'].fields.append(
  _DATAMAPVALUE.fields_by_name['string_val'])
_DATAMAPVALUE.fields_by_name['string_val'].containing_oneof = _DATAMAPVALUE.oneofs_by_name['value']
_DATAMAPVALUE.oneofs_by_name['value'].fields.append(
  _DATAMAPVALUE.fields_by_name['bytes_val'])
_DATAMAPVALUE.fields_by_name['bytes_val'].containing_oneof = _DATAMAPVALUE.oneofs_by_name['value']
_INDEXMAPPING.fields_by_name['value'].message_type = google_dot_protobuf_dot_wrappers__pb2._STRINGVALUE
_CUSTOMERINDEX.fields_by_name['mapping'].message_type = _INDEXMAPPING
_CUSTOMERINDEX.fields_by_name['expires_at'].message_type = google_dot_protobuf_dot_timestamp__pb2._TIMESTAMP
_APPCONNECTIONPROPS.fields_by_name['connection_time'].message_type = google_dot_protobuf_dot_timestamp__pb2._TIMESTAMP
_APPCONNECTIONPROPS.fields_by_name['ip_address'].message_type = google_dot_protobuf_dot_wrappers__pb2._STRINGVALUE
_CUSTOMERNUMBER.fields_by_name['provider'].enum_type = _CUSTOMERNUMBERPROVIDER
_CUSTOMERNUMBER.fields_by_name['partition'].message_type = google_dot_protobuf_dot_wrappers__pb2._STRINGVALUE
DESCRIPTOR.message_types_by_name['DataMapValue'] = _DATAMAPVALUE
DESCRIPTOR.message_types_by_name['Cash'] = _CASH
DESCRIPTOR.message_types_by_name['IndexMapping'] = _INDEXMAPPING
DESCRIPTOR.message_types_by_name['CustomerIndex'] = _CUSTOMERINDEX
DESCRIPTOR.message_types_by_name['AppConnectionProps'] = _APPCONNECTIONPROPS
DESCRIPTOR.message_types_by_name['CustomerNumber'] = _CUSTOMERNUMBER
DESCRIPTOR.enum_types_by_name['CustomerNumberProvider'] = _CUSTOMERNUMBERPROVIDER
DESCRIPTOR.enum_types_by_name['ChannelNumberProvider'] = _CHANNELNUMBERPROVIDER
DESCRIPTOR.enum_types_by_name['MediaType'] = _MEDIATYPE
DESCRIPTOR.enum_types_by_name['CustomerEventDirection'] = _CUSTOMEREVENTDIRECTION
DESCRIPTOR.enum_types_by_name['CustomerRequestOrigin'] = _CUSTOMERREQUESTORIGIN
_sym_db.RegisterFileDescriptor(DESCRIPTOR)

DataMapValue = _reflection.GeneratedProtocolMessageType('DataMapValue', (_message.Message,), {
  'DESCRIPTOR' : _DATAMAPVALUE,
  '__module__' : 'common_model_pb2'
  # @@protoc_insertion_point(class_scope:com.elarian.hera.proto.DataMapValue)
  })
_sym_db.RegisterMessage(DataMapValue)

Cash = _reflection.GeneratedProtocolMessageType('Cash', (_message.Message,), {
  'DESCRIPTOR' : _CASH,
  '__module__' : 'common_model_pb2'
  # @@protoc_insertion_point(class_scope:com.elarian.hera.proto.Cash)
  })
_sym_db.RegisterMessage(Cash)

IndexMapping = _reflection.GeneratedProtocolMessageType('IndexMapping', (_message.Message,), {
  'DESCRIPTOR' : _INDEXMAPPING,
  '__module__' : 'common_model_pb2'
  # @@protoc_insertion_point(class_scope:com.elarian.hera.proto.IndexMapping)
  })
_sym_db.RegisterMessage(IndexMapping)

CustomerIndex = _reflection.GeneratedProtocolMessageType('CustomerIndex', (_message.Message,), {
  'DESCRIPTOR' : _CUSTOMERINDEX,
  '__module__' : 'common_model_pb2'
  # @@protoc_insertion_point(class_scope:com.elarian.hera.proto.CustomerIndex)
  })
_sym_db.RegisterMessage(CustomerIndex)

AppConnectionProps = _reflection.GeneratedProtocolMessageType('AppConnectionProps', (_message.Message,), {
  'DESCRIPTOR' : _APPCONNECTIONPROPS,
  '__module__' : 'common_model_pb2'
  # @@protoc_insertion_point(class_scope:com.elarian.hera.proto.AppConnectionProps)
  })
_sym_db.RegisterMessage(AppConnectionProps)

CustomerNumber = _reflection.GeneratedProtocolMessageType('CustomerNumber', (_message.Message,), {
  'DESCRIPTOR' : _CUSTOMERNUMBER,
  '__module__' : 'common_model_pb2'
  # @@protoc_insertion_point(class_scope:com.elarian.hera.proto.CustomerNumber)
  })
_sym_db.RegisterMessage(CustomerNumber)


# @@protoc_insertion_point(module_scope)
