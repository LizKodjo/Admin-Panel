@props(['name'])

@error($name)
    <p class="small text-danger">{{ $message }}</p>
@enderror
