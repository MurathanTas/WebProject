document.getElementById("submit").addEventListener("click", function(event) {
    event.preventDefault(); // Formu submit etmeyi engelle
    // Formdaki değerleri al
    
    var name = document.getElementById("name").value;
    var email =String(document.getElementById("email").value); 
    var message = document.getElementById("message").value;

    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+.[^\s@]+$/;
        return emailRegex.test(email);
      }

    // Boş alanları kontrol et
    if (name.trim() === "" || email.trim() === "" || message.trim() === "") {
        alert("Bir veya birden fazla alan boş bırakılamaz.");
        return; // Uyarı mesajı gösterdikten sonra işlemi durdur
    }
    else{
       if(!isValidEmail(email)){
        alert("Girilen email, email formatında değil")
       }
    }
    
  

    // Formu temizle
    document.getElementById("contactForm").reset();

    // Başka bir sayfaya yönlendirme yapabilirsiniz
     
});