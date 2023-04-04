function ajouterLigne() {
    document.getElementById("codeabarre").value = "";
    document.getElementById("codepalette").value = "";
  
}

  function displayAlert(message) {
    const alertDiv = document.createElement('div');
    alertDiv.id = 'alert';
    alertDiv.textContent = message;
    document.body.appendChild(alertDiv);
    setTimeout(() => {
      alertDiv.remove();
    }, 3000);
  }

  const form = document.querySelector('form');
  form.addEventListener('submit', async (event) => {
    event.preventDefault();
    const formData = new FormData(form);
    const response = await fetch('localhost/user/users-databas/config1.php', {
      method: 'POST',
      body: formData
    });
    const result = await response.text();
    displayAlert(result);
  });
