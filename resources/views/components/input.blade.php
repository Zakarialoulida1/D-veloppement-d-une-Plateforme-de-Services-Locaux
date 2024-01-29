
@props(['name', 'type'])
<div class="inputBox">
    
    <input
        id="{{ $name }}"
        type="{{ $type }}"
        name="{{ $name }}"
      
        placeholder="Enter your {{ $name }}"
        value=" {{ old($name) }}"
    />
 
    @error($name)
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>