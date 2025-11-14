const pwd = document.getElementById('pwd');
    const toggle = document.getElementById('toggle');
    toggle.addEventListener('change', () => {
      pwd.type = toggle.checked ? 'text' : 'password';
    });