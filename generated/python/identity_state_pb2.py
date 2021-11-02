# -*- coding: utf-8 -*-
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: identity_state.proto
"""Generated protocol buffer code."""
from google.protobuf import descriptor as _descriptor
from google.protobuf import message as _message
from google.protobuf import reflection as _reflection
from google.protobuf import symbol_database as _symbol_database
# @@protoc_insertion_point(imports)

_sym_db = _symbol_database.Default()


import common_model_pb2 as common__model__pb2


DESCRIPTOR = _descriptor.FileDescriptor(
  name='identity_state.proto',
  package='com.elarian.hera.proto',
  syntax='proto3',
  serialized_options=None,
  create_key=_descriptor._internal_create_key,
  serialized_pb=b'\n\x14identity_state.proto\x12\x16\x63om.elarian.hera.proto\x1a\x12\x63ommon_model.proto\"\xa0\x02\n\rIdentityState\x12\x33\n\x04tags\x18\x01 \x03(\x0b\x32%.com.elarian.hera.proto.CustomerIndex\x12\x45\n\x08metadata\x18\x02 \x03(\x0b\x32\x33.com.elarian.hera.proto.IdentityState.MetadataEntry\x12<\n\rsecondary_ids\x18\x03 \x03(\x0b\x32%.com.elarian.hera.proto.CustomerIndex\x1aU\n\rMetadataEntry\x12\x0b\n\x03key\x18\x01 \x01(\t\x12\x33\n\x05value\x18\x02 \x01(\x0b\x32$.com.elarian.hera.proto.DataMapValue:\x02\x38\x01\x62\x06proto3'
  ,
  dependencies=[common__model__pb2.DESCRIPTOR,])




_IDENTITYSTATE_METADATAENTRY = _descriptor.Descriptor(
  name='MetadataEntry',
  full_name='com.elarian.hera.proto.IdentityState.MetadataEntry',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  create_key=_descriptor._internal_create_key,
  fields=[
    _descriptor.FieldDescriptor(
      name='key', full_name='com.elarian.hera.proto.IdentityState.MetadataEntry.key', index=0,
      number=1, type=9, cpp_type=9, label=1,
      has_default_value=False, default_value=b"".decode('utf-8'),
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='value', full_name='com.elarian.hera.proto.IdentityState.MetadataEntry.value', index=1,
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
  serialized_options=b'8\001',
  is_extendable=False,
  syntax='proto3',
  extension_ranges=[],
  oneofs=[
  ],
  serialized_start=272,
  serialized_end=357,
)

_IDENTITYSTATE = _descriptor.Descriptor(
  name='IdentityState',
  full_name='com.elarian.hera.proto.IdentityState',
  filename=None,
  file=DESCRIPTOR,
  containing_type=None,
  create_key=_descriptor._internal_create_key,
  fields=[
    _descriptor.FieldDescriptor(
      name='tags', full_name='com.elarian.hera.proto.IdentityState.tags', index=0,
      number=1, type=11, cpp_type=10, label=3,
      has_default_value=False, default_value=[],
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='metadata', full_name='com.elarian.hera.proto.IdentityState.metadata', index=1,
      number=2, type=11, cpp_type=10, label=3,
      has_default_value=False, default_value=[],
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
    _descriptor.FieldDescriptor(
      name='secondary_ids', full_name='com.elarian.hera.proto.IdentityState.secondary_ids', index=2,
      number=3, type=11, cpp_type=10, label=3,
      has_default_value=False, default_value=[],
      message_type=None, enum_type=None, containing_type=None,
      is_extension=False, extension_scope=None,
      serialized_options=None, file=DESCRIPTOR,  create_key=_descriptor._internal_create_key),
  ],
  extensions=[
  ],
  nested_types=[_IDENTITYSTATE_METADATAENTRY, ],
  enum_types=[
  ],
  serialized_options=None,
  is_extendable=False,
  syntax='proto3',
  extension_ranges=[],
  oneofs=[
  ],
  serialized_start=69,
  serialized_end=357,
)

_IDENTITYSTATE_METADATAENTRY.fields_by_name['value'].message_type = common__model__pb2._DATAMAPVALUE
_IDENTITYSTATE_METADATAENTRY.containing_type = _IDENTITYSTATE
_IDENTITYSTATE.fields_by_name['tags'].message_type = common__model__pb2._CUSTOMERINDEX
_IDENTITYSTATE.fields_by_name['metadata'].message_type = _IDENTITYSTATE_METADATAENTRY
_IDENTITYSTATE.fields_by_name['secondary_ids'].message_type = common__model__pb2._CUSTOMERINDEX
DESCRIPTOR.message_types_by_name['IdentityState'] = _IDENTITYSTATE
_sym_db.RegisterFileDescriptor(DESCRIPTOR)

IdentityState = _reflection.GeneratedProtocolMessageType('IdentityState', (_message.Message,), {

  'MetadataEntry' : _reflection.GeneratedProtocolMessageType('MetadataEntry', (_message.Message,), {
    'DESCRIPTOR' : _IDENTITYSTATE_METADATAENTRY,
    '__module__' : 'identity_state_pb2'
    # @@protoc_insertion_point(class_scope:com.elarian.hera.proto.IdentityState.MetadataEntry)
    })
  ,
  'DESCRIPTOR' : _IDENTITYSTATE,
  '__module__' : 'identity_state_pb2'
  # @@protoc_insertion_point(class_scope:com.elarian.hera.proto.IdentityState)
  })
_sym_db.RegisterMessage(IdentityState)
_sym_db.RegisterMessage(IdentityState.MetadataEntry)


_IDENTITYSTATE_METADATAENTRY._options = None
# @@protoc_insertion_point(module_scope)
