@props(['name', 'type' => 'text'])

<x-form.label name="{{ $name }}" />

<input type="{{ $type }}" name="{{ $name }} " value="{{ old($name) }}">

