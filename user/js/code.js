
const form = document.getElementById('myform');
form.addEventListener('submit', (event) => {
  event.preventDefault(); // prevent the form from submitting normally

  const formData = new FormData(form); // get the form data
  fetch('http://localhost/users/connect.php', {
    method: 'post',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    if(data.connected){
      window.location.href = "http://localhost/user/page/gestion.html"
    }
    else{
      window.alert("Error")
    }
  })
  .catch(error => {
    console.error(error);
    alert('An error occurred while inserting data!');
  });
});

