<input 
    type="email" 
    class="{{ $className ?? 'form-control' }}" 
    id="{{ $id }}" 
    name="{{ $name }}"
    value="{{ $value ?? 'admin@gmail.com' }}" 
    placeholder="Enter your email or username" 
    autofocus 
    autocapitalize="off"
    spellcheck="false" 
    autocorrect="off" 
    autocomplete="on" 
    lang="en" 
    maxlength="254" 
    inputmode="email"
/>
